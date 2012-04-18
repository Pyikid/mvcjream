<?php

class Index extends Controller {

	function __construct() {
		parent::__construct(); //libs/controller.php :Main controller
	}

	function index() {
		#echo 'We are in index -- controllers/index.php<br />';
		$this->view->render('index/index');

	}

	function detail() {
		$this->view->render('index/index');
	}

}
