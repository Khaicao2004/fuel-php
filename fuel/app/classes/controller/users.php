<?php

use Fuel\Core\Input;
use Fuel\Core\Response;
use Fuel\Core\View;

class Controller_Users extends Controller_Template
{

	public function action_index()
	{
		return View::forge('users/index');
	}
	public function action_create(){
		return View::forge('users/create');
	}
	public function action_store(){
		$user = Model_User::forge([
			'name' => Input::post('name',),
			'phone' => Input::post('phone',),
			'email' => Input::post('email',),
			'address' => Input::post('address',),
			'avatar' => Input::post('avatar',),
		]);
		$user->save();
		return Response::redirect('users/index');
	}
}
