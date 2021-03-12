<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduans';
    protected $gurade =['id'];

    public function masyarakat(){
    	return $this->belongsTo(masyarakat::class);
    }
}
