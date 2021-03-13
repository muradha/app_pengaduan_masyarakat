<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masyarakat; //model

class MasyarakatController extends Controller
{
    public function index(Request $request){
        $kata_kunci = $request->kata_kunci;

        // mengambil data dari table masyarakat
         $data_masyarakat = Masyarakat::orderBy('nama', 'asc');
         if($kata_kunci!=""){
             $data_masyarakat->where('nama', 'like', '%'.$kata_kunci.'%');
         }
         $data_masyarakat = $data_masyarakat->get();
        //  dd($data_masyarakat);

        //  menampilkan view-nya
        return view('masyarakat/index')
            ->with('data_masyarakat', $data_masyarakat)
            ->with('kata_kunci', $kata_kunci);

    }

    public function create(){
        return view('masyarakat.create');
    }
    

    public function insert(Request $request){
        // ambil data dari form
        $data_masyarakat = $request->all();

        // simpan ke database
        Masyarakat::create($data_masyarakat);

        // kembali ke halaman index
        return redirect('/masyarakat');
    }

    public function edit($id){
        $data = Masyarakat::findOrFail($id);
        return view('masyarakat.edit')->with('data_masyarakat', $data);
    }

    public function update(Request $request){
        // mencari data masyarakat sesuai dengan acuan yang dipilih
        $data=Masyarakat::findOrFail($request->id);

        // edit data
        $data->update($request->all());

        // kembali ke home
        return redirect('/masyarakat');
    }

    public function delete(Request $request){
        // mencari data masyarakat sesuai dengan acuan yang dipilih
        $data_masyarakat=Masyarakat::findOrFail($request->id);

        // hapus data
        $data_masyarakat->delete();

        // kembali ke home
        return redirect('/masyarakat');
    }

}
