<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduans';
    protected $guarded =['id'];

    public function masyarakat(){
    	return $this->belongsTo(masyarakat::class);
    }
}
