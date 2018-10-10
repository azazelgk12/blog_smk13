<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Kdd extends Model
{

	protected $table = 'kdd' ;

	
    public function Jadwal()
    {
    	return $this->hasMany('App\Jadwal');
    }

}
