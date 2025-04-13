<?php

namespace App\Http\Controllers;

use App\Models\Escola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        ], [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'O email deve ser válido.',
            'email.unique' => 'O email já está em uso.',
            'password.required' => 'A senha é obrigatória.'
        ]);
        if ($credentials) {
            $escola = new Escola();
            $escola->name = $credentials['name'];
            $escola->email = $credentials['email'];
            $escola->admin_id = $credentials['admin_id'];
            $escola->password = Hash::make($credentials['password']);
            $escola->save();
            return redirect('/admin/home')->with('success', 'Admin registered successfully.');
        }

        return redirect()->back()->withErrors($credentials);
    }
    public function getAll(Request $request)
    {
        // echo  Auth::guard('admin')->user()->id;
        $escolas = Escola::where('admin_id', '=', Auth::guard('admin')->user()->id)->get();
        return view('escola.lista', ['escolas' => $escolas]);
    }
}
