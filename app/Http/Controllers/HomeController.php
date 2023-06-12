<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Exercicio;
use App\Models\Faixa;
class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
        $faixa_id = Auth::user()-> faixa_id;
        $faixa = Faixa::findOrFail($faixa_id);
        $exercicios = Exercicio::all()->where('faixa_id', $faixa_id);
        return view('tarefas',compact('exercicios', 'faixa'));
    }
}
