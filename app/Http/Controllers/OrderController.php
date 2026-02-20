<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderLog;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    private function checkLogin()
    {
        if (!Session::get('logged_in')) {
            return redirect('/admin/login')->send();
        }
    }

    public function index(Request $request)
    {
        if (!Session::get('logged_in'))
            return redirect('/admin/login');

        $query = Order::query();

        // Filter Logic
        if ($request->has('status') && $request->status != 'All') {
            $query->where('status', $request->status);
        } else {
            // Default view, maybe show all or just not completed? Let's show all for "List all orders"
        }

        if ($request->has('search')) {
            $s = $request->search;
            $query->where(function ($q) use ($s) {
                $q->where('order_id', 'like', "%$s%")
                    ->orWhere('customer_name', 'like', "%$s%");
            });
        }

        $orders = $query->orderBy('created_at', 'desc')->paginate(20);

        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        if (!Session::get('logged_in'))
            return redirect('/admin/login');

        $order = Order::findOrFail($id);
        $staffMembers = \App\Models\User::where('role', 'staff')->orWhere('role', 'admin')->get();
        return view('admin.orders.show', compact('order', 'staffMembers'));
    }

    public function assignStaff(Request $request, $id)
    {
        $this->checkLogin();
        $order = Order::findOrFail($id);
        $order->staff_id = $request->input('staff_id');
        $order->save();

        $staffName = $order->staff_id ? \App\Models\User::find($order->staff_id)->name : 'Unassigned';

        OrderLog::create([
            'order_id' => $id,
            'user' => 'Admin',
            'action' => 'Staff Assignment',
            'details' => "Order assigned to: $staffName"
        ]);

        return redirect()->back()->with('success', 'Staff assigned successfully.');
    }

    public function verifyPayment($id)
    {
        $this->checkLogin();
        $order = Order::findOrFail($id);
        $order->is_payment_verified = !$order->is_payment_verified; // Toggle
        $order->save();

        $status = $order->is_payment_verified ? 'Verified' : 'Unverified';
        OrderLog::create([
            'order_id' => $id,
            'user' => 'Admin',
            'action' => 'Payment Verification',
            'details' => "Payment marked as $status"
        ]);

        return redirect()->back()->with('success', "Payment status updated to $status.");
    }

    public function verifyContent($id)
    {
        $this->checkLogin();
        $order = Order::findOrFail($id);
        $order->is_content_verified = !$order->is_content_verified; // Toggle
        $order->save();

        $status = $order->is_content_verified ? 'Verified' : 'Unverified';
        OrderLog::create([
            'order_id' => $id,
            'user' => 'Admin',
            'action' => 'Content Verification',
            'details' => "Content marked as $status"
        ]);

        return redirect()->back()->with('success', "Content status updated to $status.");
    }

    public function approve($id)
    {
        $this->checkLogin();
        $order = Order::findOrFail($id);

        if (!$order->is_payment_verified || !$order->is_content_verified) {
            return redirect()->back()->with('error', 'Both Payment and Content must be verified before approval.');
        }

        $order->status = 'Approved';
        $order->approved_at = now();
        $order->save();

        OrderLog::create([
            'order_id' => $id,
            'user' => 'Admin',
            'action' => 'Order Approved',
            'details' => 'Order moved to production (Approved)'
        ]);

        return redirect()->back()->with('success', 'Order Approved successfully.');
    }

    public function reject(Request $request, $id)
    {
        $this->checkLogin();
        $order = Order::findOrFail($id);

        $order->status = 'Rejected';
        $order->rejection_reason = $request->input('reason');
        $order->save();

        OrderLog::create([
            'order_id' => $id,
            'user' => 'Admin',
            'action' => 'Order Rejected',
            'details' => 'Reason: ' . $request->input('reason')
        ]);

        return redirect()->back()->with('success', 'Order Rejected.');
    }

    public function complete(Request $request, $id)
    {
        $this->checkLogin();
        $request->validate([
            'report_file' => 'required|file|mimes:pdf,doc,docx,zip|max:10240'
        ]);

        $order = Order::findOrFail($id);

        if ($request->hasFile('report_file')) {
            $path = $request->file('report_file')->store('reports', 'public');
            $order->report_file = $path;
        }

        $order->status = 'Completed';
        $order->completed_at = now();
        $order->save();

        OrderLog::create([
            'order_id' => $id,
            'user' => 'Admin',
            'action' => 'Order Completed',
            'details' => 'Final Report Uploaded & Order Completed'
        ]);

        return redirect()->back()->with('success', 'Order Completed and Report Uploaded.');
    }
}
