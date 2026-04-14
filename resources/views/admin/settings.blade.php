@extends('layouts.admin')

@section('content')
    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                background: '#fff',
                color: '#111',
                confirmButtonColor: '#f97316'
            });
        </script>
    @endif

    <div
        class="h-20 bg-white/80 backdrop-blur-md border-b border-gray-200 flex items-center justify-between px-8 z-10 mb-8 rounded-2xl">
        <h1 class="text-xl font-bold text-gray-900">System Settings</h1>
    </div>

    <div class="max-w-4xl mx-auto">
        <form action="{{ url('admin/settings') }}" method="POST">
            @csrf

            <div class="space-y-6">

                <!-- Pricing Card -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-xl shadow-gray-200/50">
                    <h2 class="text-xl font-bold mb-6 flex items-center gap-3 text-gray-900">
                        <i class="fas fa-tags text-brand-red"></i> Plan Pricing (RM)
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-gray-500">Access Plan</label>
                            <input type="number" name="price_access" value="{{ $settings['price_access'] ?? 1000 }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-900 focus:border-brand-red focus:outline-none transition font-mono">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-gray-500">Growth Plan</label>
                            <input type="number" name="price_growth" value="{{ $settings['price_growth'] ?? 2000 }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-900 focus:border-brand-red focus:outline-none transition font-mono">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-gray-500">Authority Plan</label>
                            <input type="number" name="price_authority" value="{{ $settings['price_authority'] ?? 5000 }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-900 focus:border-brand-red focus:outline-none transition font-mono">
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase text-gray-500">Ultimate Plan</label>
                            <input type="number" name="price_ultimate" value="{{ $settings['price_ultimate'] ?? 7000 }}"
                                class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-900 focus:border-brand-red focus:outline-none transition font-mono">
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-brand-red hover:bg-brand-red-hover text-white font-bold py-3 px-8 rounded-xl shadow-lg shadow-orange-500/40 transition transform hover:-translate-y-1">
                        Save Changes
                    </button>
                </div>

            </div>
        </form>
    </div>
@endsection