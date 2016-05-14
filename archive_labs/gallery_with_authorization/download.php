<?php
	require_once('lib.php');
	if(!isUser()){
		header('Location: /form.php'); 
		exit;
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Загрузка картинок в галерею</title>
</head>
<body>
	<h1>Hello, <?php echo getUser(); ?>!</h1>
	<h3>Загрузка картинок в галерею</h3>
		<form enctype="multipart/form-data" method="POST" action="downloader.php" >
			<input type="hidden" name="MAX_FILE_SIZE" value="884096" />
			<input name="userfile" type="file" />
			<input type="submit" value="Загрузить картинку"/>
		</form>
	<a href="/logout.php">Log Out!</a>
</body>
</html>