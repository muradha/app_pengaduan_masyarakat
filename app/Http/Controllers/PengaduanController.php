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
    	$data_pengaduan = Masyarakat::get();
    	return view('pengaduan.create')->with('data', $data_pengaduan);
    }
    public function insert(Request $request){
    	$data_pengaduan = $request->all();

    	Pengaduan::create($data_pengaduan);

    	return redirect('/pengaduan');
    }
}
