<?php
//include_once 'views\login.php';
 /**
* 
*/
//Ham login
function Login()
 {
 	echo($_POST['username']);
 } 

class Controller
{
	public function Create($username,$password)
	{
	}
	public function Login($username,$password)
	{
		

	}
	public function Logout()
	{
		session_start();
		session_destroy();

	}
	static function Authenticate($username,$password)
	{
		
	}
	
}



?>