<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
	use Searchable;
    protected $table = "tintucs";
    protected $primaryKey = "idtintuc";


      public function searchableAs()
    {
        return 'tieude';
    }
}
