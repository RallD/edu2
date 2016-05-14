<?php 
session_start();
function checkLoginPassword($login, $password){
	$arr = ['admin'=>'12345', 'vasya'=>'qwerty'];
	return isset($arr[$login]) && $password == $arr[$login];
}
function login($login){
	setcookie('auth', $login, time()+33600);
}

if(empty($_POST['login']) || empty($_POST['password'])){
	$_SESSION['error'] = 'Empty login or password!';
	header('Location: /form.php');
	exit;
}
	$login = $_POST['login'];
	$password = $_POST['password'];

if(!checkLoginPassword($login, $password)){
	$_SESSION['error'] = 'Wrong login or password!';
	header('Location: /form.php');
	exit;
}
login($login);
	header('Location: /index.php');
	exit;