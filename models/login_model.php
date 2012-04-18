<?php
class Login_Model extends Model {
	public function __construct() {
		parent::__construct();
		#echo '111';
	}

	public function run() {
		//$sth = $this->db->prepare("SELECT id, role FROM users WHERE 
						//login = :login AND password = MD5(:password)");
		$sth = $this->db->prepare("SELECT id, role FROM users WHERE 
						login = :login AND password = :password");
		//$sth->execute(array(
					//':login' => $_POST['login'],
					//':password' => $_POST['password']
				//));
		$sth->execute(array(
					':login' => $_POST['login'],
					':password' => Hash::create('md5', $_POST['password'],HASH_PASSWORD_KEY)
				));

/*
 *        echo $_POST['login'];
 *        echo $_POST['password'];
 *
 *        $data = $sth->fetchAll();
 *            
 *        echo '<pre>';
 *        print_r($data);
 *        echo '</pre>';
 */
	    $data = $sth->fetch();
		$count = $sth->rowCount();

	/*
	 *    echo '<pre>';
	 *    print_r($data);
	 *    echo '</pre>';
	 *
	 *    echo $data['role']; //owner
	 *    die;
	 */

		if ($count > 0) {
			//login
			Session::init();
			Session::set('role', $data['role']);
			Session::set('loggedIn', true);
			header('Location: ../dashboard');
		} else {
			// show an error
			header('Location: ../login');
		}
	}

}
