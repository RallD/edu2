<?php
Header("Content-Type: text/html; charset=utf-8");
define ('IMG_DIR', 'images');

function showImages($dir_content){
	if(is_array($dir_content)){
		foreach($dir_content as $file){
			if($file != "." and $file != ".." and !is_dir(IMG_DIR.'/'.$file)){
				echo "$file ".date("d-m-Y H:i:s", filemtime(IMG_DIR.'/'.$file))."</br>";
			}
		}
	}
}
function htmlImages($dir_content){
	foreach($dir_content as $file){
		if($file != "." and $file != ".." and !is_dir(IMG_DIR.'/'.$file)){
			echo "<img src='".IMG_DIR."/$file' width='300'>";
		}
	}
}
function isUser(){
	return isset($_COOKIE['auth']);
}
function getUser(){
	return $_COOKIE['auth'];
}