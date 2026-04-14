<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Prism Media Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-purple': '#221A31',
                        'brand-dark': '#2D2340',
                        'brand-orange': '#f97316',
                        'brand-orange-hover': '#ea580c',
                        'brand-gray': '#362B4D',
                        'brand-white': '#f9fafb',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
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

<body class="bg-brand-purple text-brand-white h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-8">
        <div class="text-center mb-8">
            <img class="brand-logo bg-transparent h-32 w-auto mx-auto object-contain"
                src="{{ asset('Images/prism_media_logo_FA-02.png') }}" alt="Prism Media Hub">
        </div>
        <div class="bg-brand-purple border border-brand-white/10 rounded-2xl p-8 shadow-2xl shadow-black/50">
            <h2 class="text-xl font-bold mb-6 text-center text-brand-white">Admin Access</h2>

            @if(isset($error))
                <div class='bg-red-50 text-red-500 p-3 rounded text-sm mb-4 text-center border border-red-200'>
                    {{ $error }}
                </div>
            @endif

            <form method="POST" action="{{ url('/admin/login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-xs font-bold text-brand-white/70 uppercase mb-2">Username</label>
                    <input type="text" name="username"
                        class="w-full bg-brand-purple border border-brand-white/10 rounded-lg px-4 py-3 text-brand-white focus:outline-none focus:border-brand-orange transition"
                        placeholder="admin" required>
                </div>
                <div class="mb-6">
                    <label class="block text-xs font-bold text-brand-white/70 uppercase mb-2">Password</label>
                    <input type="password" name="password"
                        class="w-full bg-brand-purple border border-brand-white/10 rounded-lg px-4 py-3 text-brand-white focus:outline-none focus:border-brand-orange transition"
                        placeholder="123" required>
                </div>
                <!-- Login Button -->
                <button type="submit"
                    class="w-full py-3 bg-brand-orange hover:bg-brand-orange-hover text-brand-white font-bold rounded-lg transition-all shadow-lg hover:shadow-orange-500/40">
                    Login
                </button>
            </form>
        </div>
    </div>
</body>

</html>