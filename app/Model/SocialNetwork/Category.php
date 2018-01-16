<?php

namespace App\Model\SocialNetwork;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['delete_at'];

    public function Product()
    {
        return $this->belongsToMany(
        	'App\Model\SocialNetwork\Product'
        );
    }
}
