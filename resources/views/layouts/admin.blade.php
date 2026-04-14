<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Prism Media Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-purple': '#221A31',
                        'brand-orange': '#f97316',
                        'brand-white': '#ffffff',
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

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
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

<body class="bg-brand-purple text-brand-white antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside
        class="w-64 bg-brand-purple border-r border-brand-white/10 flex flex-col justify-between hidden md:flex flex-shrink-0">
        <div class="flex flex-col h-full">
            <!-- Logo -->
            <div class="h-20 flex items-center px-8 border-b border-brand-white/10 flex-shrink-0">
                <img class="brand-logo bg-transparent h-16 w-auto object-contain"
                    src="{{ asset('Images/prism_media_logo_FA-02.png') }}" alt="Prism Media Hub">
            </div>

            <!-- Navigation -->
            <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                <!-- 1. Dashboard -->
                <a href="{{ url('admin') }}"
                    class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin') && !request()->has('status') ? 'bg-brand-orange text-brand-white shadow-lg shadow-orange-500/20' : 'text-brand-white/70 hover:text-brand-white hover:bg-white/5' }} rounded-xl transition">
                    <i class="fas fa-home w-5"></i>
                    <span class="font-medium">Dashboard</span>
                </a>

                <!-- 2. Order Management -->
                <a href="{{ url('admin/orders') }}"
                    class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin/orders*') ? 'bg-brand-orange text-brand-white shadow-lg shadow-orange-500/20' : 'text-brand-white/70 hover:text-brand-white hover:bg-white/5' }} rounded-xl transition">
                    <i class="fas fa-tasks w-5"></i>
                    <span class="font-medium">Order Management</span>
                </a>

                <!-- 3. Service Manager (Settings) -->
                <a href="{{ url('admin/settings') }}"
                    class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin/settings*') ? 'bg-brand-orange text-brand-white shadow-lg shadow-orange-500/20' : 'text-brand-white/70 hover:text-brand-white hover:bg-white/5' }} rounded-xl transition">
                    <i class="fas fa-sliders-h w-5"></i>
                    <span class="font-medium">Service Manager</span>
                </a>

                <!-- 4. Staff/User Management -->
                <a href="{{ url('admin/staff') }}"
                    class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin/staff*') ? 'bg-brand-orange text-brand-white shadow-lg shadow-orange-500/20' : 'text-brand-white/70 hover:text-brand-white hover:bg-white/5' }} rounded-xl transition">
                    <i class="fas fa-users-cog w-5"></i>
                    <span class="font-medium">Staff Management</span>
                </a>

                <!-- 5. Sales Report -->
                <a href="{{ url('admin/reports/sales') }}"
                    class="flex items-center gap-3 px-4 py-3 {{ request()->is('admin/reports/sales*') ? 'bg-brand-orange text-brand-white shadow-lg shadow-orange-500/20' : 'text-brand-white/70 hover:text-brand-white hover:bg-white/5' }} rounded-xl transition">
                    <i class="fas fa-chart-bar w-5"></i>
                    <span class="font-medium">Sales Report</span>
                </a>

                <div class="pt-4 border-t border-brand-white/10 mt-4">
                    <button onclick="window.location.href='{{ url('admin/logout') }}'"
                        class="w-full flex items-center gap-3 px-4 py-3 text-brand-white/70 hover:text-brand-white hover:bg-white/5 rounded-xl transition">
                        <i class="fas fa-sign-out-alt w-5"></i>
                        <span class="font-medium">Logout</span>
                    </button>
                </div>
            </nav>

            <!-- User Info -->
            <div class="p-4 border-t border-brand-white/10 flex-shrink-0">
                <div class="flex items-center gap-3 px-4 py-3">
                    <div
                        class="w-8 h-8 rounded-full bg-brand-orange text-brand-white flex items-center justify-center font-bold">
                        A</div>
                    <div>
                        <div class="text-sm font-bold text-brand-white">Admin</div>
                        <div class="text-xs text-brand-white/70">Super User</div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col h-full overflow-hidden bg-white text-[#3c4043]">

        <!-- Mobile Header -->
        <header
            class="h-16 bg-white border-b border-[#e8eaed] flex md:hidden items-center justify-between px-4 flex-shrink-0">
            <img class="brand-logo h-10 w-auto object-contain" src="{{ asset('Images/prism_media_logo_FA-02.png') }}"
                alt="Prism Media Hub">
            <button onclick="confirmLogout()" class="text-[#5f6368] hover:text-[#3c4043]"><i
                    class="fas fa-sign-out-alt"></i></button>
        </header>

        <!-- Main Content Scrollable Area -->
        <main class="flex-1 overflow-y-auto p-4 sm:p-8 relative">
            @if(session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: "{{ session('success') }}",
                            background: '#fff',
                            color: '#111',
                            confirmButtonColor: '#f97316'
                        });
                    });
                </script>
            @endif

            @yield('content')
        </main>
    </div>

    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Logout?',
                text: "Are you sure you want to end your session?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#f97316',
                cancelButtonColor: '#e5e7eb',
                confirmButtonText: 'Yes, Logout',
                cancelButtonText: 'Cancel',
                background: '#fff',
                color: '#111',
                customClass: {
                    cancelButton: 'text-gray-800'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ url('admin/logout') }}";
                }
            })
        }
    </script>
    @yield('scripts')
</body>

</html>