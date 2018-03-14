<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    protected $table = "slides";
    protected $primaryKey = "idslide";

    public function mon(){
    	return $this->belongsTo("App\mon", "idmon", "idslide");
    }
}
