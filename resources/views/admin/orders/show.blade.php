@extends('layouts.admin')

@section('content')
    <div class="max-w-6xl mx-auto">
        <!-- Back Button -->
        <a href="{{ url('admin/orders') }}"
            class="inline-flex items-center gap-2 text-gray-500 hover:text-white mb-6 transition text-sm">
            <i class="fas fa-arrow-left"></i> Back to Orders
        </a>

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 text-green-500 p-4 rounded-xl mb-6">
                <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-500/10 border border-red-500/20 text-red-500 p-4 rounded-xl mb-6">
                <i class="fas fa-exclamation-circle mr-2"></i> {{ session('error') }}
            </div>
        @endif

        <!-- Header Information -->
        <div class="flex justify-between items-start mb-8">
            <div>
                <h1 class="text-3xl font-bold mb-2">Order #{{ $order->order_id }}</h1>
                <p class="text-gray-400">Placed on {{ $order->created_at->format('d M Y, h:i A') }}</p>
            </div>
            <div>
                @if($order->status == 'Completed')
                    <span
                        class="bg-green-500 text-black px-4 py-2 rounded-lg text-sm font-bold shadow-[0_0_15px_rgba(34,197,94,0.4)]">Completed</span>
                @elseif($order->status == 'Approved')
                    <span
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm font-bold shadow-[0_0_15px_rgba(59,130,246,0.4)]">Production</span>
                @elseif($order->status == 'Rejected')
                    <span
                        class="bg-brand-red text-white px-4 py-2 rounded-lg text-sm font-bold shadow-[0_0_15px_rgba(255,45,70,0.4)]">Rejected</span>
                @else
                    <span class="bg-yellow-500 text-black px-4 py-2 rounded-lg text-sm font-bold">Pending Review</span>
                @endif
            </div>
        </div>

        <!-- Progress Stepper -->
        <div class="bg-brand-dark border border-white/10 rounded-2xl p-8 shadow-xl mb-8 relative overflow-hidden">
            <!-- Connecting Line -->
            <div class="absolute top-[50%] left-16 right-16 h-1 bg-white/5 -translate-y-1/2 z-0 hidden md:block"></div>

            <div class="relative z-10 grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
                <!-- Step 1: Payment -->
                <div class="flex flex-col items-center gap-3">
                    <div
                        class="w-12 h-12 rounded-full border-4 flex items-center justify-center text-lg font-bold bg-brand-dark transition-all duration-300
                            {{ $order->is_payment_verified ? 'border-green-500 text-green-500 shadow-[0_0_15px_rgba(34,197,94,0.3)]' : 'border-gray-600 text-gray-400' }}">
                        @if($order->is_payment_verified) <i class="fas fa-check"></i> @else 1 @endif
                    </div>
                    <span
                        class="text-sm font-bold {{ $order->is_payment_verified ? 'text-green-500' : 'text-gray-500' }}">Payment
                        Verified</span>
                </div>

                <!-- Step 2: Content -->
                <div class="flex flex-col items-center gap-3">
                    <div
                        class="w-12 h-12 rounded-full border-4 flex items-center justify-center text-lg font-bold bg-brand-dark transition-all duration-300
                            {{ $order->is_content_verified ? 'border-green-500 text-green-500 shadow-[0_0_15px_rgba(34,197,94,0.3)]' : 'border-gray-600 text-gray-400' }}">
                        @if($order->is_content_verified) <i class="fas fa-check"></i> @else 2 @endif
                    </div>
                    <span
                        class="text-sm font-bold {{ $order->is_content_verified ? 'text-green-500' : 'text-gray-500' }}">Content
                        Accepted</span>
                </div>

                <!-- Step 3: Production (Working) -->
                <div class="flex flex-col items-center gap-3">
                    <div
                        class="w-12 h-12 rounded-full border-4 flex items-center justify-center text-lg font-bold bg-brand-dark transition-all duration-300
                            {{ $order->status == 'Approved' || $order->status == 'Completed' ? 'border-blue-500 text-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.3)]' : 'border-gray-600 text-gray-400' }}">
                        3
                    </div>
                    <span
                        class="text-sm font-bold {{ $order->status == 'Approved' || $order->status == 'Completed' ? 'text-blue-500' : 'text-gray-500' }}">Production</span>
                </div>

                <!-- Step 4: Completed -->
                <div class="flex flex-col items-center gap-3">
                    <div
                        class="w-12 h-12 rounded-full border-4 flex items-center justify-center text-lg font-bold bg-brand-dark transition-all duration-300
                            {{ $order->status == 'Completed' ? 'border-green-500 text-green-500 shadow-[0_0_15px_rgba(34,197,94,0.3)]' : 'border-gray-600 text-gray-400' }}">
                        4
                    </div>
                    <span
                        class="text-sm font-bold {{ $order->status == 'Completed' ? 'text-green-500' : 'text-gray-500' }}">Order
                        Completed</span>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column: Details -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Customer Details -->
                <div class="bg-brand-dark border border-white/10 rounded-2xl p-6 shadow-xl">
                    <h3 class="text-lg font-bold mb-4 border-b border-white/5 pb-2">Customer Details</h3>
                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="block text-gray-500 text-xs uppercase mb-1">Full Name</span>
                            <span class="text-white font-medium">{{ $order->customer_name }}</span>
                        </div>
                        <div>
                            <span class="block text-gray-500 text-xs uppercase mb-1">Email Address</span>
                            <span class="text-white font-medium">{{ $order->customer_email }}</span>
                        </div>
                        <div>
                            <span class="block text-gray-500 text-xs uppercase mb-1">Phone Number</span>
                            <span class="text-white font-medium">{{ $order->phone }}</span>
                        </div>
                        <div>
                            <span class="block text-gray-500 text-xs uppercase mb-1">Company Name</span>
                            @if($order->company_name)
                                <span class="text-white font-medium">{{ $order->company_name }}</span>
                            @else
                                <span class="text-gray-600 italic">Not Provided</span>
                            @endif
                        </div>
                        <div class="col-span-2">
                            <span class="block text-gray-500 text-xs uppercase mb-1">Website URL</span>
                            <a href="{{ $order->website_url }}" target="_blank"
                                class="text-blue-400 hover:text-blue-300 underline truncate block">{{ $order->website_url }}</a>
                        </div>
                    </div>
                </div>

                <!-- Plan Details -->
                <div class="bg-brand-dark border border-white/10 rounded-2xl p-6 shadow-xl">
                    <h3 class="text-lg font-bold mb-4 border-b border-white/5 pb-2">Subscription & Strategy</h3>
                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div class="p-4 bg-black/20 rounded-xl border border-white/5">
                            <span class="block text-gray-500 text-xs uppercase mb-2">Selected Plan</span>
                            <span class="text-brand-red font-extrabold text-xl">{{ $order->plan }}</span>
                            <span class="block text-gray-400 text-xs mt-1">RM
                                {{ number_format($order->total_amount, 2) }}</span>
                        </div>
                        <div class="p-4 bg-black/20 rounded-xl border border-white/5">
                            <span class="block text-gray-500 text-xs uppercase mb-2">Strategy Choice</span>
                            <span class="text-white font-bold text-lg">{{ $order->strategy ?? 'Standard' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Workflow Actions -->
            <div class="lg:col-span-1 space-y-6">

                <!-- Staff Assignment -->
                <div class="bg-brand-dark border border-white/10 rounded-2xl p-6 shadow-xl">
                    <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                        <i class="fas fa-user-tag text-purple-500"></i> Staff Assignment
                    </h3>
                    <form action="{{ url('admin/orders/'.$order->id.'/assign') }}" method="POST">
                        @csrf
                        <div class="flex gap-2">
                            <select name="staff_id" class="flex-1 bg-black/30 border border-white/10 rounded-lg px-3 py-2 text-white text-sm focus:border-brand-red focus:outline-none">
                                <option value="">-- Unassigned --</option>
                                @foreach($staffMembers as $staff)
                                    <option value="{{ $staff->id }}" {{ $order->staff_id == $staff->id ? 'selected' : '' }}>{{ $staff->name }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="bg-white/10 hover:bg-white/20 text-white p-2 rounded-lg transition">
                                <i class="fas fa-save"></i>
                            </button>
                        </div>
                    </form>
                </div>
                
                <!-- Review Action Box -->
                <div class="bg-brand-dark border border-white/10 rounded-2xl p-6 shadow-xl sticky top-6">
                    <h3 class="text-lg font-bold mb-6 flex items-center gap-2">
                        <i class="fas fa-tasks text-gray-400"></i> Review Actions
                    </h3>

                    @if($order->status == 'Rejected')
                        <div class="bg-red-500/10 border border-red-500/20 p-4 rounded-xl text-center mb-4">
                            <i class="fas fa-ban text-red-500 text-4xl mb-3"></i>
                            <h4 class="text-red-500 font-bold">Order Rejected</h4>
                            <p class="text-red-400/80 text-xs mt-2 italic">"{{ $order->rejection_reason }}"</p>
                        </div>
                    @elseif($order->status == 'Completed')
                        <div class="bg-green-500/10 border border-green-500/20 p-4 rounded-xl text-center mb-4">
                            <i class="fas fa-check-circle text-green-500 text-4xl mb-3"></i>
                            <h4 class="text-green-500 font-bold">Order Completed</h4>
                            <a href="{{ Storage::url($order->report_file) }}" target="_blank"
                                class="text-xs text-blue-400 underline mt-2 block">Download Final Report</a>
                            <p class="text-gray-500 text-xs mt-2">Completed on
                                {{ $order->completed_at ? $order->completed_at->format('d M Y') : 'N/A' }}</p>
                        </div>
                    @else

                        <!-- Workflow Steps for Pending/Approved -->
                        <div class="space-y-4">

                            <!-- Step 1: Verify Payment -->
                            <div
                                class="flex items-center justify-between p-3 rounded-lg bg-black/20 border {{ $order->is_payment_verified ? 'border-green-500/30' : 'border-white/5' }}">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-2 h-2 rounded-full {{ $order->is_payment_verified ? 'bg-green-500' : 'bg-red-500' }}">
                                    </div>
                                    <span class="text-sm font-medium">Verify Payment</span>
                                </div>
                                @if($order->status == 'Pending')
                                    <a href="{{ url('admin/orders/' . $order->id . '/verify-payment') }}"
                                        class="text-xs px-3 py-1 rounded border transition {{ $order->is_payment_verified ? 'border-green-500 text-green-500 hover:bg-green-500/10' : 'border-gray-600 text-gray-400 hover:text-white hover:border-gray-400' }}">
                                        {{ $order->is_payment_verified ? 'Verified' : 'Verify' }}
                                    </a>
                                @else
                                    <i class="fas fa-check text-green-500"></i>
                                @endif
                            </div>

                            <!-- Step 2: Verify Content -->
                            <div
                                class="flex items-center justify-between p-3 rounded-lg bg-black/20 border {{ $order->is_content_verified ? 'border-green-500/30' : 'border-white/5' }}">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-2 h-2 rounded-full {{ $order->is_content_verified ? 'bg-green-500' : 'bg-red-500' }}">
                                    </div>
                                    <span class="text-sm font-medium">Verify Content</span>
                                </div>
                                @if($order->status == 'Pending')
                                    <a href="{{ url('admin/orders/' . $order->id . '/verify-content') }}"
                                        class="text-xs px-3 py-1 rounded border transition {{ $order->is_content_verified ? 'border-green-500 text-green-500 hover:bg-green-500/10' : 'border-gray-600 text-gray-400 hover:text-white hover:border-gray-400' }}">
                                        {{ $order->is_content_verified ? 'Verified' : 'Check' }}
                                    </a>
                                @else
                                    <i class="fas fa-check text-green-500"></i>
                                @endif
                            </div>

                            <!-- Seprator -->
                            <hr class="border-white/5 my-4">

                            <!-- Main Actions -->
                            @if($order->status == 'Pending')
                                <div class="grid grid-cols-2 gap-3">
                                    <button onclick="openRejectModal()"
                                        class="py-3 rounded-lg border border-brand-red text-brand-red font-bold hover:bg-brand-red hover:text-white transition">
                                        Reject
                                    </button>

                                    @if($order->is_payment_verified && $order->is_content_verified)
                                        <a href="{{ url('admin/orders/' . $order->id . '/approve') }}"
                                            class="py-3 rounded-lg bg-green-600 text-white font-bold hover:bg-green-700 transition flex items-center justify-center">
                                            Approve
                                        </a>
                                    @else
                                        <button disabled
                                            class="py-3 rounded-lg bg-gray-700 text-gray-500 font-bold cursor-not-allowed text-sm">
                                            Approve (Locked)
                                        </button>
                                    @endif
                                </div>
                                @if(!$order->is_payment_verified || !$order->is_content_verified)
                                    <p class="text-xs text-center text-gray-500 mt-2">Verify both items to enable approval.</p>
                                @endif
                            @endif

                            @if($order->status == 'Approved')
                                <div class="mt-4">
                                    <h4 class="text-sm font-bold text-blue-400 mb-2">Finalize Order</h4>
                                    <form action="{{ url('admin/orders/' . $order->id . '/complete') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <label class="block text-xs text-gray-500 mb-2">Upload Final Report (PDF/Link)</label>
                                        <input type="file" name="report_file"
                                            class="w-full text-xs bg-black/30 border border-white/10 rounded-lg p-2 mb-3 text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-brand-red file:text-white hover:file:bg-red-700">

                                        <button type="submit"
                                            class="w-full py-3 rounded-lg bg-green-600 text-white font-bold hover:bg-green-700 transition shadow-[0_0_15px_rgba(34,197,94,0.3)]">
                                            Upload & Complete
                                        </button>
                                    </form>
                                </div>
                            @endif

                        </div>

                    @endif
                </div>

            </div>
        </div>
    </div>

    <!-- Reject Modal -->
    <div id="rejectModal"
        class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-brand-dark border border-white/10 rounded-2xl w-full max-w-md p-6 shadow-2xl relative">
            <button onclick="closeRejectModal()" class="absolute top-4 right-4 text-gray-500 hover:text-white">
                <i class="fas fa-times"></i>
            </button>

            <h3 class="text-xl font-bold text-white mb-4">Reject Order</h3>
            <p class="text-gray-400 text-sm mb-6">Please specify the reason for rejection. This will be logged.</p>

            <form action="{{ url('admin/orders/' . $order->id . '/reject') }}" method="POST">
                @csrf
                <textarea name="reason" rows="4"
                    class="w-full bg-black/30 border border-white/10 rounded-xl p-3 text-white focus:border-brand-red focus:outline-none mb-6"
                    placeholder="e.g. Payment not received, Content violates policy..."></textarea>

                <div class="flex gap-3">
                    <button type="button" onclick="closeRejectModal()"
                        class="flex-1 py-3 rounded-lg border border-white/10 text-gray-400 hover:text-white hover:bg-white/5 transition font-bold">Cancel</button>
                    <button type="submit"
                        class="flex-1 py-3 rounded-lg bg-brand-red text-white font-bold hover:bg-red-600 transition shadow-lg shadow-red-900/50">Confirm
                        Rejection</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openRejectModal() {
            document.getElementById('rejectModal').classList.remove('hidden');
        }
        function closeRejectModal() {
            document.getElementById('rejectModal').classList.add('hidden');
        }
    </script>
@endsection