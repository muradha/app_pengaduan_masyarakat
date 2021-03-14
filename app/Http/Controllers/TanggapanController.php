<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanggapan;
use App\Pengaduan;
use App\Petugas;

class TanggapanController extends Controller
{
    public function index()
    {
        $data_tanggapan = Tanggapan::get();
        
        return view('tanggapan/index')
            ->with('data_tanggapan', $data_tanggapan);
    }
    public function create(){
    	$data_petugas = Petugas::get();
    	$data_pengaduan = Pengaduan::get();

    	return view('tanggapan.create')
    		->with('data_petugas', $data_petugas)
    		->with('data_pengaduan', $data_pengaduan);

    }
    public function insert(Request $request){
    	$data_tanggapan = $request->all();

    	Tanggapan::create($data_tanggapan);

    	return redirect('tanggapan');
    }
}
