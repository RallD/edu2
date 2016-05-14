<?php 
function randMass($n){
	$a = [];
	$i = 0;
	while($i < $n){
		$a[] = rand();
		$i++;
	}
	arsort($a);
	return $a;
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
	$i = 0;
	while($i < 100){
		if(0 == $i%3){
			echo $i . "<br>";
		}
		$i++;
	}
	echo "<br>";
	var_dump(randMass(25));
	echo "<br>";
	$regions = [
		Киевщина=>[Киев, Бровары, Васильков],
		Полтавщина=>[Полтава, Миргород, Диканька],
		Черниговщина=>[Чернигов, Нежин, Бахмач]
		];
	var_dump($regions);
	echo "<ul>";
	foreach($regions as $key=>$value){
		echo "<li>" . $key . "</li>";
		echo "<ul>";
		foreach($value as $val){
			echo "<li>" . $val . "</li>";
		}
		echo "</ul>";
	}
	echo "</ul>";
	?>
	
  </div>
</body>

</html>