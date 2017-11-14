<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Illuminate\Contracts\Auth\Guard;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
 /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
 /*   public function __construct()
    {
     $this->middleware('guest')->except('logout');
 }*/
 public function __construct(Guard $guard)
 {
    $this->user = $guard->user();
}
/*   use AuthenticatesUsers;*/

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    /* protected $redirectTo = '/vouchers';*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showLoginForm()
    {
        return view('site.auth.loginRegistro');
    }
    public function login(Request $request){
        $formData = $request->all();
        $email = $formData['email'];
        $password = $formData['password'];
        /*
            Tipos de Usuarios No Sistema
            role 0 = usuarios
            role 1 = cooperativas
            role 2 = admins
        */


        /*Autenticando Administrador*/
        if(Auth::attempt(['email' => $email, 'password' => $password,'role' => 2])){
            $credentials = ['email'=> $email,'password'=>$password, 'role' => 2];

            if(auth()->guard('admin')->attempt($credentials)){
                return redirect('/admin');
            } else{
                return redirect('/cadastro/login')->withErrors(['errors' => 'Login Invalido'])->withInput();
            }
        }

        /*Autenticando Cooperativas*/
        if(Auth::attempt(['email' => $email, 'password' => $password,'role' => 1])){
                return('cooperativas');
        }

        /*Autenticando Usuarios*/
        if(Auth::attempt(['email' => $email, 'password' => $password,'role' => 0])){
                if(auth()->guard('web')){
                    return redirect()->intended('/vouchers');
                }
            }
        }
     public function logout(){
        auth()->guard('admin')->logout();
        return redirect('/admin/login');
    }
    public function index(){
       if (Auth::attempt(array('email' => 'miqueiasfernando@gmail.com', 'password' => '12345')))
          {
             return('logado');
         }
     }
 }
