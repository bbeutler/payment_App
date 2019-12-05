<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function slug($title){
    	$count = 1;
    	$slug = str_slug($title);
    	while (Post::where('slug', $slug)->count()) {
    		$slug = $slug.$count;
    		$count = $count + 1;
    	}

    	return $slug;
    }
}
