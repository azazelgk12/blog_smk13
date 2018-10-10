<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Tempat extends Model
{
		protected $table = 'tempat';

		public function Jadwal()
		{

		return $this->hasMany('App\Jadwal');	

		}

}
