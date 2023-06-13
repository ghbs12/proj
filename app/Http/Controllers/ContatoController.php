<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\imc;
use App\Models\User;
use App\Models\Contato;
use Illuminate\Http\Request;
use App\Models\Faixa;

class ContatoController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $dados = "";
        return view('contatos',compact("dados"));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Contato::create([
            'nome' => $request->get('nome'),
            'email' => $request->get('email'),
            'mensagem' => $request->get('mensagem'),
        ]);

        $dados = "ok";

        return view ('contatos',compact("dados"));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
