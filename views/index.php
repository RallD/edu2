<!DOCTYPE html>
<html>
	<head>
	  <title>Главная страница галереи</title>
	  <meta charset="utf-8" />
	</head>
	<body>
	<table border="1">
		<tr>
			<th>Название</th>
			<th>Картинка</th>
		</tr>
		<?php foreach($items as $item): ?>
		<tr>
			<td><?php echo $item['title']; ?></td>
			<td><img src="<?php echo $item['path']; ?>" style="max-width:250px"></td>
		</tr>	
		<?php endforeach; ?>
	</table>
	<br>
	<h2>Добавить картинку</h2>
	<?php include __DIR__. '/form.php'; ?>
	</body>
</html>