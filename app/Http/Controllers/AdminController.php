<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string',
        ]);
        if ($credentials) {
            $admin = new Admin();
            $admin->name = $credentials['name'];
            $admin->email = $credentials['email'];
            $admin->password = Hash::make($credentials['password']);
            $admin->save();
            return redirect()->route('admin.login')->with('success', 'Admin registered successfully.');
        }

        return redirect()->back()->withErrors($credentials);
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);;
    }
}
