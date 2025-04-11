<?php

namespace App\Http\Controllers;

use App\Models\Diretor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DiretorController extends Controller
{
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
}
