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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-purple': '#221A31', /* Deep Purple */
                        'brand-orange': '#f97316', /* Vibrant Orange */
                        'brand-white': '#ffffff',  /* Pure White */
                        'glass-bg': 'rgba(34, 26, 49, 0.9)',
                        'glass-border': 'rgba(255, 255, 255, 0.06)',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'subtle': '0 8px 20px rgba(15, 23, 42, 0.06)',
                        'card': '0 18px 45px rgba(15, 23, 42, 0.08)',
                    },
                    animation: {
                        'scroll': 'scroll 40s linear infinite',
                    },
                    keyframes: {
                        scroll: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                    },
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: #111827;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            letter-spacing: -0.025em;
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
            background: #221A31;
        }

        ::-webkit-scrollbar-thumb {
            background: #362B4D;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #4B3C69;
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
            border-bottom: 1px solid rgba(148, 163, 184, 0.25);
            color: #4b5563;
        }

        .pricing-table tr:last-child td {
            border-bottom: none;
        }

        .modern-card {
            background: #ffffff;
            border: 1px solid rgba(148, 163, 184, 0.25);
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
            transition: all 0.3s ease;
        }

        .modern-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
            border-color: rgba(148, 163, 184, 0.45);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(148, 163, 184, 0.25);
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12);
            border-color: rgba(148, 163, 184, 0.45);
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
            animation: fadeInUp 0.8s ease-out forwards;
        }

        /* Context-Aware Logo Rendering */
        .brand-logo {
            mix-blend-mode: screen !important;
        }

        .bg-brand-white .brand-logo,
        .bg-white .brand-logo {
            mix-blend-mode: normal !important;
            filter: brightness(0) invert(13%) sepia(18%) saturate(1518%) hue-rotate(216deg) brightness(92%) contrast(91%) !important;
        }
    </style>
</head>

<body class="antialiased selection:bg-brand-orange selection:text-brand-white">

    <nav class="fixed w-full z-50 transition-all duration-300 border-b border-brand-white/10 bg-brand-purple/90 backdrop-blur-sm shadow-sm"
        id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <div class="flex-shrink-0 flex items-center cursor-pointer bg-transparent border-0 shadow-none">
                    <!-- Logo Image -->
                    <img src="{{ asset('Images/prism_media_logo_FA-02.png') }}" alt="Prism Media Hub"
                        class="brand-logo bg-transparent border-0 shadow-none h-32 w-auto object-contain">
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#how-it-works"
                        class="text-sm font-medium text-brand-white/80 hover:text-brand-orange transition-all duration-300 tracking-wide">How
                        it Works</a>
                    <a href="#features"
                        class="text-sm font-medium text-brand-white/80 hover:text-brand-orange transition-all duration-300 tracking-wide">SEO
                        Features</a>
                    <a href="#case-studies"
                        class="text-sm font-medium text-brand-white/80 hover:text-brand-orange transition-all duration-300 tracking-wide">Results</a>
                    <a href="#pricing"
                        class="text-sm font-medium text-brand-white/80 hover:text-brand-orange transition-all duration-300 tracking-wide">Pricing</a>
                </div>

                <div class="hidden md:block">
                    <a href="#pricing"
                        class="group relative inline-flex items-center justify-center px-6 py-2.5 text-sm font-bold text-brand-purple transition-all duration-200 bg-brand-orange rounded-md hover:bg-brand-orange/90 shadow-md">
                        Get Started
                        <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="relative min-h-screen flex flex-col justify-center items-center overflow-hidden bg-brand-purple">

        <div class="absolute inset-0 z-0">
            <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-70">
                <source src="{{ asset('Images/hero-video.mp4') }}" type="video/mp4">
                <img src="{{ asset('Images/hero-fallback.jpg') }}" alt="Hero Background"
                    class="w-full h-full object-cover">
            </video>

            <div class="absolute inset-0 bg-brand-purple/70"></div>
            <!-- Vignette: keep edges darker so text stays readable, center clearer for video -->
            <div
                class="absolute inset-0 bg-[radial-gradient(ellipse_80%_80%_at_50%_50%,transparent_0%,rgba(34,26,49,0.7)_70%,#221A31_100%)]">
            </div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-brand-white/10 bg-brand-white/5 text-brand-white/80 text-xs font-semibold tracking-wider mb-8 backdrop-blur-sm animate-fade-in-up">
                <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
                New: DeepSeek & ChatGPT Indexing
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-brand-white tracking-tight leading-tight mb-6 animate-fade-in-up"
                style="animation-delay: 0.1s;">
                ESTABLISH DOMINANCE ON <br>
                <span class="text-brand-white">GOOGLE & GENERATIVE AI</span>
            </h1>

            <p class="mt-8 text-xl md:text-2xl text-brand-white/80 max-w-3xl mx-auto leading-relaxed animate-fade-in-up font-normal"
                style="animation-delay: 0.2s;">
                Asia's Premier Reputation Infrastructure. <span
                    class="text-brand-white font-medium">Precision-Engineered
                    Narratives.</span>
                <br class="hidden md:block">
                Amplify SEO Authority and Secure Strategic Citations across <span
                    class="text-brand-white font-medium">ChatGPT, Gemini, and Next-Gen Models</span>.
            </p>

            <div class="mt-12 flex flex-col sm:flex-row gap-6 justify-center animate-fade-in-up"
                style="animation-delay: 0.3s;">
                <a href="#pricing"
                    class="relative inline-flex items-center justify-center px-10 py-4 text-lg font-bold text-brand-purple transition-all duration-300 bg-brand-orange rounded-lg hover:bg-brand-orange/90 shadow-lg hover:shadow-xl hover:-translate-y-1">
                    Get My Plan
                </a>
                <a href="#how-it-works"
                    class="relative inline-flex items-center justify-center px-10 py-4 text-lg font-bold text-brand-white transition-all duration-300 bg-transparent border border-brand-white/20 rounded-lg hover:bg-brand-white/5 hover:border-brand-white/40">
                    <i class="fas fa-play mr-3 text-xs"></i> See Results
                </a>
            </div>

        </div>
    </section>

    <section class="bg-brand-white border-y border-brand-purple/10 py-32 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 mb-16 text-center relative z-10" data-aos="fade-up">
            <p class="text-sm font-bold text-brand-purple uppercase tracking-widest">FEATURED
                ACROSS GLOBAL AUTHORITY NETWORKS
            </p>
        </div>
        <div class="relative w-full overflow-hidden">
            <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-brand-white to-transparent z-10">
            </div>
            <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-brand-white to-transparent z-10">
            </div>
            <div class="relative w-full overflow-hidden">
                <div class="relative w-full overflow-hidden">
                    <!-- Desktop Scroll: grayscale by default, full color + scale on hover/active -->
                    <div class="hidden md:flex w-max animate-scroll hover:pause">
                        @php
                            $logos = ['1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '8.png', 'BOSS (1).png', '未命名的设计 (1) (1).png', '未命名的设计 (9).png', '未命名的设计 (10).png', '未命名的设计 (12).png', '未命名的设计 (13).png', '未命名的设计 (14).png'];
                        @endphp
                        @foreach([1, 2] as $set)
                            <div class="flex items-center">
                                @foreach($logos as $logo)
                                    <div
                                        class="flex items-center justify-center mx-6 min-w-[180px] h-24 overflow-hidden cursor-pointer group/logo">
                                        <img src="{{ asset('Images/' . $logo) }}"
                                            class="h-20 max-h-20 w-auto max-w-[180px] object-contain transition-transform duration-[0.4s] ease-in-out group-hover/logo:scale-105 group-active/logo:scale-105"
                                            alt="Logo">
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                    <!-- Mobile Grid: same grayscale → color interaction, even spacing, vertically centered -->
                    <div class="grid grid-cols-2 gap-6 md:hidden px-6 py-4 justify-items-center items-center">
                        @foreach($logos as $logo)
                            <div
                                class="flex items-center justify-center min-w-[160px] min-h-[96px] overflow-hidden cursor-pointer group/logo">
                                <img src="{{ asset('Images/' . $logo) }}"
                                    class="h-16 max-w-[160px] w-auto object-contain transition-transform duration-[0.4s] ease-in-out group-hover/logo:scale-105 group-active/logo:scale-105"
                                    alt="Logo">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="py-24 bg-brand-purple relative overflow-hidden">

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <span
                    class="inline-block px-4 py-1.5 rounded-full border border-brand-orange/30 bg-brand-orange/10 text-brand-orange text-xs font-bold tracking-wider uppercase mb-6">
                    The Process
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-brand-white tracking-tight">
                    How We Amplify <span class="text-brand-orange">Your Presence</span>
                </h2>
            </div>

            <div class="space-y-8 relative">
                <!-- Vertical Line -->
                <div class="absolute left-[28px] top-8 bottom-8 w-px bg-brand-white/10 hidden md:block">
                </div>

                <!-- Step 1 -->
                <div class="relative flex flex-col md:flex-row gap-8 items-center md:items-start group"
                    data-aos="fade-up">
                    <div class="hidden md:flex flex-col items-center z-10">
                        <div
                            class="w-14 h-14 rounded-full bg-brand-white border border-brand-orange/30 flex items-center justify-center text-brand-orange text-xl font-bold relative group-hover:bg-brand-orange group-hover:border-brand-orange group-hover:text-brand-white transition duration-500 shadow-lg">
                            01
                        </div>
                    </div>
                    <div
                        class="flex-1 bg-brand-white rounded-2xl p-8 hover:border-brand-orange/20 border border-brand-purple/10 text-center md:text-left transition-all shadow-card hover:shadow-subtle">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                            <div
                                class="p-3 bg-brand-orange/10 rounded-xl text-brand-orange border border-brand-orange/20">
                                <i class="fas fa-pen-fancy text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-brand-purple mb-3 leading-tight">
                                    <span class="text-brand-orange">Prism</span> Writes and publishes your <span
                                        class="text-brand-purple">Business Content</span> on <span
                                        class="text-brand-purple border-b border-brand-orange/30">Authority
                                        Platforms</span>.
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
                            class="w-14 h-14 rounded-full bg-brand-white border border-brand-orange/30 flex items-center justify-center text-brand-orange text-xl font-bold relative group-hover:bg-brand-orange group-hover:border-brand-orange group-hover:text-brand-white transition duration-500 shadow-lg">
                            02
                        </div>
                    </div>
                    <div
                        class="flex-1 bg-brand-white rounded-2xl p-8 hover:border-brand-orange/20 border border-brand-purple/10 text-center md:text-left transition-all shadow-card hover:shadow-subtle">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                            <div
                                class="p-3 bg-brand-orange/10 rounded-xl text-brand-orange border border-brand-orange/20">
                                <i class="fas fa-search text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-brand-purple mb-3 leading-tight">
                                    Appears on <span class="text-brand-purple">Google</span>, <span
                                        class="text-brand-purple">ChatGPT</span>, <span
                                        class="text-brand-orange">DeepSeek</span> and other <span
                                        class="font-bold text-brand-purple">AI Engines</span>.
                                </h3>
                                <div class="flex flex-wrap justify-center md:justify-start gap-3 mt-4">
                                    <span
                                        class="flex items-center gap-1 text-xs font-bold text-brand-purple/70 bg-brand-purple/5 px-3 py-1.5 rounded-md border border-brand-purple/10"><i
                                            class="fab fa-google text-brand-orange"></i> Google News</span>
                                    <span
                                        class="flex items-center gap-1 text-xs font-bold text-brand-purple/70 bg-brand-purple/5 px-3 py-1.5 rounded-md border border-brand-purple/10"><i
                                            class="fas fa-robot text-brand-orange"></i> ChatGPT</span>
                                    <span
                                        class="flex items-center gap-1 text-xs font-bold text-brand-purple/70 bg-brand-purple/5 px-3 py-1.5 rounded-md border border-brand-purple/10"><i
                                            class="fas fa-brain text-brand-orange"></i> Claude</span>
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
                            class="w-14 h-14 rounded-full bg-brand-white border border-brand-orange/30 flex items-center justify-center text-brand-orange text-xl font-bold relative group-hover:bg-brand-orange group-hover:border-brand-orange group-hover:text-brand-white transition duration-500 shadow-lg">
                            03
                        </div>
                    </div>
                    <div
                        class="flex-1 bg-brand-white rounded-2xl p-8 hover:border-brand-orange/20 border border-brand-purple/10 text-center md:text-left transition-all shadow-card hover:shadow-subtle">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                            <div
                                class="p-3 bg-brand-orange/10 rounded-xl text-brand-orange border border-brand-orange/20">
                                <i class="fas fa-rocket text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-brand-purple mb-3 leading-tight">
                                    Boosting your <span class="text-brand-orange">Domain Authority</span> and
                                    driving
                                    <span class="text-brand-purple border-b border-brand-orange/30">Organic
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
    <section class="py-24 bg-brand-white relative overflow-hidden">

        <div class="max-w-7xl mx-auto px-4 flex flex-col lg:flex-row items-center gap-16 relative z-10">
            <!-- Left Side: Text Content -->
            <div class="lg:w-1/2" data-aos="fade-right">
                <div
                    class="inline-block px-4 py-1.5 border border-brand-orange/30 text-brand-orange bg-brand-orange/5 rounded-full text-xs font-bold tracking-wider uppercase mb-6">
                    COMPETITIVE ADVANTAGE</div>
                <h3 class="text-3xl md:text-5xl font-bold text-brand-purple mb-6 tracking-tight">PROPRIETARY "NEURAL
                    SPLIT"
                    ARCHITECTURE</h3>
                <p class="text-lg text-brand-purple/80 leading-relaxed mb-8">
                    Eliminate redundancy penalties. Our system generates unique cryptographic variations of your
                    narrative for every outlet, ensuring 100% search engine indexation and unique value attribution.
                </p>
                <div
                    class="p-6 rounded-xl border-l-4 border-brand-orange bg-brand-purple/5 relative overflow-hidden shadow-sm">
                    <p class="font-bold text-brand-purple">100% Satisfaction Guarantee</p>
                    <p class="text-brand-purple/70 mt-1">If your article isn't published, you get a full refund. Zero
                        risk.
                    </p>
                </div>
            </div>

            <!-- Right Side: Visuals -->
            <div class="lg:w-1/2" data-aos="fade-left">
                <div class="flex gap-4">
                    <div
                        class="w-1/2 bg-brand-white p-2 rounded-2xl border border-brand-purple/10 shadow-card -rotate-1 hover:rotate-0 transition duration-500 group hover:scale-105">
                        <img src="{{ asset('Images/trader110_mockup.jpg') }}" alt="Trader110 Mockup"
                            class="rounded-xl w-full h-full object-cover transition duration-500">
                    </div>
                    <div
                        class="w-1/2 bg-brand-white p-2 rounded-2xl border border-brand-purple/10 shadow-card rotate-1 hover:rotate-0 transition duration-500 group hover:scale-105">
                        <img src="{{ asset('Images/invest70_mockup.png') }}" alt="Invest70 Mockup"
                            class="rounded-xl w-full h-full object-cover transition duration-500">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose" class="py-24 bg-brand-purple text-brand-white relative border-t border-brand-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up">
                <h2 class="text-4xl font-bold sm:text-5xl tracking-tight text-brand-white">Why Choose
                    <span class="text-brand-orange">Prism</span>?
                </h2>
                <p class="mt-4 text-xl text-brand-white/80 font-normal tracking-wide">Optimized for <span
                        class="text-brand-white font-bold">Google Rankings (SEO)</span> and <span
                        class="text-brand-white font-bold">AI
                        Visibility
                        (GEO)</span>.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="0">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center border border-brand-white/10 text-brand-orange text-2xl shadow-sm group-hover:bg-brand-orange group-hover:text-brand-white transition-all duration-300">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors">
                            SEO & GEO Experts</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">Rank on Google and get cited by AI
                            (ChatGPT/Perplexity) through our <strong class="text-brand-white">Generative Engine
                                Optimization</strong> strategies.
                        </p>
                    </div>
                </div>

                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center border border-brand-white/10 text-brand-orange text-2xl shadow-sm group-hover:bg-brand-orange group-hover:text-brand-white transition-all duration-300">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors">
                            High DA Outlets</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">We publish on sites with high Domain
                            Authority
                            (DA), ensuring valuable backlinks that boost your site's reputation.</p>
                    </div>
                </div>

                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center border border-brand-white/10 text-brand-orange text-2xl shadow-sm group-hover:bg-brand-orange group-hover:text-brand-white transition-all duration-300">
                            <i class="fas fa-pen-nib"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors">
                            Professional PR Writing</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">Our team crafts SEO-optimized news
                            stories
                            designed to drive interest, engagement, and click-throughs.</p>
                    </div>
                </div>

                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center border border-brand-white/10 text-brand-orange text-2xl shadow-sm group-hover:bg-brand-orange group-hover:text-brand-white transition-all duration-300">
                            <i class="fas fa-certificate"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors">
                            "As Seen On" Trust Badge</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">Build instant trust and conversion
                            rates on
                            your website by displaying our authorized media badges.</p>
                    </div>
                </div>

                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center border border-brand-white/10 text-brand-orange text-2xl shadow-sm group-hover:bg-brand-orange group-hover:text-brand-white transition-all duration-300">
                            <i class="fas fa-headset"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors">
                            Helpful Support</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">50+ Support Guides and Priority Live
                            Chat
                            support to help you manage your brand's reputation.</p>
                    </div>
                </div>

                <div class="flex gap-5 group" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex-shrink-0">
                        <div
                            class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center border border-brand-white/10 text-brand-orange text-2xl shadow-sm group-hover:bg-brand-orange group-hover:text-brand-white transition-all duration-300">
                            <i class="fas fa-file-alt"></i>
                        </div>
                    </div>
                    <div>
                        <h4
                            class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors">
                            White Label Reports</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">Perfect for agencies. Get unbranded
                            reports
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