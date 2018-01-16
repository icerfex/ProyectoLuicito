<?php

namespace App\FormResquest\Category;

use Illuminate\Http\Request;

//model
use App\Model\SocialNetwork\Category;

class CategoryPost
{
	public static function validate(array $data, $type, $id)
	{
		switch ($type) {
			case 'store':
				$rules=array(
		            'name'  => 'required',
		            'description'   => 'required'
		        );
		        break;
			case 'update':
				$rules=array(
		            'name'  => 'required|unique:categories,name,'.$id,
		            'description'   => 'required'
		        );
				break;
		}

		$dato = array(
            'name' => $data['name'],
            'description'  => $data['description']
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
            $sql = new Category;
            $sql -> code = date('ymds');
            $sql -> name = $data['name'];
            $sql -> description = $data['description']; 
            $sql -> save();
            $message = array('type'=>'guardado');
        } catch (\Illuminate\Database\QueryException $e) {
            $message = array('type'=>'Error de base de datos');
        }
        return $message;
	}

	public static function update(array $data, $id)
	{
		try {
            $sql = Category::find($id);
            $sql -> code = date('ymds');
            $sql -> name = $data['name'];
            $sql -> description = $data['description']; 
            $sql -> save();
            $message = array('type'=>'actualizado');
        } catch (\Illuminate\Database\QueryException $e) {
            $message = array('type'=>'Error de base de datos');
        }
        return $message;
	}

	public static function delete($id)
	{
		# code...
		$sql=Category::find($id);
        $sql->delete();
        return json_encode("Hola");
	}
}