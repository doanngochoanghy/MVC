<?php 
//Connect Database
require 'library\connection.php'; 
$connect=Db::getInstance();
require 'controllers\controller.php';
//include_once 'views\login.php';
@$op=$_REQUEST['op'];
switch ($op) {
	case 'login':
	Login();
	break;
	
	default:
	header('Location:views/login.php');
	break;
}
?>