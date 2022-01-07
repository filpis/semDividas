<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Todo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = DB::table('todos')->get();
    return view('app', ['todos' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $todos = DB::table('todos')->get();
        return view('parameters', ['todos' => $todos]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the form
    $request->validate([
        'tipo_divida' => 'required|max:200'
        

    ]);

    // store the data
    DB::table('todos')->insert([
        'tipo_divida' => $request->tipo_divida,
        'atraso_inicial' => $request ->atraso_inicial,
        'atraso_inicial_text' => $request ->atraso_inicial_text,
        'atraso_final' => $request ->atraso_final,
        'atraso_final_text' => $request ->atraso_final_text,
        'juros_aplicados' => $request ->juros_aplicados,
        'juros_aplicados_text' => $request ->juros_aplicados_text,
        'descontos_a_vista' => $request ->descontos_a_vista,
        'parcelas_a_prazo' => $request ->parcelas_a_prazo

        

        
        
    ]);

    // redirect
    return redirect('/')->with('status', 'Parâmetro adicionado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
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
    // validate the form
    $request->validate([
        'atraso_inicial' => 'required|max:200'
    ]);

    // update the data
    DB::table('todos')->where('id', $id)->update([
        'atraso_inicial' => $request->atraso_inicial,
        'atraso_inicial_text' => $request->atraso_inicial_text,
        'atraso_final' => $request->atraso_final,
        'atraso_final_text' => $request->atraso_final_text,
        'juros_aplicados' => $request->juros_aplicados,
        'juros_aplicados_text' => $request->juros_aplicados_text,
        'descontos_a_vista' => $request->descontos_a_vista,
        'parcelas_a_prazo' => $request->parcelas_a_prazo,
    ]);

    // redirect
    return redirect('/cadastrados')->with('status', 'Atualizado!');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // delete 
    DB::table('todos')->where('id', $id)->delete();

    // redirect
    return redirect('/cadastrados')->with('status', 'Parâmetro removido!');
    }
}
