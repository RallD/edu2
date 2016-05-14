<?php
Header("Content-Type: text/html; charset=utf-8");
define ('IMG_DIR', 'images');
mysql_connect('localhost', 'root', '');
mysql_select_db('al_gallery');

function showImages($dir_content){
	if(is_array($dir_content)){
		foreach($dir_content as $file){
			if($file != "." and $file != ".." and !is_dir(__DIR__ . '/' . IMG_DIR.'/'.$file) and exif_imagetype(__DIR__ . '/' . IMG_DIR.'/'.$file)){
				echo "$file ".date("d-m-Y H:i:s", filemtime(__DIR__ . '/' . IMG_DIR.'/'.$file))."</br>";
			}
		}
	}
}
function htmlImages($dir_content){
	foreach($dir_content as $file){
		if($file != "." and $file != ".." and !is_dir(__DIR__ . '/' . IMG_DIR.'/'.$file) and exif_imagetype(__DIR__ . '/' . IMG_DIR.'/'.$file)){
			echo "<img src='" . "/" . IMG_DIR . "/$file' width='300'>";
		}
	}
}
function isUser(){
	return isset($_COOKIE['auth']);
}
function getUser(){
	return $_COOKIE['auth'];
}
function arrImagesDB(){
	$sql = "SELECT * FROM gallery";
	$res = mysql_query($sql);
	$img_arr = array();
	while(false !== ($row = mysql_fetch_assoc($res))){
		$img_arr[] = $row;
	}
	return $img_arr;
}
function arrImageDB($id){
	$sql = "SELECT * FROM gallery WHERE id='$id'";
	$res = mysql_query($sql);
	$img_arr = array();
	while(false !== ($row = mysql_fetch_assoc($res))){
		$img_arr[] = $row;
	}
	return $img_arr;
}
