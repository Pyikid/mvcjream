<?php

class User_Model extends Model
{
	public function __construct() {
		parent::__construct();  // $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
	}

	public function stkList() {
		$sth = $this->db->prepare('SELECT id, login, role FROM users');
		$sth->execute();
		return $sth->fetchAll();
	}

}

