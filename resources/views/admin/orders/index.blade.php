@extends('layouts.admin')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Order Management</h1>
            <div class="flex gap-2">
                <a href="{{ url('admin/orders?status=Pending') }}"
                    class="px-4 py-2 rounded-lg border transition text-sm font-medium {{ request('status') == 'Pending' ? 'bg-brand-red text-white border-brand-red shadow-md' : 'bg-white border-gray-200 text-gray-600 hover:bg-gray-50' }}">Pending</a>
                <a href="{{ url('admin/orders?status=Approved') }}"
                    class="px-4 py-2 rounded-lg border transition text-sm font-medium {{ request('status') == 'Approved' ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white border-gray-200 text-gray-600 hover:bg-gray-50' }}">Approved</a>
                <a href="{{ url('admin/orders?status=Completed') }}"
                    class="px-4 py-2 rounded-lg border transition text-sm font-medium {{ request('status') == 'Completed' ? 'bg-green-600 text-white border-green-600 shadow-md' : 'bg-white border-gray-200 text-gray-600 hover:bg-gray-50' }}">Completed</a>
                <a href="{{ url('admin/orders?status=Rejected') }}"
                    class="px-4 py-2 rounded-lg border transition text-sm font-medium {{ request('status') == 'Rejected' ? 'bg-red-600 text-white border-red-600 shadow-md' : 'bg-white border-gray-200 text-gray-600 hover:bg-gray-50' }}">Rejected</a>
                <a href="{{ url('admin/orders?status=All') }}"
                    class="px-4 py-2 rounded-lg border transition text-sm font-medium {{ request('status') == 'All' || !request('status') ? 'bg-slate-800 text-white border-slate-800 shadow-md' : 'bg-white border-gray-200 text-gray-600 hover:bg-gray-50' }}">All</a>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="mb-6 bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
            <form action="" method="GET" class="flex gap-4">
                <input type="hidden" name="status" value="{{ request('status') }}">
                <input type="text" name="search" value="{{ request('search') }}"
                    placeholder="Search by Order ID or Customer Name..."
                    class="flex-1 bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 text-gray-900 focus:border-brand-red focus:outline-none">
                <button type="submit"
                    class="bg-brand-red hover:bg-brand-red-hover text-white font-bold py-2 px-6 rounded-lg transition shadow-md hover:shadow-lg">
                    Search
                </button>
            </form>
        </div>

        <!-- Orders Table -->
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-xl shadow-gray-200/50">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-500 text-xs uppercase border-b border-gray-200">
                        <th class="p-6 font-bold">Order ID</th>
                        <th class="p-6 font-bold">Customer</th>
                        <th class="p-6 font-bold">Plan / Amount</th>
                        <th class="p-6 font-bold">Status</th>
                        <th class="p-6 font-bold">Date</th>
                        <th class="p-6 font-bold text-right py-4">Action</th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    @forelse($orders as $order)
                        <tr class="hover:bg-gray-50 transition group">
                            <td class="p-6 font-mono text-gray-600">#{{ $order->order_id }}</td>
                            <td class="p-6">
                                <div class="font-bold text-gray-900">{{ $order->customer_name }}</div>
                                <div class="text-xs text-gray-500">{{ $order->customer_email }}</div>
                            </td>
                            <td class="p-6">
                                <div class="text-brand-red font-bold">{{ $order->plan }}</div>
                                <div class="text-xs text-gray-500">RM {{ number_format($order->total_amount, 2) }}</div>
                            </td>
                            <td class="p-6">
                                @if($order->status == 'Completed')
                                    <span
                                        class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold border border-green-200">Completed</span>
                                @elseif($order->status == 'Approved')
                                    <span
                                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-bold border border-blue-200">In
                                        Progress</span>
                                @elseif($order->status == 'Rejected')
                                    <span
                                        class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-bold border border-red-200">Rejected</span>
                                @else
                                    <span
                                        class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-bold border border-yellow-200">{{ $order->status }}</span>
                                @endif
                            </td>
                            <td class="p-6 text-gray-500 text-xs">{{ $order->created_at->format('d M Y') }}</td>
                            <td class="p-6 text-right">
                                <a href="{{ url('admin/orders/' . $order->id) }}"
                                    class="inline-block bg-slate-900 hover:bg-slate-800 text-white px-4 py-2 rounded-lg text-xs font-bold transition shadow-md">
                                    Manage
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-gray-500">No orders found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="p-4 border-t border-gray-200">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection