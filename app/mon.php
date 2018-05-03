<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class mon extends Model
{
	use Searchable;
    protected $table = "mons";
    protected $primaryKey = "idmon";

    public function vien(){
    	return $this->belongsTo("App\vien", "idvien", "idmon");
    }

    public function slide(){
    	return $this->hasMany("App\slide", "idmon", "idslide");
    }

 	public function searchableAs()
    {
        return 'idmon';
    }
}
