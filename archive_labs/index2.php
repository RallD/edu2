<?php 
function fib($n){
	if ($n < 3) {
        return 1; 
    }
    else {
        return fib($n-1) + fib($n-2);
    }
}
function vklad_simple($sum, $term, $proc){
	$proc = $proc / 100;
	return $income = ($sum * $proc) * $term;
}
function vklad($sum, $term, $proc){
	$proc = $proc / 100;
	$year_income = $sum * $proc;
	$mounth = $term / 12;
	return $income = $year_income * $mounth;
}
function form_date($day, $month){
	if( $day >= 1 and $day <= 31){
		$day_true = $day;
	}else{
		$message = "Введите правильный день";
	}
	switch($month){
		case 1:
			$month_str = "Января";
			break;
		case 2:
			$month_str = "Февраля";
			break;
		case 3:
			$month_str = "Марта";
			break;
		case 4:
			$month_str = "Апреля";
			break;
		case 5:
			$month_str = "Мая";
			break;
		case 6:
			$month_str = "Июня";
			break;
		case 7:
			$month_str = "Июля";
			break;
		case 8:
			$month_str = "Августа";
			break;
		case 9:
			$month_str = "Сентября";
			break;
		case 10:
			$month_str = "Октября";
			break;
		case 11:
			$month_str = "Ноября";
			break;
		case 12:
			$month_str = "Декабря";
			break;
		default:
			$message = "Введите правильный месяц";
	}
	if($day_true and $month_str){
		echo $day_true ." ". $month_str;
	}elseif($day_true xor $month_str){
		echo $message;
	}else{
		echo "Введите правильный месяц и день";
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
	<?php
		/*$int = 10;
		$float = 10.2;
		$string = "Значение";
		$bool = true;
		define('PI', 3.14);
		echo PI;
		echo $int . "\n\t";
		echo $float . "\n\t";
		echo $string . "\n\t";
		echo $bool . "\n\t";
		
		echo "«Славная осень! Здоровый, ядреный<br> Воздух усталые силы бодрит;<br> Лед неокрепший на речке студеной<br> Словно как тающий сахар лежит.»<br> <u>Н. А. Некрасов</u>";
		
		$a = 50;
		$b = ($a xor $a);
		echo var_dump($b);
		$x = 10;
		$y = 15;
		echo $x + 5;
		echo $y - 5;
		echo fib(21);
		echo vklad_simple(10000, 6, 15) . "<br>";
		echo vklad(10000, 6, 15) . "<br>";
		echo form_date(15, 11) . "<br>";
		echo form_date(35, 5) . "<br>";
		echo form_date(35, 15);*/
	?>
  </div>
</body>

</html>