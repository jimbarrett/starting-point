<?php
namespace App\Controller;

class PagesController extends Controller {

	public function home() {
		echo $this->templates->render('home');
	}

	public function E404() {
		echo $this->templates->render('E404');
	}
}