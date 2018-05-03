<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //
    protected $table = "users";
    protected $primaryKey = "iduser";

    public function danhgiadethi(){
    	return $this->belongsTo("App\users", "iddanhgiadethis", "iduser");
    }
}
