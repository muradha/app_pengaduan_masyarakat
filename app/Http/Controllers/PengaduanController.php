<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        $data_pengaduan = Pengaduan::get();

        return view('pengaduan/index')
            ->with('data_pengaduan', $data_pengaduan);
    }
    public function create(){
    	return view('pengaduan.create');
    }
}
