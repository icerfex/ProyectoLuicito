<?php

namespace App\FormResquest\Pharmacy;
//model
use Illuminate\Http\Request;
use App\Model\SocialNetwork\Pharmacy;

class PharmacyGet
{
	public static function showAll()
	{
		$sql = Pharmacy::All();
		return $sql;
	}

	public static function showCustomizar($data, $value)
	{
		# code...
	}

	
}