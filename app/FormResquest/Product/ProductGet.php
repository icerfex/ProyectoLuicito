<?php

namespace App\FormResquest\Product;

//model
use App\Model\SocialNetwork\Product;

class ProductGet
{
	public static function showAll()
	{
		$sql = Product::with('category')->get();
		return $sql;
	}

	public static function showCustomizar($data, $value)
	{
		# code...
	}
}