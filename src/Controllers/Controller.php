<?php
namespace App\Controller;

class Controller {

	protected $templates;

    public function __construct()
    {
        $this->templates = new \League\Plates\Engine(TEMPLATE_DIR);
    }
}