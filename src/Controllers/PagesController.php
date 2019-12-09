<?php
namespace App\Controller;

class PagesController extends Controller {

	public function test() {
		\App\Auth::seeit();
		echo 'test successful';
	}

	public function E404() {
		echo 'route incorrect or page not found';
	}
}