<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }
    public function showAdminLoginForm()
    {
        return view('auth.admin_login');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function loginAdmin(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);
        $email= $request->email;
        $password= $request->password;
        $remember= $request->remember;
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect()->intended(route('homeAdmin'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
