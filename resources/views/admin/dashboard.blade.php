@extends('layouts.admin')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
            <div>
                <h1 class="text-3xl font-bold text-[#3c4043]">BI Dashboard</h1>
                <p class="text-[#5f6368] text-sm mt-1">Real-time business performance.</p>
            </div>
            <div class="text-right">
                <span
                    class="bg-white px-4 py-2 rounded-full text-xs font-mono text-[#5f6368] border border-gray-200 shadow-sm">
                    {{ date('d M Y') }}
                </span>
            </div>
        </div>

        <style>
            @keyframes highlightFade {
                0% {
                    background-color: rgba(249, 115, 22, 0.2);
                }

                100% {
                    background-color: transparent;
                }
            }

            .flash-row {
                animation: highlightFade 3s ease-out;
            }
        </style>

        <!-- Metrics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <!-- Today's Sales -->
            <div
                class="bg-[#ffffff] border border-[#e8eaed] rounded-2xl p-6 shadow-sm hover:shadow-md transition duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-xs text-[#5f6368] uppercase font-bold tracking-wider">Today's Sales</div>
                    <i class="fas fa-chart-line text-[#4285f4]"></i>
                </div>
                <div class="text-3xl font-normal text-[#4285f4]">RM {{ number_format($todaySales ?? 0, 2) }}</div>
                <div class="text-xs text-green-600 mt-2 flex items-center gap-1">
                    <i class="fas fa-arrow-up"></i> Live
                </div>
            </div>

            <!-- Today's Orders -->
            <div
                class="bg-[#ffffff] border border-[#e8eaed] rounded-2xl p-6 shadow-sm hover:shadow-md transition duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-xs text-[#5f6368] uppercase font-bold tracking-wider">Today's Orders</div>
                    <i class="fas fa-eye text-[#7b1fa2]"></i>
                </div>
                <div class="text-3xl font-normal text-[#7b1fa2]" id="today-orders-count">{{ $todayOrders ?? 0 }}</div>
                <div class="text-xs text-gray-500 mt-2">New submissions</div>
            </div>

            <!-- Total Revenue (Lifetime) -->
            <div
                class="bg-[#ffffff] border border-[#e8eaed] rounded-2xl p-6 shadow-sm hover:shadow-md transition duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-xs text-[#5f6368] uppercase font-bold tracking-wider">Total Revenue</div>
                    <i class="fas fa-wallet text-[#00897b]"></i>
                </div>
                <div class="text-3xl font-normal text-[#00897b]">RM {{ number_format($totalRevenue ?? 0, 2) }}</div>
            </div>

            <!-- Pending Orders -->
            <div
                class="bg-[#ffffff] border border-[#e8eaed] rounded-2xl p-6 shadow-sm hover:shadow-md transition duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-xs text-[#5f6368] uppercase font-bold tracking-wider">Pending Orders</div>
                    <i class="fas fa-clock text-[#f4511e]"></i>
                </div>
                <div class="text-3xl font-normal text-[#f4511e]" id="pending-orders-count">{{ $pendingCount ?? 0 }}</div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Sales Trend Chart (Width: 2/3) -->
            <div class="lg:col-span-2 bg-[#ffffff] border border-[#e8eaed] rounded-2xl p-6 shadow-sm">
                <h3 class="text-lg font-bold mb-6 text-[#3c4043]">30-Day Sales Trend</h3>
                <div class="relative h-[300px] w-full">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>

            <!-- Plan Popularity Chart (Width: 1/3) -->
            <div class="lg:col-span-1 bg-[#ffffff] border border-[#e8eaed] rounded-2xl p-6 shadow-sm">
                <h3 class="text-lg font-bold mb-6 text-[#3c4043]">Plan Popularity</h3>
                <div class="relative h-[300px] w-full flex items-center justify-center">
                    <canvas id="planChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Fulfillment Section -->
        <!-- Main Order Table (Dynamic) -->
        <div class="bg-[#ffffff] border border-[#e8eaed] rounded-2xl p-6 shadow-sm relative">

            <div class="flex flex-col xl:flex-row justify-between items-start xl:items-center gap-4 mb-6">
                <!-- Tabs -->
                <div class="flex bg-[#f8f9fa] p-1 rounded-xl overflow-x-auto max-w-full border border-[#e8eaed]">
                    <a href="{{ url('admin') }}?status=Pending" data-status="Pending"
                        class="tab-link px-4 py-2 rounded-lg text-sm font-bold whitespace-nowrap transition {{ ($statusTab ?? 'Pending') == 'Pending' ? 'bg-[#4285f4] text-white shadow-sm' : 'text-[#3c4043] hover:bg-[#e8eaed]' }}">Pending</a>
                    <a href="{{ url('admin') }}?status=Processing" data-status="Processing"
                        class="tab-link px-4 py-2 rounded-lg text-sm font-bold whitespace-nowrap transition {{ ($statusTab ?? '') == 'Processing' ? 'bg-[#7b1fa2] text-white shadow-sm' : 'text-[#3c4043] hover:bg-[#e8eaed]' }}">Processing</a>
                    <a href="{{ url('admin') }}?status=Completed" data-status="Completed"
                        class="tab-link px-4 py-2 rounded-lg text-sm font-bold whitespace-nowrap transition {{ ($statusTab ?? '') == 'Completed' ? 'bg-[#00897b] text-white shadow-sm' : 'text-[#3c4043] hover:bg-[#e8eaed]' }}">Completed</a>
                    <a href="{{ url('admin') }}?status=Cancelled" data-status="Cancelled"
                        class="tab-link px-4 py-2 rounded-lg text-sm font-bold whitespace-nowrap transition {{ ($statusTab ?? '') == 'Cancelled' ? 'bg-[#f4511e] text-white' : 'text-[#3c4043] hover:bg-[#e8eaed]' }}">Cancelled</a>
                    <a href="{{ url('admin') }}?status=All" data-status="All"
                        class="tab-link px-4 py-2 rounded-lg text-sm font-bold whitespace-nowrap transition {{ ($statusTab ?? '') == 'All' ? 'bg-white text-[#3c4043] shadow-sm border border-[#e8eaed]' : 'text-[#3c4043] hover:bg-[#e8eaed]' }}">All
                        Orders</a>
                </div>

                <!-- Export Button -->
                <a href="{{ url('admin/export/orders') }}"
                    class="bg-[#0f9d58] hover:bg-[#0b8043] text-white text-sm font-bold py-2 px-4 rounded-lg flex items-center gap-2 transition shadow-sm whitespace-nowrap border border-[#0f9d58]">
                    <i class="fas fa-file-excel"></i> Export Excel
                </a>
            </div>

            <form action="{{ url('admin') }}" method="GET"
                class="mb-6 grid grid-cols-1 md:grid-cols-4 gap-4 bg-[#ffffff] p-4 rounded-xl border border-[#e8eaed]">
                <input type="hidden" name="status" value="{{ $statusTab ?? 'Pending' }}">

                <!-- Search -->
                <div class="relative">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-[#5f6368] text-xs"></i>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search Customer/ID..."
                        class="w-full bg-[#ffffff] border border-[#dadce0] rounded-lg pl-9 pr-3 py-2 text-sm text-[#3c4043] focus:border-[#4285f4] focus:outline-none placeholder-[#5f6368]">
                </div>

                <!-- Date Range -->
                <div class="flex items-center gap-2">
                    <input type="date" name="date_start" value="{{ request('date_start') }}"
                        class="w-full bg-[#ffffff] border border-[#dadce0] rounded-lg px-3 py-2 text-sm text-[#3c4043] focus:border-[#4285f4] focus:outline-none placeholder-[#5f6368]">
                </div>

                <!-- Amount Range -->
                <div class="flex items-center gap-2">
                    <input type="number" name="min_amount" placeholder="Min RM" value="{{ request('min_amount') }}"
                        class="w-1/2 bg-[#ffffff] border border-[#dadce0] rounded-lg px-3 py-2 text-sm text-[#3c4043] focus:border-[#4285f4] focus:outline-none placeholder-[#5f6368]">
                    <input type="number" name="max_amount" placeholder="Max RM" value="{{ request('max_amount') }}"
                        class="w-1/2 bg-[#ffffff] border border-[#dadce0] rounded-lg px-3 py-2 text-sm text-[#3c4043] focus:border-[#4285f4] focus:outline-none placeholder-[#5f6368]">
                </div>

                <div class="flex gap-2">
                    <button type="submit"
                        class="bg-[#4285f4] hover:bg-[#3367d6] text-white font-bold py-2 px-4 rounded-lg transition text-sm flex-1 shadow-sm border border-[#4285f4]">
                        Filter
                    </button>
                    @if(request()->has('search') || request()->has('date_start') || request()->has('min_amount'))
                        <a href="{{ url('admin') }}?status={{ $statusTab ?? 'Pending' }}"
                            class="bg-[#ffffff] hover:bg-[#f8f9fa] text-[#5f6368] hover:text-[#3c4043] px-4 py-2 rounded-lg text-sm transition flex items-center justify-center border border-[#dadce0]">
                            <i class="fas fa-times"></i>
                        </a>
                    @endif
                </div>
            </form>

            <form action="{{ url('admin/batch') }}" method="POST" id="batchForm">
                @csrf
                <!-- Batch Action Bar (Hidden by default) -->
                <div id="batchActionBar"
                    class="hidden mb-4 bg-orange-50 border border-orange-200 p-3 rounded-xl flex items-center justify-between">
                    <div class="text-brand-red font-bold text-sm">
                        <span id="selectedCount">0</span> orders selected
                    </div>
                    <div class="flex gap-2">
                        <button type="submit" name="action" value="processing"
                            class="text-xs bg-brand-red hover:bg-brand-red-hover text-white px-3 py-1.5 rounded-lg transition font-bold">
                            Mark Processing
                        </button>
                        <button type="submit" name="action" value="completed"
                            class="text-xs bg-green-600 hover:bg-green-700 text-white px-3 py-1.5 rounded-lg transition font-bold">
                            Mark Completed
                        </button>
                        <button type="submit" name="action" value="cancelled"
                            class="text-xs bg-gray-600 hover:bg-gray-700 text-white px-3 py-1.5 rounded-lg transition font-bold">
                            Mark Cancelled
                        </button>
                        <button type="submit" name="action" value="delete"
                            class="text-xs bg-red-900 hover:bg-red-800 text-white px-3 py-1.5 rounded-lg transition font-bold ml-2 border border-red-700">
                            Delete
                        </button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-[#5f6368] text-xs uppercase border-b border-[#e8eaed]">
                                <th class="p-4 w-10">
                                    <input type="checkbox" id="selectAll" onclick="toggleAll(this)"
                                        class="rounded bg-[#ffffff] border-[#dadce0] text-[#4285f4] focus:ring-0 cursor-pointer">
                                </th>
                                <th class="p-4 font-bold">Order ID</th>
                                <th class="p-4 font-bold">Customer</th>
                                <th class="p-4 font-bold">Plan / Amount</th>
                                <th class="p-4 font-bold">Status</th>
                                <th class="p-4 font-bold">Date</th>
                                <th class="p-4 font-bold text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm" id="orders-table-body">
                            @include('admin.partials.dashboard_rows')
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <!-- Recent Activity (MOCK DATA for Visualization) -->
        <h2 class="text-xl font-bold mb-4 mt-8 px-2 text-[#3c4043]">Recent Activity</h2>
        <div class="h-48 overflow-y-auto pr-2 space-y-2 custom-scrollbar">
            @forelse($recentOrders as $order)
                <div
                    class="bg-[#ffffff] border border-[#e8eaed] p-3 rounded-xl flex items-center justify-between text-sm hover:bg-[#f8f9fa] transition">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-2 h-2 rounded-full {{ $order->status == 'Paid' ? 'bg-[#00897b]' : ($order->status == 'Processing' ? 'bg-[#f4511e]' : ($order->status == 'Rejected' ? 'bg-red-500' : 'bg-[#ff9800]')) }}">
                        </div>
                        <div>
                            <span class="font-bold text-[#3c4043]">Order #{{ $order->order_id }}</span>
                            <span class="text-[#5f6368]"> from {{ $order->customer_name }}</span>
                            <div class="text-xs text-[#5f6368]">Status: {{ $order->status }}</div>
                        </div>
                    </div>
                    <div class="text-xs text-[#5f6368] font-mono">
                        {{ $order->created_at->diffForHumans() }}
                    </div>
                </div>
            @empty
                <div class="text-center text-[#5f6368] py-4">No recent activity</div>
            @endforelse
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // AJAX Tabs
            const tabLinks = document.querySelectorAll('.tab-link');
            const tableBody = document.getElementById('orders-table-body');

            tabLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Visual Update
                    tabLinks.forEach(l => {
                        l.classList.remove('bg-brand-red', 'bg-orange-500', 'bg-green-500', 'bg-red-100', 'bg-white', 'text-white', 'text-red-600', 'text-gray-900', 'shadow-md', 'shadow-sm', 'border', 'border-gray-200');
                        l.classList.add('text-gray-600');
                    });

                    // Simple logic to re-apply active classes based on status text
                    this.classList.remove('text-gray-600');
                    // this.classList.add('text-white', 'shadow-md'); // Default active style, specific overrides below

                    const status = this.getAttribute('data-status');
                    if (status === 'Pending') {
                        this.classList.add('bg-brand-red', 'text-white', 'shadow-md');
                    }
                    else if (status === 'Processing') {
                        this.classList.add('bg-orange-500', 'text-white', 'shadow-md');
                    }
                    else if (status === 'Completed') {
                        this.classList.add('bg-green-500', 'text-white', 'shadow-md');
                    }
                    else if (status === 'Cancelled') {
                        this.classList.add('bg-red-100', 'text-red-600');
                    }
                    else {
                        this.classList.add('bg-white', 'text-gray-900', 'shadow-sm', 'border', 'border-gray-200');
                    }

                    // Fetch Content
                    fetch(this.href, {
                        headers: { 'X-Requested-With': 'XMLHttpRequest' }
                    })
                        .then(response => response.text())
                        .then(html => {
                            tableBody.innerHTML = html;
                            history.pushState(null, '', this.href);
                            // Re-initialize batch bar logic for new content
                            updateBatchBar();
                            const newCheckboxes = document.querySelectorAll('.order-checkbox');
                            newCheckboxes.forEach(cb => {
                                cb.addEventListener('change', function () {
                                    if (!this.checked && selectAll) selectAll.checked = false;
                                    updateBatchBar();
                                });
                            });
                            if (selectAll) selectAll.checked = false; // Uncheck select all when new content loads
                        })
                        .catch(error => console.error('Error:', error));
                });
            });

            // Live Sync Logic (15s Polling)
            let latestSeenId = {{ $orders->first()->id ?? 0 }};
            const todayCountEl = document.getElementById('today-orders-count');
            const pendingCountEl = document.getElementById('pending-orders-count');

            setInterval(() => {
                fetch('{{ url("admin/api/updates") }}')
                    .then(res => res.json())
                    .then(data => {
                        // 1. Update Counters
                        if (todayCountEl) todayCountEl.innerText = data.today_orders;
                        if (pendingCountEl) pendingCountEl.innerText = data.pending_count;

                        // 2. Check for new orders
                        if (data.latest_order_id > latestSeenId) {

                            // Check if we are on Pending tab to prepend
                            const activeTab = document.querySelector('.tab-link.bg-brand-red'); // Pending tab has this class
                            if (activeTab || !document.querySelector('.tab-link.shadow-md')) { // Or if no tab selected (default)

                                tableBody.innerHTML = data.html;

                                // Add animation to the new rows (top ones)
                                const rows = tableBody.querySelectorAll('tr');
                                if (rows.length > 0) rows[0].classList.add('flash-row');

                                // Re-init batch listeners
                                if (window.updateBatchBar) window.updateBatchBar();
                                const newCheckboxes = document.querySelectorAll('.order-checkbox');
                                newCheckboxes.forEach(cb => {
                                    cb.addEventListener('change', function () {
                                        if (!this.checked && selectAll) selectAll.checked = false;
                                        if (window.updateBatchBar) window.updateBatchBar();
                                    });
                                });
                            }
                            latestSeenId = data.latest_order_id;
                        }
                    })
                    .catch(err => console.error('Sync Error:', err));
            }, 15000);

            // Checkbox & Batch Logic
            window.toggleAll = function (source) {
                const checkboxes = document.getElementsByClassName('order-checkbox');
                for (var i = 0, n = checkboxes.length; i < n; i++) {
                    checkboxes[i].checked = source.checked;
                }
                updateBatchBar();
            }

            window.updateBatchBar = function () {
                const checkboxes = document.querySelectorAll('.order-checkbox:checked');
                const count = checkboxes.length;
                const bar = document.getElementById('batchActionBar');
                const countSpan = document.getElementById('selectedCount');

                if (countSpan) countSpan.innerText = count;

                if (bar) {
                    if (count > 0) {
                        bar.classList.remove('hidden');
                    } else {
                        bar.classList.add('hidden');
                    }
                }
            }

            const selectAll = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('.order-checkbox');

            if (selectAll) {
                selectAll.addEventListener('change', function () {
                    Array.from(checkboxes).forEach(cb => cb.checked = this.checked);
                    updateBatchBar();
                });
            }

            Array.from(checkboxes).forEach(cb => {
                cb.addEventListener('change', function () {
                    if (!this.checked && selectAll) selectAll.checked = false;
                    updateBatchBar();
                });
            });

            // --- Charts Configuration ---
            const commonOptions = {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { labels: { color: '#5f6368', font: { family: 'Inter' } } }
                },
                scales: {
                    y: { grid: { color: '#e8eaed' }, border: { dash: [4, 4] }, ticks: { color: '#5f6368' } },
                    x: { grid: { color: '#e8eaed' }, border: { dash: [4, 4] }, ticks: { color: '#5f6368' } }
                }
            };

            // Sales Trend Chart (Mock Data)
            const salesCanvas = document.getElementById('salesChart');
            if (salesCanvas) {
                const ctxSales = salesCanvas.getContext('2d');
                new Chart(ctxSales, {
                    type: 'line',
                    data: {
                        labels: {!! json_encode($chartLabels) !!},
                        datasets: [{
                            label: 'Sales (RM)',
                            data: {!! json_encode($chartValues) !!}, // Dynamic Data
                            borderColor: '#f97316',
                            backgroundColor: 'rgba(249, 115, 22, 0.1)',
                            borderWidth: 2,
                            tension: 0.4,
                            fill: true,
                            pointBackgroundColor: '#f97316'
                        }]
                    },
                    options: commonOptions
                });
            }

            // Plan Popularity Chart (Mock Data)
            const planCanvas = document.getElementById('planChart');
            if (planCanvas) {
                const ctxPlan = planCanvas.getContext('2d');
                new Chart(ctxPlan, {
                    type: 'doughnut',
                    data: {
                        labels: {!! json_encode($planLabels) !!},
                        datasets: [{
                            data: {!! json_encode($planValues) !!}, // Dynamic Data
                            backgroundColor: ['#4285f4', '#7b1fa2', '#00897b', '#f4511e', '#ff9800'],
                            borderWidth: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: { position: 'bottom', labels: { color: '#5f6368' } }
                        }
                    }
                });
            }
        });
    </script>
@endsection