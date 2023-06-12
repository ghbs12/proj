<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\imc;
use App\Models\Faixa;
use App\Models\User;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {  
        $user_id = Auth::user()-> id;
        $imcs = imc::leftJoin('faixas', 'faixas.id', '=', 'imcs.faixa_id')
        ->where('imcs.user_id', $user_id)
        ->select("imcs.id", "valor", "faixas.nome", "peso", "altura", "imcs.created_at")->get();
        return view ('historico',compact("imcs"));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
       //
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
