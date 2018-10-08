<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Tempat extends Model
{
		protected $table = 'Tempat';

		public function Jadwal()
		{

		return $this->hasMany('App\Jadwal');	

		}

}
