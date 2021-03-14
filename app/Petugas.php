<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $guarded = ['id'];

    public function tanggapan(){
    	return $this->hasMany(Tanggapan::class);
    }
}
