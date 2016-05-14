<?php
require_once('lib.php');
session_start();

if($_GET['id']){
	$picid = $_GET['id'];
	$img_arr = arrImageDB($picid);
}
?>

<? foreach($img_arr as $img): ?>
	<?
	$filename = $img['filename'];
	$picname = $img['picname'];
	$picid = $img['id'];
	?>
	<h1><?= $picname ?></h1>
	<img src="<?= '/'.IMG_DIR.'/'.$filename ?>"><br>
	<span>Просмотров: </span><br><br>
	<a href="/">Вернуться</a>
<? endforeach; ?>