<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class dethi extends Model
{
	use Searchable;
    protected $table = "dethis";
    protected $primaryKey = "iddethi";

    public function mon(){
    	return $this->belongsTo("App\dethi", "idmon", "iddethi");
    }
    public function danhgiadethi(){
    	return $this->belongsTo("App\dethi", "iddanhgiadethis", "iddethi");
    }
     public function searchableAs()
    {
        return 'iddethi';
    }
}
