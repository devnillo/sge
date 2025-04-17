<?php

namespace App\Http\Controllers;

use App\Models\Diretor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DiretorController extends Controller
{
    public function home()
    {   
        $escola = Auth::guard('diretor')->user()->escola;
        return view('diretor.home', compact('escola'));
    }
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:escolas',
            'password' => 'required|string',
            'admin_id' => 'required',
        ]);
        if ($credentials) {
            $escola = new Diretor();
            $escola->name = $credentials['name'];
            $escola->email = $credentials['email'];
            $escola->password = Hash::make($credentials['password']);
            $escola->cpf = $credentials['admin_id'];
            $escola->bithdate = $credentials['admin_id'];
            $escola->pai = $credentials['admin_id'];
            $escola->mae = $credentials['admin_id'];
            $escola->escola_id = $credentials['admin_id'];
            $escola->save();
            return redirect('/admin/dashboard')->with('success', 'Admin registered successfully.');
        }

        return redirect()->back()->withErrors($credentials);
    }

    public function login(){
        return view('diretor.login');
    }
    public function loginStore(Request $request)
    {
        $credentials = $request->validate([
            'email' =>'required|string|email|max:255',
            'password' =>'required|string',
        ]);
        // return Auth::guard('diretor')->attempt(['email' => 'daniloprogamador2@gmail.com', 'password' => '121212']) ? 1 : 0;
        if (Auth::guard('diretor')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('diretor/home');
        }
        return back()->withErrors([
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O email deve sr válido.',
            'password.required' => 'O campo senha é obrigatório.'
        ]);
    }
}
