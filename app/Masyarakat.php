<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table='masyarakats';
    protected $guarded=['id'];
    protected $fillable=['id','nik', 'nama', 'email', 'telp'];

    public function pengaduan(){
    	return $this->hasMany(Pengaduan::class);
    }
}
