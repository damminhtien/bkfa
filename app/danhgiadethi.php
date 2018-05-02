<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhgiadethi extends Model
{
	protected $table = "danhgiadethis";
	protected $primaryKey = "iddanhgiadethis";
	public function dethi(){
		return $this->hasMany("App\dethi", "iddanhgiadethis", "iddethi");
	}

	public function users(){
		return $this->hasMany("App\users", "iddanhgiadethis", "iduser");
	}
}
