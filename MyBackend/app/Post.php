<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	public static function incomplete(){
		return static::where('id',1)->get();
	}
    //
}
