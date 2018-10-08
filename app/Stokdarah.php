<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stokdarah extends Model
{
     protected $table = "stok_darah";
     protected $fillable =['golongandarah','rhesus','jumlah','wb','tc','prc','ffp','ahf','bc','lp',];

    public $timestamps = true;
}
