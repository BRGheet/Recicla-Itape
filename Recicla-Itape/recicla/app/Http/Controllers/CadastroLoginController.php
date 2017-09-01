<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class CadastroLoginController extends Controller
{
    private $user;

    public function __construct(Users $user){
        $this->users = $user;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return('teste');       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site\login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*dd($request->all());*/
        /*Seleciona os campos*/
        /*dd($request->except(['_token']));*/
        /* dd($request->only(['nome','tipo','email','senha']));*/
        /*$dataForm = $request->all();
        /*Faz cadastro*/

        $dataForm = $request->all();

        /*Valida dados automaticamente*/
        /*$this->validate($request, $this->users->rules);*/

        $message = [
            'name.required'=>'O campo nome tem preenchimento obrigatório.',
        ];
        $validate = validator($dataForm, $this->users->rules,$message);
        if($validate->fails()){
            return redirect()->back()->withInput()
            ->withErrors($validate);
        }

        /*Faz o insert no banco*/
        $insert = $this->users->create($dataForm);
        if($insert){
            return redirect('entrar/create');
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
