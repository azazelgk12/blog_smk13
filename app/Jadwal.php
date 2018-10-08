<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Jadwal extends Model
{
   
	protected $table = 'jadwal_mobil_unit'; 
   public function Kdd() 
   {

   		return $this->belongsTo('App\Kdd');
   }


   	public function Tempat()
   	{
   		return $this->belongsTo('App\Tempat');
   	}
}
