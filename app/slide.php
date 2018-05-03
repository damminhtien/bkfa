<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
	use Searchable;
    protected $table = "slides";
    protected $primaryKey = "idslide";

    public function mon(){
    	return $this->belongsTo("App\mon", "idmon", "idslide");
    }

      public function searchableAs()
    {
        return 'idslide';
    }
}
