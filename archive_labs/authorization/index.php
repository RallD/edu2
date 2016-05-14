<?php 
function isUser(){
	return isset($_COOKIE['auth']);
}
function getUser(){
	return $_COOKIE['auth'];
}
if(!isUser()){
	header('Location: /form.php'); 
	exit;
}

/*Проверка
assert(true == checkLoginPassword('admin', '12345'));
assert(false == checkLoginPassword('admin123', '12345'));
assert(false == checkLoginPassword('admin', '12345qwqwqw'));
*/
?>

<h1>Hello, <?php echo getUser(); ?>!</h1>
<a href="/logout.php">Log Out!</a>

