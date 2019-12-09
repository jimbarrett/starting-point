<?php
namespace App\Controller;

class UsersController extends Controller {
	
	public function login() {
		echo $this->templates->render('login', ['name' => 'User']);
	}
}