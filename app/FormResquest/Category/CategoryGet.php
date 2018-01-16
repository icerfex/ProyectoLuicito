<?php

namespace App\FormResquest\Category;
//model
use App\Model\SocialNetwork\Category;

class CategoryGet
{
	public static function showAll()
	{
		$sql = Category::All();
		return $sql;
	}

	public static function showCustomizar($data, $value)
	{
		# code...
	}

	public function edit($id)
	{
		# code...
	}
}