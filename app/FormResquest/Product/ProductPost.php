<?php

namespace App\FormResquest\Product;

/**
* 
*/
//model
use App\Model\SocialNetwork\Product;

//formResquest
use App\FormResquest\ProductCategory\ProductCategoryPost;

class ProductPost
{
	public static function validate(array $data, $type, $id)
	{
		switch ($type) {
			case 'store':
				$rules=array(
		            'name'  => 'required'
		        );
		        break;
			case 'update':
				$rules=array(
		            'name'  => 'required',
		        );
				break;
		}

		$dato = array(
            'name' => $data['name']
        );	

        $validator = \Validator::make($dato, $rules);
        if ($validator->fails())
        {
        	$message = 'false';
        }else{
        	$message = 'true';
        }
        return $message;
	}

	public static function save(array $data)
	{
		# code...
		try {
			$result = ProductCategoryPost::validate($data['category_id']);
			if($result == 'false'){
				return 'error llene los datos';
			}else{
				$sql = new Product;
				$sql -> name = $data['name'];
				$sql -> save();

				$product_id = $sql->id;
				ProductCategoryPost::save($data['category_id'], $product_id);
			}
			$message = array('succes','guardo');
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