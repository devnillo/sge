<?php

namespace App\Http\Controllers;

use App\Models\Diretor;
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
        
        return back()->withErrors($credentials);
    }
    public function getAll()
    {
        // echo  Auth::guard('admin')->user()->id;
        $escolas = Escola::where('admin_id', '=', Auth::guard('admin')->user()->id)->get();
        return view('escola.lista', ['escolas' => $escolas]);
    }

    public function escolaEditView(Request $request, $id){
        $escola = Escola::find($id);
        return view('escola.edit', ['escola' => $escola]);
    }
    public function escolaEditAction(Request $request, $id){
        $credentials = $request->validate([
            'name' =>'required|string|max:255',
            'email' =>'required|string|email|max:255',
            'password?' =>'string',
            // 'diretor_id' => 'required'
        ]);
        if ($credentials) {
            $escola = Escola::find($id);
            if (!empty($credentials['name'])) {
                $escola->name = $credentials['name'];
            }
            
            if (!empty($credentials['email'] && $escola->email != $credentials['email'])) {
                $escola->email = $credentials['email'];
            }
            else{
                $escola->email = $escola->email;
            }
            
            if (!empty($credentials['password'])) {
                $escola->password = Hash::make($credentials['password']);
            }
            $escola->save();
            return redirect('admin/escola/lista')->with('success', 'Escola editada com sucesso.');
        }
        return redirect()->back()->withErrors($credentials);
    }
    public function diretorRegister(Request $request, $id){
        $escola = Escola::find($id);
        return view('escola.diretor-register', ['escola' => $escola]);
    }
    public function diretorRegisterAction(Request $request, $id){
        $credentials = $request->validate([
            'name' =>'required|string|max:255',
            'email' =>'required|string|email|max:255|unique:diretores',
            'password' =>'required|string',
        ]);
        $escola = Escola::find($id);
        $diretor = new Diretor();
        if ($credentials) {
            $diretor->create([
                'name' => $credentials['name'],
                'email' => $credentials['email'],
                'password' => Hash::make($credentials['password']),
                'escola_id' => $escola->id
            ]);
            return redirect()->route('escola.edit', $escola->id)->with('success', 'Diretor registrado com sucesso.');
        }
        return redirect()->back()->withErrors($diretor);
    }
}
