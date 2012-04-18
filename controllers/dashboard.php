<?php

class Dashboard extends Controller {
	function __construct() {
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged == false) {
			Session::destroy();
			header('Location: ../login');
			exit;
		}
		#echo '<pre>';
		#print_r($_SESSION);
		#echo '</pre>';

		$this->view->js = array('dashboard/js/default.js');
	}

	function index() {
		$this->view->render('dashboard/index');
	}

	function logout() {
		Session::destroy();
		header('Location: ../login');
		exit;
	}

	function xhrInsert() {
		$this->model->xhrInsert();
	}

	function xhrGetListings() {
		$this->model->xhrGetListings();
	}

	function xhrDeleteListing() {
		$this->model->xhrDeleteListing();
	}

}
