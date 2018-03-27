<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use PDF;


class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos=Aluno::all();
        return view('index',compact('alunos'));
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
    public function store(Request $request)
    {
        
        $aluno= new Aluno();
        $aluno->nome=$request->get('nome');
        $aluno->data_nascimento=$request->get('data_nascimento');
        $aluno->cep=$request->get('cep');
        $aluno->logradouro=$request->get('logradouro');
        $aluno->numero=$request->get('numero');
        $aluno->bairro=$request->get('bairro');
        $aluno->cidade=$request->get('cidade');
        $aluno->estado=$request->get('estado');
       
        
        $aluno->save();
        
        return redirect('alunos')->with('success', 'Aluno adicionado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    


    public function show($id)
    {
        
        
        $aluno = Aluno::find($id);
        
        $data = ['nome' => $aluno->nome,
                'data_nascimento' => $aluno->data_nascimento,
                'cep' => $aluno->cep,
                'logradouro' => $aluno->logradouro,
                'numero' =>  $aluno->numero,
                'bairro' => $aluno->bairro,
                'cidade' => $aluno->cidade,
                'estado' => $aluno->estado,
                'criado_em' => $aluno->created_at,
                
            ];


       // return view('invoice',compact('data'));

        $pdf = PDF::loadView('invoice', compact('data'));

       return $pdf->stream('invoice.pdf');
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $aluno = Aluno::find($id);
        return view('edit',compact('aluno','id'));

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
        
        $aluno= Aluno::find($id);
        $aluno->nome=$request->get('nome');
        $aluno->data_nascimento=$request->get('data_nascimento');
        $aluno->cep=$request->get('cep');
        $aluno->logradouro=$request->get('logradouro');
        $aluno->numero=$request->get('numero');
        $aluno->bairro=$request->get('bairro');
        $aluno->cidade=$request->get('cidade');
        $aluno->estado=$request->get('estado');
        $aluno->save();
        
        return redirect('alunos')->with('success','Aluno editado');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect('alunos')->with('success','Aluno deletado');
    }

    


    


    
}
