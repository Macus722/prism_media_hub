<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    private function checkLogin()
    {
        if (!Session::get('logged_in')) {
            return redirect('/admin/login')->send();
        }
    }

    public function index()
    {
        if (!Session::get('logged_in'))
            return redirect('/admin/login');

        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.staff.index', compact('users'));
    }

    public function store(Request $request)
    {
        $this->checkLogin();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|in:admin,staff',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->back()->with('success', 'New staff member added successfully.');
    }

    public function destroy($id)
    {
        $this->checkLogin();
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Staff member deleted.');
    }
}
