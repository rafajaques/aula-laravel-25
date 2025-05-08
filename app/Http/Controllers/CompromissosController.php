<?php

namespace App\Http\Controllers;

use App\Models\Compromisso;
use Illuminate\Http\Request;

class CompromissosController extends Controller
{
    public function index() {
        $compromissos = Compromisso::all();
        
        return view('compromissos/index', compact('compromissos'));

        /*
        compact('compromissos')
        é igual a
        ['compromissos' => $compromissos]
        */
    }

    public function salvar(Request $request) {
        Compromisso::create($request->all());
        return redirect()->route('compromissos');
    }

    public function editar(Compromisso $compromisso, Request $request) {
        // Verifica se precisa gravar os dados
        if ($request->isMethod('PUT')) {
            $c = Compromisso::find($request->id);
            
            $c->fill($request->all());

            $c->save();

            return redirect()->route('compromissos');
        }

        return view('compromissos.editar', compact('compromisso'));
    }

    public function apagar(Request $request) {
        $comp = Compromisso::findOrFail($request->id);

        $comp->delete();

        return redirect()->route('compromissos');
    }
}
