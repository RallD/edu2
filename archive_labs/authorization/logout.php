<?php 
function logout(){
	setcookie('auth', '', time()-33600);
}
logout();
	header('Location: /index.php');
	exit;