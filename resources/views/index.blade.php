<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prism - Automated Press Release Distribution & SEO Backlinks</title>
    <meta name="description"
        content="Boost your Domain Authority (DA) with Prism. The #1 automated press release distribution service for SEO, GEO, and high-quality backlinks on Google News, Yahoo Finance, and 500+ outlets.">
    <meta name="keywords"
        content="press release distribution, buy backlinks, high DA backlinks, SEO services, Generative Engine Optimization, GEO, white label press release, crypto PR">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-black': '#05050a', /* Deep Space Black */
                        'brand-dark': '#0a0a12',
                        'brand-blue': '#00ffff', /* Electric Blue */
                        'brand-blue-hover': '#00cccc',
                        'neon-pink': '#ff00ff',
                        'glass-bg': 'rgba(15, 15, 25, 0.7)',
                        'glass-border': 'rgba(0, 255, 255, 0.2)',
                    },
                    fontFamily: {
                        sans: ['Rajdhani', 'sans-serif'],
                        display: ['Orbitron', 'sans-serif'],
                    },
                    boxShadow: {
                        'neon-blue': '0 0 10px rgba(0, 255, 255, 0.5), 0 0 20px rgba(0, 255, 255, 0.3)',
                        'neon-pink': '0 0 10px rgba(255, 0, 255, 0.5), 0 0 20px rgba(255, 0, 255, 0.3)',
                    },
                    animation: {
                        'scroll': 'scroll 40s linear infinite',
                        'flicker': 'flicker 2s infinite',
                    },
                    keyframes: {
                        scroll: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        flicker: {
                            '0%, 19%, 21%, 23%, 25%, 54%, 56%, 100%': { opacity: 1 },
                            '20%, 24%, 55%': { opacity: 0.7 },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Rajdhani', sans-serif;
            background-color: #05050a;
            color: #e0e0e0;
            overflow-x: hidden;
            background-image:
                linear-gradient(rgba(0, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hover\:pause:hover {
            animation-play-state: paused;
        }

        html {
            scroll-behavior: smooth;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #05050a;
        }

        ::-webkit-scrollbar-thumb {
            background: #00ffff;
            border-radius: 4px;
            box-shadow: 0 0 10px #00ffff;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #ff00ff;
            box-shadow: 0 0 10px #ff00ff;
        }

        details>summary {
            list-style: none;
        }

        details>summary::-webkit-details-marker {
            display: none;
        }

        /* Table Styling */
        .pricing-table th,
        .pricing-table td {
            padding: 1rem;
            border-bottom: 1px solid rgba(0, 255, 255, 0.1);
            color: #ccc;
        }

        .pricing-table tr:last-child td {
            border-bottom: none;
        }

        .glass-card {
            background: rgba(15, 15, 25, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 255, 255, 0.2);
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            border-color: #ff00ff;
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.4);
        }

        .text-glow {
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.5), 0 0 10px rgba(0, 255, 255, 0.5);
        }

        .text-glow-pink {
            text-shadow: 0 0 5px rgba(255, 0, 255, 0.5), 0 0 10px rgba(255, 0, 255, 0.8);
        }

        .neon-border {
            position: relative;
            overflow: hidden;
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.4), inset 0 0 10px rgba(0, 255, 255, 0.2);
            border: 1px solid #00ffff;
        }

        .neon-border:hover {
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.6), inset 0 0 10px rgba(255, 0, 255, 0.3);
            border-color: #ff00ff;
            animation: flicker 1.5s infinite alternate;
        }
    </style>
</head>

<body class="antialiased selection:bg-neon-pink selection:text-white">

    <nav class="fixed w-full z-50 transition-all duration-300 border-b border-brand-blue/20 bg-brand-black/90 backdrop-blur-md shadow-[0_0_15px_rgba(0,255,255,0.1)]"
        id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <div class="flex-shrink-0 flex items-center cursor-pointer">
                    <!-- Logo Image -->
                    <img src="{{ asset('Images/prism_logo_v2.png') }}" alt="Prism Media Hub"
                        class="h-24 w-auto object-contain">
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#how-it-works"
                        class="text-sm font-medium text-gray-300 hover:text-brand-blue hover:text-glow transition-all duration-300 font-display tracking-wide uppercase">How
                        it Works</a>
                    <a href="#features"
                        class="text-sm font-medium text-gray-300 hover:text-brand-blue hover:text-glow transition-all duration-300 font-display tracking-wide uppercase">SEO
                        Features</a>
                    <a href="#case-studies"
                        class="text-sm font-medium text-gray-300 hover:text-brand-blue hover:text-glow transition-all duration-300 font-display tracking-wide uppercase">Results</a>
                    <a href="#pricing"
                        class="text-sm font-medium text-gray-300 hover:text-brand-blue hover:text-glow transition-all duration-300 font-display tracking-wide uppercase">Pricing</a>
                </div>

                <div class="hidden md:block">
                    <a href="#pricing"
                        class="group relative inline-flex items-center justify-center px-6 py-2.5 text-sm font-bold text-brand-black transition-all duration-200 bg-brand-blue font-display tracking-widest uppercase clip-path-polygon hover:bg-white hover:text-neon-pink shadow-[0_0_20px_rgba(0,255,255,0.5)] hover:shadow-[0_0_30px_rgba(255,0,255,0.6)]">
                        Get Started
                        <i class="fas fa-bolt ml-2 group-hover:animate-pulse"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="relative min-h-screen flex flex-col justify-center items-center overflow-hidden">

        <div class="absolute inset-0 z-0">
            <!-- Scanline Overlay -->
            <div class="absolute inset-0 z-20 pointer-events-none"
                style="background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06)); background-size: 100% 2px, 3px 100%; opacity: 0.15;">
            </div>

            <video autoplay loop muted playsinline class="w-full h-full object-cover"
                style="filter: contrast(120%) brightness(80%) hue-rotate(180deg) saturate(1.2);">
                <source src="{{ asset('Images/hero-video.mp4') }}" type="video/mp4">
                <img src="{{ asset('Images/hero-fallback.jpg') }}" alt="Hero Background"
                    class="w-full h-full object-cover">
            </video>

            <div class="absolute inset-0 bg-brand-black/80"></div>
            <!-- Vignette -->
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(5,5,10,0.8)_100%)]">
            </div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-brand-blue/30 bg-brand-blue/10 text-brand-blue text-xs font-bold uppercase tracking-[0.2em] mb-8 backdrop-blur-sm animate-fade-in-up shadow-[0_0_15px_rgba(0,255,255,0.2)]">
                <span class="w-2 h-2 rounded-full bg-brand-blue shadow-[0_0_10px_#00ffff] animate-pulse"></span>
                New: DeepSeek & ChatGPT Indexing
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white tracking-tighter leading-none mb-6 animate-fade-in-up font-display"
                style="animation-delay: 0.1s; text-shadow: 0 0 10px rgba(0,255,255,0.5);">
                ESTABLISH DOMINANCE ON <br>
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue via-white to-neon-pink animate-gradient-x"
                    style="text-shadow: 0 0 20px rgba(0,255,255,0.4);">GOOGLE & GENERATIVE AI</span>
            </h1>

            <p class="mt-8 text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed animate-fade-in-up font-light tracking-wide"
                style="animation-delay: 0.2s;">
                Asia's Premier Reputation Infrastructure. <span class="text-brand-blue font-bold">Precision-Engineered
                    Narratives.</span>
                <br class="hidden md:block">
                Amplify SEO Authority and Secure Strategic Citations across <span
                    class="text-neon-pink font-bold">ChatGPT, Gemini, and Next-Gen Models</span>.
            </p>

            <div class="mt-12 flex flex-col sm:flex-row gap-6 justify-center animate-fade-in-up"
                style="animation-delay: 0.3s;">
                <a href="#pricing"
                    class="relative inline-flex items-center justify-center px-10 py-5 text-lg font-bold text-brand-black transition-all duration-300 bg-brand-blue clip-path-polygon hover:bg-white hover:text-neon-pink shadow-[0_0_30px_rgba(0,255,255,0.4)] hover:shadow-[0_0_50px_rgba(255,0,255,0.6)] group font-display tracking-widest uppercase">
                    Get My Blue Plan
                    <div
                        class="absolute inset-0 bg-white/20 group-hover:translate-x-full duration-500 transition-transform skew-x-12 opacity-50">
                    </div>
                </a>
                <a href="#how-it-works"
                    class="relative inline-flex items-center justify-center px-10 py-5 text-lg font-bold text-brand-blue transition-all duration-300 bg-transparent border border-brand-blue clip-path-polygon hover:bg-brand-blue/10 hover:text-white hover:border-white hover:shadow-[0_0_20px_rgba(0,255,255,0.3)] font-display tracking-widest uppercase backdrop-blur-md">
                    <i class="fas fa-play mr-3 text-xs"></i> See Results
                </a>
            </div>

        </div>
    </section>

    <style>
        /* Custom Animations */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            opacity: 0;
            /* Initially hidden */
            animation: fadeInUp 0.8s ease-out forwards;
        }

        @keyframes writing {
            0% {
                transform: rotate(0deg) translate(0, 0);
            }

            25% {
                transform: rotate(-2deg) translate(-1px, 1px);
            }

            50% {
                transform: rotate(2deg) translate(1px, -1px);
            }

            75% {
                transform: rotate(-1deg) translate(-1px, 0);
            }

            100% {
                transform: rotate(0deg) translate(0, 0);
            }
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes float-soft {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        .animate-writing {
            animation: writing 2s ease-in-out infinite;
        }

        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }

        .animate-float-soft {
            animation: float-soft 3s ease-in-out infinite;
        }
    </style>
    <section class="bg-[#080814] border-y border-brand-blue/20 py-48 overflow-hidden relative">
        <div
            class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10">
        </div>
        <!-- Subtle glow behind logos -->
        <div
            class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(0,255,255,0.06)_0%,transparent_70%)] pointer-events-none">
        </div>
        <div class="max-w-7xl mx-auto px-4 mb-16 text-center relative z-10" data-aos="fade-up">
            <p class="text-xl font-bold text-brand-blue uppercase tracking-[0.3em] font-display text-glow">FEATURED
                ACROSS GLOBAL AUTHORITY NETWORKS
            </p>
        </div>
        <div class="relative w-full overflow-hidden">
            <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-[#080814] to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-[#080814] to-transparent z-10"></div>
            <div class="relative w-full overflow-hidden">
                <div class="relative w-full overflow-hidden">
                    <!-- Desktop Scroll: w-max = natural width, translateX(-50%) loops seamlessly -->
                    <div class="hidden md:flex w-max animate-scroll hover:pause">
                        @php
                            $logos = ['1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '8.png', 'BOSS (1).png', '未命名的设计 (1) (1).png', '未命名的设计 (9).png', '未命名的设计 (10).png', '未命名的设计 (12).png', '未命名的设计 (13).png', '未命名的设计 (14).png'];
                        @endphp
                        {{-- Two identical sets for infinite loop --}}
                        @foreach([1, 2] as $set)
                            <div class="flex items-center">
                                @foreach($logos as $logo)
                                    <div class="flex items-center justify-center mx-10" style="min-width:160px;">
                                        <img src="{{ asset('Images/' . $logo) }}"
                                            class="h-20 max-h-20 w-auto max-w-[150px] object-contain transition-all duration-300 hover:scale-110"
                                            style="filter: brightness(1.8) contrast(1.1);" alt="Logo">
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <!-- Mobile Grid: 2 cols, fixed-width slots -->
                    <div class="grid grid-cols-2 gap-6 md:hidden px-6 py-4 justify-items-center items-center">
                        @foreach($logos as $logo)
                            <div class="flex items-center justify-center" style="min-width:130px; min-height:80px;">
                                <img src="{{ asset('Images/' . $logo) }}" class="h-16 max-w-[130px] w-auto object-contain"
                                    style="filter: brightness(1.8) contrast(1.1);" alt="Logo">
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="how-it-works" class="py-24 bg-brand-black relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div
                class="absolute top-[10%] left-[-5%] w-96 h-96 bg-brand-blue/10 rounded-full blur-[100px] opacity-30 animate-pulse">
            </div>
            <div class="absolute bottom-[10%] right-[-5%] w-96 h-96 bg-neon-pink/10 rounded-full blur-[100px] opacity-30 animate-pulse"
                style="animation-delay: 2s;"></div>
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <span
                    class="inline-block px-4 py-1.5 rounded-full border border-brand-blue/30 bg-brand-blue/10 text-brand-blue text-xs font-bold tracking-[0.2em] uppercase mb-6 shadow-[0_0_10px_rgba(0,255,255,0.2)]">
                    The Process
                </span>
                <h2 class="text-3xl md:text-5xl font-black text-white tracking-wide font-display">
                    How We Amplify <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-neon-pink text-glow">Your
                        Presence</span>
                </h2>
            </div>

            <div class="space-y-8 relative">
                <!-- Vertical Line -->
                <div
                    class="absolute left-[28px] top-8 bottom-8 w-0.5 bg-gradient-to-b from-brand-blue/20 via-brand-blue/10 to-transparent hidden md:block">
                </div>

                <!-- Step 1 -->
                <div class="relative flex flex-col md:flex-row gap-8 items-center md:items-start group"
                    data-aos="fade-up">
                    <div class="hidden md:flex flex-col items-center z-10">
                        <div
                            class="w-14 h-14 rounded-2xl bg-brand-dark border border-brand-blue/30 flex items-center justify-center text-brand-blue text-xl font-bold relative group-hover:scale-110 transition duration-500 shadow-[0_0_15px_rgba(0,255,255,0.3)]">
                            01
                            <div
                                class="absolute inset-0 bg-brand-blue/20 rounded-2xl animate-ping opacity-0 group-hover:opacity-100 transition">
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 glass-card rounded-3xl p-8 hover:border-neon-pink text-center md:text-left">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                            <div class="p-3 bg-brand-blue/10 rounded-xl text-brand-blue border border-brand-blue/20">
                                <i class="fas fa-pen-fancy text-2xl drop-shadow-[0_0_5px_rgba(0,255,255,0.8)]"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3 leading-tight font-display">
                                    <span class="text-brand-blue">Prism</span> Writes and publishes your <span
                                        class="text-neon-pink">Business
                                        Content</span> on <span
                                        class="text-white border-b border-brand-blue/50">Authority Platforms</span>.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative flex flex-col md:flex-row gap-8 items-center md:items-start group"
                    data-aos="fade-up" data-aos-delay="150">
                    <div class="hidden md:flex flex-col items-center z-10">
                        <div
                            class="w-14 h-14 rounded-2xl bg-brand-dark border border-brand-blue/30 flex items-center justify-center text-brand-blue text-xl font-bold relative group-hover:scale-110 transition duration-500 shadow-[0_0_15px_rgba(0,255,255,0.3)]">
                            02
                            <div
                                class="absolute inset-0 bg-brand-blue/20 rounded-2xl animate-ping opacity-0 group-hover:opacity-100 transition">
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 glass-card rounded-3xl p-8 hover:border-neon-pink text-center md:text-left">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                            <div class="p-3 bg-brand-blue/10 rounded-xl text-brand-blue border border-brand-blue/20">
                                <i class="fas fa-search text-2xl drop-shadow-[0_0_5px_rgba(0,255,255,0.8)]"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3 leading-tight font-display">
                                    Appears on <span class="text-white">Google</span>, <span
                                        class="text-neon-pink">ChatGPT</span>, <span
                                        class="text-brand-blue">DeepSeek</span> and other <span
                                        class="font-bold text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-purple-500">AI
                                        Engines</span>.
                                </h3>
                                <div class="flex flex-wrap justify-center md:justify-start gap-3 mt-4">
                                    <span
                                        class="flex items-center gap-1 text-xs font-bold text-gray-300 bg-white/5 px-2 py-1 rounded-lg border border-white/10"><i
                                            class="fab fa-google text-brand-blue"></i> Google News</span>
                                    <span
                                        class="flex items-center gap-1 text-xs font-bold text-gray-300 bg-white/5 px-2 py-1 rounded-lg border border-white/10"><i
                                            class="fas fa-robot text-neon-pink"></i> ChatGPT</span>
                                    <span
                                        class="flex items-center gap-1 text-xs font-bold text-gray-300 bg-white/5 px-2 py-1 rounded-lg border border-white/10"><i
                                            class="fas fa-brain text-purple-400"></i> Claude</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative flex flex-col md:flex-row gap-8 items-center md:items-start group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="hidden md:flex flex-col items-center z-10">
                        <div
                            class="w-14 h-14 rounded-2xl bg-brand-dark border border-brand-blue/30 flex items-center justify-center text-brand-blue text-xl font-bold relative group-hover:scale-110 transition duration-500 shadow-[0_0_15px_rgba(0,255,255,0.3)]">
                            03
                            <div
                                class="absolute inset-0 bg-brand-blue/20 rounded-2xl animate-ping opacity-0 group-hover:opacity-100 transition">
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 glass-card rounded-3xl p-8 hover:border-neon-pink text-center md:text-left">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                            <div class="p-3 bg-brand-blue/10 rounded-xl text-brand-blue border border-brand-blue/20">
                                <i class="fas fa-rocket text-2xl drop-shadow-[0_0_5px_rgba(0,255,255,0.8)]"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3 leading-tight font-display">
                                    Boosting your <span class="text-brand-blue text-glow">Domain Authority</span> and
                                    driving
                                    <span class="text-white border-b border-brand-blue/50">Organic
                                        Traffic</span>
                                    while you sleep.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('partials.features_soro')
    <section class="py-24 bg-[#05050a] relative overflow-hidden">
        <!-- Radial Gradient Overlay -->
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_right,_rgba(0,255,255,0.15)_0%,_transparent_70%)] pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 flex flex-col lg:flex-row items-center gap-16 relative z-10">
            <!-- Left Side: Text Content -->
            <div class="lg:w-1/2" data-aos="fade-right">
                <div
                    class="inline-block px-4 py-1.5 border border-brand-blue text-brand-blue bg-brand-blue/10 shadow-[0_0_10px_rgba(0,255,255,0.5)] rounded-full text-xs font-bold tracking-wide uppercase mb-6">
                    COMPETITIVE ADVANTAGE</div>
                <h3 class="text-3xl md:text-5xl font-extrabold text-white mb-6 font-display tracking-wide"
                    style="text-shadow: 0 0 10px #00ffff;">PROPRIETARY "NEURAL SPLIT" ARCHITECTURE</h3>
                <p class="text-lg text-gray-400 leading-relaxed mb-8">
                    Eliminate redundancy penalties. Our system generates unique cryptographic variations of your
                    narrative for every outlet, ensuring 100% search engine indexation and unique value attribution.
                </p>
                <div class="p-6 rounded-xl border-l-4 border-neon-pink backdrop-blur-md relative overflow-hidden"
                    style="background: rgba(255, 0, 255, 0.05); box-shadow: 0 0 20px rgba(255, 0, 255, 0.2);">
                    <p class="font-bold text-white shadow-[0_0_5px_rgba(255,0,255,0.5)]">100% Satisfaction Guarantee</p>
                    <p class="text-gray-300 mt-1">If your article isn't published, you get a full refund. Zero risk.
                    </p>
                </div>
            </div>

            <!-- Right Side: Visuals -->
            <div class="lg:w-1/2" data-aos="fade-left">
                <div class="flex gap-4">
                    <div
                        class="w-1/2 bg-brand-black/50 p-2 rounded-2xl border border-brand-blue/30 shadow-[0_0_30px_rgba(0,255,255,0.3)] -rotate-1 hover:rotate-0 transition duration-500 backdrop-blur-sm group hover:scale-105">
                        <img src="{{ asset('Images/trader110_mockup.jpg') }}" alt="Trader110 Mockup"
                            class="rounded-xl w-full h-full object-cover">
                    </div>
                    <div
                        class="w-1/2 bg-brand-black/50 p-2 rounded-2xl border border-brand-blue/30 shadow-[0_0_30px_rgba(0,255,255,0.3)] rotate-1 hover:rotate-0 transition duration-500 backdrop-blur-sm group hover:scale-105">
                        <img src="{{ asset('Images/invest70_mockup.png') }}" alt="Invest70 Mockup"
                            class="rounded-xl w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose" class="py-24 bg-brand-black text-white relative border-t border-brand-blue/10">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-4xl font-black sm:text-5xl font-display tracking-widest uppercase text-glow">Why Choose
                    <span class="text-brand-blue">Prism</span>?
                </h2>
                <p class="mt-4 text-xl text-gray-400 font-light tracking-wide">Optimized for <span
                        class="text-white">Google Rankings (SEO)</span> and <span class="text-white">AI Visibility
                        (GEO)</span>.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="0">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-dark rounded-xl flex items-center justify-center border border-brand-blue/30 text-brand-blue text-2xl shadow-[0_0_10px_rgba(0,255,255,0.2)] group-hover:bg-brand-blue group-hover:text-brand-black transition-all duration-300">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 font-display uppercase tracking-wider text-white group-hover:text-brand-blue transition-colors">
                            SEO & GEO Experts</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">Rank on Google and get cited by AI
                            (ChatGPT/Perplexity) through our <strong class="text-neon-pink">Generative Engine
                                Optimization</strong> strategies.
                        </p>
                    </div>
                </div>

                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-dark rounded-xl flex items-center justify-center border border-brand-blue/30 text-brand-blue text-2xl shadow-[0_0_10px_rgba(0,255,255,0.2)] group-hover:bg-brand-blue group-hover:text-brand-black transition-all duration-300">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 font-display uppercase tracking-wider text-white group-hover:text-brand-blue transition-colors">
                            High DA Outlets</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">We publish on sites with high Domain Authority
                            (DA), ensuring valuable backlinks that boost your site's reputation.</p>
                    </div>
                </div>

                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-dark rounded-xl flex items-center justify-center border border-brand-blue/30 text-brand-blue text-2xl shadow-[0_0_10px_rgba(0,255,255,0.2)] group-hover:bg-brand-blue group-hover:text-brand-black transition-all duration-300">
                            <i class="fas fa-pen-nib"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 font-display uppercase tracking-wider text-white group-hover:text-brand-blue transition-colors">
                            Professional PR Writing</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">Our team crafts SEO-optimized news stories
                            designed to drive interest, engagement, and click-throughs.</p>
                    </div>
                </div>

                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-dark rounded-xl flex items-center justify-center border border-brand-blue/30 text-brand-blue text-2xl shadow-[0_0_10px_rgba(0,255,255,0.2)] group-hover:bg-brand-blue group-hover:text-brand-black transition-all duration-300">
                            <i class="fas fa-certificate"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 font-display uppercase tracking-wider text-white group-hover:text-brand-blue transition-colors">
                            "As Seen On" Trust Badge</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">Build instant trust and conversion rates on
                            your website by displaying our authorized media badges.</p>
                    </div>
                </div>

                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-dark rounded-xl flex items-center justify-center border border-brand-blue/30 text-brand-blue text-2xl shadow-[0_0_10px_rgba(0,255,255,0.2)] group-hover:bg-brand-blue group-hover:text-brand-black transition-all duration-300">
                            <i class="fas fa-headset"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 font-display uppercase tracking-wider text-white group-hover:text-brand-blue transition-colors">
                            Helpful Support</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">50+ Support Guides and Priority Live Chat
                            support to help you manage your brand's reputation.</p>
                    </div>
                </div>

                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-dark rounded-xl flex items-center justify-center border border-brand-blue/30 text-brand-blue text-2xl shadow-[0_0_10px_rgba(0,255,255,0.2)] group-hover:bg-brand-blue group-hover:text-brand-black transition-all duration-300">
                            <i class="fas fa-file-alt"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 font-display uppercase tracking-wider text-white group-hover:text-brand-blue transition-colors">
                            White Label Reports</h4>
                        <p class="text-gray-400 text-sm leading-relaxed">Perfect for agencies. Get unbranded reports
                            with all live backlinks to share directly with your clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('includes.home_content')

    @include('includes.footer')

</body>

</html>