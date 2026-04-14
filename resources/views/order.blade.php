<!DOCTYPE html>
<html lang="zh-CN" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order - Prism Media Hub</title>

    <!-- Dependencies -->
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
                        'brand-purple': '#221A31',
                        'brand-orange': '#f97316',
                        'brand-white': '#ffffff',
                        'glass-bg': 'rgba(34, 26, 49, 0.92)',
                    },
                    fontFamily: {
                        sans: ['Rajdhani', 'sans-serif'],
                        display: ['Orbitron', 'sans-serif'],
                    },
                    boxShadow: {
                        'brand-orange': '0 14px 35px rgba(15, 23, 42, 0.12)',
                        'neon-blue': '0 14px 35px rgba(15, 23, 42, 0.08)',
                    },
                    animation: {
                        'scroll': 'scroll 40s linear infinite',
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                    },
                    keyframes: {
                        scroll: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        fadeInUp: {
                            'from': { opacity: '0', transform: 'translateY(20px)' },
                            'to': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Rajdhani', sans-serif;
            background-color: #221A31;
            color: #f9fafb;
            background-image: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #221A31;
        }

        ::-webkit-scrollbar-thumb {
            background: #362B4D;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #4B3C69;
        }

        /* Form Logic Styles */
        .form-section .form-body {
            display: none;
        }

        .form-section.active .form-body {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        .form-section.active {
            border-color: #FF2D46;
            background-color: rgba(255, 255, 255, 0.03);
            opacity: 1;
        }

        .form-section {
            border-color: rgba(255, 255, 255, 0.1);
            opacity: 0.7;
        }

        .radio-card.selected,
        .plan-card.selected,
        .strategy-card.selected {
            border-color: #f97316;
            background-color: rgba(249, 115, 22, 0.05);
            box-shadow: 0 0 15px rgba(249, 115, 22, 0.2), inset 0 0 10px rgba(249, 115, 22, 0.1);
        }

        .radio-card:hover,
        .plan-card:hover,
        .strategy-card:hover {
            border-color: #f97316;
            box-shadow: 0 0 10px rgba(249, 115, 22, 0.2);
        }

        .glass-panel {
            background: rgba(34, 26, 49, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Background Effects */
        .bg-noise {
            background-image: url('https://grainy-gradients.vercel.app/noise.svg');
            opacity: 0.15;
        }

        /* Modal Animation */
        #checkout-modal {
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        #checkout-modal.hidden-modal {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        #checkout-modal.visible-modal {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
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

<body class="antialiased selection:bg-brand-orange selection:text-brand-white pb-32 bg-brand-purple text-brand-white">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 border-b border-brand-white/10 bg-brand-purple/90 backdrop-blur-md"
        id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <div class="flex-shrink-0 flex items-center cursor-pointer">
                    <img src="{{ asset('Images/prism_media_logo_FA-02.png') }}" alt="Prism Media Hub"
                        class="brand-logo bg-transparent h-32 w-auto object-contain">
                </div>
                <div class="hidden md:block">
                    <a href="{{ url('/') }}"
                        class="text-sm font-semibold text-brand-white/80 hover:text-brand-white border border-white/10 hover:border-white/30 rounded-full px-5 py-2 transition-all flex items-center gap-2">
                        <i class="fas fa-arrow-left"></i> Back to Home
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Background Decoration -->
    <div class="fixed inset-0 z-0 pointer-events-none">
        <div class="absolute inset-0 bg-noise"></div>
        <div class="absolute inset-0"
            style="background-image: radial-gradient(#333 1px, transparent 1px); background-size: 40px 40px; opacity: 0.1;">
        </div>
        <div class="absolute top-[10%] right-[0%] w-[500px] h-[500px] bg-brand-orange/10 rounded-full blur-[120px]">
        </div>
        <div class="absolute bottom-[10%] left-[-10%] w-[400px] h-[400px] bg-brand-white/5 rounded-full blur-[100px]">
        </div>
    </div>

    <!-- Custom Order Wizard Section -->
    <section id="order-wizard" class="pt-48 pb-24 bg-brand-purple border-t border-white/10 relative overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div
                class="absolute top-[20%] right-[-10%] w-[600px] h-[600px] bg-brand-orange/5 rounded-full blur-[120px]">
            </div>
            <div class="absolute bottom-[10%] left-[-10%] w-[400px] h-[400px] bg-blue-900/10 rounded-full blur-[100px]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-extrabold text-brand-white mb-6">Customize Your Media Campaign</h2>
                <p class="text-xl text-brand-white/70 max-w-2xl mx-auto">Select your plan, content strategy, and
                    distribution
                    reach.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <!-- Main Selection Column -->
                <div class="lg:col-span-2 space-y-16">

                    <!-- Step 1: Choose Your Plan -->
                    <div class="wizard-step">
                        <div class="flex items-center gap-4 mb-8">
                            <span
                                class="bg-brand-orange/10 text-brand-orange px-3 py-1 rounded-lg text-xs font-bold tracking-wider">STEP
                                1</span>
                            <h3 class="text-2xl font-bold text-brand-white">Choose Your Plan</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Access Plan -->
                            <div class="plan-card glass-panel rounded-2xl p-6 cursor-pointer transition-all group"
                                data-plan="access" data-price="1980" onclick="selectCard(this, 'plan')">
                                <div class="text-4xl mb-4 grayscale group-hover:grayscale-0 transition skew-y-6">📄
                                </div>
                                <div class="text-lg font-bold text-brand-white mb-1 group-hover:text-brand-orange">
                                    Access</div>
                                <div class="text-sm text-brand-white/70 mb-4">1 Guaranteed Outlet</div>
                                <div class="text-xl font-bold text-brand-white group-hover:text-shadow-blue">$1980</div>
                            </div>

                            <!-- Growth Plan -->
                            <div class="plan-card selected glass-panel rounded-2xl p-6 cursor-pointer transition-all group"
                                data-plan="growth" data-price="2380" onclick="selectCard(this, 'plan')">
                                <div
                                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-brand-orange text-brand-white text-[10px] font-bold px-3 py-1 rounded-sm z-10 tracking-widest uppercase shadow-[0_0_10px_#f97316]">
                                    Most Popular</div>
                                <div class="text-4xl mb-4 animate-pulse">🚀</div>
                                <div class="text-lg font-bold text-brand-white mb-1">Growth</div>
                                <div class="text-sm text-brand-white/80 mb-4">5 Guaranteed Outlets</div>
                                <div class="text-xl font-bold text-brand-orange ">$2380</div>
                            </div>

                            <!-- Authority Plan -->
                            <div class="plan-card glass-panel rounded-2xl p-6 cursor-pointer transition-all group"
                                data-plan="authority" data-price="3980" onclick="selectCard(this, 'plan')">
                                <div class="text-4xl mb-4 grayscale group-hover:grayscale-0 transition skew-y-6">👑
                                </div>
                                <div class="text-lg font-bold text-brand-white mb-1 group-hover:text-brand-orange">
                                    Authority
                                </div>
                                <div class="text-sm text-brand-white/70 mb-4">10 Guaranteed Outlets</div>
                                <div class="text-xl font-bold text-brand-white group-hover:text-shadow-blue">$3980</div>
                            </div>

                            <!-- Ultimate Plan -->
                            <div class="plan-card glass-panel rounded-2xl p-6 cursor-pointer transition-all group"
                                data-plan="ultimate" data-price="4980" onclick="selectCard(this, 'plan')">
                                <div class="text-4xl mb-4 grayscale group-hover:grayscale-0 transition skew-y-6">💎
                                </div>
                                <div class="text-lg font-bold text-brand-white mb-1 group-hover:text-brand-orange">
                                    Ultimate
                                </div>
                                <div class="text-sm text-brand-white/70 mb-4">20 Guaranteed Outlets</div>
                                <div class="text-xl font-bold text-brand-white group-hover:text-shadow-blue">$4980</div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Select Content Strategy -->
                    <div class="wizard-step">
                        <div class="flex items-center gap-4 mb-8">
                            <span
                                class="bg-brand-orange/10 text-brand-orange px-3 py-1 rounded-lg text-xs font-bold tracking-wider">STEP
                                2</span>
                            <h3 class="text-2xl font-bold text-brand-white">Select Content Strategy</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Self-Provide -->
                            <div class="strategy-card glass-panel rounded-2xl p-6 cursor-pointer transition-all group flex flex-col h-full"
                                data-strategy="self" data-price="0" onclick="selectCard(this, 'strategy')">
                                <div
                                    class="font-bold text-brand-white mb-2 flex items-center gap-2 group-hover:text-brand-orange">
                                    📤 Self-Provide</div>
                                <p class="text-sm text-brand-white/70 mb-6 flex-1">Upload your own content. Basic review
                                    included.</p>
                                <div class="font-bold text-brand-white mt-auto">Free</div>
                            </div>

                            <!-- AI-Assisted -->
                            <div class="strategy-card glass-panel rounded-2xl p-6 cursor-pointer transition-all group flex flex-col h-full"
                                data-strategy="ai" data-price="100" onclick="selectCard(this, 'strategy')">
                                <div
                                    class="font-bold text-brand-white mb-2 flex items-center gap-2 group-hover:text-brand-orange">
                                    🤖 AI-Assisted</div>
                                <p class="text-sm text-brand-white/70 mb-6 flex-1">Generate content using AI. Quick &
                                    efficient.</p>
                                <div class="font-bold text-brand-white mt-auto">RM 100</div>
                            </div>

                            <!-- Pro Copywriting -->
                            <div class="strategy-card selected glass-panel rounded-2xl p-6 cursor-pointer transition-all group flex flex-col h-full"
                                data-strategy="pro" data-price="200" onclick="selectCard(this, 'strategy')">
                                <div class="font-bold text-brand-white mb-2 flex items-center justify-between">
                                    <span class="text-brand-orange">✒️ Pro Copywriting</span>
                                    <i class="fas fa-check-circle text-brand-orange"></i>
                                </div>
                                <p class="text-sm text-brand-white/80 mb-6 flex-1">Professional writers create engaging
                                    content.</p>
                                <div class="font-bold text-brand-orange mt-auto ">RM 200</div>
                            </div>
                        </div>
                    </div>



                </div>

                <!-- Sticky Order Summary -->
                <div class="lg:col-span-1">
                    <div class="sticky top-28 glass-panel rounded-2xl p-8 shadow-[0_0_20px_rgba(0,0,0,0.5)]">
                        <div
                            class="font-bold text-xl text-brand-white mb-6 border-b border-brand-orange/20 pb-4 font-display">
                            Order Summary</div>

                        <div class="flex justify-between text-sm mb-4">
                            <span class="text-brand-white/80" id="summary-plan-name">Growth Package</span>
                            <strong class="text-brand-white">RM <span id="summary-plan-price">2380</span></strong>
                        </div>
                        <div class="flex justify-between text-sm mb-4">
                            <span class="text-brand-white/80" id="summary-strategy-name">Pro Copywriting</span>
                            <strong class="text-brand-white">RM <span id="summary-strategy-price">200</span></strong>
                        </div>



                        <div class="flex justify-between text-sm mb-6 pb-4 border-b border-brand-orange/20">
                            <span class="text-brand-white/70">Subtotal</span>
                            <span class="text-brand-white/70">RM <span id="summary-subtotal">3200</span></span>
                        </div>

                        <div class="flex justify-between items-center mb-8">
                            <span class="text-lg font-bold text-brand-white">Total</span>
                            <span class="text-3xl font-black text-brand-orange ">RM <span
                                    id="summary-total">3580</span></span>
                        </div>

                        <button onclick="openModal()"
                            class="w-full py-4 bg-brand-orange hover:bg-white text-brand-purple hover:text-brand-orange font-bold rounded-lg transition-all shadow-md hover:shadow-lg text-lg flex items-center justify-center gap-2 font-display uppercase tracking-wider relative overflow-hidden group">
                            <div
                                class="absolute inset-0 bg-white/20 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-500 skew-x-12">
                            </div>
                            <i class="fas fa-lock text-sm"></i> Checkout Now
                        </button>

                        <div
                            class="text-center mt-4 flex items-center justify-center gap-2 text-[10px] text-brand-white/70">
                            <i class="fas fa-shield-alt"></i> Secure 256-bit SSL encryption. Money-back guarantee.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="bg-[#221A31] text-brand-white pt-20 pb-12 border-t border-brand-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Brief Footer Content -->
                <div class="col-span-1 md:col-span-1">
                    <div class="mb-6">
                        <img src="{{ asset('Images/prism_media_logo_FA-02.png') }}" alt="Prism Media Hub"
                            class="brand-logo bg-transparent h-20 w-auto object-contain">
                    </div>
                    <p class="text-brand-white/70 text-sm leading-relaxed mb-6 font-light">Automated press release
                        distribution for SEO
                        growth.</p>
                </div>
            </div>
            <div
                class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-brand-white/70">
                <div class="mb-4 md:mb-0 tracking-widest font-light text-xs uppercase">&copy; 2026 Prism Media Hub. All
                    rights reserved.</div>
            </div>
        </div>
    </footer>

    <!-- CHECKOUT MODAL -->
    <div id="checkout-modal"
        class="hidden-modal fixed inset-0 z-[100] flex items-end sm:items-center justify-center p-4">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" onclick="closeModal()"></div>

        <!-- Modal Content -->
        <div
            class="relative bg-brand-purple border border-brand-white/10 rounded-2xl w-full max-w-lg shadow-2xl overflow-hidden transform transition-all">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-brand-white">Final Step: Create Profile</h3>
                    <button onclick="closeModal()" class="text-brand-white/70 hover:text-brand-white transition"><i
                            class="fas fa-times text-xl"></i></button>
                </div>

                <form action="{{ url('checkout/process') }}" method="POST" class="space-y-4">
                    @csrf
                    <!-- Hidden Inputs for Logic -->
                    <input type="hidden" name="plan" id="input-plan" value="growth">
                    <input type="hidden" name="strategy" id="input-strategy" value="pro">
                    <input type="hidden" name="distribution" id="input-distribution" value="5">


                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-brand-white/70 uppercase mb-2">Full Name</label>
                            <input type="text" name="name" required
                                class="w-full bg-brand-purple border border-white/10 rounded-lg px-4 py-3 text-brand-white focus:outline-none focus:border-brand-orange transition"
                                placeholder="Enter your full name">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-brand-white/70 uppercase mb-2">Email
                                Address</label>
                            <input type="email" name="email" required
                                class="w-full bg-brand-purple border border-white/10 rounded-lg px-4 py-3 text-brand-white focus:outline-none focus:border-brand-orange transition"
                                placeholder="name@example.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-brand-white/70 uppercase mb-2">Phone
                                Number</label>
                            <input type="tel" name="phone" required
                                class="w-full bg-brand-purple border border-white/10 rounded-lg px-4 py-3 text-brand-white focus:outline-none focus:border-brand-orange transition"
                                placeholder="+60...">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-brand-white/70 uppercase mb-2">Company Name</label>
                        <input type="text" name="company"
                            class="w-full bg-brand-purple border border-white/10 rounded-lg px-4 py-3 text-brand-white focus:outline-none focus:border-brand-orange transition"
                            placeholder="Your Company Name">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-brand-white/70 uppercase mb-2">Website URL</label>
                        <input type="url" name="website"
                            class="w-full bg-brand-purple border border-white/10 rounded-lg px-4 py-3 text-brand-white focus:outline-none focus:border-brand-orange transition"
                            placeholder="https://yourwebsite.com">
                    </div>

                    <button type="submit"
                        class="w-full mt-4 py-4 bg-brand-orange hover:bg-brand-orange-hover text-brand-white font-bold rounded-lg transition-all shadow-lg hover:shadow-red-900/40 text-lg flex items-center justify-center gap-2">
                        Proceed to Payment <i class="fas fa-arrow-right text-sm"></i>
                    </button>

                    <p class="text-center text-[10px] text-brand-white/70 mt-2">By clicking, you agree to our Terms of
                        Service.</p>
                </form>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 100, duration: 800, easing: 'ease-out-cubic' });

        // Logic Variables
        let selectedPlan = 'growth';
        let selectedStrategy = 'pro';
        let planPrice = 2380;
        let strategyPrice = 200;


        // Function to handle card selection
        function selectCard(element, type) {
            const siblings = element.parentElement.children;
            for (let sibling of siblings) {
                sibling.classList.remove('selected', 'border-brand-orange', 'bg-brand-orange/5');
                sibling.classList.add('border-brand-white/10', 'bg-brand-purple');
            }
            element.classList.add('selected', 'border-brand-orange', 'bg-brand-orange/5');
            element.classList.remove('border-brand-white/10', 'bg-brand-purple');

            const price = parseInt(element.getAttribute('data-price'));

            if (type === 'plan') {
                selectedPlan = element.getAttribute('data-plan');
                planPrice = price;
                const planName = element.querySelector('.text-lg.font-bold').innerText;
                document.getElementById('summary-plan-name').innerText = planName + ' Package';
                document.getElementById('summary-plan-price').innerText = planPrice;
                document.getElementById('input-plan').value = selectedPlan;
                
                // Map plan to distribution count
                let distCount = 5; // default to growth
                if(selectedPlan === 'access') distCount = 1;
                if(selectedPlan === 'authority') distCount = 10;
                if(selectedPlan === 'ultimate') distCount = 20;
                document.getElementById('input-distribution').value = distCount;
            }
            else if (type === 'strategy') {
                selectedStrategy = element.getAttribute('data-strategy');
                strategyPrice = price;
                let stratName = element.querySelector('.font-bold').innerText;
                document.getElementById('summary-strategy-name').innerText = stratName.replace(/[\uD800-\uDBFF][\uDC00-\uDFFF]/g, '').trim();
                document.getElementById('summary-strategy-price').innerText = strategyPrice;
                document.getElementById('input-strategy').value = selectedStrategy;
            }

            updateTotal();
        }

        function updateTotal() {
            const subtotal = planPrice + strategyPrice;
            document.getElementById('summary-subtotal').innerText = subtotal;
            document.getElementById('summary-total').innerText = subtotal;
        }

        function openModal() {
            const modal = document.getElementById('checkout-modal');
            modal.classList.remove('hidden-modal');
            modal.classList.add('visible-modal');
        }

        function closeModal() {
            const modal = document.getElementById('checkout-modal');
            modal.classList.remove('visible-modal');
            modal.classList.add('hidden-modal');
        }

        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            const plan = urlParams.get('plan');
            if (plan) {
                const card = document.querySelector(`.plan-card[data-plan="${plan}"]`);
                if (card) { card.click(); }
            } else {
                updateTotal();
            }
        });
    </script>
</body>

</html>