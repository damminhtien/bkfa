<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vien extends Model
{
    protected $table = 'viens';
    protected $primaryKey = 'idvien';

    public function mon(){
    	return $this->hasMany('App\mon', 'idvien', 'idmon');
    }
    

}
