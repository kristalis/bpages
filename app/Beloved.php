<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beloved extends Model
{
	protected $guarded = [];
    
    public function beloveduser()
	{
		return $this->belongsTo('App\User','userId');
	}
}
