<?php

class Login extends Controller {
	function __construct() {
		parent::__construct();

	}

	function index() {
		#require 'models/login_model.php';
		#$model = new Login_Model();

		// use md5 algorithm to hash '123' with salted '2'
		echo '123:' . ' ' . Hash::create('md5','123', HASH_PASSWORD_KEY);
		echo '<br />';
		echo 'test:' . ' ' . Hash::create('md5','test', HASH_PASSWORD_KEY);
		//123:  2d2465e1d90a628e7a75803dd40b7625
		//test: f3b5f290b99002f88214102466780711 
		//
		$this->view->render('login/index');
	}

	function run() {
		$this->model->run(); //call model function run())
	}
}
