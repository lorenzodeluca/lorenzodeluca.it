/* ==========================================================================
   Lorenzo De Luca — Interactive Portfolio Script
   ========================================================================== */

// 1. Conditional Popover Polyfill (only when native Popover API is absent)
if (!Object.hasOwn(HTMLElement.prototype, 'popover')) {
  import('https://unpkg.com/@oddbird/popover-polyfill@latest/dist/popover.min.js');
}

// 2. Responsive Navbar (single semantic <nav>, measures row fit with ResizeObserver)
(function initNavbar() {
  const header = document.querySelector('.site-header');
  const inner = header?.querySelector('.header-inner');
  const menu = document.getElementById('site-menu');
  if (!header || !inner || !menu) return;

  let lastCollapsedWidth = 0;

  function syncNavLayout(forceMeasure = false) {
    const isWide = header.classList.contains('is-wide');
    if (!isWide && !forceMeasure && header.clientWidth <= lastCollapsedWidth) {
      return;
    }

    const wasOpen = menu.matches(':popover-open') || menu.classList.contains(':popover-open');
    header.classList.add('is-measuring');
    header.classList.add('is-wide');
    menu.removeAttribute('popover');

    const fits = inner.scrollWidth <= inner.clientWidth;

    if (fits) {
      header.classList.add('is-wide');
      menu.removeAttribute('popover');
    } else {
      header.classList.remove('is-wide');
      menu.setAttribute('popover', 'auto');
      lastCollapsedWidth = header.clientWidth;
      if (wasOpen && typeof menu.showPopover === 'function') {
        try {
          menu.showPopover();
        } catch {
          // Ignore if polyfill isn't initialized yet
        }
      }
    }

    requestAnimationFrame(() => {
      header.classList.remove('is-measuring');
    });
  }

  const ro = new ResizeObserver(() => syncNavLayout());
  ro.observe(header);
  ro.observe(menu);

  if (document.fonts?.ready) {
    document.fonts.ready.then(() => syncNavLayout(true));
  }

  // Close mobile popover when navigating to an in-page section
  menu.addEventListener('click', (event) => {
    const link = event.target.closest('a[href^="#"]');
    if (link && !header.classList.contains('is-wide') && typeof menu.hidePopover === 'function') {
      try {
        menu.hidePopover();
      } catch {
        // Ignore if already closed
      }
    }
  });

  syncNavLayout(true);
})();

// 3. Copy Button Logic (Invoker Commands + Fallback + Accessible Live Region)
(function initCopyButtons() {
  const timers = new WeakMap();
  let lastMessage = '';

  function legacyCopy(text) {
    const field = Object.assign(document.createElement('textarea'), { value: text });
    field.setAttribute('readonly', '');
    field.style.cssText = 'position:fixed;inset-block-start:0;opacity:0';
    document.body.append(field);
    field.select();
    try {
      return document.execCommand('copy');
    } finally {
      field.remove();
    }
  }

  function report(button, ok) {
    const tip = button.nextElementSibling;
    clearTimeout(timers.get(button));
    button.removeAttribute('data-copied');
    button.removeAttribute('data-failed');

    let message = ok ? 'Copied' : 'Copy failed';
    if (message === lastMessage) message += '\u00A0';
    lastMessage = message;

    if (tip) tip.textContent = '';
    void button.offsetWidth;
    button.setAttribute(ok ? 'data-copied' : 'data-failed', '');
    requestAnimationFrame(() => {
      if (tip) tip.textContent = message;
    });

    timers.set(
      button,
      setTimeout(() => {
        button.removeAttribute('data-copied');
        button.removeAttribute('data-failed');
        if (tip) tip.textContent = '';
      }, 2000)
    );
  }

  async function copy(button, target) {
    const text = target.matches('input, textarea') ? target.value : target.innerText.trim();
    if (!text) return;
    try {
      await navigator.clipboard.writeText(text);
      report(button, true);
    } catch {
      try {
        if (!legacyCopy(text)) throw new Error('Copy failed');
        report(button, true);
      } catch {
        report(button, false);
      }
    }
  }

  if ('CommandEvent' in window) {
    document.addEventListener(
      'command',
      (event) => {
        if (event.command.startsWith('--copy')) {
          copy(event.source, event.target);
        }
      },
      true
    );
  } else {
    document.addEventListener('click', (event) => {
      const button = event.target.closest('button[command^="--copy"]');
      if (!button) return;
      const target = document.getElementById(button.getAttribute('commandfor'));
      if (target) copy(button, target);
    });
  }
})();

// 4. Native <dialog> Terminal Modal (Top-layer exit fallback + closedby fallback)
const terminalDialog = document.getElementById('terminal-dialog');

let supportsDisplayTransition;
function canTransitionDisplay() {
  if (supportsDisplayTransition !== undefined) return supportsDisplayTransition;
  if (!window.CSS?.supports?.('transition-behavior', 'allow-discrete') || !document.body) {
    return false;
  }
  const probe = document.createElement('div');
  probe.style.cssText = 'transition: display 1s allow-discrete !important; display: block;';
  document.body.appendChild(probe);
  getComputedStyle(probe).display;
  probe.style.display = 'none';
  supportsDisplayTransition = getComputedStyle(probe).display === 'block';
  probe.remove();
  return supportsDisplayTransition;
}

function supportsTopLayerExit() {
  return Boolean(window.CSS?.supports?.('overlay', 'auto') && canTransitionDisplay());
}

async function closeTerminalDialog() {
  if (!terminalDialog || !terminalDialog.open) return;
  if (!supportsTopLayerExit()) {
    terminalDialog.setAttribute('data-closing', '');
    const animations = terminalDialog.getAnimations({ subtree: true });
    if (animations.length > 0) {
      await Promise.race([
        Promise.allSettled(animations.map((a) => a.finished)),
        new Promise((r) => setTimeout(r, 400)),
      ]);
    }
    if (!terminalDialog.hasAttribute('data-closing')) return;
    terminalDialog.removeAttribute('data-closing');
  }
  terminalDialog.close();
}

function openTerminalDialog(initialCommand) {
  if (!terminalDialog) return;
  if (!terminalDialog.open) {
    terminalDialog.removeAttribute('data-closing');
    terminalDialog.showModal();
  }
  const modalInput = document.getElementById('modal-term-input');
  if (initialCommand && window.terminalEngine) {
    window.terminalEngine.runCommand('modal', initialCommand);
  }
  requestAnimationFrame(() => modalInput?.focus());
}

if (terminalDialog) {
  terminalDialog.addEventListener('cancel', (event) => {
    event.preventDefault();
    closeTerminalDialog();
  });

  // Fallback for browsers without <dialog closedby="any">
  if (!('closedBy' in HTMLDialogElement.prototype)) {
    const outside = (e, dialog) => {
      const r = dialog.getBoundingClientRect();
      return e.clientX < r.left || e.clientX > r.right || e.clientY < r.top || e.clientY > r.bottom;
    };
    let pressedOutside = false;
    terminalDialog.addEventListener('pointerdown', (e) => {
      pressedOutside = outside(e, terminalDialog);
    });
    terminalDialog.addEventListener('pointerup', (e) => {
      if (pressedOutside && outside(e, terminalDialog)) {
        closeTerminalDialog();
      }
    });
  }

  // Wire Invoker Command fallback & animated exit when native overlay transition is absent
  if ('CommandEvent' in window) {
    terminalDialog.addEventListener('command', (event) => {
      if (event.command === 'close' && !supportsTopLayerExit()) {
        event.preventDefault();
        closeTerminalDialog();
      }
    });
  } else {
    document.addEventListener('click', (event) => {
      const btn = event.target.closest('button[command][commandfor="terminal-dialog"]');
      if (!btn) return;
      const cmd = btn.getAttribute('command');
      if (cmd === 'show-modal') openTerminalDialog();
      if (cmd === 'close') closeTerminalDialog();
    });
  }

  // Focus terminal input whenever modal opens via native command="show-modal"
  const observer = new MutationObserver(() => {
    if (terminalDialog.open) {
      requestAnimationFrame(() => document.getElementById('modal-term-input')?.focus());
    }
  });
  observer.observe(terminalDialog, { attributes: true, attributeFilter: ['open'] });
}

// Keyboard shortcut: Ctrl+K / Cmd+K opens terminal modal
window.addEventListener('keydown', (event) => {
  if ((event.ctrlKey || event.metaKey) && event.key.toLowerCase() === 'k') {
    event.preventDefault();
    if (terminalDialog?.open) {
      closeTerminalDialog();
    } else {
      openTerminalDialog();
    }
  }
});

// 5. Interactive Terminal Engine (Powers both Hero inline & Modal terminals)
(function initTerminals() {
  const LINKS = {
    email: { label: 'Email', value: 'info@lorenzodeluca.it', href: 'mailto:info@lorenzodeluca.it' },
    github: { label: 'GitHub', value: 'github.com/lorenzodeluca', href: 'https://github.com/lorenzodeluca' },
    linkedin: { label: 'LinkedIn', value: 'linkedin.com/in/lorenzodeluca', href: 'https://www.linkedin.com/in/lorenzodeluca' },
    gitlab: { label: 'GitLab', value: 'gitlab.com/lorenzodeluca', href: 'https://gitlab.com/lorenzodeluca' },
    stackoverflow: { label: 'StackOverflow', value: 'stackoverflow.com/users/9441578', href: 'https://stackoverflow.com/users/9441578/lorenzo?tab=profile' },
    hackthebox: { label: 'HackTheBox', value: 'hackthebox.com/home/users/profile/79745', href: 'https://www.hackthebox.com/home/users/profile/79745' },
    imdb: { label: 'IMDb', value: 'imdb.com/user/ur145310474', href: 'https://www.imdb.com/user/ur145310474/?ref_=nv_usr_prof_2' },
    spotify: { label: 'Spotify', value: 'open.spotify.com/user/lorenzo', href: 'https://open.spotify.com/user/qvm9vnpgjiv4ygdslrjlmycj6' },
    books: { label: 'LibraryThing', value: 'librarything.com/catalog/TheOfficialShocker', href: 'https://www.librarything.com/catalog/TheOfficialShocker' },
  };

  const PROJECTS = [
    { name: 'Advanced AI Agent for Tablut', tags: 'AI · Algorithms', url: 'https://github.com/lorenzodeluca/tablut-player-ai' },
    { name: 'K8s Operators Benchmarking', tags: 'Kubernetes · Crossplane vs Kubebuilder', url: 'https://github.com/lorenzodeluca/kafka-operator-clash' },
    { name: 'E2E Encrypted Secure Chat', tags: 'Java · ECDH · HKDF · AES-GCM', url: 'https://github.com/lorenzodeluca/end-to-end-encrypted-chat-java' },
    { name: 'Covid World Tracker', tags: 'Flutter · SQLite · Maps', url: 'https://github.com/lorenzodeluca/covid-world-coronavirus-info-app' },
    { name: 'You Message Chatroom', tags: 'Flutter · Firebase · TCP Sockets', url: 'https://github.com/lorenzodeluca/you-message-chatroom' },
    { name: 'MagLev Simulation & Control', tags: 'Control Systems · MATLAB', url: 'https://github.com/lorenzodeluca/simulation-and-control-of-a-magnetic-levitation-system' },
  ];

  const FILES = ['2019_internships.txt', 'links.json', 'skills.yaml', '.secret_message.md'];

  const COMMANDS = [
    'help',
    'whoami',
    'links',
    'contact',
    'experience',
    'education',
    'projects',
    'skills',
    'ls',
    'cat',
    'open',
    'pwd',
    'date',
    'uname',
    'echo',
    'sudo',
    'expand',
    'clear',
    'exit',
  ];

  const history = [];
  let historyIndex = -1;

  const instances = {
    inline: {
      body: document.getElementById('inline-term-body'),
      output: document.getElementById('inline-term-output'),
      input: document.getElementById('inline-term-input'),
    },
    modal: {
      body: document.getElementById('modal-term-body'),
      output: document.getElementById('modal-term-output'),
      input: document.getElementById('modal-term-input'),
    },
  };

  function el(tag, className, text) {
    const node = document.createElement(tag);
    if (className) node.className = className;
    if (text !== undefined) node.textContent = text;
    return node;
  }

  function linkEl(href, label) {
    const a = document.createElement('a');
    a.href = href;
    a.textContent = label;
    if (!href.startsWith('mailto:')) {
      a.target = '_blank';
      a.rel = 'noopener noreferrer';
    }
    return a;
  }

  function appendLine(container, parts) {
    const div = document.createElement('div');
    for (const part of parts) {
      if (typeof part === 'string') {
        div.append(document.createTextNode(part));
      } else {
        div.append(part);
      }
    }
    container.append(div);
  }

  function buildResponse(rawCmd, instanceName) {
    const frag = document.createDocumentFragment();
    const trimmed = rawCmd.trim();
    if (!trimmed) return null;

    const parts = trimmed.split(/\s+/);
    const cmd = parts[0].toLowerCase();
    const arg = parts.slice(1).join(' ');

    if (cmd === 'clear') {
      return 'CLEAR';
    }

    if (cmd === 'exit' || cmd === 'quit') {
      if (instanceName === 'modal') {
        closeTerminalDialog();
        return null;
      }
      appendLine(frag, [el('span', 'term-muted', 'Inline shell stays docked. Press Ctrl+K for modal mode.')]);
      return frag;
    }

    if (cmd === 'expand' || cmd === 'fullscreen') {
      openTerminalDialog();
      appendLine(frag, [el('span', 'term-ok', 'Opened fullscreen terminal modal.')]);
      return frag;
    }

    if (cmd === 'help') {
      const rows = [
        ['whoami', 'Engineering summary & location'],
        ['links', 'Clickable GitHub, LinkedIn, Email & profiles'],
        ['experience', 'Work experience timeline'],
        ['education', 'Academic background (UniBo, UniPd, Zuccante)'],
        ['projects', 'Featured repositories with direct GitHub links'],
        ['skills', 'Core technical stack'],
        ['ls [-a]', 'List files in ~/archives (try -a for hidden files)'],
        ['cat <file>', 'Read 2019_internships.txt, links.json, skills.yaml'],
        ['open <name>', 'Launch github, linkedin, gitlab, email, etc.'],
        ['sudo hire', 'Check hiring readiness'],
        ['expand / clear', 'Toggle modal view or clear terminal'],
      ];
      appendLine(frag, [el('span', 'term-accent', 'Available commands:')]);
      for (const [name, desc] of rows) {
        appendLine(frag, ['  ', el('span', 'term-accent2', name.padEnd(14, ' ')), desc]);
      }
      return frag;
    }

    if (cmd === 'whoami') {
      appendLine(frag, [el('span', 'term-accent', 'Lorenzo De Luca'), ' — Computer Engineer & Systems Builder']);
      appendLine(frag, ['Location : Venice & Bologna, Italy']);
      appendLine(frag, ['Academic : MSc Computer Engineering @ University of Bologna']);
      appendLine(frag, ['Focus    : Distributed Systems, Cloud/K8s, AI & Full-Stack']);
      appendLine(frag, [
        'Quick    : ',
        linkEl(LINKS.github.href, 'GitHub'),
        ' · ',
        linkEl(LINKS.linkedin.href, 'LinkedIn'),
        ' · ',
        linkEl(LINKS.email.href, LINKS.email.value),
      ]);
      return frag;
    }

    if (cmd === 'links' || cmd === 'contact') {
      appendLine(frag, [el('span', 'term-accent', 'Direct Contact & Profiles:')]);
      const order = ['email', 'github', 'linkedin', 'gitlab', 'stackoverflow', 'hackthebox'];
      for (const key of order) {
        const item = LINKS[key];
        appendLine(frag, ['  ', el('span', 'term-accent2', item.label.padEnd(16, ' ')), linkEl(item.href, item.value)]);
      }
      return frag;
    }

    if (cmd === 'experience') {
      appendLine(frag, [el('span', 'term-accent', 'Software Engineer'), ' @ Joyflo S.r.l. (Treviso, IT) | Sep 2024 – Aug 2025']);
      appendLine(frag, ['  Built structural app components with Flutter & MySQL.']);
      appendLine(frag, [el('span', 'term-accent', 'Analyst Developer'), ' @ Venicecom S.r.l. (Marghera, IT) | Mar 2024 – Aug 2024']);
      appendLine(frag, ['  Enterprise software engineering with .NET & Microsoft SQL.']);
      appendLine(frag, [el('span', 'term-muted', 'Tip: run `cat 2019_internships.txt` for earlier 2019 internships.')]);
      return frag;
    }

    if (cmd === 'education') {
      appendLine(frag, [el('span', 'term-accent2', "Master's in Computer Engineering"), ' — University of Bologna (2025–2027)']);
      appendLine(frag, ['  Highlights: AI (30 cum Laude), Concurrent Systems (30/30)']);
      appendLine(frag, [el('span', 'term-accent2', "Bachelor's in Computer Engineering"), ' — University of Padua (2020–2025)']);
      appendLine(frag, ['  Highlights: Software Engineering (30/30), Project Management (30/30)']);
      appendLine(frag, [el('span', 'term-accent2', 'Diploma in Computer Science'), ' — ITIS C. Zuccante, Venice (2015–2020)']);
      return frag;
    }

    if (cmd === 'projects') {
      appendLine(frag, [el('span', 'term-accent', 'Featured Repositories:')]);
      PROJECTS.forEach((p, idx) => {
        appendLine(frag, [
          `  0${idx + 1}. `,
          linkEl(p.url, p.name),
          el('span', 'term-muted', ` [${p.tags}]`),
        ]);
      });
      return frag;
    }

    if (cmd === 'skills') {
      appendLine(frag, [el('span', 'term-accent', 'Systems & Languages : '), 'C++, Rust, Go, Java, C#/.NET, Python']);
      appendLine(frag, [el('span', 'term-accent', 'Cloud & Infra       : '), 'Kubernetes, Crossplane, Kubebuilder, DevOps, LLMOps']);
      appendLine(frag, [el('span', 'term-accent', 'Frontend & Mobile   : '), 'Flutter & Dart, Angular, React, NativeScript']);
      appendLine(frag, [el('span', 'term-accent', 'Data & Security     : '), 'MySQL, MS SQL, Oracle SQL, SQLite, ECDH/HKDF/AES-GCM']);
      return frag;
    }

    if (cmd === 'ls') {
      const showHidden = arg === '-a' || arg === '-la' || arg === '-al';
      if (showHidden) {
        appendLine(frag, [
          el('span', 'term-dir', '.'),
          '  ',
          el('span', 'term-dir', '..'),
          '  ',
          el('span', 'term-accent', '2019_internships.txt'),
          '  ',
          el('span', 'term-accent', 'links.json'),
          '  ',
          el('span', 'term-accent', 'skills.yaml'),
          '  ',
          el('span', 'term-accent2', '.secret_message.md'),
        ]);
      } else {
        appendLine(frag, [
          el('span', 'term-accent', '2019_internships.txt'),
          '  ',
          el('span', 'term-accent', 'links.json'),
          '  ',
          el('span', 'term-accent', 'skills.yaml'),
        ]);
      }
      return frag;
    }

    if (cmd === 'cat') {
      if (!arg) {
        appendLine(frag, [el('span', 'term-err', 'cat: missing file operand. Try `cat 2019_internships.txt`')]);
        return frag;
      }
      if (arg === '2019_internships.txt') {
        appendLine(frag, [el('span', 'term-muted', 'Retrieving archived 2019 records...')]);
        appendLine(frag, [el('span', 'term-accent', 'Web & Mobile Development Intern'), ' — We are you (Sofia, Bulgaria) | Jun–Jul 2019']);
        appendLine(frag, ['  Stack: Angular, NativeScript']);
        appendLine(frag, [el('span', 'term-accent', 'Web Development Intern'), ' — Capgemini (Marcon, Italy) | May–Jun 2019']);
        appendLine(frag, ['  Stack: JSP, Oracle SQL']);
        return frag;
      }
      if (arg === '.secret_message.md') {
        appendLine(frag, [el('span', 'term-ok', 'Success!'), ' You found the hidden easter egg file.']);
        appendLine(frag, ['"The best code is the code that isn\'t written, but the second best is the code that\'s hidden."']);
        return frag;
      }
      if (arg === 'links.json') {
        appendLine(frag, ['{']);
        appendLine(frag, ['  "email": "', linkEl(LINKS.email.href, LINKS.email.value), '",']);
        appendLine(frag, ['  "github": "', linkEl(LINKS.github.href, LINKS.github.href), '",']);
        appendLine(frag, ['  "linkedin": "', linkEl(LINKS.linkedin.href, LINKS.linkedin.href), '",']);
        appendLine(frag, ['  "gitlab": "', linkEl(LINKS.gitlab.href, LINKS.gitlab.href), '"']);
        appendLine(frag, ['}']);
        return frag;
      }
      if (arg === 'skills.yaml') {
        appendLine(frag, ['systems: [C++, Rust, Go, Java, .NET]']);
        appendLine(frag, ['cloud: [Kubernetes, Crossplane, Kubebuilder, LLMOps]']);
        appendLine(frag, ['apps: [Flutter, Dart, Angular, React]']);
        appendLine(frag, ['databases: [MySQL, Microsoft SQL, Oracle SQL, SQLite]']);
        return frag;
      }
      appendLine(frag, [el('span', 'term-err', `cat: ${arg}: No such file or directory`)]);
      return frag;
    }

    if (cmd === 'open') {
      const target = arg.toLowerCase();
      if (!target) {
        appendLine(frag, ['Usage: open <github|linkedin|gitlab|stackoverflow|hackthebox|email|imdb|spotify|books>']);
        return frag;
      }
      const entry = LINKS[target];
      if (!entry) {
        appendLine(frag, [el('span', 'term-err', `open: unknown target '${arg}'. Try 'open github' or 'open linkedin'.`)]);
        return frag;
      }
      if (entry.href.startsWith('mailto:')) {
        window.location.href = entry.href;
      } else {
        window.open(entry.href, '_blank', 'noopener,noreferrer');
      }
      appendLine(frag, [el('span', 'term-ok', `Opening ${entry.label}: `), linkEl(entry.href, entry.value)]);
      return frag;
    }

    if (cmd === 'pwd') {
      appendLine(frag, ['/home/lorenzo/archives']);
      return frag;
    }

    if (cmd === 'date') {
      appendLine(frag, [new Date().toString()]);
      return frag;
    }

    if (cmd === 'uname') {
      appendLine(frag, ['Linux deluca-node 6.x #1 SMP ComputerEngineering x86_64 GNU/Linux']);
      return frag;
    }

    if (cmd === 'echo') {
      appendLine(frag, [arg]);
      return frag;
    }

    if (cmd === 'sudo') {
      if (arg.startsWith('hire')) {
        appendLine(frag, [el('span', 'term-ok', '[sudo] authentication bypassed for recruiter.')]);
        appendLine(frag, ['Ready for systems, cloud, AI, or full-stack engineering roles.']);
        appendLine(frag, ['Reach out directly: ', linkEl(LINKS.email.href, LINKS.email.value), ' · ', linkEl(LINKS.linkedin.href, 'LinkedIn')]);
      } else {
        appendLine(frag, [el('span', 'term-accent2', 'Nice try! '), 'This incident will be reported (or rewarded with an interview).']);
      }
      return frag;
    }

    appendLine(frag, [el('span', 'term-err', `bash: ${cmd}: command not found`), " — type 'help' for commands."]);
    return frag;
  }

  function renderCommand(instanceName, rawCmd) {
    const inst = instances[instanceName];
    if (!inst || !inst.output || !inst.body) return;

    const trimmed = rawCmd.trim();
    if (trimmed) {
      history.unshift(trimmed);
      if (history.length > 50) history.pop();
      historyIndex = -1;
    }

    const result = buildResponse(rawCmd, instanceName);
    if (result === 'CLEAR') {
      inst.output.textContent = '';
      return;
    }

    const entry = el('div', 'term-entry');
    const cmdLine = el('div', 'term-cmd-line');
    cmdLine.append(el('span', 'term-prompt', 'lorenzo@deluca:~/archives$'));
    cmdLine.append(el('span', '', rawCmd));
    entry.append(cmdLine);

    if (result) {
      const outBlock = el('div', 'term-output-block');
      outBlock.append(result);
      entry.append(outBlock);
    }

    inst.output.append(entry);
    inst.body.scrollTop = inst.body.scrollHeight;
  }

  function attachTerminal(instanceName, bootCommands) {
    const inst = instances[instanceName];
    if (!inst || !inst.input || !inst.body || !inst.output) return;

    for (const cmd of bootCommands) {
      renderCommand(instanceName, cmd);
    }

    inst.body.addEventListener('click', (event) => {
      if (!event.target.closest('a, button')) {
        inst.input.focus();
      }
    });

    inst.input.addEventListener('keydown', (event) => {
      if (event.key === 'Enter') {
        event.preventDefault();
        const val = inst.input.value;
        inst.input.value = '';
        renderCommand(instanceName, val);
      } else if (event.key === 'ArrowUp') {
        event.preventDefault();
        if (history.length > 0 && historyIndex < history.length - 1) {
          historyIndex += 1;
          inst.input.value = history[historyIndex];
        }
      } else if (event.key === 'ArrowDown') {
        event.preventDefault();
        if (historyIndex > 0) {
          historyIndex -= 1;
          inst.input.value = history[historyIndex];
        } else {
          historyIndex = -1;
          inst.input.value = '';
        }
      } else if (event.key === 'Tab') {
        event.preventDefault();
        const val = inst.input.value;
        const parts = val.split(/\s+/);
        if (parts.length === 1) {
          const match = COMMANDS.find((c) => c.startsWith(parts[0].toLowerCase()));
          if (match) inst.input.value = match + (match === 'cat' || match === 'open' ? ' ' : '');
        } else if (parts.length === 2 && parts[0].toLowerCase() === 'cat') {
          const match = FILES.find((f) => f.startsWith(parts[1]));
          if (match) inst.input.value = `cat ${match}`;
        } else if (parts.length === 2 && parts[0].toLowerCase() === 'open') {
          const match = Object.keys(LINKS).find((k) => k.startsWith(parts[1].toLowerCase()));
          if (match) inst.input.value = `open ${match}`;
        }
      } else if ((event.ctrlKey || event.metaKey) && event.key.toLowerCase() === 'l') {
        event.preventDefault();
        inst.output.textContent = '';
      }
    });
  }

  attachTerminal('inline', ['whoami']);
  attachTerminal('modal', ['whoami', 'help']);

  // Clickable terminal quick-command chips
  document.addEventListener('click', (event) => {
    const chip = event.target.closest('[data-term-cmd]');
    if (!chip) return;
    const cmd = chip.getAttribute('data-term-cmd');
    const target = chip.getAttribute('data-term-target') || 'inline';
    if (target === 'modal') {
      openTerminalDialog(cmd);
    } else {
      renderCommand(target, cmd);
      instances[target]?.input?.focus();
    }
  });

  window.terminalEngine = {
    runCommand: renderCommand,
    openModalWith: openTerminalDialog,
  };
})();

// 6. Project Category Filtering
(function initProjectFilters() {
  const buttons = document.querySelectorAll('.filter-btn[data-filter]');
  const cards = document.querySelectorAll('.project-card[data-category]');
  if (!buttons.length || !cards.length) return;

  buttons.forEach((btn) => {
    btn.addEventListener('click', () => {
      const filter = btn.getAttribute('data-filter');
      buttons.forEach((b) => b.setAttribute('aria-pressed', String(b === btn)));

      cards.forEach((card) => {
        const categories = (card.getAttribute('data-category') || '').split(/\s+/);
        card.hidden = filter !== 'all' && !categories.includes(filter);
      });
    });
  });
})();

// 7. Pointer Spotlight Effect on Cards (Purely decorative, keyboard/reduced-motion safe)
(function initCardSpotlight() {
  if (!window.matchMedia('(hover: hover)').matches) return;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  const cards = document.querySelectorAll('.card');
  cards.forEach((card) => {
    card.addEventListener('pointermove', (event) => {
      const rect = card.getBoundingClientRect();
      const x = ((event.clientX - rect.left) / rect.width) * 100;
      const y = ((event.clientY - rect.top) / rect.height) * 100;
      card.style.setProperty('--spot-x', `${x}%`);
      card.style.setProperty('--spot-y', `${y}%`);
    });
  });
})();
