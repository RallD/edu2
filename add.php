<?php
Header("Content-Type: text/html; charset=utf-8");

require __DIR__ . '/functions/file.php';
require __DIR__ . '/models/photo.php';

if(!empty($_POST)){
	$data = array();
	if(!empty($_POST['title'])){
		$data['title'] = $_POST['title']; 
	}
	if(!empty($_FILES)){
		$res = File_upload('image');
		if(false !== $res){
			$data['image'] = $res;
		}
	}
	if(isset($data['title']) && isset($data['image'])){
		Photo_insert($data);
		header('Location: /');
		die;
	}
}
/*Инклюдим тут*/
include __DIR__ . '/views/add.php';