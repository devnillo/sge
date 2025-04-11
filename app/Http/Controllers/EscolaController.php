<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EscolaController extends Controller
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
            $escola = new Escola();
            $escola->name = $credentials['name'];
            $escola->email = $credentials['email'];
            $escola->admin_id = $credentials['admin_id'];
            $escola->password = Hash::make($credentials['password']);
            $escola->save();
            return redirect('/admin/dashboard')->with('success', 'Admin registered successfully.');
        }

        return redirect()->back()->withErrors($credentials);
    }
}
