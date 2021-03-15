<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Masyarakat;

class PengaduanController extends Controller
{
    public function index()
    {
        $data_pengaduan = Pengaduan::get();

        return view('pengaduan/index')
            ->with('data_pengaduan', $data_pengaduan);
    }
    public function create(){
    	$data_masyarakat = Masyarakat::get();
    	return view('pengaduan.create')->with('data', $data_masyarakat);
    }
    public function insert(Request $request){
    	$data_pengaduan = $request->all();

    	Pengaduan::create($data_pengaduan);

    	return redirect('/pengaduan');
    }
    public function edit(Pengaduan $id){
        $data_masyarakat = Masyarakat::get();
        return view('pengaduan.edit')
            ->with('data', $data_masyarakat)
            ->with('data_pengaduan', $id);
    }
    public function delete(Request $request){
        // mencari data masyarakat sesuai dengan acuan yang dipilih
        $data_pengaduan=Pengaduan::findOrFail($request->id);

        // hapus data
        $data_pengaduan->delete();

        // kembali ke home
        return redirect('/pengaduan');
    }
      public function update(Request $request){
        // mencari data pengaduan sesuai dengan acuan yang dipilih
        $data=Pengaduan::findOrFail($request->id);

        // edit data
        $data->update($request->all());

        // kembali ke home
        return redirect('/pengaduan');
    }
}
