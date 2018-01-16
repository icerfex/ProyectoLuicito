<?php

namespace App\FormResquest\Pharmacy;

use Illuminate\Http\Request;

//model
use App\Model\SocialNetwork\Pharmacy;

class PharmacyPost
{
	public static function validate(array $data, $type, $id)
	{
		switch ($type) {
			case 'store':
				$rules=array(
		            'name'  => 'required',
		            'address'   => 'required',
		            'attention'   => 'required',
		            'phone'   => 'required'
		        );
		        break;
			case 'update':
				$rules=array(
		            'name'  => 'required|unique:categories,name,'.$id,
		            'address'   => 'required',
		            'attention'   => 'required',
		            'phone'   => 'required'
		        );
				break;
			case 'edit':
				$rules=array(
		            'name'  => 'required'.$id,
		            'address'   => 'required',
		            'attention'   => 'required',
		            'phone'   => 'required'
		        );
				break;
		}

		$dato = array(
            'name' => $data['name'],
            'address'  => $data['address'],
            'attention'   => $data['attention'],
            'phone'   => $data['phone']
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
            $sql = new Pharmacy;
            
            $sql -> name = $data['name'];
            $sql -> address = $data['address'];
            $sql -> attention = $data['attention'];
            $sql -> phone = $data['phone']; 
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
            $sql = Pharmacy::find($id);
            
            $sql -> name = $data['name'];
            $sql -> address = $data['address']; 
            $sql -> attention = $data['attention'];
            $sql -> phone = $data['phone'];
            $sql -> save();
            $message = array('type'=>'actualizado');
        } catch (\Illuminate\Database\QueryException $e) {
            $message = array('type'=>'Error de base de datos');
        }
        return $message;
	}
	public static function edit($id)
	{
	
		$sql['pharmacy']=Pharmacy::find($id);
        return view("pharmacy.edit",$sql);

	}

	public static function delete($id)
	{
		# code...
		$sql=Pharmacy::find($id);
        $sql->delete();
        return json_encode("Hola");
	}
	
}