<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masyarakat; //model

class MasyarakatController extends Controller
{
    public function index(){
        // mengambil data dari table masyarakat
         $data_masyarakat = Masyarakat::get();
        //  dd($data_masyarakat);

        //  menampilkan view-nya
        return view('masyarakat/index')
            ->with('data_masyarakat', $data_masyarakat);
    }

    public function create(){
        return view('masyarakat.create');
    }

    public function edit(Masyarakat $masyarakat){
        return view('masyarakat.edit')->with('masyarakat', $masyarakat);
    }

    public function insert(Request $request){
        // ambil data dari form
        $data_masyarakat = $request->all();

        // simpan ke database
        Masyarakat::create($data_masyarakat);

        // kembali ke halaman index
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
