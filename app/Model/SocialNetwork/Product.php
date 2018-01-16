<?php

namespace App\Model\SocialNetwork;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Category()
    {
        return $this->belongsToMany(
        	'App\Model\SocialNetwork\Category'
        );
    }
}
