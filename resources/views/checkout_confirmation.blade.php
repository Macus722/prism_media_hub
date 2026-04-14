<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review & Payment - Prism Media Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
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

        .glass-panel {
            background: rgba(34, 26, 49, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .accordion-content {
            transition: max-height 0.3s ease-out, opacity 0.3s ease-out;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
        }

        .accordion-item.active .accordion-content {
            max-height: 500px;
            opacity: 1;
        }

        .accordion-item.active .chevron {
            transform: rotate(180deg);
        }

        .accordion-item.active {
            border-color: #f97316;
            background-color: rgba(249, 115, 22, 0.05);
            box-shadow: 0 0 15px rgba(249, 115, 22, 0.2);
        }

        /* Background Effects */
        .bg-noise {
            background-image: url('https://grainy-gradients.vercel.app/noise.svg');
            opacity: 0.15;
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

<body
    class="antialiased selection:bg-brand-orange selection:text-brand-white pb-32 bg-brand-purple text-brand-white min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 border-b border-brand-white/10 bg-brand-purple/90 backdrop-blur-md"
        id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-24">
                <div class="flex-shrink-0 flex items-center cursor-pointer">
                    <img src="{{ asset('Images/prism_media_logo_FA-02.png') }}" alt="Prism Media Hub"
                        class="brand-logo bg-transparent h-32 w-auto object-contain">
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

    <!-- Main Content -->
    <main class="flex-grow pt-48 pb-12 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-5xl mx-auto">

            <div class="text-center mb-16">
                <!-- Icon -->
                <div
                    class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-brand-orange/10 border border-brand-orange/30 mb-6 shadow-[0_0_15px_rgba(249,115,22,0.2)] text-brand-orange shadow-brand-orange transition-transform hover:scale-105 duration-300">
                    <i class="fas fa-clipboard-check text-brand-orange text-3xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-extrabold text-brand-white mb-4">Review & Complete Order</h1>
                <p class="text-brand-white/70 text-lg max-w-2xl mx-auto">Hello {{ $orderData['name'] }}, please review
                    your order details and confirm payment.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <!-- Left Column: Receipt / Order Summary -->
                <div
                    class="glass-panel rounded-2xl p-8 shadow-[0_0_20px_rgba(0,0,0,0.5)] h-fit border border-brand-white/10">
                    <h2
                        class="text-xl font-bold border-b border-brand-orange/20 pb-4 mb-6 text-brand-white font-display uppercase tracking-widest">
                        Order Summary</h2>

                    <div class="space-y-4 text-sm mb-8">
                        <div class="flex justify-between">
                            <span class="text-brand-white/70">Ref ID</span>
                            <span class="font-mono text-brand-white text-lg font-bold">{{ $orderId }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-brand-white/70">Date</span>
                            <span class="text-brand-white font-bold">{{ date('d M Y') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-brand-white/70">Client Info</span>
                            <span
                                class="text-brand-white font-bold text-right">{{ $orderData['company'] ?: $orderData['name'] }}</span>
                        </div>
                    </div>

                    <div class="border-t border-b border-brand-white/10 py-6 space-y-3 mb-6">
                        <div class="flex justify-between">
                            <span class="text-brand-white/70">Selected Plan</span>
                            <span class="text-brand-orange font-bold">{{ ucfirst($orderData['plan']) }} Package</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-brand-white/70">Content Strategy</span>
                            <span class="text-brand-white font-bold">{{ strip_tags($addonText) }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-brand-white/70">Distribution Reach</span>
                            <span class="text-brand-white font-bold">{{ $orderData['distribution'] }} Articles</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center text-lg font-bold">
                        <span class="text-brand-white font-display text-xl">Total</span>
                        <span class="text-3xl font-black text-brand-orange tracking-wider">RM
                            {{ number_format($grandTotal, 2) }}</span>
                    </div>
                </div>

                <!-- Right Column: Payment Options (Accordion) -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold mb-4 text-brand-white font-display uppercase tracking-widest">Select
                        Payment Method</h3>

                    <!-- Accordion Item 1: DuitNow -->
                    <div
                        class="accordion-item glass-panel border-brand-white/10 rounded-xl overflow-hidden transition-all hover:bg-white/5">
                        <div class="p-5 flex items-center justify-between cursor-pointer"
                            onclick="toggleAccordion(this)">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 flex text-center items-center justify-center bg-brand-white/5 rounded-lg text-brand-orange">
                                    <i class="fas fa-qrcode text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brand-white text-sm tracking-wide">DuitNow / TnG</h4>
                                    <p class="text-xs text-brand-white/60">Scan QR to Pay</p>
                                </div>
                            </div>
                            <i
                                class="fas fa-chevron-down text-brand-white/50 transition-transform duration-300 chevron"></i>
                        </div>
                        <div class="accordion-content bg-brand-purple/50 border-t border-brand-white/5">
                            <div class="p-6 text-center">
                                <div
                                    class="bg-brand-white p-2 rounded-xl inline-block w-48 h-48 mb-4 shadow-lg shadow-brand-orange/20">
                                    <img src="{{ asset('images/duitnow_qr.jpg') }}" alt="DuitNow QR"
                                        class="w-full h-full object-contain">
                                </div>
                                <div
                                    class="bg-brand-purple border border-brand-white/10 rounded-lg px-4 py-2 text-sm font-mono inline-block text-brand-white">
                                    REF: <span class="font-bold text-brand-orange">{{ $orderId }}</span>
                                </div>
                                <p class="text-xs text-brand-white/50 mt-3">Scan with any Banking App or E-Wallet</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 2: Manual Transfer -->
                    <div
                        class="accordion-item glass-panel border-brand-white/10 rounded-xl overflow-hidden transition-all hover:bg-white/5">
                        <div class="p-5 flex items-center justify-between cursor-pointer"
                            onclick="toggleAccordion(this)">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 flex text-center items-center justify-center bg-brand-white/5 rounded-lg text-brand-orange">
                                    <i class="fas fa-university text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brand-white text-sm tracking-wide">Manual Transfer</h4>
                                    <p class="text-xs text-brand-white/60">Bank Transfer / FPX</p>
                                </div>
                            </div>
                            <i
                                class="fas fa-chevron-down text-brand-white/50 transition-transform duration-300 chevron"></i>
                        </div>
                        <div class="accordion-content bg-brand-purple/50 border-t border-brand-white/5">
                            <div class="p-6 space-y-4">
                                <div
                                    class="bg-brand-purple border border-brand-white/10 p-4 rounded-xl flex justify-between items-center">
                                    <span
                                        class="text-xs text-brand-white/50 uppercase font-black tracking-wider">Bank</span>
                                    <span class="text-sm font-bold text-brand-white">Maybank</span>
                                </div>
                                <div class="bg-brand-purple border border-brand-white/10 p-4 rounded-xl">
                                    <span
                                        class="block text-[10px] text-brand-white/50 uppercase mb-2 font-black tracking-wider">Account
                                        Number</span>
                                    <div class="flex justify-between items-center">
                                        <span class="text-xl font-mono text-brand-orange font-bold tracking-widest">5123
                                            4567 8901</span>
                                        <button
                                            class="w-8 h-8 flex text-center items-center justify-center bg-brand-white/5 hover:bg-brand-orange/20 text-brand-white/70 hover:text-brand-orange border border-brand-white/10 transition rounded-lg"
                                            onclick="copyToClipboard('512345678901')">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="bg-brand-purple border border-brand-white/10 p-4 rounded-xl flex justify-between items-center">
                                    <span
                                        class="text-xs text-brand-white/50 uppercase font-black tracking-wider">Holder</span>
                                    <span class="text-sm font-bold text-brand-white">Prism Media Hub</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 3: Credit Card -->
                    <div
                        class="accordion-item glass-panel border-brand-white/10 rounded-xl overflow-hidden transition-all hover:bg-white/5">
                        <div class="p-5 flex items-center justify-between cursor-pointer"
                            onclick="toggleAccordion(this)">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 flex text-center items-center justify-center bg-brand-white/5 rounded-lg text-brand-orange">
                                    <i class="fas fa-credit-card text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-brand-white text-sm tracking-wide">Credit Card</h4>
                                    <p class="text-xs text-brand-white/60">Visa / Mastercard</p>
                                </div>
                            </div>
                            <i
                                class="fas fa-chevron-down text-brand-white/50 transition-transform duration-300 chevron"></i>
                        </div>
                        <div class="accordion-content bg-brand-purple/50 border-t border-brand-white/5">
                            <div class="p-6 text-center">
                                <p class="text-sm text-brand-white/60 mb-6">Secure payment via Stripe Payment Gateway.
                                </p>
                                <a href="#"
                                    class="block w-full py-4 bg-brand-orange hover:bg-white text-brand-purple hover:text-brand-orange font-bold rounded-lg transition-all shadow-md hover:shadow-lg text-sm mb-4 font-display uppercase tracking-wider relative overflow-hidden group">
                                    <div
                                        class="absolute inset-0 bg-white/20 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-500 skew-x-12">
                                    </div>
                                    <i class="fas fa-lock mr-2 text-xs"></i> Pay with Card
                                </a>
                                <a href="{{ $ccWaUrl }}" target="_blank"
                                    class="text-xs font-bold text-brand-white/70 hover:text-brand-orange transition flex items-center justify-center gap-2">
                                    <i class="fab fa-whatsapp"></i> Request Direct Payment Link
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- CONFIRMATION FORM -->
                    <div class="pt-8">
                        <form action="{{ url('checkout/confirm') }}" method="POST">
                            @csrf
                            <!-- Hidden Inputs to Pass Data to Process State -->
                            <input type="hidden" name="name" value="{{ $orderData['name'] }}">
                            <input type="hidden" name="email" value="{{ $orderData['email'] }}">
                            <input type="hidden" name="phone" value="{{ $orderData['phone'] }}">
                            <input type="hidden" name="company" value="{{ $orderData['company'] }}">
                            <input type="hidden" name="website" value="{{ $orderData['website'] }}">
                            <input type="hidden" name="plan" value="{{ $orderData['plan'] }}">
                            <input type="hidden" name="strategy" value="{{ $orderData['strategy'] }}">
                            <input type="hidden" name="distribution" value="{{ $orderData['distribution'] }}">
                            <input type="hidden" name="total_amount" value="{{ $grandTotal }}">
                            <input type="hidden" name="order_id" value="{{ $orderId }}">

                            <button type="submit" name="confirm_payment" value="1"
                                class="w-full py-4 bg-[#25D366] hover:bg-[#20bd5a] text-brand-white font-bold rounded-xl text-center transition-all shadow-lg hover:shadow-[#25D366]/40 flex items-center justify-center gap-3 font-display tracking-wide uppercase">
                                <i class="fab fa-whatsapp text-2xl"></i>
                                <span>I Have Made Payment (Confirm Order)</span>
                            </button>
                            <p class="text-center text-xs tracking-wider text-brand-white/50 mt-4 leading-relaxed">
                                Clicking this will securely log your order and notify our team. You'll attach your
                                payment slip directly in WhatsApp.
                            </p>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-transparent text-brand-white pt-10 pb-12 border-t border-brand-white/10 z-10 relative">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-brand-white/50 text-xs font-light tracking-widest uppercase">
            &copy; 2026 Prism Media Hub. All rights reserved.
        </div>
    </footer>

    <script>
        function toggleAccordion(header) {
            const item = header.parentElement;
            const isActive = item.classList.contains('active');

            // Close all items
            document.querySelectorAll('.accordion-item').forEach(el => {
                el.classList.remove('active');
            });

            // Toggle clicked item
            if (!isActive) {
                item.classList.add('active');
            }
        }

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                alert('Account number copied to clipboard! (5123 4567 8901)');
            });
        }
    </script>
</body>

</html>