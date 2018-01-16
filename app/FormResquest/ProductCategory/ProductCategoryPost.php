<?php

namespace App\FormResquest\ProductCategory;

//model
use App\Model\SocialNetwork\CategoryProduct;

class ProductCategoryPost
{
	public static function validate(array $data)
	{
		for($i=0; $i<count($data); $i++){
			$rules=array(
	            'name'  => 'required'
	        );

			$dato = array(
	            'name' => $data[$i]
	        );	

	        $validator = \Validator::make($dato, $rules);
	        if ($validator->fails())
	        {
	        	return 'false';
	        	break;
	        }else{
	        	$message = 'true';
	        }
	    }
        return $message;
	}

	public static function save(array $data, $product_id)
	{
		# code...
		try {
			for($i=0; $i<count($data); $i++){			
				$sql = new CategoryProduct;
				$sql -> product_id = $product_id;
				$sql -> category_id = $data[$i];
				$sql -> save();
			}
			$message = 1;
		} catch (Exception $e) {
			$message = array('error','problema de base de datos');
		}

		return $message;
	}

	public static function update($id, array $data)
	{
		
	}

	public static function delete($id)
	{

	}
}