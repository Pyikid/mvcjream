<?php

// Use an autoloader!
/*
 *require 'libs/Bootstrap.php';
 *require 'libs/Controller.php';
 *require 'libs/Model.php';
 *require 'libs/View.php';
 *require 'libs/Database.php';
 *require 'libs/Session.php';
 *require 'libs/Hash.php';
 */

require 'config/paths.php';
require 'config/database.php';
require 'config/constants.php';


// Also spl_autoload_register (takea look)
function __autoload($class) {
	require LIBS . $class . ".php";
}
$app = new Bootstrap();

