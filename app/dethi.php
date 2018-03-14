<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dethi extends Model
{
    protected $table = "dethis";
    protected $primaryKey = "iddethi";

    public function mon(){
    	return $this->belongsTo("App\dethi", "idmon", "iddethi");
    }
}
