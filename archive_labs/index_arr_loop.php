<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
/*empty использовать нельзя, так как отрежет 0,
а в таком виде иф снизу фактически дублирует иф сверху,
только с пустой строкой проверка работает*/
	if($_POST['num1'] == "" or $_POST['num2'] == ""){
		$msg = "Заполните все поля для получения результата!";
	}else{
		if($_POST['num2'] == '0' and $_POST['oper'] == 'div'){
			$msg = "Делить на ноль нельзя!";
		}else{
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$oper = trim(strip_tags($_POST["oper"]));
			switch($oper){
				case plus:
					$msg = $num1 + $num2; break;
				case minus:
					$msg = $num1 - $num2; break;
				case mult:
					$msg = $num1 * $num2; break;
				case div:
					if($num2 === 0) $msg = "Делить на ноль нельзя!";
					else $msg = $num1 / $num2; break;
				default: $msg = "Что-то пошло не так...";
			}
		}
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
		<input name='num1' type='text'  value="<?=$num1?>"/><span> <?=$oper?></span>
		<input name='num2' type='text' value="<?=$num2?>"/><span> =</span><span> <?=$msg?></span><br><br>
		<button name="oper" value="plus" type="submit">+</button>
		<button name="oper" value="minus" type="submit">-</button>
		<button name="oper" value="mult" type="submit">*</button>
		<button name="oper" value="div" type="submit">/</button>
	</form>
  </div>
</body>

</html>