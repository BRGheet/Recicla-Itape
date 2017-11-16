<?php

namespace App\Http\Controllers\Site\Auth;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Validator;
use Redirect;
use Illuminate\Contracts\Auth\Guard;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

  public function __construct()
  {
   $this->middleware('guest')->except('logout');
  }
/* use AuthenticatesUsers;*/

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
      $validator = Validator::make($formData, [
      'email' => 'required|string|email|min:10',
      'password' => 'required|string|min:6',
      ]);
      if ($validator->fails()) {
        return redirect('/cadastro/login')
        ->withErrors($validator, 'LoginErrors')->withInput();
      }
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
        }else{
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
      else{
        return Redirect::back()->withErrors(['Usuario não encontrado!'])->withInput();
      }
    }

    public function logout(){
      if(Auth::guard('admin')->check()){
        /*Auth::guard('admin')->admin()->name;*/
        auth()->guard('admin')->logout();
        auth()->guard('web')->logout();
        return redirect('/cadastro/login');
      }
      else if(Auth::guard('web')->check()){
        auth()->guard('web')->logout();
        return redirect('/cadastro/login');
        /* Auth::guard('user')->user()->name;*/
      }
    }
    public function index(){
      if (Auth::attempt(array('email' => 'miqueiasfernando@gmail.com', 'password' => '12345')))
      {
        return('logado');
      }
    }
  }
