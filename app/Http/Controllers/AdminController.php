<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Escola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function home()
    {
        // $escola = new Escola();
        $escolas = Escola::where('admin_id', '=', Auth::guard('admin')->user()->id)->get();
        return view('admin.home', ['escolas' => $escolas]);
    }
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'password.required' => 'O campo senha é obrigatório.',
        ]);
        if ($credentials) {
            $admin = new Admin();
            $admin->name = $credentials['name'];
            $admin->email = $credentials['email'];
            $admin->password = Hash::make($credentials['password']);
            $admin->save();
            return redirect()->route('admin.login')->with('success', 'Admin registered successfully.');
        }

        return back()->withErrors($credentials);
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ], [
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser um endereço de email válido.',
            'password.required' => 'O campo senha é obrigatório.',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/home');
        }

        return back()->withErrors($credentials);
    }
}
