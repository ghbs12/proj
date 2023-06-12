<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\imc;
use App\Models\User;
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
        $user = User::findOrFail(Auth::user()-> id);
        $altura =$request->get('altura')/100;
        $peso = $request->get('peso');
        $imc = $peso / ($altura * $altura);
        $faixa_id = 0;
        if ($imc < 18.5) {
            $faixa_id = 2;
        } else if ($imc < 25) {
            $faixa_id = 3;
        } else {
            $faixa_id = 1;
        } 
        $user-> imc_atual = $imc;
        $user-> faixa_id = $faixa_id;
        $user->save();
        $faixa = Faixa::findOrFail($faixa_id);
        $faixa = $faixa->nome;
        imc::create([
            'valor' => $imc,
            'peso' => $peso,
            'altura' => $altura,
            'user_id' => Auth::user()-> id,
            'faixa_id' => $faixa_id
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
