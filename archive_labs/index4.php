<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(empty($_POST['num1']) or empty($_POST['num2']) or empty($_POST['oper'])){
		$msg = "Заполните все поля для получения результата!";
	}
	if($_POST['num2'] == '0' and $_POST['oper'] == 'div'){
		$msg = "Делить на ноль нельзя!";
	}
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$oper = trim(strip_tags($_POST["oper"]));
	$res="";
	switch($oper){
		case plus:
			$msg = $num1 + $num2; break;
		case minus:
			$msg = $num1 - $num2; break;
		case mult:
			$msg = $num1 * $num2; break;
		case div:
			$msg = $num1 / $num2; break;
		default: $msg = "Что-то пошло не так...";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Курс Альберта Степанцева</title>
  <meta charset="utf-8" />
</head>

<body>

  <div id="header">Курс Альберта Степанцева</div>

  <div id="content">
    <!-- Заголовок -->
	    <h1>Курс Альберта Степанцева</h1>
	<!-- Заголовок -->
	<form action='<?= $_SERVER['REQUEST_URI']?>' method='POST'>
		<input name='num1' type='text' />
		<select name='oper'>
		  <option value="plus">+</option>
		  <option value="minus">-</option>
		  <option value="mult">*</option>
		  <option value="div">/</option>
		</select>
		<input name='num2' type='text' />
		<input type='submit' value='='>
	</form>
		<?php
			echo $msg;
		?>
  </div>
</body>

</html>