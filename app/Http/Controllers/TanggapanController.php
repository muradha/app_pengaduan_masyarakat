<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanggapan;

class TanggapanController extends Controller
{
    public function index()
    {
        $data_tanggapan = Tanggapan::get();
        
        return view('tanggapan/index')
            ->with('data_tanggapan', $data_tanggapan);
    }
}
