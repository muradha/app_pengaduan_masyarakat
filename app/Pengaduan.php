<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduans';
    protected $guarded =['id'];
    protected $fillable=['tgl_pengaduan', 'masyarakat_id', 'isi_laporan', 'foto', 'status'];

    public function masyarakat(){
    	return $this->belongsTo(Masyarakat::class);
    }
}
