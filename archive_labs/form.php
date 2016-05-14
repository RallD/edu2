<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Курс Альберта Степанцева</title>
  <meta charset="utf-8" />
</head>

<body>
<?php 
if(!empty($_SESSION['error'])){
	echo $_SESSION['error'];
	unset($_SESSION['error']);
}
?>
	<h1>Страница авторизации</h1>
	<!-- Заголовок -->
	<form action="/login.php" method='post'>
		<span>Логин </span><input name='login' type='text'  value=""/>
		<span>Пароль </span><input name='password' type='password' value=""/><br><br>
		<input type='submit' value='Регистрация'>
	</form>
</body>

</html>