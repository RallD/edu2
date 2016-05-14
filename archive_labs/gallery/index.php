<?php
require_once('lib.php');
session_start();

if(is_dir(IMG_DIR)){
	$output = "Папка с картинками есть!";
}
$dir_content = scandir(IMG_DIR);

?>
<h1>Работаем с файлами!</h1>
<p><?= $output ?></p>
<p><?= showImages($dir_content); ?></p>

<h2>Выводим файлы галереи!</h2>
<?= htmlImages($dir_content); ?>

<?php 
	if(!empty($_SESSION['file_error'])){
	echo $_SESSION['file_error'];
	unset($_SESSION['file_error']);
}
?>

<h3>Загрузка картинок в галерею</h3>
	<form enctype="multipart/form-data" method="POST" action="downloader.php" >
		<input type="hidden" name="MAX_FILE_SIZE" value="884096" />
		<input name="userfile" type="file" />
		<input type="submit" value="Загрузить картинку"/>
	</form>

