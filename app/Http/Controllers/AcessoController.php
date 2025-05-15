<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcessoController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        $dados = $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);
        
        if (Auth::attempt($dados)) {
            return redirect()->route('compromissos');
        } else {
            return redirect()->route('acesso')->with('msg', 'Usuário ou senha inválidos.');
        }
    }
}
