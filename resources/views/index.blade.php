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


            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-brand-white tracking-tight leading-tight mb-6 animate-fade-in-up"
                style="animation-delay: 0.1s;">
                Asia's #1 Google &amp; <br>
                <span class="text-brand-white">ChatGPT Exposure Expert</span>
            </h1>

            <p class="mt-8 text-xl md:text-2xl text-brand-white/80 max-w-3xl mx-auto leading-relaxed animate-fade-in-up font-normal"
                style="animation-delay: 0.2s;">
                The region's leading authority in <span
                    class="text-brand-white font-medium">Google Search Optimization</span>
                and <span class="text-brand-white font-medium">Generative AI Visibility</span>.
                <br class="hidden md:block">
                Get cited by <span class="text-brand-white font-medium">ChatGPT, Gemini &amp; Perplexity</span> — and seen on Malaysia's biggest LED billboards.
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
                            $logos = ['1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '8.png', 'client_logo_boss.png', 'client_logo_7.png', 'client_logo_9.png', 'client_logo_10.png', 'client_logo_12.png', 'client_logo_13.png', 'client_logo_14.png'];
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

    <!-- ============================================================
         DUAL DOMINANCE — Scheme A: Premium Split-Screen
         Scope: #dd-* selectors only. No global CSS changes.
    ============================================================ -->
    <section id="dual-dominance"
             aria-label="Dual Dominance — Digital AI Visibility and LED Billboard Advertising"
             class="relative overflow-hidden bg-brand-purple py-24 md:py-32">

        <!-- Ambient radial glow -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-purple via-brand-purple/96 to-transparent"></div>
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1100px] h-[650px]
                        bg-[radial-gradient(ellipse_at_center,rgba(249,115,22,0.08)_0%,transparent_68%)]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center mb-16 md:mb-20" data-aos="fade-up">
                <span class="inline-block px-4 py-1.5 rounded-full border border-brand-orange/35
                             bg-brand-orange/10 text-brand-orange text-xs font-bold
                             tracking-widest uppercase mb-6">
                    One Partner. Total Visibility.
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-brand-white tracking-tight leading-tight">
                    Show Up <span class="text-brand-orange">Everywhere</span> That Matters
                </h2>
                <p class="mt-5 text-base md:text-lg text-brand-white/60 max-w-2xl mx-auto leading-relaxed">
                    Dominate <strong class="text-brand-white/90 font-semibold">Google, ChatGPT &amp; Generative AI</strong>
                    search results while grabbing attention on
                    <strong class="text-brand-white/90 font-semibold">Malaysia's busiest highways</strong>
                    — all through a single, unified partnership.
                </p>
            </div>

            <!-- 50/50 Split Grid -->
            <div id="dd-split"
                 class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-14 items-stretch"
                 data-aos="fade-up" data-aos-delay="100">

                <!-- LEFT COLUMN: Unified Text Card -->
                <div id="dd-left"
                     class="rounded-3xl p-8 md:p-10 flex flex-col"
                     style="background:#1e1730;border:1px solid rgba(255,255,255,0.07);
                            box-shadow:0 24px 80px rgba(0,0,0,0.35),inset 0 1px 0 rgba(255,255,255,0.05);">

                    <!-- Block 1: Digital AI Dominance -->
                    <div class="mb-8">
                        <div class="flex items-center gap-2.5 mb-5">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                                 style="background:rgba(249,115,22,0.15);border:1px solid rgba(249,115,22,0.25);">
                                <i class="fas fa-robot text-brand-orange text-xs" aria-hidden="true"></i>
                            </div>
                            <span class="text-brand-orange text-[0.65rem] font-bold tracking-widest uppercase">
                                Digital AI Dominance
                            </span>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-brand-white leading-tight mb-3">
                            Show Up on Google,<br>ChatGPT &amp; Generative AI
                        </h3>
                        <p class="text-brand-white/55 text-sm leading-relaxed mb-6">
                            Your brand becomes a trusted citation across every major AI search engine —
                            from <strong class="text-brand-white/85 font-medium">Google Search Overviews</strong>
                            to <strong class="text-brand-white/85 font-medium">ChatGPT answers</strong>.
                            We engineer your narrative for the LLM era.
                        </p>
                        <div class="flex flex-wrap gap-2" role="list" aria-label="Supported AI Platforms">
                            <span class="dd-badge" role="listitem">
                                <i class="fab fa-google" aria-hidden="true"></i> Google Search
                            </span>
                            <span class="dd-badge" role="listitem">
                                <i class="fas fa-bolt" aria-hidden="true"></i> ChatGPT Citations
                            </span>
                            <span class="dd-badge" role="listitem">
                                <i class="fas fa-brain" aria-hidden="true"></i> Gemini &amp; Perplexity
                            </span>
                            <span class="dd-badge" role="listitem">
                                <i class="fas fa-newspaper" aria-hidden="true"></i> Google News
                            </span>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="border-t" style="border-color:rgba(249,115,22,0.14);"></div>

                    <!-- Block 2: Highway LED Billboards -->
                    <div class="mt-8 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2.5 mb-5">
                                <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0"
                                     style="background:rgba(249,115,22,0.15);border:1px solid rgba(249,115,22,0.25);">
                                    <i class="fas fa-th-large text-brand-orange text-xs" aria-hidden="true"></i>
                                </div>
                                <span class="text-brand-orange text-[0.65rem] font-bold tracking-widest uppercase">
                                    Highway LED Billboards
                                </span>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-brand-white leading-tight mb-3">
                                Malaysia's Busiest Highways.<br>Maximum Impact.
                            </h3>
                            <p class="text-brand-white/55 text-sm leading-relaxed mb-7">
                                High-impact LED billboard campaigns on Malaysia's highest-traffic corridors —
                                capturing <strong class="text-brand-white/85 font-medium">thousands of daily impressions</strong>,
                                day and night, in premium locations that command attention.
                            </p>
                        </div>
                        <!-- Stat boxes -->
                        <div class="grid grid-cols-3 gap-3" role="list" aria-label="Campaign reach statistics">
                            <div class="dd-stat-box" role="listitem">
                                <span class="dd-stat-num">500K+</span>
                                <span class="dd-stat-lbl">Daily Impressions</span>
                            </div>
                            <div class="dd-stat-box" role="listitem">
                                <span class="dd-stat-num">24/7</span>
                                <span class="dd-stat-lbl">Live Display</span>
                            </div>
                            <div class="dd-stat-box" role="listitem">
                                <span class="dd-stat-num">KL &amp; MY</span>
                                <span class="dd-stat-lbl">Prime Locations</span>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END LEFT COLUMN -->

                <!-- RIGHT COLUMN: Triptych LED Photo Gallery -->
                <div id="dd-right"
                     class="rounded-3xl overflow-hidden"
                     style="border:1px solid rgba(255,255,255,0.08);
                            box-shadow:0 24px 80px rgba(0,0,0,0.35);
                            background:#12101d;">
                    <div id="dd-triptych">

                        <!-- Hero image — top 60% -->
                        <div class="dd-hero-img">
                            <img src="{{ asset('Images/billboard_01.png') }}"
                                 alt="High-impact LED billboard displaying BMW X3 at a major Kuala Lumpur intersection — Prism Media Hub Malaysia premium highway advertising"
                                 loading="eager"
                                 decoding="async">
                        </div>

                        <!-- Bottom row — two equal landscape images, 40% -->
                        <div class="dd-bottom-row">
                            <div class="dd-thumb">
                                <img src="{{ asset('Images/billboard_02.png') }}"
                                     alt="LED billboard showcasing Archidex event along KLCC highway Malaysia — Prism Media Hub out-of-home advertising"
                                     loading="lazy"
                                     decoding="async">
                            </div>
                            <div class="dd-thumb">
                                <img src="{{ asset('Images/billboard_03.png') }}"
                                     alt="3D immersive LED night billboard at Kuala Lumpur commercial district — Prism Media Hub premium outdoor advertising"
                                     loading="lazy"
                                     decoding="async">
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END RIGHT COLUMN -->

            </div>
            <!-- END 50/50 SPLIT -->

        </div>


        <!-- Bottom Three Pillars — stays within dark section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-14 pb-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5" data-aos="fade-up" data-aos-delay="150">

                <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/5 border border-white/10
                            hover:border-brand-orange/25 hover:bg-white/[0.08] transition-all duration-300">
                    <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-brand-orange/15 border border-brand-orange/25
                                flex items-center justify-center">
                        <i class="fas fa-chart-line text-brand-orange text-sm" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="font-bold text-brand-white text-sm mb-1">Measurable AI Ranking Lift</p>
                        <p class="text-brand-white/60 text-xs leading-relaxed">Track citations across ChatGPT, Gemini &amp; Google with real data dashboards.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/5 border border-white/10
                            hover:border-brand-orange/25 hover:bg-white/[0.08] transition-all duration-300">
                    <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-brand-orange/15 border border-brand-orange/25
                                flex items-center justify-center">
                        <i class="fas fa-map-marker-alt text-brand-orange text-sm" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="font-bold text-brand-white text-sm mb-1">Premium Billboard Locations</p>
                        <p class="text-brand-white/60 text-xs leading-relaxed">High-footfall highways, city centres &amp; key commercial corridors across Malaysia.</p>
                    </div>
                </div>

                <div class="flex items-start gap-4 p-6 rounded-2xl bg-white/5 border border-white/10
                            hover:border-brand-orange/25 hover:bg-white/[0.08] transition-all duration-300">
                    <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-brand-orange/15 border border-brand-orange/25
                                flex items-center justify-center">
                        <i class="fas fa-handshake text-brand-orange text-sm" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="font-bold text-brand-white text-sm mb-1">One Partner. Zero Complexity.</p>
                        <p class="text-brand-white/60 text-xs leading-relaxed">Digital and physical visibility managed under a single, seamless engagement.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- END DUAL DOMINANCE — Scheme A -->


    {{-- SCOPED CSS — #dd-* and .dd-* only. Zero global impact. --}}
    <style>
        /* Triptych grid */
        #dd-triptych {
            display: grid;
            grid-template-rows: 60% 40%;
            width: 100%;
            height: 100%;
            min-height: 480px;
        }

        /* Hero image slot */
        .dd-hero-img {
            position: relative;
            overflow: hidden;
            border-bottom: 2px solid rgba(249,115,22,0.18);
        }
        .dd-hero-img img {
            width: 100%; height: 100%;
            object-fit: cover; display: block;
            transition: transform 0.7s ease;
        }
        .dd-hero-img:hover img { transform: scale(1.03); }

        /* Bottom thumbnail row */
        .dd-bottom-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .dd-thumb {
            position: relative;
            overflow: hidden;
        }
        .dd-thumb:first-child {
            border-right: 2px solid rgba(249,115,22,0.18);
        }
        .dd-thumb img {
            width: 100%; height: 100%;
            object-fit: cover; display: block;
            transition: transform 0.7s ease;
        }
        .dd-thumb:hover img { transform: scale(1.04); }

        /* Gloss overlay on each image slot */
        .dd-hero-img::after, .dd-thumb::after {
            content: '';
            position: absolute; inset: 0;
            background: linear-gradient(160deg, rgba(255,255,255,0.04) 0%, transparent 50%, rgba(18,16,29,0.20) 100%);
            pointer-events: none;
        }

        /* Platform badges */
        .dd-badge {
            display: inline-flex; align-items: center; gap: 0.3rem;
            font-size: 0.65rem; font-weight: 700;
            padding: 0.3rem 0.65rem; border-radius: 999px;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.10);
            color: rgba(255,255,255,0.72);
            letter-spacing: 0.02em;
        }
        .dd-badge i { color: #f97316; font-size: 0.58rem; }

        /* Stat boxes */
        .dd-stat-box {
            display: flex; flex-direction: column;
            padding: 0.75rem 1rem; border-radius: 12px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.07);
        }
        .dd-stat-num {
            font-size: 1.2rem; font-weight: 900;
            color: #f97316; line-height: 1;
            letter-spacing: -0.02em;
        }
        .dd-stat-lbl {
            font-size: 0.58rem; font-weight: 600;
            text-transform: uppercase; letter-spacing: 0.08em;
            color: rgba(255,255,255,0.38); margin-top: 0.28rem;
        }

        /* Desktop: both columns stretch to same height via grid items-stretch */
        @media (min-width: 1024px) {
            #dd-left  { min-height: 500px; }
            #dd-right { min-height: 500px; }
            #dd-triptych { min-height: 100%; }
        }

        /* Tablet */
        @media (max-width: 1023px) {
            #dd-triptych { min-height: 380px; }
        }

        /* Mobile */
        @media (max-width: 639px) {
            #dd-triptych {
                grid-template-rows: 55% 45%;
                min-height: 320px;
            }
        }
    </style>

    <!-- ── White Separator ─────────────────────────────────── -->
    <div class="bg-white border-t border-b border-brand-purple/8 py-10 md:py-14" aria-hidden="true">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <div class="flex items-center justify-center gap-4">
                <div class="h-px flex-1 bg-gradient-to-r from-transparent to-brand-purple/15"></div>
                <span class="text-brand-purple/30 text-xs font-bold tracking-[0.25em] uppercase select-none">
                    How It Works
                </span>
                <div class="h-px flex-1 bg-gradient-to-l from-transparent to-brand-purple/15"></div>
            </div>
        </div>
    </div>
    <!-- ── /White Separator ─────────────────────────────────── -->

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
                <div class="absolute left-[28px] top-8 bottom-8 w-px bg-brand-white/15 hidden md:block">
                </div>

                <!-- Step 1 -->
                <div class="relative flex flex-col md:flex-row gap-8 items-center md:items-start group"
                    data-aos="fade-up">
                    <div class="hidden md:flex flex-col items-center z-10">
                        <div class="w-14 h-14 rounded-full bg-white/10 backdrop-blur-sm border border-white/20
                                    flex items-center justify-center text-brand-orange text-xl font-bold
                                    group-hover:bg-brand-orange group-hover:border-brand-orange group-hover:text-brand-white
                                    transition-all duration-300 shadow-lg">
                            01
                        </div>
                    </div>
                    <div class="flex-1 rounded-2xl p-8 bg-white/5 backdrop-blur-md border border-white/10
                                text-center md:text-left transition-all duration-300
                                hover:border-brand-orange/30 hover:bg-white/[0.08]
                                hover:shadow-[0_0_30px_rgba(249,115,22,0.10)]">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                            <div class="p-3 bg-brand-orange/10 rounded-xl text-brand-orange border border-brand-orange/20 flex-shrink-0">
                                <i class="fas fa-pen-fancy text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-brand-white mb-3 leading-tight">
                                    <span class="text-brand-orange">Prism</span> Writes and publishes your
                                    <span class="text-brand-white">Business Content</span> on
                                    <span class="text-brand-white border-b border-brand-orange/40">Authority Platforms</span>.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative flex flex-col md:flex-row gap-8 items-center md:items-start group"
                    data-aos="fade-up" data-aos-delay="150">
                    <div class="hidden md:flex flex-col items-center z-10">
                        <div class="w-14 h-14 rounded-full bg-white/10 backdrop-blur-sm border border-white/20
                                    flex items-center justify-center text-brand-orange text-xl font-bold
                                    group-hover:bg-brand-orange group-hover:border-brand-orange group-hover:text-brand-white
                                    transition-all duration-300 shadow-lg">
                            02
                        </div>
                    </div>
                    <div class="flex-1 rounded-2xl p-8 bg-white/5 backdrop-blur-md border border-white/10
                                text-center md:text-left transition-all duration-300
                                hover:border-brand-orange/30 hover:bg-white/[0.08]
                                hover:shadow-[0_0_30px_rgba(249,115,22,0.10)]">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                            <div class="p-3 bg-brand-orange/10 rounded-xl text-brand-orange border border-brand-orange/20 flex-shrink-0">
                                <i class="fas fa-search text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-brand-white mb-3 leading-tight">
                                    Appears on <span class="text-brand-white">Google</span>,
                                    <span class="text-brand-white">ChatGPT</span>,
                                    <span class="text-brand-orange">DeepSeek</span> and other
                                    <span class="font-bold text-brand-white">AI Engines</span>.
                                </h3>
                                <div class="flex flex-wrap justify-center md:justify-start gap-3 mt-4">
                                    <span class="flex items-center gap-1 text-xs font-bold text-brand-white/75
                                                 bg-white/10 px-3 py-1.5 rounded-md border border-white/15">
                                        <i class="fab fa-google text-brand-orange"></i> Google News
                                    </span>
                                    <span class="flex items-center gap-1 text-xs font-bold text-brand-white/75
                                                 bg-white/10 px-3 py-1.5 rounded-md border border-white/15">
                                        <i class="fas fa-robot text-brand-orange"></i> ChatGPT
                                    </span>
                                    <span class="flex items-center gap-1 text-xs font-bold text-brand-white/75
                                                 bg-white/10 px-3 py-1.5 rounded-md border border-white/15">
                                        <i class="fas fa-brain text-brand-orange"></i> Claude
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative flex flex-col md:flex-row gap-8 items-center md:items-start group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="hidden md:flex flex-col items-center z-10">
                        <div class="w-14 h-14 rounded-full bg-white/10 backdrop-blur-sm border border-white/20
                                    flex items-center justify-center text-brand-orange text-xl font-bold
                                    group-hover:bg-brand-orange group-hover:border-brand-orange group-hover:text-brand-white
                                    transition-all duration-300 shadow-lg">
                            03
                        </div>
                    </div>
                    <div class="flex-1 rounded-2xl p-8 bg-white/5 backdrop-blur-md border border-white/10
                                text-center md:text-left transition-all duration-300
                                hover:border-brand-orange/30 hover:bg-white/[0.08]
                                hover:shadow-[0_0_30px_rgba(249,115,22,0.10)]">
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                            <div class="p-3 bg-brand-orange/10 rounded-xl text-brand-orange border border-brand-orange/20 flex-shrink-0">
                                <i class="fas fa-rocket text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-brand-white mb-3 leading-tight">
                                    Boosting your <span class="text-brand-orange">Domain Authority</span> and driving
                                    <span class="text-brand-white border-b border-brand-orange/40">Organic Traffic</span>
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="flex gap-5 group p-5 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10
                            hover:border-brand-orange/25 hover:bg-white/[0.08]
                            hover:shadow-[0_0_25px_rgba(249,115,22,0.10)]
                            transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center
                                    border border-brand-white/10 text-brand-orange text-2xl
                                    group-hover:bg-brand-orange group-hover:text-brand-white
                                    group-hover:shadow-[0_0_20px_rgba(249,115,22,0.30)]
                                    transition-all duration-300">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors duration-300">
                            SEO &amp; GEO Experts</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">Rank on Google and get cited by AI
                            (ChatGPT/Perplexity) through our <strong class="text-brand-white">Generative Engine
                                Optimization</strong> strategies.
                        </p>
                    </div>
                </div>

                <div class="flex gap-5 group p-5 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10
                            hover:border-brand-orange/25 hover:bg-white/[0.08]
                            hover:shadow-[0_0_25px_rgba(249,115,22,0.10)]
                            transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center
                                    border border-brand-white/10 text-brand-orange text-2xl
                                    group-hover:bg-brand-orange group-hover:text-brand-white
                                    group-hover:shadow-[0_0_20px_rgba(249,115,22,0.30)]
                                    transition-all duration-300">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors duration-300">
                            High DA Outlets</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">We publish on sites with high Domain
                            Authority (DA), ensuring valuable backlinks that boost your site's reputation.</p>
                    </div>
                </div>

                <div class="flex gap-5 group p-5 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10
                            hover:border-brand-orange/25 hover:bg-white/[0.08]
                            hover:shadow-[0_0_25px_rgba(249,115,22,0.10)]
                            transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center
                                    border border-brand-white/10 text-brand-orange text-2xl
                                    group-hover:bg-brand-orange group-hover:text-brand-white
                                    group-hover:shadow-[0_0_20px_rgba(249,115,22,0.30)]
                                    transition-all duration-300">
                            <i class="fas fa-pen-nib"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors duration-300">
                            Professional PR Writing</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">Our team crafts SEO-optimized news
                            stories designed to drive interest, engagement, and click-throughs.</p>
                    </div>
                </div>

                <div class="flex gap-5 group p-5 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10
                            hover:border-brand-orange/25 hover:bg-white/[0.08]
                            hover:shadow-[0_0_25px_rgba(249,115,22,0.10)]
                            transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center
                                    border border-brand-white/10 text-brand-orange text-2xl
                                    group-hover:bg-brand-orange group-hover:text-brand-white
                                    group-hover:shadow-[0_0_20px_rgba(249,115,22,0.30)]
                                    transition-all duration-300">
                            <i class="fas fa-certificate"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors duration-300">
                            "As Seen On" Trust Badge</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">Build instant trust and conversion
                            rates on your website by displaying our authorized media badges.</p>
                    </div>
                </div>

                <div class="flex gap-5 group p-5 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10
                            hover:border-brand-orange/25 hover:bg-white/[0.08]
                            hover:shadow-[0_0_25px_rgba(249,115,22,0.10)]
                            transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center
                                    border border-brand-white/10 text-brand-orange text-2xl
                                    group-hover:bg-brand-orange group-hover:text-brand-white
                                    group-hover:shadow-[0_0_20px_rgba(249,115,22,0.30)]
                                    transition-all duration-300">
                            <i class="fas fa-headset"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors duration-300">
                            Helpful Support</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">50+ Support Guides and Priority Live
                            Chat support to help you manage your brand's reputation.</p>
                    </div>
                </div>

                <div class="flex gap-5 group p-5 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10
                            hover:border-brand-orange/25 hover:bg-white/[0.08]
                            hover:shadow-[0_0_25px_rgba(249,115,22,0.10)]
                            transition-all duration-300" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex-shrink-0">
                        <div class="w-14 h-14 bg-brand-white/5 rounded-xl flex items-center justify-center
                                    border border-brand-white/10 text-brand-orange text-2xl
                                    group-hover:bg-brand-orange group-hover:text-brand-white
                                    group-hover:shadow-[0_0_20px_rgba(249,115,22,0.30)]
                                    transition-all duration-300">
                            <i class="fas fa-file-alt"></i>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2 tracking-tight text-brand-white group-hover:text-brand-orange transition-colors duration-300">
                            White Label Reports</h4>
                        <p class="text-brand-white/70 text-sm leading-relaxed">Perfect for agencies. Get unbranded
                            reports with all live backlinks to share directly with your clients.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    @include('includes.home_content')

    @include('includes.footer')

</body>

</html>