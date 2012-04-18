<?php

class Stk extends Controller {   
	public function __construct() {
		parent::__construct();                            //call libs/Controller.php
		Session::init();                                  //call lib/Session.php
		$logged = Session::get('loggedIn'); // 
		$role = Session::get('role');

		if ($logged == false || $role != 'owner') {
			Session::destroy();
			header('Location: ../login');
			exit;
		}
	}

	public function index() {
		$this->view->data = 'This is test data';
		#$this->model->getPrice($symbol);
		$this->view->render('stk/index'); //libs/View.php  function render())
	}
	
	
}


