<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorenzo De Luca | Creative Developer</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100..800&family=Syne:wght@400..800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Syne', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        dark: '#050505',
                        surface: '#0f0f11',
                        surface2: '#1a1a1d',
                        accent: '#c084fc',
                        accent2: '#2dd4bf',
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        },
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-white antialiased selection:bg-accent2 selection:text-dark">

    <div class="glow-bg animate-blob"></div>
    <div class="glow-bg-2 animate-blob" style="animation-delay: 2s;"></div>

    <nav class="fixed w-full z-50 top-0 py-6 px-8 md:px-16 flex justify-between items-center mix-blend-difference">
        <div class="font-display font-bold text-xl tracking-tighter">LD.</div>
        <div class="flex gap-6 font-mono text-xs uppercase tracking-widest text-gray-400">
            <a href="mailto:lorenzo@deluca.pro" class="hover:text-white transition-colors">lorenzo@deluca.pro</a>
            <a href="mailto:venezia@lorenzodeluca.it" class="hover:text-white transition-colors hidden md:block">venezia@lorenzodeluca.it</a>
        </div>
    </nav>

    <main>
        <section class="h-screen flex flex-col justify-center px-8 md:px-16 relative">
            <div class="reveal max-w-5xl">
                <p class="font-mono text-accent2 mb-6 tracking-widest uppercase text-sm">Passionate Builder // Venice & Bologna</p>
                <h1 class="font-display font-extrabold text-6xl md:text-8xl lg:text-9xl leading-[0.9] tracking-tighter mb-6">
                    LORENZO<br>
                    <span class="text-outline">DE LUCA</span>
                </h1>
                <p class="font-sans text-gray-400 text-lg md:text-2xl max-w-2xl leading-relaxed mt-8 border-l-2 border-accent2 pl-6">
                    Bridging the gap between <span class="text-white font-medium">complex system engineering</span> and <span class="text-white font-medium">seamless user experiences</span>.
                </p>
            </div>
            
            <div class="absolute bottom-12 left-8 md:left-16 flex items-center gap-4 font-mono text-xs text-gray-500 reveal">
                <div class="w-12 h-[1px] bg-gray-600"></div>
                SCROLL TO EXPLORE
            </div>
        </section>

        <div class="py-10 border-y border-white/5 overflow-hidden flex bg-surface2/30 reveal">
            <div class="animate-marquee whitespace-nowrap flex gap-12 font-display text-4xl md:text-6xl font-bold text-white/10 uppercase tracking-tighter items-center">
                <span>C++ / Rust</span> <span class="text-accent2 text-2xl">✦</span>
                <span>Kubernetes</span> <span class="text-accent text-2xl">✦</span>
                <span>Flutter & Dart</span> <span class="text-accent2 text-2xl">✦</span>
                <span>LLMOps</span> <span class="text-accent text-2xl">✦</span>
                <span>Go</span> <span class="text-accent2 text-2xl">✦</span>
                <span>Angular / React</span> <span class="text-accent text-2xl">✦</span>
                <span>C++ / Rust</span> <span class="text-accent2 text-2xl">✦</span>
                <span>Kubernetes</span> <span class="text-accent text-2xl">✦</span>
                <span>Flutter & Dart</span> <span class="text-accent2 text-2xl">✦</span>
            </div>
        </div>

        <section class="py-32 px-8 md:px-16 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                
                <div class="lg:col-span-4 reveal">
                    <h2 class="font-display text-4xl md:text-5xl font-bold tracking-tighter mb-4">Background</h2>
                    <p class="font-sans text-gray-400 mb-12">An academic foundation in Computer Engineering paired with hands-on full-stack development.</p>
                    
                    <div class="glass p-6 rounded-2xl font-mono text-sm text-gray-400 sticky top-32">
                        <span class="text-accent">const</span> profile = {<br>
                        &nbsp;&nbsp;focus: <span class="text-accent2">"Architecture"</span>,<br>
                        &nbsp;&nbsp;gpa: <span class="text-white">28.17</span>,<br>
                        &nbsp;&nbsp;status: <span class="text-accent2">"MSc Candidate"</span><br>
                        };
                    </div>
                </div>

                <div class="lg:col-span-8 flex flex-col gap-6">
                    
                    <!-- PROFESSIONAL EXPERIENCE SECTION -->
                    <h3 class="font-display text-3xl font-bold mb-2 text-accent2 reveal">Professional Experience</h3>
                    
                    <div class="glass glass-hover p-8 rounded-3xl transition-all duration-300 group reveal">
                        <div class="flex flex-col md:flex-row justify-between md:items-center mb-4">
                            <h3 class="font-display text-2xl font-bold group-hover:text-accent2 transition-colors">Software Engineer</h3>
                            <span class="font-mono text-sm text-gray-500 mt-2 md:mt-0 bg-white/5 px-3 py-1 rounded-full">Sep 2024 — Aug 2025</span>
                        </div>
                        <p class="text-lg text-white mb-2">Joyflo S.r.l. <span class="text-gray-500 text-sm">| Treviso, Italy</span></p>
                        <p class="text-gray-400 font-sans">Developed structural components using <span class="text-white">Flutter</span> and managed <span class="text-white">MySQL</span> databases for robust data handling.</p>
                    </div>

                    <div class="glass glass-hover p-8 rounded-3xl transition-all duration-300 group reveal">
                        <div class="flex flex-col md:flex-row justify-between md:items-center mb-4">
                            <h3 class="font-display text-2xl font-bold group-hover:text-accent2 transition-colors">Analyst Developer</h3>
                            <span class="font-mono text-sm text-gray-500 mt-2 md:mt-0 bg-white/5 px-3 py-1 rounded-full">Mar 2024 — Aug 2024</span>
                        </div>
                        <p class="text-lg text-white mb-2">Venicecom S.r.l. <span class="text-gray-500 text-sm">| Marghera, Italy</span></p>
                        <p class="text-gray-400 font-sans">Enterprise solutions development utilizing <span class="text-white">.NET</span> framework and <span class="text-white">Microsoft SQL</span>.</p>
                    </div>

                    <!-- EDUCATION SECTION -->
                    <h3 class="font-display text-3xl font-bold mb-2 mt-12 text-accent reveal">Education</h3>
                    
                    <div class="glass glass-hover p-8 rounded-3xl transition-all duration-300 group reveal relative">
                        <div class="absolute -left-3 md:-left-8 top-10 bottom-10 w-px bg-white/10 hidden md:block"></div>
                        <div class="flex flex-col md:flex-row justify-between md:items-center mb-4 relative">
                            <div class="absolute -left-10 w-3 h-3 rounded-full bg-accent hidden md:block"></div>
                            <h3 class="font-display text-2xl font-bold group-hover:text-accent transition-colors">Master's in Computer Engineering</h3>
                            <span class="font-mono text-sm text-gray-500 mt-2 md:mt-0 bg-white/5 px-3 py-1 rounded-full">2025 — 2027</span>
                        </div>
                        <p class="text-lg text-white mb-2">University of Bologna</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="text-xs font-mono border border-white/10 rounded-full px-3 py-1 text-gray-400">AI (30 cum Laude)</span>
                            <span class="text-xs font-mono border border-white/10 rounded-full px-3 py-1 text-gray-400">Concurrent Systems (30/30)</span>
                        </div>
                    </div>

                    <div class="glass glass-hover p-8 rounded-3xl transition-all duration-300 group reveal relative">
                        <div class="flex flex-col md:flex-row justify-between md:items-center mb-4 relative">
                            <div class="absolute -left-10 w-3 h-3 rounded-full bg-white/20 hidden md:block group-hover:bg-accent transition-colors"></div>
                            <h3 class="font-display text-2xl font-bold group-hover:text-accent transition-colors">Bachelor's in Computer Engineering</h3>
                            <span class="font-mono text-sm text-gray-500 mt-2 md:mt-0 bg-white/5 px-3 py-1 rounded-full">2020 — 2025</span>
                        </div>
                        <p class="text-lg text-white mb-2">University of Padua</p>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="text-xs font-mono border border-white/10 rounded-full px-3 py-1 text-gray-400">Software Engineering (30/30)</span>
                            <span class="text-xs font-mono border border-white/10 rounded-full px-3 py-1 text-gray-400">Project Management (30/30)</span>
                        </div>
                    </div>

                    <div class="glass glass-hover p-8 rounded-3xl transition-all duration-300 group reveal relative">
                        <div class="flex flex-col md:flex-row justify-between md:items-center mb-4 relative">
                            <div class="absolute -left-10 w-3 h-3 rounded-full bg-white/20 hidden md:block group-hover:bg-accent transition-colors"></div>
                            <h3 class="font-display text-2xl font-bold group-hover:text-accent transition-colors">Diploma in Computer Science</h3>
                            <span class="font-mono text-sm text-gray-500 mt-2 md:mt-0 bg-white/5 px-3 py-1 rounded-full">2015 — 2020</span>
                        </div>
                        <p class="text-lg text-white mb-2">ITIS C. Zuccante <span class="text-gray-500 text-sm">| Venice, Italy</span></p>
                    </div>

                </div>
            </div>
        </section>

        <!-- PROJECTS SECTION -->
        <section class="py-32 bg-surface border-y border-white/5">
            <div class="px-8 md:px-16 max-w-7xl mx-auto">
                <div class="flex justify-between items-end mb-16 reveal">
                    <h2 class="font-display text-5xl md:text-7xl font-bold tracking-tighter">Featured<br>Projects.</h2>
                    <i class="fa-solid fa-arrow-turn-down text-4xl text-accent2 mb-4 hidden md:block"></i>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <!-- Project 1 -->
                    <div class="glass glass-hover p-10 rounded-[2rem] flex flex-col justify-between h-[400px] group reveal relative">
                        <a href="https://github.com/lorenzodeluca/tablut-player-ai" target="_blank" class="absolute inset-0 z-0"></a>
                        <div class="relative z-10 pointer-events-none">
                            <div class="flex gap-2 mb-6">
                                <span class="text-xs font-mono bg-accent/20 text-accent rounded-full px-3 py-1">AI</span>
                                <span class="text-xs font-mono bg-white/10 text-white rounded-full px-3 py-1">Algorithms</span>
                            </div>
                            <h3 class="font-display text-3xl font-bold mb-4">Advanced AI Agent for Tablut</h3>
                            <p class="text-gray-400 font-sans text-sm md:text-base">Designed and developed an intelligent player utilizing complex search algorithms and heuristics to optimize decision-making in competitive environments.</p>
                        </div>
                        <div class="flex justify-between items-center border-t border-white/10 pt-6 mt-4 relative z-10 pointer-events-none">
                            <span class="font-mono text-sm text-gray-500">01</span>
                            <div class="flex gap-3">
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center transition-all duration-300">
                                    <i class="fa-brands fa-github text-white"></i>
                                </div>
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-accent2 group-hover:text-dark transition-all duration-300">
                                    <i class="fa-solid fa-arrow-right -rotate-45"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="glass glass-hover p-10 rounded-[2rem] flex flex-col justify-between h-[400px] group reveal relative">
                        <a href="https://github.com/lorenzodeluca/kafka-operator-clash" target="_blank" class="absolute inset-0 z-0"></a>
                        <div class="relative z-10 pointer-events-none">
                            <div class="flex gap-2 mb-6">
                                <span class="text-xs font-mono bg-accent2/20 text-accent2 rounded-full px-3 py-1">Kubernetes</span>
                                <span class="text-xs font-mono bg-white/10 text-white rounded-full px-3 py-1">DevOps</span>
                            </div>
                            <h3 class="font-display text-3xl font-bold mb-4">K8s Operators Benchmarking</h3>
                            <p class="text-gray-400 font-sans text-sm md:text-base">Hands-on evaluation of Crossplane vs Kubebuilder. Designed and deployed functional live demos to test infrastructure orchestration performance.</p>
                        </div>
                        <div class="flex justify-between items-center border-t border-white/10 pt-6 mt-4 relative z-10 pointer-events-none">
                            <span class="font-mono text-sm text-gray-500">02</span>
                            <div class="flex gap-3">
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center transition-all duration-300">
                                    <i class="fa-brands fa-github text-white"></i>
                                </div>
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-accent2 group-hover:text-dark transition-all duration-300">
                                    <i class="fa-solid fa-arrow-right -rotate-45"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="glass glass-hover p-10 rounded-[2rem] flex flex-col justify-between h-[400px] group reveal relative">
                        <a href="https://github.com/lorenzodeluca/end-to-end-encrypted-chat-java" target="_blank" class="absolute inset-0 z-0"></a>
                        <div class="relative z-10 pointer-events-none">
                            <div class="flex gap-2 mb-6">
                                <span class="text-xs font-mono bg-[#facc15]/20 text-[#facc15] rounded-full px-3 py-1">Java</span>
                                <span class="text-xs font-mono bg-white/10 text-white rounded-full px-3 py-1">Cryptography</span>
                            </div>
                            <h3 class="font-display text-3xl font-bold mb-4">E2E Encrypted Secure Chat</h3>
                            <p class="text-gray-400 font-sans text-sm md:text-base">Serverless console chat featuring ECDH key negotiation, HKDF symmetric key derivation, and AES-GCM data channels for robust end-to-end encryption.</p>
                        </div>
                        <div class="flex justify-between items-center border-t border-white/10 pt-6 mt-4 relative z-10 pointer-events-none">
                            <span class="font-mono text-sm text-gray-500">03</span>
                            <div class="flex gap-3">
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center transition-all duration-300">
                                    <i class="fa-brands fa-github text-white"></i>
                                </div>
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-accent2 group-hover:text-dark transition-all duration-300">
                                    <i class="fa-solid fa-arrow-right -rotate-45"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 4 (Covid World Tracker) -->
                    <div class="glass glass-hover p-10 rounded-[2rem] flex flex-col justify-between h-[400px] group reveal relative">
                        <a href="https://github.com/lorenzodeluca/covid-world-coronavirus-info-app" target="_blank" class="absolute inset-0 z-0"></a>
                        <div class="relative z-10 pointer-events-none">
                            <div class="flex gap-2 mb-6">
                                <span class="text-xs font-mono bg-[#0ea5e9]/20 text-[#38bdf8] rounded-full px-3 py-1">Flutter</span>
                                <span class="text-xs font-mono bg-white/10 text-white rounded-full px-3 py-1">API & Maps</span>
                            </div>
                            <h3 class="font-display text-3xl font-bold mb-4">Covid World Tracker</h3>
                            <p class="text-gray-400 font-sans text-sm md:text-base">Android MVC application featuring live charts, offline database caching (SQLite), and Google Maps integration to visualize global pandemic data.</p>
                        </div>
                        <div class="flex justify-between items-center border-t border-white/10 pt-6 mt-4 relative z-10 pointer-events-none">
                            <span class="font-mono text-sm text-gray-500">04</span>
                            <div class="flex gap-3">
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center transition-all duration-300">
                                    <i class="fa-brands fa-github text-white"></i>
                                </div>
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#38bdf8] group-hover:text-dark transition-all duration-300">
                                    <i class="fa-solid fa-arrow-right -rotate-45"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 5 (You Message Chatroom) -->
                    <div class="glass glass-hover p-10 rounded-[2rem] flex flex-col justify-between h-[400px] group reveal relative">
                        <a href="https://github.com/lorenzodeluca/you-message-chatroom" target="_blank" class="absolute inset-0 z-0"></a>
                        <div class="relative z-10 pointer-events-none">
                            <div class="flex gap-2 mb-6">
                                <span class="text-xs font-mono bg-[#f97316]/20 text-[#fb923c] rounded-full px-3 py-1">Firebase</span>
                                <span class="text-xs font-mono bg-white/10 text-white rounded-full px-3 py-1">TCP Sockets</span>
                            </div>
                            <h3 class="font-display text-3xl font-bold mb-4">You Message Chatroom</h3>
                            <p class="text-gray-400 font-sans text-sm md:text-base">Cross-platform messaging application built with Flutter, leveraging Firebase authentication, custom TCP socket communication, and local SQLite data persistence.</p>
                        </div>
                        <div class="flex justify-between items-center border-t border-white/10 pt-6 mt-4 relative z-10 pointer-events-none">
                            <span class="font-mono text-sm text-gray-500">05</span>
                            <div class="flex gap-3">
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center transition-all duration-300">
                                    <i class="fa-brands fa-github text-white"></i>
                                </div>
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#fb923c] group-hover:text-dark transition-all duration-300">
                                    <i class="fa-solid fa-arrow-right -rotate-45"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Project 6 (MagLev Simulation) -->
                    <div class="glass glass-hover p-10 rounded-[2rem] flex flex-col justify-between h-[400px] group reveal relative">
                        <a href="https://github.com/lorenzodeluca/simulation-and-control-of-a-magnetic-levitation-system" target="_blank" class="absolute inset-0 z-0"></a>
                        <div class="relative z-10 pointer-events-none">
                            <div class="flex gap-2 mb-6">
                                <span class="text-xs font-mono bg-accent/20 text-accent rounded-full px-3 py-1">Control Systems</span>
                                <span class="text-xs font-mono bg-white/10 text-white rounded-full px-3 py-1">MATLAB</span>
                            </div>
                            <h3 class="font-display text-3xl font-bold mb-4">MagLev Simulation & Control</h3>
                            <p class="text-gray-400 font-sans text-sm md:text-base">Mathematical modeling and feedback control design to linearize and stabilize a highly non-linear Single-Input Single-Output magnetic levitation physical system.</p>
                        </div>
                        <div class="flex justify-between items-center border-t border-white/10 pt-6 mt-4 relative z-10 pointer-events-none">
                            <span class="font-mono text-sm text-gray-500">06</span>
                            <div class="flex gap-3">
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center transition-all duration-300">
                                    <i class="fa-brands fa-github text-white"></i>
                                </div>
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-accent group-hover:text-dark transition-all duration-300">
                                    <i class="fa-solid fa-arrow-right -rotate-45"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Hobbies Section -->
        <section class="py-32 px-8 md:px-16 max-w-7xl mx-auto overflow-hidden">
            <h2 class="font-display text-4xl md:text-5xl font-bold tracking-tighter mb-16 text-center reveal">Life Outside The Terminal</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                
                <div class="glass p-8 rounded-[2rem] flex flex-col items-center justify-center text-center aspect-square group reveal transition-transform hover:scale-105">
                    <i class="fa-solid fa-mountain text-4xl mb-4 text-gray-500 group-hover:text-accent2 transition-colors"></i>
                    <h3 class="font-display text-xl font-bold">Sport Climbing</h3>
                </div>

                <div class="glass p-8 rounded-[2rem] flex flex-col items-center justify-center text-center aspect-square group reveal transition-transform hover:scale-105">
                    <i class="fa-solid fa-bicycle text-4xl mb-4 text-gray-500 group-hover:text-accent transition-colors"></i>
                    <h3 class="font-display text-xl font-bold">MTB Cycling</h3>
                </div>

                <div class="glass p-8 rounded-[2rem] flex flex-col items-center justify-center text-center aspect-square group reveal transition-transform hover:scale-105">
                    <i class="fa-solid fa-water text-4xl mb-4 text-gray-500 group-hover:text-accent2 transition-colors"></i>
                    <h3 class="font-display text-xl font-bold">Freediving</h3>
                </div>

                <div class="glass p-8 rounded-[2rem] flex flex-col items-center justify-center text-center aspect-square group reveal transition-transform hover:scale-105">
                    <i class="fa-solid fa-life-ring text-4xl mb-4 text-gray-500 group-hover:text-accent transition-colors"></i>
                    <h3 class="font-display text-xl font-bold">Lifeguard</h3>
                </div>

                <a href="https://www.imdb.com/user/ur145310474/?ref_=nv_usr_prof_2" target="_blank" class="glass p-8 rounded-[2rem] flex flex-col items-center justify-center text-center aspect-square group reveal transition-transform hover:scale-105">
                    <i class="fa-solid fa-film text-4xl mb-4 text-gray-500 group-hover:text-accent transition-colors"></i>
                    <h3 class="font-display text-xl font-bold">Cinema</h3>
                </a>

                <a href="https://open.spotify.com/user/qvm9vnpgjiv4ygdslrjlmycj6" target="_blank" class="glass p-8 rounded-[2rem] flex flex-col items-center justify-center text-center aspect-square group reveal transition-transform hover:scale-105">
                    <i class="fa-brands fa-spotify text-4xl mb-4 text-gray-500 group-hover:text-[#1DB954] transition-colors"></i>
                    <h3 class="font-display text-xl font-bold">Music</h3>
                </a>

                <a href="https://www.librarything.com/catalog/TheOfficialShocker" target="_blank" class="glass p-8 rounded-[2rem] flex flex-col items-center justify-center text-center aspect-square group reveal transition-transform hover:scale-105">
                    <i class="fa-solid fa-book text-4xl mb-4 text-gray-500 group-hover:text-accent2 transition-colors"></i>
                    <h3 class="font-display text-xl font-bold">Reading</h3>
                    <p class="text-xs text-gray-500 mt-2 font-mono hidden md:block">Personal Catalog</p>
                </a>

                <div class="glass p-8 rounded-[2rem] flex flex-col items-center justify-center text-center aspect-square group reveal transition-transform hover:scale-105">
                    <i class="fa-solid fa-tree text-4xl mb-4 text-gray-500 group-hover:text-[#4ade80] transition-colors"></i>
                    <h3 class="font-display text-xl font-bold">Nature Activities</h3>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <footer class="py-12 border-t border-white/10 px-8 md:px-16 text-center md:text-left flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-display font-bold text-2xl tracking-tighter">LD.</div>
            
            <div class="flex gap-6 text-xl z-10">
                <a href="https://linkedin.com/in/lorenzodeluca" target="_blank" title="LinkedIn" class="text-gray-500 hover:text-white transition-colors"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/lorenzodeluca" target="_blank" title="GitHub" class="text-gray-500 hover:text-white transition-colors"><i class="fa-brands fa-github"></i></a>
                <a href="https://gitlab.com/lorenzodeluca" target="_blank" title="GitLab" class="text-gray-500 hover:text-white transition-colors"><i class="fa-brands fa-gitlab"></i></a>
                <a href="https://stackoverflow.com/users/9441578/lorenzo?tab=profile" target="_blank" title="StackOverflow" class="text-gray-500 hover:text-white transition-colors"><i class="fa-brands fa-stack-overflow"></i></a>
                <a href="https://www.hackthebox.com/home/users/profile/79745" target="_blank" title="HackTheBox" class="text-gray-500 hover:text-[#9fe016] transition-colors"><i class="fa-solid fa-cube"></i></a>
                <button onclick="openTerminal()" class="text-gray-500 hover:text-accent2 transition-colors ml-2" title="Open Terminal"><i class="fa-solid fa-terminal"></i></button>
            </div>

            <div class="font-mono text-xs text-gray-600 uppercase tracking-widest flex gap-4 z-10">
                <a href="/privacy" class="hover:text-accent transition-colors">Privacy Policy</a>
                <span>&copy; 2026 L. De Luca</span>
            </div>
        </footer>
    </main>

    <!-- Hidden Terminal Easter Egg -->
    <div id="terminal-overlay" class="fixed inset-0 z-[100] bg-dark/95 hidden flex-col justify-center items-center p-4 md:p-8 backdrop-blur-md opacity-0 transition-opacity duration-300">
        <div class="w-full max-w-4xl bg-[#1e1e1e] rounded-xl border border-gray-700 shadow-2xl overflow-hidden font-mono text-sm flex flex-col h-[60vh]">
            
            <!-- Terminal Header -->
            <div class="bg-[#323233] px-4 py-3 flex justify-between items-center border-b border-gray-700">
                <div class="flex gap-2">
                    <div class="w-3 h-3 rounded-full bg-[#ff5f56] cursor-pointer" onclick="closeTerminal()"></div>
                    <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                    <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                </div>
                <div class="text-gray-400 text-xs">lorenzo@deluca: ~/archives</div>
                <div class="w-16"></div>
            </div>

            <!-- Terminal Body -->
            <div class="p-6 text-gray-300 flex-1 overflow-y-auto" id="terminal-body" onclick="document.getElementById('term-input').focus()">
                <div id="term-output"></div>
                <div class="flex items-center mt-2">
                    <span class="text-accent2 mr-2">lorenzo@deluca:~/archives$</span>
                    <input type="text" id="term-input" class="bg-transparent border-none outline-none text-white flex-1 caret-white" autocomplete="off" autofocus>
                </div>
            </div>
        </div>
        <p class="text-gray-500 font-mono text-xs mt-4">Type 'help' to begin. Press ESC or click the red dot to close.</p>
    </div>

    <!-- External Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>
</html>