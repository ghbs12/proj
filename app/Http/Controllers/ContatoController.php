<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\imc;
use App\Models\User;
use App\Models\Contato;
use Illuminate\Http\Request;
use App\Models\Faixa;
class CalculadoraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $imc = "";
        $faixa = "";
        return view ('calculo_imc',compact("imc", "faixa"));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        Contato::create([
            'nome' => $nome,
            'email' => $email,
            'texto' => $texto,
            'user_id' => Auth::user()-> id,
        ]);
        return view ('calculo_imc',compact("imc", "faixa"));
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
