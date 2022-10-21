<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    public function __construct() {
        $this->Cliente = new Clientes();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=$this->Cliente->all()->sortBy('id');
        return view('index',compact('clientes'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $cad=$this->Cliente->create([
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
         ]);
         if($cad){
             return redirect('cliente');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente=$this->Cliente->find($id);
        return view('show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente=$this->Cliente->find($id);
        return view('create',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $id)
    {
        $this->Cliente->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
        ]);
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->Cliente->destroy($id);
        
    }
}
