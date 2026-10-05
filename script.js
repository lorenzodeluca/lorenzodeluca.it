// Scroll Reveal Animations
gsap.registerPlugin(ScrollTrigger);
ScrollTrigger.batch(".reveal", {
    onEnter: batch => gsap.fromTo(batch, 
        { autoAlpha: 0, y: 50 },
        { autoAlpha: 1, y: 0, duration: 1, stagger: 0.15, ease: "power3.out" }
    ),
    once: true
});

// Terminal Logic
const termOverlay = document.getElementById('terminal-overlay');
const termOutput = document.getElementById('term-output');
const termInput = document.getElementById('term-input');
let terminalOpen = false;

function openTerminal() {
    termOverlay.classList.remove('hidden');
    termOverlay.classList.add('flex');
    // Trigger reflow
    void termOverlay.offsetWidth;
    termOverlay.classList.remove('opacity-0');
    termOverlay.classList.add('opacity-100');
    terminalOpen = true;
    
    termOutput.innerHTML = '';
    termInput.value = '';
    termInput.disabled = true;
    
    const bootText = [
        "Establishing secure connection...",
        "Bypassing mainframe... [OK]",
        "Accessing classified internship archives...",
        "Ready."
    ];
    
    let i = 0;
    function printBoot() {
        if(i < bootText.length) {
            termOutput.innerHTML += `<div class="text-gray-400 mb-1">${bootText[i]}</div>`;
            i++;
            setTimeout(printBoot, 400);
        } else {
            termInput.disabled = false;
            termInput.focus();
        }
    }
    setTimeout(printBoot, 300);
}

function closeTerminal() {
    termOverlay.classList.remove('opacity-100');
    termOverlay.classList.add('opacity-0');
    setTimeout(() => {
        termOverlay.classList.remove('flex');
        termOverlay.classList.add('hidden');
        terminalOpen = false;
    }, 300);
}

window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && terminalOpen) closeTerminal();
});

termInput.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        const cmd = this.value.trim();
        const outputLine = document.createElement('div');
        outputLine.className = "mb-2";
        outputLine.innerHTML = `<span class="text-accent2 mr-2">lorenzo@deluca:~/archives$</span><span class="text-white">${this.value}</span>`;
        termOutput.appendChild(outputLine);
        
        const responseLine = document.createElement('div');
        responseLine.className = "mb-4 text-gray-300 whitespace-pre-wrap";

        // Command Parser
        if (cmd === 'help') {
            responseLine.innerHTML = `Available commands:\n  <span class='text-accent'>ls</span>      - List archive contents\n  <span class='text-accent'>cat</span>     - Read a file\n  <span class='text-accent'>clear</span>   - Clear terminal`;
        } else if (cmd === 'ls') {
            // Regular ls hides the dotfile
            responseLine.innerHTML = `<span class='text-blue-400'>2019_internships.txt</span>`;
        } else if (cmd === 'ls -a' || cmd === 'ls -al' || cmd === 'ls -la') {
            // Hidden easter egg dotfile revealed!
            responseLine.innerHTML = `<span class='text-blue-400'>.</span>  <span class='text-blue-400'>..</span>  <span class='text-blue-400'>2019_internships.txt</span>  <span class='text-gray-400'>.secret_message.md</span>`;
        } else if (cmd === 'cat 2019_internships.txt') {
            responseLine.innerHTML = `Retrieving missing records...\n\n<span class="text-accent2">Web and Mobile Development Intern</span>\nWe are you (Sofia, Bulgaria) | Jun 2019 - Jul 2019\nStack: Angular, NativeScript\n\n<span class="text-accent2">Web Development Intern</span>\nCapgemini (Marcon, Italy) | May 2019 - Jun 2019\nStack: JSP, Oracle SQL`;
        } else if (cmd === 'cat .secret_message.md') {
            responseLine.innerHTML = `<span class='text-accent'>Success!</span> You found the hidden easter egg file.\n\n"The best code is the code that isn't written, but the second best is the code that's hidden."`;
        } else if (cmd === 'cat secret_message.md') {
            responseLine.innerHTML = `cat: secret_message.md: No such file or directory`;
        } else if (cmd === 'clear') {
            termOutput.innerHTML = '';
            responseLine.innerHTML = '';
        } else if (cmd === '') {
            responseLine.innerHTML = '';
        } else {
            responseLine.innerHTML = `bash: ${cmd}: command not found`;
        }

        if(responseLine.innerHTML !== '') {
            termOutput.appendChild(responseLine);
        }
        
        this.value = '';
        document.getElementById('terminal-body').scrollTop = document.getElementById('terminal-body').scrollHeight;
    }
});