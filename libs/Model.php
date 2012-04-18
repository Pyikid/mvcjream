<?php

class Model {

	/*
	 *function __construct() {
	 *    $this->db = new Database();
	 *}
	 */
	 function __construct() {
	     $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS); //config/database.php
	 }                           //libs/Database.php -->Database extends PDO __construct())
}
