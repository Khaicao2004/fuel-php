<?php

use Fuel\Core\Controller;
use Fuel\Core\Input;
use Fuel\Core\Response;
use Fuel\Core\View;

class Controller_User extends Controller
{

	public function action_index()
	{
		$data = Model_User::find('all');
		$content = View::forge('users/index', ['data' => $data]);
		return Response::forge(View::forge('layouts/master', ['content' => $content]));
	}
	public function action_create(){
		return Response::forge(View::forge('users/create'));
	}
	public function action_store(){
		$file = Input::file('avatar');
		// var_dump($file['tmp_name']); die;
		$uploadPath = 'uploads/' . time() . '_';
		$fileName = $file['name'];
		if($file){
			move_uploaded_file($file['tmp_name'],  $uploadPath . $fileName);	
		}
		$user = Model_User::forge([
			'name' => Input::post('name',),
			'phone' => Input::post('phone'),
			'email' => Input::post('email'),
			'address' => Input::post('address'),
			'avatar' => $uploadPath . $fileName,
		]);
		$user->save();
		return Response::redirect('users/index');
	}
}    
