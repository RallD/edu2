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

<h2>Выводим файлы галереи из БД!</h2>
<? $img_arr = arrImagesDB(); ?>

<? foreach($img_arr as $img) : ?>
	<?
	$filename = $img['filename'];
	$picname = $img['picname'];
	$picid = $img['id'];
	?>
	<figure style="display:inline-block">
		<a href="/image.php?id=<?= $picid ?>"><img src="<?= '/'.IMG_DIR.'/'.$filename ?>" width='300'></a>
		<figcaption><a href="/image.php?id=<?= $picid ?>"><?= $picname ?></a></figcaption>
	</figure>
<? endforeach; ?>

<?php 
	if(!empty($_SESSION['file_error'])){
	echo $_SESSION['file_error'];
	unset($_SESSION['file_error']);
}
?>
<br><a href="/download.php">Загрузка картинок в галерею</a>


