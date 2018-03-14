<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mon extends Model
{
    protected $table = "mons";
    protected $primaryKey = "idmon";

    public function vien(){
    	return $this->belongsTo("App\vien", "idvien", "idmon");
    }

    public function slide(){
    	return $this->hasMany("App\slide", "idmon", "idslide");
    }
}
