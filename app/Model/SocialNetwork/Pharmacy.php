<?php

namespace App\Model\SocialNetwork;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    //
    public function scopeBuscar($query,$buscar,$type){
    	if(isset($buscar)){
    		if($type=='address'){
    			$query->where($type,$buscar);	
    		}else
    		$query->where($type,'like','%'.$buscar.'%');
    	
    	
    	//$query->where('encargado','like','%'.$buscar.'%');

    	}
	}
    
}
