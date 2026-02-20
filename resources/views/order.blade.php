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
                        'brand-black': '#05050a',
                        'brand-dark': '#0a0a12',
                        'brand-red': '#FF2D46', /* Keeping red for alerts/actions if needed, or switching to Pink */
                        'neon-pink': '#ff00ff',
                        'brand-blue': '#00ffff',
                        'glass-bg': 'rgba(15, 15, 25, 0.7)',
                    },
                    fontFamily: {
                        sans: ['Rajdhani', 'sans-serif'],
                        display: ['Orbitron', 'sans-serif'],
                    },
                    boxShadow: {
                        'neon-pink': '0 0 10px rgba(255, 0, 255, 0.5), 0 0 20px rgba(255, 0, 255, 0.3)',
                        'neon-blue': '0 0 10px rgba(0, 255, 255, 0.5), 0 0 20px rgba(0, 255, 255, 0.3)',
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
            background-color: #05050a;
            color: #d1d5db;
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
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #05050a;
        }

        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #FF2D46;
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
            border-color: #ff00ff;
            background-color: rgba(255, 0, 255, 0.05);
            box-shadow: 0 0 15px rgba(255, 0, 255, 0.2), inset 0 0 10px rgba(255, 0, 255, 0.1);
        }

        .radio-card:hover,
        .plan-card:hover,
        .strategy-card:hover {
            border-color: #00ffff;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.2);
        }

        .glass-panel {
            background: rgba(15, 15, 25, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 255, 255, 0.2);
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
    </style>
</head>

<body class="antialiased selection:bg-neon-pink selection:text-white pb-32">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 border-b border-white/5 bg-brand-black/80 backdrop-blur-md"
        id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <div class="flex-shrink-0 flex items-center cursor-pointer">
                    <img src="{{ asset('Images/prism_logo_v2.png') }}" alt="Prism Media Hub"
                        class="h-20 w-auto object-contain">
                </div>
                <div class="hidden md:block">
                    <a href="{{ url('/') }}"
                        class="text-sm font-semibold text-white/80 hover:text-white border border-white/10 hover:border-white/30 rounded-full px-5 py-2 transition-all flex items-center gap-2">
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
        <div class="absolute top-[10%] right-[0%] w-[500px] h-[500px] bg-brand-red/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[10%] left-[-10%] w-[400px] h-[400px] bg-blue-600/5 rounded-full blur-[100px]">
        </div>
    </div>

    <!-- Custom Order Wizard Section -->
    <section id="order-wizard" class="pt-48 pb-24 bg-brand-black border-t border-white/10 relative overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute top-[20%] right-[-10%] w-[600px] h-[600px] bg-brand-red/5 rounded-full blur-[120px]">
            </div>
            <div class="absolute bottom-[10%] left-[-10%] w-[400px] h-[400px] bg-blue-900/10 rounded-full blur-[100px]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Customize Your Media Campaign</h2>
                <p class="text-xl text-gray-500 max-w-2xl mx-auto">Select your plan, content strategy, and distribution
                    reach.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <!-- Main Selection Column -->
                <div class="lg:col-span-2 space-y-16">

                    <!-- Step 1: Choose Your Plan -->
                    <div class="wizard-step">
                        <div class="flex items-center gap-4 mb-8">
                            <span
                                class="bg-brand-red/10 text-brand-red px-3 py-1 rounded-lg text-xs font-bold tracking-wider">STEP
                                1</span>
                            <h3 class="text-2xl font-bold text-white">Choose Your Plan</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Access Plan -->
                            <div class="plan-card glass-panel rounded-2xl p-6 cursor-pointer transition-all group"
                                data-plan="access" data-price="1980" onclick="selectCard(this, 'plan')">
                                <div class="text-4xl mb-4 grayscale group-hover:grayscale-0 transition skew-y-6">📄
                                </div>
                                <div class="text-lg font-bold text-white mb-1 group-hover:text-brand-blue">Access</div>
                                <div class="text-sm text-gray-500 mb-4">1 Guaranteed Outlet</div>
                                <div class="text-xl font-bold text-white group-hover:text-shadow-blue">$1980</div>
                            </div>

                            <!-- Growth Plan -->
                            <div class="plan-card selected glass-panel rounded-2xl p-6 cursor-pointer transition-all group"
                                data-plan="growth" data-price="2380" onclick="selectCard(this, 'plan')">
                                <div
                                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-neon-pink text-white text-[10px] font-bold px-3 py-1 rounded-sm z-10 tracking-widest uppercase shadow-[0_0_10px_#ff00ff]">
                                    Most Popular</div>
                                <div class="text-4xl mb-4 animate-pulse">🚀</div>
                                <div class="text-lg font-bold text-white mb-1">Growth</div>
                                <div class="text-sm text-gray-300 mb-4">5 Guaranteed Outlets</div>
                                <div class="text-xl font-bold text-neon-pink text-glow-pink">$2380</div>
                            </div>

                            <!-- Authority Plan -->
                            <div class="plan-card glass-panel rounded-2xl p-6 cursor-pointer transition-all group"
                                data-plan="authority" data-price="3980" onclick="selectCard(this, 'plan')">
                                <div class="text-4xl mb-4 grayscale group-hover:grayscale-0 transition skew-y-6">👑
                                </div>
                                <div class="text-lg font-bold text-white mb-1 group-hover:text-brand-blue">Authority
                                </div>
                                <div class="text-sm text-gray-500 mb-4">10 Guaranteed Outlets</div>
                                <div class="text-xl font-bold text-white group-hover:text-shadow-blue">$3980</div>
                            </div>

                            <!-- Ultimate Plan -->
                            <div class="plan-card glass-panel rounded-2xl p-6 cursor-pointer transition-all group"
                                data-plan="ultimate" data-price="4980" onclick="selectCard(this, 'plan')">
                                <div class="text-4xl mb-4 grayscale group-hover:grayscale-0 transition skew-y-6">💎
                                </div>
                                <div class="text-lg font-bold text-white mb-1 group-hover:text-brand-blue">Ultimate
                                </div>
                                <div class="text-sm text-gray-500 mb-4">20 Guaranteed Outlets</div>
                                <div class="text-xl font-bold text-white group-hover:text-shadow-blue">$4980</div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Select Content Strategy -->
                    <div class="wizard-step">
                        <div class="flex items-center gap-4 mb-8">
                            <span
                                class="bg-brand-red/10 text-brand-red px-3 py-1 rounded-lg text-xs font-bold tracking-wider">STEP
                                2</span>
                            <h3 class="text-2xl font-bold text-white">Select Content Strategy</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Self-Provide -->
                            <div class="strategy-card glass-panel rounded-2xl p-6 cursor-pointer transition-all group flex flex-col h-full"
                                data-strategy="self" data-price="0" onclick="selectCard(this, 'strategy')">
                                <div
                                    class="font-bold text-white mb-2 flex items-center gap-2 group-hover:text-brand-blue">
                                    📤 Self-Provide</div>
                                <p class="text-sm text-gray-500 mb-6 flex-1">Upload your own content. Basic review
                                    included.</p>
                                <div class="font-bold text-white mt-auto">Free</div>
                            </div>

                            <!-- AI-Assisted -->
                            <div class="strategy-card glass-panel rounded-2xl p-6 cursor-pointer transition-all group flex flex-col h-full"
                                data-strategy="ai" data-price="100" onclick="selectCard(this, 'strategy')">
                                <div
                                    class="font-bold text-white mb-2 flex items-center gap-2 group-hover:text-brand-blue">
                                    🤖 AI-Assisted</div>
                                <p class="text-sm text-gray-500 mb-6 flex-1">Generate content using AI. Quick &
                                    efficient.</p>
                                <div class="font-bold text-white mt-auto">RM 100</div>
                            </div>

                            <!-- Pro Copywriting -->
                            <div class="strategy-card selected glass-panel rounded-2xl p-6 cursor-pointer transition-all group flex flex-col h-full"
                                data-strategy="pro" data-price="200" onclick="selectCard(this, 'strategy')">
                                <div class="font-bold text-white mb-2 flex items-center justify-between">
                                    <span class="text-neon-pink">✒️ Pro Copywriting</span>
                                    <i class="fas fa-check-circle text-neon-pink"></i>
                                </div>
                                <p class="text-sm text-gray-300 mb-6 flex-1">Professional writers create engaging
                                    content.</p>
                                <div class="font-bold text-neon-pink mt-auto text-glow-pink">RM 200</div>
                            </div>
                        </div>
                    </div>



                </div>

                <!-- Sticky Order Summary -->
                <div class="lg:col-span-1">
                    <div class="sticky top-28 glass-panel rounded-2xl p-8 shadow-[0_0_20px_rgba(0,0,0,0.5)]">
                        <div class="font-bold text-xl text-white mb-6 border-b border-brand-blue/20 pb-4 font-display">
                            Order Summary</div>

                        <div class="flex justify-between text-sm mb-4">
                            <span class="text-gray-300" id="summary-plan-name">Growth Package</span>
                            <strong class="text-white">RM <span id="summary-plan-price">2380</span></strong>
                        </div>
                        <div class="flex justify-between text-sm mb-4">
                            <span class="text-gray-300" id="summary-strategy-name">Pro Copywriting</span>
                            <strong class="text-white">RM <span id="summary-strategy-price">200</span></strong>
                        </div>



                        <div class="flex justify-between text-sm mb-6 pb-4 border-b border-brand-blue/20">
                            <span class="text-gray-400">Subtotal</span>
                            <span class="text-gray-400">RM <span id="summary-subtotal">3200</span></span>
                        </div>

                        <div class="flex justify-between items-center mb-8">
                            <span class="text-lg font-bold text-white">Total</span>
                            <span class="text-3xl font-black text-neon-pink text-glow-pink">RM <span
                                    id="summary-total">3580</span></span>
                        </div>

                        <button onclick="openModal()"
                            class="w-full py-4 bg-brand-blue hover:bg-white text-brand-black hover:text-neon-pink font-bold rounded-lg transition-all shadow-[0_0_20px_rgba(0,255,255,0.4)] hover:shadow-[0_0_30px_rgba(255,0,255,0.6)] text-lg flex items-center justify-center gap-2 font-display uppercase tracking-wider relative overflow-hidden group">
                            <div
                                class="absolute inset-0 bg-white/20 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-500 skew-x-12">
                            </div>
                            <i class="fas fa-lock text-sm"></i> Checkout Now
                        </button>

                        <div class="text-center mt-4 flex items-center justify-center gap-2 text-[10px] text-gray-500">
                            <i class="fas fa-shield-alt"></i> Secure 256-bit SSL encryption. Money-back guarantee.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="bg-brand-black text-white pt-20 pb-12 border-t border-[rgba(0,255,255,0.3)]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <!-- Brief Footer Content -->
                <div class="col-span-1 md:col-span-1">
                    <div class="mb-6">
                        <img src="{{ asset('Images/prism_logo_v2.png') }}" alt="Prism Media Hub"
                            class="h-20 w-auto object-contain">
                    </div>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 font-light">Automated press release
                        distribution for SEO
                        growth.</p>
                </div>
            </div>
            <div
                class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
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
            class="relative bg-brand-dark border border-white/10 rounded-2xl w-full max-w-lg shadow-2xl overflow-hidden transform transition-all">
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-white">Final Step: Create Profile</h3>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-white transition"><i
                            class="fas fa-times text-xl"></i></button>
                </div>

                <form action="{{ url('checkout/process') }}" method="POST" class="space-y-4">
                    @csrf
                    <!-- Hidden Inputs for Logic -->
                    <input type="hidden" name="plan" id="input-plan" value="growth">
                    <input type="hidden" name="strategy" id="input-strategy" value="pro">


                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Full Name</label>
                            <input type="text" name="name" required
                                class="w-full bg-brand-black border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-red transition"
                                placeholder="Enter your full name">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Email Address</label>
                            <input type="email" name="email" required
                                class="w-full bg-brand-black border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-red transition"
                                placeholder="name@example.com">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Phone Number</label>
                            <input type="tel" name="phone" required
                                class="w-full bg-brand-black border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-red transition"
                                placeholder="+60...">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Company Name</label>
                        <input type="text" name="company"
                            class="w-full bg-brand-black border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-red transition"
                            placeholder="Your Company Name">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-2">Website URL</label>
                        <input type="url" name="website"
                            class="w-full bg-brand-black border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-red transition"
                            placeholder="https://yourwebsite.com">
                    </div>

                    <button type="submit"
                        class="w-full mt-4 py-4 bg-brand-red hover:bg-brand-red-hover text-white font-bold rounded-lg transition-all shadow-lg hover:shadow-red-900/40 text-lg flex items-center justify-center gap-2">
                        Proceed to Payment <i class="fas fa-arrow-right text-sm"></i>
                    </button>

                    <p class="text-center text-[10px] text-gray-500 mt-2">By clicking, you agree to our Terms of
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
                sibling.classList.remove('selected', 'border-brand-red', 'bg-brand-red/5');
                sibling.classList.add('border-white/10', 'bg-brand-dark');
            }
            element.classList.add('selected', 'border-brand-red', 'bg-brand-red/5');
            element.classList.remove('border-white/10', 'bg-brand-dark');

            const price = parseInt(element.getAttribute('data-price'));

            if (type === 'plan') {
                selectedPlan = element.getAttribute('data-plan');
                planPrice = price;
                const planName = element.querySelector('.text-lg.font-bold').innerText;
                document.getElementById('summary-plan-name').innerText = planName + ' Package';
                document.getElementById('summary-plan-price').innerText = planPrice;
                document.getElementById('input-plan').value = selectedPlan;
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