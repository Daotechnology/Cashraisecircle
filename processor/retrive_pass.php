<?php

session_start();
require_once('../../processor/database.php');
require_once('../../processor/user.php');
require_once('../../processor/functions.php');
if(isset($_GET['email']) && isset($_GET['username'])){
$_SESSION['emailfromrecovery'] = $_GET['email'];
$email=trim($_GET['email']);
$username = trim($_GET['username']);
$result = User::find_email_nd_username("users",$email,$username);
echo $result;
}
if(isset($_GET['password']) && isset($_GET['confirm_pass']) && isset($_SESSION['emailfromrecovery'])){
	$password=trim($_GET['password']);
	$confirm_pass = trim($_GET['confirm_pass']);
	if($password != $confirm_pass){
		echo "notequal";
	}else{
		$resultnew = User::update_pass('users',$password,$_SESSION['emailfromrecovery']);
		echo $resultnew;
	}
}
?>