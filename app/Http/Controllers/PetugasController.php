<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;

class PetugasController extends Controller
{
    public function index(Request $request){
        $kata_kunci = $request->kata_kunci;

        $data_petugas = Petugas::orderBy('nama', 'asc');
        
        if($kata_kunci!=""){
            $data_petugas->where('nama', 'like', '%'.$kata_kunci.'%');
        }

        $data_petugas = $data_petugas->get();

        return view('petugas/index')
            ->with('data_petugas', $data_petugas)
            ->with('kata_kunci', $kata_kunci);
    }

    public function create(){
        return view('petugas.create');
    }

    public function insert(Request $request){
        $data_petugas = $request->all();

        Petugas::create($data_petugas);

        return redirect('/petugas');
    }
    
    public function delete(Request $request){
        $data_petugas=Petugas::findOrFail($request->id);

        $data_petugas->delete();

        return redirect('/petugas');
    }

    public function edit($id){
        $data_petugas = Petugas::findOrFail($id);

        return view('petugas.edit')->with('data_petugas', $data_petugas);
    }

    public function update(Request $request){
        $data_petugas = Petugas::findOrFail($request->id);

        $data_petugas->update($request->all());

        return redirect('/petugas');
    }

}
