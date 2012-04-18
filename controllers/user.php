<?php

class User extends Controller {   
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
		$this->view->userList = $this->model->userList(); //models/user_model.php function userlist())
		$this->view->render('user/index'); //libs/View.php  function render())
	}

	public function create() {
		$data = array();
		$data['login'] = $_POST['login'];
		//$data['password'] = md5($_POST['password']);
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];
		
		// @TODO: do your error checking
		
		$this->model->create($data);  //calls models/User_model.php
		header('Location: '. URL . 'user');
	}

	public function edit($id) {
		$this->view->user = $this->model->userSingleList($id); //models/user_model.php function userSingleList()
		$this->view->render('user/edit');
	}

	public function editSave($id) {
		$data = array();
		$data['id'] = $id;
		$data['login'] = $_POST['login'];
		#$data['password'] = md5($_POST['password']);
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];
		
		// @TODO: do your error checking
		
		$this->model->editSave($data);
		header('Location: '. URL . 'user');
	}

	public function delete($id) {
		$this->model->delete($id);
		header('Location: '. URL . 'user');
	}
}


