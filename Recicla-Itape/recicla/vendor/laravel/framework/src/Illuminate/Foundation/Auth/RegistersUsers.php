<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Mail;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
       $FormData = $request->all();
        $FormData = array(
            'name' => $FormData['Nome'],
            'email' => $FormData['Email'],
            'password' => $FormData['Senha'],
            'password_confirmation' => $FormData['Senha_Confirme'],
        );
        /*Validaçao*/

        $validator = Validator::make($FormData, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return redirect('/cadastro/login')
            ->withErrors($validator, 'cadastro')->withInput();
        }
        
        /*Validação Antiga*/
        /*$this->validator($request->all)->validate();*/
        /*$this->validator($FormData)->validate();*/




        event(new Registered($user = $this->create($FormData)));

        /*Desabilita Login Automatico*/
       /* $this->guard()->login($user);*/
        return $this->registered($request, $user)
        ?: redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
