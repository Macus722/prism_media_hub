@if(isset($orders) && count($orders) > 0)
    @foreach($orders as $order)
        <tr class="border-b border-[#e8eaed] hover:bg-[#f8f9fa] transition group">
            <td class="p-4">
                <input type="checkbox" name="order_ids[]" value="{{ $order->id }}"
                    class="order-checkbox rounded bg-[#ffffff] border-[#dadce0] text-[#4285f4] focus:ring-0 cursor-pointer"
                    onchange="updateBatchBar()">
            </td>
            <td class="p-4 font-mono text-[#5f6368]">{{ $order->order_id }}</td>
            <td class="p-4">
                <div class="font-bold text-[#3c4043]">{{ $order->customer_name }}</div>
                <div class="text-xs text-[#5f6368]">{{ $order->customer_email }}</div>
            </td>
            <td class="p-4">
                <span
                    class="px-2 py-1 rounded text-xs font-bold uppercase bg-[#f1f3f4] text-[#3c4043]">{{ $order->plan }}</span>
                <div class="mt-1 text-[#5f6368] font-mono">RM {{ number_format($order->total_amount) }}</div>
            </td>
            <td class="p-4">
                @if($order->status == 'Paid')
                    <span
                        class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-700 border border-green-200">
                        <i class="fas fa-check-circle text-[10px]"></i> Completed
                    </span>
                @elseif($order->status == 'Rejected')
                    <span
                        class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold bg-red-100 text-red-700 border border-red-200">
                        <i class="fas fa-times-circle text-[10px]"></i> Cancelled
                    </span>
                @elseif($order->status == 'Processing')
                    <span
                        class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold bg-orange-100 text-orange-700 border border-orange-200">
                        <i class="fas fa-spinner fa-spin text-[10px]"></i> Processing
                    </span>
                @else
                    <span
                        class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold bg-yellow-100 text-yellow-700 border border-yellow-200">
                        <i class="fas fa-clock text-[10px]"></i> Pending
                    </span>
                @endif
            </td>
            <td class="p-4 text-[#5f6368]">{{ $order->created_at->format('M d, H:i') }}</td>
            <td class="p-4 text-right">
                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition">
                    <!-- View Invoice (PDF) -->
                    <a href="{{ url('admin/invoice/' . $order->id . '/download') }}"
                        class="w-8 h-8 rounded-lg bg-slate-800 hover:bg-slate-700 text-white flex items-center justify-center transition shadow-sm"
                        title="Download Invoice">
                        <i class="fas fa-file-pdf"></i>
                    </a>

                    <!-- Edit -->
                    <a href="{{ url('admin/edit/' . $order->id) }}"
                        class="w-8 h-8 rounded-lg bg-brand-red hover:bg-brand-red-hover text-white flex items-center justify-center transition shadow-sm"
                        title="Edit Order">
                        <i class="fas fa-edit"></i>
                    </a>

                    @if($order->status == 'Pending')
                        <!-- Mark Pending -> Processing -->
                        <a href="{{ url('admin/paid/' . $order->id) }}"
                            class="w-8 h-8 rounded-lg bg-green-600 hover:bg-green-700 text-white flex items-center justify-center transition shadow-sm"
                            title="Accept (Move to Processing)">
                            <i class="fas fa-check-circle"></i>
                        </a>

                        <!-- Reject -->
                        <a href="{{ url('admin/reject/' . $order->id) }}"
                            onclick="return confirm('Are you sure you want to reject this order?')"
                            class="w-8 h-8 rounded-lg bg-red-600 hover:bg-red-700 text-white flex items-center justify-center transition shadow-sm"
                            title="Reject Order">
                            <i class="fas fa-times-circle"></i>
                        </a>
                    @elseif($order->status == 'Processing')
                        <!-- Mark Processing -> Completed -->
                        <a href="{{ url('admin/completed/' . $order->id) }}"
                            class="w-8 h-8 rounded-lg bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition shadow-sm"
                            title="Mark Completed">
                            <i class="fas fa-rocket"></i>
                        </a>
                    @endif
                </div>
            </td>
        </tr>
    @endforeach
@else
    <tr>
        <td colspan="7" class="p-8 text-center text-[#5f6368]">
            <i class="fas fa-inbox text-2xl mb-2 opacity-50"></i>
            <p>No orders found.</p>
        </td>
    </tr>
@endif