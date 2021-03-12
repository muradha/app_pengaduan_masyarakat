<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;

class PetugasController extends Controller
{
    public function index(){
        $data_petugas = Petugas::get();

        return view('petugas/index')
            ->with('data_petugas', $data_petugas);
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
        $data_masyarakat=Petugas::findOrFail($request->id);

        $data_masyarakat->delete();

        return redirect('/petugas');
    }
}