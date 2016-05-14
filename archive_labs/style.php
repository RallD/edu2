<?php 
/*Добавляем разные стили цсс через управление куками*/
session_start();
ob_start();
if($_GET['style']){
	$style = $_GET['style'];
	setcookie("style", $style, time() + 3600);
	header( 'Location: http://albert1.loc/', true, 301 );
}
if($_GET['cookie']){
	$style = $_GET['cookie'];
	setcookie("style", "", time() - 3600);
	header( 'Location: http://albert1.loc/', true, 301 );
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Страница авторизации</title>
  <meta charset="utf-8" />
</head>

<body>

  <div id="header">Страница авторизации</div>

  <div id="content">
    <!-- Заголовок -->
	    <h1>Страница авторизации</h1>
	<!-- Заголовок -->
	<form action="<?= $_SERVER['REQUEST_URI']?>" method='post'>
		<span>Логин </span><input name='login' type='text'  value=""/>
		<span>Пароль </span><input name='password' type='text' value=""/><br><br>
		<input type='submit' value='Регистрация'>
	</form>
  </div>
</body>

</html>