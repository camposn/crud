<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;
use PDF;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professors=Professor::all();
        return view('indexp',compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professor= new Professor();
       
        $professor->nome=$request->get('nome');
        $professor->data_nascimento=$request->get('data_nascimento');
       
        $professor->save();
        
        return redirect('professors')->with('success', 'Professor adicionado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Professor::find($id);
        
        $data = ['nome' => $professor->nome,
                'data_nascimento' => $professor->data_nascimento,
                'criado_em' => $professor->created_at,     
                ];


        $pdf = PDF::loadView('invoicep', compact('data'));

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
        $professor = Professor::find($id);
        return view('editp',compact('professor','id'));
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
        $professor = Professor::find($id);
        $professor->nome=$request->get('nome');
        $professor->data_nascimento=$request->get('data_nascimento');
        $professor->save();

        return redirect('professors')->with('success', 'Professor editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professor =Professor::find($id);
        $professor->delete();
        return redirect('professors')->with('success', 'Professor deletado');
    }
}
