<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\imc;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function showAdminRegisterForm()
    {
        return view('auth.admin_register');
    }
    public function showRegistrationForm()
    {
        return view('auth.cadastro');
    }
    
    protected function create(array $data)
    {   
        $altura = $data ['altura'];
        $peso = $data['peso'];
        $imc = $peso / ($altura * $altura);
        $faixa_id = 0;
        if ($imc < 18.5) {
            $faixa_id = 2;
          } else if ($imc < 25) {
            $faixa_id = 3;
          } else {
            $faixa_id = 1;
          } 

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'cpf' => $data['cpf'],
            'nascimento' => $data['nascimento'],
            'altura' => $data['altura'],
            'peso' => $data['peso'],
            'imc_atual'=> $imc,
            'faixa_id' => $faixa_id,
            'password' => Hash::make($data['password'])
        ]);
        imc::create([
            'valor' => $imc,
            'peso' => $peso,
            'altura' => $altura,
            'user_id' => $user-> id,
            'faixa_id' => $faixa_id
        ]);
        return $user;
    }
    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('homeAdmin'));
        }
    }

}
