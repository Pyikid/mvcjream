<?php

class Controller {

	function __construct() {
		#echo 'Main controller --libs/controllers.php<br />';
		$this->view = new View();

	}

	public function loadModel($name){
		$path = 'models/' . $name.'_model.php'; //load models/user_model.php

		if (file_exists($path)) {
			require 'models/' . $name.'_model.php';
			$modelName = $name . '_Model';  // user_Model = new_Model
			$this->model = new $modelName;  // this->model = new user_model 
			                                // this->model = new stk_model
		}
	}

}
