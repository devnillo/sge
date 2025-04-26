<?php

namespace App\Http\Controllers;

use App\Models\Professor;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfessorController extends Controller
{
    public function register()
    {
        return view('professor.register');
    }
    public function login()
    {
        return view('professor.login');
    }
    
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:professores',
            // 'password' => 'required',
            'cpf' => 'required|string|unique:professores',
            'escola_id' => 'required'
        ]);
        if($credentials){
            $professor = new Professor();
            $professor->name = $credentials['name'];
            $professor->uuid = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
            $professor->email = $credentials['email'];
            $professor->cpf = $credentials['cpf'];
            $professor->escola_id = $credentials['escola_id'];
            // $professor->password = Hash::make($credentials['name']);
            $professor->password = Hash::make(substr($credentials['cpf'], 0, 6));
            $professor->save();

            return redirect()->route('admin.home');
        }
        return back()->withErrors($credentials);
    }
    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'uuid' => 'required',
            'password' => 'required'
        ], [
            'uuid' => 'Código de professor inválido.',
            'password' => 'Digite a senha.'
        ]);
        $professor = Professor::where('uuid', $credentials['uuid'])->first();
        if ($credentials && $professor) {
            if (Auth::guard('professor')->attempt($credentials)) {
                return redirect()->intended('/professor/home');
            }
            
        }
        return back()->withErrors($credentials);
    }
}
