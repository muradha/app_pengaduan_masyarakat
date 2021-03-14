<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tanggapan extends Model
{
    protected $table = 'tanggapans';
    protected $guarded = 'id';
    protected $fillable = ['tgl_tanggapan', 'pengaduan_id', 'tanggapan', 'petugas_id'];

    public function pengaduan(){
    	return $this->belongsTo(Pengaduan::class);
    }
    public function petugas(){
    	return $this->belongsTo(Petugas::class);
    }
  
}
