<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lorenzo De Luca — Computer Engineer &amp; Systems Builder</title>
  <meta name="description" content="Portfolio of Lorenzo De Luca — Computer Engineering MSc candidate (University of Bologna) building distributed systems, cloud infrastructure, AI agents, and full-stack applications.">
  <meta property="og:title" content="Lorenzo De Luca — Computer Engineer &amp; Systems Builder">
  <meta property="og:description" content="Distributed systems, Kubernetes, AI, cryptography, and full-stack engineering. Explore projects, experience, and the interactive terminal.">
  <meta property="og:type" content="website">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='7' fill='%23090c12' stroke='%232dd4bf' stroke-width='2'/%3E%3Ctext x='50%25' y='54%25' dominant-baseline='middle' text-anchor='middle' font-family='monospace' font-weight='700' font-size='14' fill='%23f3f5f8'%3ELD%3C/text%3E%3C/svg%3E">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500;600&family=Syne:wght@700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="#main-content" class="skip-link visually-hidden">Skip to main content</a>

  <header class="site-header">
    <div class="header-inner">
      <a class="site-logo" href="#top" aria-label="Lorenzo De Luca home">
        <span class="logo-mark" aria-hidden="true">LD</span>
        <span class="logo-name">lorenzo@deluca</span>
      </a>

      <div class="header-actions">
        <nav class="site-nav" aria-label="Primary">
          <button
            class="menu-button"
            type="button"
            popovertarget="site-menu"
            popovertargetaction="toggle"
            aria-controls="site-menu"
          >
            <svg class="sr-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
              <path d="M4 7h16M4 12h16M4 17h16"/>
            </svg>
            <span>Menu</span>
          </button>

          <ul id="site-menu" class="site-menu" popover="auto">
            <li><a href="#experience">Experience &amp; Education</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#hobbies">Beyond Code</a></li>
            <li class="nav-divider" aria-hidden="true"></li>
            <li>
              <a href="https://github.com/lorenzodeluca" target="_blank" rel="noopener noreferrer">
                <span class="nav-ext">GitHub ↗</span>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/lorenzodeluca" target="_blank" rel="noopener noreferrer">
                <span class="nav-ext">LinkedIn ↗</span>
              </a>
            </li>
            <li>
              <a href="mailto:lorenzo@deluca.pro">
                <span class="nav-ext">Email ↗</span>
              </a>
            </li>
          </ul>
        </nav>

        <button
          type="button"
          class="term-launcher"
          command="show-modal"
          commandfor="terminal-dialog"
          aria-label="Open interactive terminal modal"
        >
          <svg class="sr-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="4 17 10 11 4 5"/>
            <line x1="12" y1="19" x2="20" y2="19"/>
          </svg>
          <span>Terminal</span>
          <kbd class="kbd-hint">Ctrl+K</kbd>
        </button>
      </div>
    </div>
  </header>

  <main id="top">
    <!-- Hero: Recruiter-First Links + Live Interactive Terminal -->
    <section class="hero">
      <div class="container hero-grid">
        <div>
          <div class="status-pill">
            <span class="status-dot" aria-hidden="true"></span>
            <span>Venice &amp; Bologna, Italy &middot; MSc Computer Engineering</span>
          </div>

          <h1 id="main-content" tabindex="-1" class="hero-title">
            Lorenzo
            <span class="accent-line">De Luca</span>
          </h1>

          <p class="hero-lead">
            Computer Engineer bridging <strong>low-level systems &amp; cloud infrastructure</strong> with <strong>clean, product-grade applications</strong>.
          </p>

          <!-- Prominent Recruiter Connect Panel -->
          <div class="connect-panel" aria-label="Direct contact and developer profiles">
            <div class="connect-header">
              <span>Direct Links &amp; Contact</span>
              <span class="connect-badge">Quick Access</span>
            </div>

            <div class="email-row">
              <div class="email-chip email-chip--primary">
                <a id="primary-email" class="email-link" href="mailto:lorenzo@deluca.pro">lorenzo@deluca.pro</a>
                <span class="copy">
                  <button
                    type="button"
                    class="copy-button"
                    command="--copy"
                    commandfor="primary-email"
                    aria-label="Copy primary email lorenzo@deluca.pro"
                  >
                    <svg class="sr-icon icon-copy" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <rect x="9" y="9" width="13" height="13" rx="2"/>
                      <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                    </svg>
                    <svg class="sr-icon icon-check" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"/>
                    </svg>
                  </button>
                  <span class="copy-tip" role="status"></span>
                </span>
              </div>

              <div class="email-chip">
                <a id="secondary-email" class="email-link" href="mailto:venezia@lorenzodeluca.it">venezia@lorenzodeluca.it</a>
                <span class="copy">
                  <button
                    type="button"
                    class="copy-button"
                    command="--copy"
                    commandfor="secondary-email"
                    aria-label="Copy secondary email venezia@lorenzodeluca.it"
                  >
                    <svg class="sr-icon icon-copy" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <rect x="9" y="9" width="13" height="13" rx="2"/>
                      <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/>
                    </svg>
                    <svg class="sr-icon icon-check" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="20 6 9 17 4 12"/>
                    </svg>
                  </button>
                  <span class="copy-tip" role="status"></span>
                </span>
              </div>
            </div>

            <ul class="profile-links">
              <li>
                <a class="profile-pill profile-pill--primary" href="https://github.com/lorenzodeluca" target="_blank" rel="noopener noreferrer">
                  <svg class="sr-icon" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.08 3.29 9.39 7.86 10.91.58.11.79-.25.79-.56 0-.28-.01-1.02-.02-2-3.2.7-3.88-1.54-3.88-1.54-.52-1.33-1.28-1.68-1.28-1.68-1.05-.72.08-.7.08-.7 1.16.08 1.77 1.19 1.77 1.19 1.03 1.76 2.7 1.25 3.36.96.1-.75.4-1.25.73-1.54-2.55-.29-5.24-1.28-5.24-5.68 0-1.26.45-2.29 1.19-3.09-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 5.78 0c2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.8 1.19 1.83 1.19 3.09 0 4.41-2.69 5.38-5.25 5.67.41.36.78 1.06.78 2.14 0 1.54-.01 2.79-.01 3.17 0 .31.21.67.8.56A11.51 11.51 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5Z"/>
                  </svg>
                  <span>GitHub</span>
                  <span class="pill-arrow" aria-hidden="true">↗</span>
                </a>
              </li>
              <li>
                <a class="profile-pill profile-pill--linkedin" href="https://www.linkedin.com/in/lorenzodeluca" target="_blank" rel="noopener noreferrer">
                  <svg class="sr-icon" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77Z"/>
                  </svg>
                  <span>LinkedIn</span>
                  <span class="pill-arrow" aria-hidden="true">↗</span>
                </a>
              </li>
              <li>
                <a class="profile-pill" href="https://gitlab.com/lorenzodeluca" target="_blank" rel="noopener noreferrer">
                  <svg class="sr-icon" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M22.65 14.39 12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94Z"/>
                  </svg>
                  <span>GitLab</span>
                  <span class="pill-arrow" aria-hidden="true">↗</span>
                </a>
              </li>
              <li>
                <a class="profile-pill" href="https://stackoverflow.com/users/9441578/lorenzo?tab=profile" target="_blank" rel="noopener noreferrer">
                  <svg class="sr-icon" aria-hidden="true" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.36 20.2v-5.38h1.79V22H3v-7.18h1.8v5.38h12.56ZM6.77 14.32l.37-1.76 8.79 1.85-.37 1.76-8.79-1.85Zm1.16-4.21.76-1.61 8.14 3.78-.76 1.62-8.14-3.79Zm2.26-3.99 1.15-1.38 6.9 5.76-1.15 1.37-6.9-5.75Zm4.45-4.25L20 9.08l-1.44 1.07-5.36-7.21 1.44-1.07Zm-7.85 16.5v-1.8h8.98v1.8H6.79Z"/>
                  </svg>
                  <span>StackOverflow</span>
                  <span class="pill-arrow" aria-hidden="true">↗</span>
                </a>
              </li>
              <li>
                <a class="profile-pill" href="https://www.hackthebox.com/home/users/profile/79745" target="_blank" rel="noopener noreferrer">
                  <svg class="sr-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round">
                    <path d="M12 2 3 7v10l9 5 9-5V7l-9-5Z"/>
                    <path d="m3 7 9 5 9-5M12 22V12"/>
                  </svg>
                  <span>HackTheBox</span>
                  <span class="pill-arrow" aria-hidden="true">↗</span>
                </a>
              </li>
            </ul>
          </div>

          <div class="hero-subcta">
            <a class="btn-secondary" href="#projects">Browse 6 Featured Projects ↓</a>
            <a class="btn-secondary" href="#experience">Experience &amp; Education ↓</a>
          </div>
        </div>

        <!-- Live Hero Interactive Terminal -->
        <div class="terminal-shell terminal-shell--inline" aria-label="Interactive portfolio terminal">
          <div class="terminal-bar">
            <div class="terminal-dots" aria-hidden="true">
              <span class="term-dot term-dot--red"></span>
              <span class="term-dot term-dot--yellow"></span>
              <span class="term-dot term-dot--green"></span>
            </div>
            <p class="terminal-title">lorenzo@deluca: ~/archives (zsh)</p>
            <div class="terminal-bar-actions">
              <button
                type="button"
                class="term-action-btn"
                command="show-modal"
                commandfor="terminal-dialog"
                aria-label="Expand terminal to fullscreen modal"
              >
                <svg class="sr-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="15 3 21 3 21 9"/>
                  <polyline points="9 21 3 21 3 15"/>
                  <line x1="21" y1="3" x2="14" y2="10"/>
                  <line x1="3" y1="21" x2="10" y2="14"/>
                </svg>
                <span>Expand</span>
              </button>
            </div>
          </div>

          <div id="inline-term-body" class="terminal-body">
            <div id="inline-term-output" role="log" aria-live="polite" aria-relevant="additions"></div>
            <div class="term-input-row">
              <span class="term-prompt" aria-hidden="true">lorenzo@deluca:~/archives$</span>
              <label for="inline-term-input" class="visually-hidden">Inline terminal command input</label>
              <input
                type="text"
                id="inline-term-input"
                class="term-input"
                placeholder="type 'help', 'links', 'ls -a'..."
                autocomplete="off"
                autocapitalize="off"
                spellcheck="false"
              >
            </div>
          </div>

          <div class="term-chips" aria-label="Quick terminal commands">
            <span class="term-chips-label">Try:</span>
            <button type="button" class="term-chip" data-term-cmd="links" data-term-target="inline">links</button>
            <button type="button" class="term-chip" data-term-cmd="projects" data-term-target="inline">projects</button>
            <button type="button" class="term-chip" data-term-cmd="skills" data-term-target="inline">skills</button>
            <button type="button" class="term-chip" data-term-cmd="ls -a" data-term-target="inline">ls -a</button>
            <button type="button" class="term-chip" data-term-cmd="cat 2019_internships.txt" data-term-target="inline">2019_internships</button>
            <button type="button" class="term-chip" data-term-cmd="sudo hire" data-term-target="inline">sudo hire</button>
            <button type="button" class="term-chip" data-term-cmd="help" data-term-target="inline">help</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Core Engineering Pillars -->
    <section class="pillars-strip" aria-label="Core engineering domains">
      <div class="container">
        <ul class="pillars-grid">
          <li class="pillar-item">
            <div class="pillar-label">Systems &amp; Languages</div>
            <div class="pillar-stack">C++, Rust, Go, Java, C# / .NET</div>
          </li>
          <li class="pillar-item">
            <div class="pillar-label">Cloud &amp; Orchestration</div>
            <div class="pillar-stack">Kubernetes, Crossplane, Kubebuilder, LLMOps</div>
          </li>
          <li class="pillar-item">
            <div class="pillar-label">Full-Stack &amp; Mobile</div>
            <div class="pillar-stack">Flutter &amp; Dart, Angular, React, TypeScript</div>
          </li>
          <li class="pillar-item">
            <div class="pillar-label">Data &amp; Security</div>
            <div class="pillar-stack">MySQL, MS SQL, Oracle, Cryptography (ECDH/AES)</div>
          </li>
        </ul>
      </div>
    </section>

    <!-- Experience & Education -->
    <section id="experience" class="section reveal-on-scroll">
      <div class="container">
        <div class="section-header">
          <div>
            <p class="section-eyebrow">Track Record</p>
            <h2 class="section-title">Experience &amp; Education</h2>
            <p class="section-subtitle">Production software delivery paired with Computer Engineering studies at Padua and Bologna.</p>
          </div>
        </div>

        <div class="bio-grid">
          <!-- Experience Column -->
          <div>
            <h3 class="column-heading column-heading--exp">Professional Experience</h3>
            <div class="timeline-stack">
              <article class="card">
                <div class="card-top">
                  <h4 class="card-title">Software Engineer</h4>
                  <span class="card-period">Sep 2024 — Aug 2025</span>
                </div>
                <p class="card-org">Joyflo S.r.l. <span class="card-location">&middot; Treviso, Italy</span></p>
                <p class="card-desc">Developed structural application components using Flutter and managed MySQL databases for reliable, high-throughput data handling.</p>
                <div class="tag-row">
                  <span class="tag tag--teal">Flutter &amp; Dart</span>
                  <span class="tag">MySQL</span>
                  <span class="tag">Architecture</span>
                </div>
              </article>

              <article class="card">
                <div class="card-top">
                  <h4 class="card-title">Analyst Developer</h4>
                  <span class="card-period">Mar 2024 — Aug 2024</span>
                </div>
                <p class="card-org">Venicecom S.r.l. <span class="card-location">&middot; Marghera, Italy</span></p>
                <p class="card-desc">Engineered enterprise software solutions utilizing the .NET framework and Microsoft SQL Server.</p>
                <div class="tag-row">
                  <span class="tag tag--teal">.NET</span>
                  <span class="tag">Microsoft SQL</span>
                  <span class="tag">Enterprise</span>
                </div>
              </article>

              <div class="archive-hint-card">
                <p class="archive-hint-text">
                  Looking for 2019 internships (Capgemini &amp; We are you)? Run <code>cat 2019_internships.txt</code>
                </p>
                <button
                  type="button"
                  class="term-chip"
                  data-term-cmd="cat 2019_internships.txt"
                  data-term-target="modal"
                >
                  Run in Terminal ↗
                </button>
              </div>
            </div>
          </div>

          <!-- Education Column -->
          <div>
            <h3 class="column-heading column-heading--edu">Education</h3>
            <div class="timeline-stack">
              <article class="card">
                <div class="card-top">
                  <h4 class="card-title">Master's in Computer Engineering</h4>
                  <span class="card-period">2025 — 2027</span>
                </div>
                <p class="card-org">University of Bologna</p>
                <p class="card-desc">Graduate focus on Artificial Intelligence, distributed architectures, and concurrent systems.</p>
                <div class="tag-row">
                  <span class="tag tag--violet">AI (30 cum Laude)</span>
                  <span class="tag tag--violet">Concurrent Systems (30/30)</span>
                </div>
              </article>

              <article class="card">
                <div class="card-top">
                  <h4 class="card-title">Bachelor's in Computer Engineering</h4>
                  <span class="card-period">2020 — 2025</span>
                </div>
                <p class="card-org">University of Padua</p>
                <p class="card-desc">Foundations in algorithms, computer architecture, software engineering, and control theory.</p>
                <div class="tag-row">
                  <span class="tag tag--violet">Software Engineering (30/30)</span>
                  <span class="tag tag--violet">Project Management (30/30)</span>
                </div>
              </article>

              <article class="card">
                <div class="card-top">
                  <h4 class="card-title">Diploma in Computer Science</h4>
                  <span class="card-period">2015 — 2020</span>
                </div>
                <p class="card-org">ITIS C. Zuccante <span class="card-location">&middot; Venice, Italy</span></p>
                <p class="card-desc">Technical high school specialization in software development, networking, and databases.</p>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Projects -->
    <section id="projects" class="section section--alt reveal-on-scroll">
      <div class="container">
        <div class="section-header">
          <div>
            <p class="section-eyebrow">Selected Repositories</p>
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-subtitle">Open-source work spanning Kubernetes operators, cryptographic protocols, AI search, and mobile apps.</p>
          </div>

          <div class="filter-bar" role="group" aria-label="Filter projects by domain">
            <button type="button" class="filter-btn" data-filter="all" aria-pressed="true">All (6)</button>
            <button type="button" class="filter-btn" data-filter="cloud" aria-pressed="false">Cloud &amp; Systems</button>
            <button type="button" class="filter-btn" data-filter="ai" aria-pressed="false">AI &amp; Control</button>
            <button type="button" class="filter-btn" data-filter="security" aria-pressed="false">Security</button>
            <button type="button" class="filter-btn" data-filter="apps" aria-pressed="false">Mobile &amp; Apps</button>
          </div>
        </div>

        <div class="projects-grid">
          <!-- Project 1 -->
          <article class="card project-card" data-category="ai">
            <div>
              <div class="project-meta">
                <div class="tag-row" style="margin-top:0">
                  <span class="tag tag--violet">AI</span>
                  <span class="tag">Algorithms</span>
                </div>
                <span class="project-index">01</span>
              </div>
              <h3 class="project-title">Advanced AI Agent for Tablut</h3>
              <p class="card-desc">Designed and developed an intelligent game-playing agent utilizing adversarial search algorithms and domain heuristics for competitive environments.</p>
            </div>
            <div class="project-footer">
              <a class="project-link" href="https://github.com/lorenzodeluca/tablut-player-ai" target="_blank" rel="noopener noreferrer">
                <span>View on GitHub</span>
                <span class="visually-hidden"> — Advanced AI Agent for Tablut</span>
                <span aria-hidden="true">↗</span>
              </a>
            </div>
          </article>

          <!-- Project 2 -->
          <article class="card project-card" data-category="cloud">
            <div>
              <div class="project-meta">
                <div class="tag-row" style="margin-top:0">
                  <span class="tag tag--teal">Kubernetes</span>
                  <span class="tag">DevOps</span>
                </div>
                <span class="project-index">02</span>
              </div>
              <h3 class="project-title">K8s Operators Benchmarking</h3>
              <p class="card-desc">Hands-on evaluation of Crossplane vs. Kubebuilder with functional live demos benchmarking infrastructure orchestration performance.</p>
            </div>
            <div class="project-footer">
              <a class="project-link" href="https://github.com/lorenzodeluca/kafka-operator-clash" target="_blank" rel="noopener noreferrer">
                <span>View on GitHub</span>
                <span class="visually-hidden"> — K8s Operators Benchmarking</span>
                <span aria-hidden="true">↗</span>
              </a>
            </div>
          </article>

          <!-- Project 3 -->
          <article class="card project-card" data-category="security cloud">
            <div>
              <div class="project-meta">
                <div class="tag-row" style="margin-top:0">
                  <span class="tag tag--teal">Java</span>
                  <span class="tag">Cryptography</span>
                </div>
                <span class="project-index">03</span>
              </div>
              <h3 class="project-title">E2E Encrypted Secure Chat</h3>
              <p class="card-desc">Serverless console chat featuring ECDH key negotiation, HKDF symmetric key derivation, and AES-GCM authenticated data channels.</p>
            </div>
            <div class="project-footer">
              <a class="project-link" href="https://github.com/lorenzodeluca/end-to-end-encrypted-chat-java" target="_blank" rel="noopener noreferrer">
                <span>View on GitHub</span>
                <span class="visually-hidden"> — E2E Encrypted Secure Chat</span>
                <span aria-hidden="true">↗</span>
              </a>
            </div>
          </article>

          <!-- Project 4 -->
          <article class="card project-card" data-category="apps">
            <div>
              <div class="project-meta">
                <div class="tag-row" style="margin-top:0">
                  <span class="tag tag--teal">Flutter</span>
                  <span class="tag">API &amp; Maps</span>
                </div>
                <span class="project-index">04</span>
              </div>
              <h3 class="project-title">Covid World Tracker</h3>
              <p class="card-desc">Android MVC application featuring live charts, offline SQLite database caching, and Google Maps integration for global data visualization.</p>
            </div>
            <div class="project-footer">
              <a class="project-link" href="https://github.com/lorenzodeluca/covid-world-coronavirus-info-app" target="_blank" rel="noopener noreferrer">
                <span>View on GitHub</span>
                <span class="visually-hidden"> — Covid World Tracker</span>
                <span aria-hidden="true">↗</span>
              </a>
            </div>
          </article>

          <!-- Project 5 -->
          <article class="card project-card" data-category="apps cloud">
            <div>
              <div class="project-meta">
                <div class="tag-row" style="margin-top:0">
                  <span class="tag tag--teal">Firebase</span>
                  <span class="tag">TCP Sockets</span>
                </div>
                <span class="project-index">05</span>
              </div>
              <h3 class="project-title">You Message Chatroom</h3>
              <p class="card-desc">Cross-platform messaging application built with Flutter, combining Firebase authentication, custom TCP sockets, and local SQLite persistence.</p>
            </div>
            <div class="project-footer">
              <a class="project-link" href="https://github.com/lorenzodeluca/you-message-chatroom" target="_blank" rel="noopener noreferrer">
                <span>View on GitHub</span>
                <span class="visually-hidden"> — You Message Chatroom</span>
                <span aria-hidden="true">↗</span>
              </a>
            </div>
          </article>

          <!-- Project 6 -->
          <article class="card project-card" data-category="ai">
            <div>
              <div class="project-meta">
                <div class="tag-row" style="margin-top:0">
                  <span class="tag tag--violet">Control Systems</span>
                  <span class="tag">MATLAB</span>
                </div>
                <span class="project-index">06</span>
              </div>
              <h3 class="project-title">MagLev Simulation &amp; Control</h3>
              <p class="card-desc">Mathematical modeling and feedback control design to linearize and stabilize a highly non-linear SISO magnetic levitation system.</p>
            </div>
            <div class="project-footer">
              <a class="project-link" href="https://github.com/lorenzodeluca/simulation-and-control-of-a-magnetic-levitation-system" target="_blank" rel="noopener noreferrer">
                <span>View on GitHub</span>
                <span class="visually-hidden"> — MagLev Simulation and Control</span>
                <span aria-hidden="true">↗</span>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Hobbies / Life Outside the Terminal -->
    <section id="hobbies" class="section reveal-on-scroll">
      <div class="container">
        <div class="section-header">
          <div>
            <p class="section-eyebrow">Human Layer</p>
            <h2 class="section-title">Life Outside The Terminal</h2>
            <p class="section-subtitle">Outdoor endurance, water rescue, and curated reading, music, and cinema logs.</p>
          </div>
        </div>

        <div class="hobbies-grid">
          <a class="hobby-card hobby-card--linked" href="https://www.imdb.com/user/ur145310474/?ref_=nv_usr_prof_2" target="_blank" rel="noopener noreferrer">
            <div class="hobby-head">
              <span class="hobby-icon" aria-hidden="true">
                <svg class="sr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="4" width="20" height="16" rx="2"/>
                  <path d="M7 4v16M17 4v16M2 8h5M17 8h5M2 16h5M17 16h5"/>
                </svg>
              </span>
              <span class="hobby-badge">IMDb Profile ↗</span>
            </div>
            <div>
              <h3 class="hobby-title">Cinema</h3>
              <p class="hobby-sub">Ratings &amp; watchlist on IMDb</p>
            </div>
          </a>

          <a class="hobby-card hobby-card--linked" href="https://open.spotify.com/user/qvm9vnpgjiv4ygdslrjlmycj6" target="_blank" rel="noopener noreferrer">
            <div class="hobby-head">
              <span class="hobby-icon" aria-hidden="true">
                <svg class="sr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 18V5l12-2v13"/>
                  <circle cx="6" cy="18" r="3"/>
                  <circle cx="18" cy="16" r="3"/>
                </svg>
              </span>
              <span class="hobby-badge">Spotify Profile ↗</span>
            </div>
            <div>
              <h3 class="hobby-title">Music</h3>
              <p class="hobby-sub">Pop, rap, rock, techno, jazz &amp; playlists</p>
            </div>
          </a>

          <a class="hobby-card hobby-card--linked" href="https://www.librarything.com/catalog/TheOfficialShocker" target="_blank" rel="noopener noreferrer">
            <div class="hobby-head">
              <span class="hobby-icon" aria-hidden="true">
                <svg class="sr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/>
                </svg>
              </span>
              <span class="hobby-badge">LibraryThing ↗</span>
            </div>
            <div>
              <h3 class="hobby-title">Reading</h3>
              <p class="hobby-sub">Personal catalog (since 2023)</p>
            </div>
          </a>

          <div class="hobby-card">
            <div class="hobby-head">
              <span class="hobby-icon" aria-hidden="true">
                <svg class="sr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="9"/>
                  <circle cx="12" cy="12" r="4"/>
                  <path d="m4.9 4.9 4.2 4.2M14.9 14.9l4.2 4.2M19.1 4.9l-4.2 4.2M9.1 14.9l-4.2 4.2"/>
                </svg>
              </span>
            </div>
            <div>
              <h3 class="hobby-title">Lifeguard</h3>
              <p class="hobby-sub">Certified professional rescuer</p>
            </div>
          </div>

          <div class="hobby-card">
            <div class="hobby-head">
              <span class="hobby-icon" aria-hidden="true">
                <svg class="sr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m8 3 4 8 5-5 5 15H2L8 3z"/>
                </svg>
              </span>
            </div>
            <div>
              <h3 class="hobby-title">Sport Climbing</h3>
              <p class="hobby-sub">Lead &amp; outdoor crags</p>
            </div>
          </div>

          <div class="hobby-card">
            <div class="hobby-head">
              <span class="hobby-icon" aria-hidden="true">
                <svg class="sr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="5.5" cy="17.5" r="3.5"/>
                  <circle cx="18.5" cy="17.5" r="3.5"/>
                  <path d="M15 6a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm-3 11.5V14l-3-3 4-3 2 3h2"/>
                </svg>
              </span>
            </div>
            <div>
              <h3 class="hobby-title">MTB Cycling</h3>
              <p class="hobby-sub">Trails &amp; mountain endurance</p>
            </div>
          </div>

          <div class="hobby-card">
            <div class="hobby-head">
              <span class="hobby-icon" aria-hidden="true">
                <svg class="sr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/>
                  <path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/>
                  <path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/>
                </svg>
              </span>
            </div>
            <div>
              <h3 class="hobby-title">Freediving</h3>
              <p class="hobby-sub">Breath-hold &amp; open water</p>
            </div>
          </div>

          <div class="hobby-card">
            <div class="hobby-head">
              <span class="hobby-icon" aria-hidden="true">
                <svg class="sr-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m17 14 3 3.3a1 1 0 0 1-.7 1.7H4.7a1 1 0 0 1-.7-1.7L7 14h-.3a1 1 0 0 1-.7-1.7L9 9h-.2A1 1 0 0 1 8 7.3L12 3l4 4.3a1 1 0 0 1-.8 1.7H15l3 3.3a1 1 0 0 1-.7 1.7H17Z"/>
                  <path d="M12 19v3"/>
                </svg>
              </span>
            </div>
            <div>
              <h3 class="hobby-title">Nature Activities</h3>
              <p class="hobby-sub">Hiking &amp; alpine weekends</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Recruiter Bottom CTA -->
    <section class="cta-band" aria-label="Connect with Lorenzo De Luca">
      <div class="container">
        <div class="cta-box">
          <div>
            <h2 class="cta-title">Let's build reliable software together.</h2>
            <p class="cta-desc">Reach out directly by email, inspect code on GitHub, or connect on LinkedIn.</p>
          </div>
          <ul class="profile-links">
            <li>
              <a class="profile-pill profile-pill--primary" href="mailto:lorenzo@deluca.pro">
                <span>lorenzo@deluca.pro</span>
                <span class="pill-arrow" aria-hidden="true">↗</span>
              </a>
            </li>
            <li>
              <a class="profile-pill profile-pill--linkedin" href="https://www.linkedin.com/in/lorenzodeluca" target="_blank" rel="noopener noreferrer">
                <span>LinkedIn</span>
                <span class="pill-arrow" aria-hidden="true">↗</span>
              </a>
            </li>
            <li>
              <a class="profile-pill" href="https://github.com/lorenzodeluca" target="_blank" rel="noopener noreferrer">
                <span>GitHub</span>
                <span class="pill-arrow" aria-hidden="true">↗</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div>&copy; 2026 Lorenzo De Luca &middot; Venice &amp; Bologna</div>
      <div class="footer-links">
        <a href="https://github.com/lorenzodeluca" target="_blank" rel="noopener noreferrer">GitHub</a>
        <a href="https://www.linkedin.com/in/lorenzodeluca" target="_blank" rel="noopener noreferrer">LinkedIn</a>
        <a href="https://gitlab.com/lorenzodeluca" target="_blank" rel="noopener noreferrer">GitLab</a>
        <a href="https://stackoverflow.com/users/9441578/lorenzo?tab=profile" target="_blank" rel="noopener noreferrer">StackOverflow</a>
        <a href="https://www.hackthebox.com/home/users/profile/79745" target="_blank" rel="noopener noreferrer">HackTheBox</a>
        <a href="/privacy">Privacy Policy</a>
      </div>
    </div>
  </footer>

  <!-- Fullscreen Modal Terminal (<dialog> with native top-layer & light dismiss) -->
  <dialog id="terminal-dialog" closedby="any" aria-labelledby="terminal-dialog-title">
    <div class="terminal-shell terminal-shell--modal">
      <div class="terminal-bar">
        <div class="terminal-dots">
          <button
            type="button"
            class="term-dot-btn"
            command="close"
            commandfor="terminal-dialog"
            data-close-terminal
            aria-label="Close terminal modal"
          >
            <span class="term-dot term-dot--red" aria-hidden="true"></span>
          </button>
          <span class="term-dot term-dot--yellow" aria-hidden="true"></span>
          <span class="term-dot term-dot--green" aria-hidden="true"></span>
        </div>
        <h2 id="terminal-dialog-title" class="terminal-title">lorenzo@deluca: ~/archives — interactive shell</h2>
        <div class="terminal-bar-actions">
          <button
            type="button"
            class="term-action-btn"
            command="close"
            commandfor="terminal-dialog"
            data-close-terminal
          >
            Close (Esc)
          </button>
        </div>
      </div>

      <div id="modal-term-body" class="terminal-body">
        <div id="modal-term-output" role="log" aria-live="polite" aria-relevant="additions"></div>
        <div class="term-input-row">
          <span class="term-prompt" aria-hidden="true">lorenzo@deluca:~/archives$</span>
          <label for="modal-term-input" class="visually-hidden">Modal terminal command input</label>
          <input
            type="text"
            id="modal-term-input"
            class="term-input"
            placeholder="type a command or press Tab to autocomplete..."
            autocomplete="off"
            autocapitalize="off"
            spellcheck="false"
            autofocus
          >
        </div>
      </div>

      <div class="term-chips" aria-label="Quick terminal commands">
        <span class="term-chips-label">Quick commands:</span>
        <button type="button" class="term-chip" data-term-cmd="links" data-term-target="modal">links</button>
        <button type="button" class="term-chip" data-term-cmd="experience" data-term-target="modal">experience</button>
        <button type="button" class="term-chip" data-term-cmd="education" data-term-target="modal">education</button>
        <button type="button" class="term-chip" data-term-cmd="projects" data-term-target="modal">projects</button>
        <button type="button" class="term-chip" data-term-cmd="ls -a" data-term-target="modal">ls -a</button>
        <button type="button" class="term-chip" data-term-cmd="cat 2019_internships.txt" data-term-target="modal">cat 2019_internships.txt</button>
        <button type="button" class="term-chip" data-term-cmd="cat .secret_message.md" data-term-target="modal">cat .secret_message.md</button>
        <button type="button" class="term-chip" data-term-cmd="clear" data-term-target="modal">clear</button>
      </div>
    </div>
  </dialog>

  <script src="script.js" defer></script>
</body>
</html>
