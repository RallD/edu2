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
<br><a href="download.php">Загрузка картинок в галерею</a>


