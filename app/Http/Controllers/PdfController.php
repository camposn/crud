<?php

namespace App\Http\Controllers;

use PDF;

use Illuminate\Http\Request;
use App\Aluno;


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        $idr = $id;
        $aluno = Aluno::find($idr);
        
        $nome = $aluno->nome;
        $data_nascimento = $aluno->data_nascimento;
        $cep = $aluno->cep;
        $logradouro = $aluno->logradouro;
        $numero = $aluno->numero;
        $bairro = $aluno->bairro;
        $cidade = $aluno->cidade;
        $estado = $aluno->estado;
        $criado_em = $aluno->created_at;

        $data_nascimento = $aluno->data_nascimento;
        
        $data = ['nome' => $nome,
                'data_nascimento' => $data_nascimento,
                'cep' => $cep,
                'logradouro' => $logradouro,
                'numero' => $numero,
                'bairro' => $bairro,
                'cidade' => $cidade,
                'estado' => $estado,
                'criado_em' => $criado_em,
                
            ];


       // return view('invoice',compact('data'));

        $pdf = PDF::loadView('invoice', compact('data'));

       return $pdf->stream('invoice.pdf');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {   
     /*   $idr = $id;
        $aluno = Aluno::find($idr);
        
        $nome = $aluno->nome;
        $data_nascimento = $aluno->data_nascimento;
        $cep = $aluno->cep;
        $logradouro = $aluno->logradouro;
        $numero = $aluno->numero;
        $bairro = $aluno->bairro;
        $cidade = $aluno->cidade;
        $estado = $aluno->estado;
        $criado_em = $aluno->created_at;

        $data_nascimento = $aluno->data_nascimento;
        
        $data = ['nome' => $nome,
                'data_nascimento' => $data_nascimento,
                'cep' => $cep,
                'logradouro' => $logradouro,
                'numero' => $numero,
                'bairro' => $bairro,
                'cidade' => $cidade,
                'estado' => $estado,
                'criado_em' => $criado_em,
                
            ];


       // return view('invoice',compact('data'));

        $pdf = PDF::loadView('invoice', compact('data'));

       return $pdf->stream('invoice.pdf');*/


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
       // $aluno= Aluno::find($id);
        
        

        $data = ['sdas'];

         $pdf = PDF::loadView('invoice', $data);

        return $pdf->stream('invoice.pdf');
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
