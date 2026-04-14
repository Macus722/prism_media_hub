@extends('layouts.admin')

@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Staff Management</h1>
                <p class="text-gray-500 mt-1">Manage admin access and staff roles.</p>
            </div>
            <button onclick="document.getElementById('addStaffModal').classList.remove('hidden')"
                class="bg-brand-orange hover:bg-brand-orange/90 text-white font-bold py-2 px-6 rounded-lg transition shadow-lg shadow-orange-500/40">
                <i class="fas fa-plus mr-2"></i> Add New Staff
            </button>
        </div>

        @if($errors->any())
            <div class="bg-red-100 border border-red-200 text-red-700 p-4 rounded-xl mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($users as $user)
                <div
                    class="bg-white border border-gray-200 rounded-2xl p-6 shadow-xl shadow-gray-200/50 relative group hover:border-brand-orange/50 transition">
                    <div class="flex items-start justify-between">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center font-bold text-xl border border-gray-200 text-gray-700">
                                {{ substr($user->name, 0, 1) }}
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">{{ $user->name }}</h3>
                                <p class="text-xs text-gray-500">{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-end gap-2">
                            <span
                                class="px-3 py-1 rounded-full text-xs font-bold border {{ $user->role == 'admin' ? 'bg-brand-orange text-white border-brand-orange' : 'bg-gray-100 text-gray-600 border-gray-200' }}">
                                {{ ucfirst($user->role) }}
                            </span>
                            <a href="{{ url('admin/staff/delete/' . $user->id) }}" onclick="return confirm('Are you sure?')"
                                class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-600 hover:text-white flex items-center justify-center transition shadow-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-100 grid grid-cols-2 gap-4 text-center">
                        <div>
                            <span class="block text-gray-500 text-xs uppercase font-bold">Joined</span>
                            <span class="text-gray-700 text-sm">{{ $user->created_at->format('M Y') }}</span>
                        </div>
                        <div>
                            <span class="block text-gray-500 text-xs uppercase font-bold">Status</span>
                            <span class="text-green-600 text-sm font-bold">Active</span>
                        </div>
                    </div>
                </div>
            @empty
                <div
                    class="col-span-3 text-center py-12 text-gray-500 bg-gray-50 border border-gray-200 rounded-2xl border-dashed">
                    <i class="fas fa-users text-4xl mb-4 opacity-50"></i>
                    <p>No staff members found.</p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Add Modal -->
    <div id="addStaffModal"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white border border-gray-200 rounded-2xl w-full max-w-md p-8 shadow-2xl relative">
            <button onclick="document.getElementById('addStaffModal').classList.add('hidden')"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                <i class="fas fa-times"></i>
            </button>

            <h3 class="text-xl font-bold text-gray-900 mb-6">Add New Staff Member</h3>

            <form action="{{ url('admin/staff') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="text-xs font-bold uppercase text-gray-500 block mb-2">Full Name</label>
                    <input type="text" name="name" required
                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-900 focus:border-brand-orange focus:outline-none transition">
                </div>
                <div>
                    <label class="text-xs font-bold uppercase text-gray-500 block mb-2">Email Address</label>
                    <input type="email" name="email" required
                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-900 focus:border-brand-orange focus:outline-none transition">
                </div>
                <div>
                    <label class="text-xs font-bold uppercase text-gray-500 block mb-2">Password</label>
                    <input type="password" name="password" required
                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-900 focus:border-brand-orange focus:outline-none transition">
                </div>
                <div>
                    <label class="text-xs font-bold uppercase text-gray-500 block mb-2">Role</label>
                    <select name="role"
                        class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-gray-900 focus:border-brand-orange focus:outline-none transition">
                        <option value="staff">Staff</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <button type="submit"
                    class="w-full py-3 rounded-xl bg-brand-orange hover:bg-brand-orange/90 text-white font-bold transition shadow-lg shadow-orange-500/40 mt-4">
                    Create Account
                </button>
            </form>
        </div>
    </div>
@endsection