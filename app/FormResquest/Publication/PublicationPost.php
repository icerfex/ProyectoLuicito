<?php

namespace App\FormResquest\Publication;

/**
* 
*/
//model
use App\Model\SocialNetwork\Publication;
//acceder al formResquest
use App\FormResquest\Publication\FacturaPost;

class PublicationPost
{
	public static function validation(array $data)
	{
		# code...
	}

	public static function save(array $data)
	{
		# code...
		try {
			$validation = FacturaPost::validation($data);
			if ('falla') {
				return 'falla';
			}else{
				$sql = new Publication;
				$sql -> 'variables_base_dato' = $data['nombre_vista_name'];
				$sql -> save();
				FacturaPost::save($data);
				return 'guardado';
			}

			$message = array('succes','guardo');
		} catch (Exception $e) {
			$message = array('error','problema de base de datos');
		}

		return $message;
	}

	public static function update($id, array $data)
	{
		try {
			$sql = Publication::find($id);
			$sql -> 'variables_base_dato' = $data['nombre_vista_name'];
			$sql -> save();
			$message = array('succes','guardo');
		} catch (Exception $e) {
			$message = array('error','problema de base de datos');
		}

		return $message;
	}

	public static function delete($id)
	{
		$sql = Publication::find($id);
		$sql -> delete();
	}
}