<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfessorController extends Controller
{
    public function register()
    {
        return view('professor.register');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:professores',
            'password' => 'required',
            'escola_id' => 'required'
        ]);
        if($credentials){
            $professor = new Professor();
            $professor->name = $credentials['name'];
            $professor->email = $credentials['email'];
            $professor->escola_id = $credentials['escola_id'];
            $professor->password = Hash::make($credentials['name']);
            $professor->save();

            return redirect()->route('admin.home');
        }
        return back()->withErrors($credentials);
    }
}
