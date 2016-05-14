<?php
require_once('lib.php');
session_start();

if($_FILES["userfile"]["error"]!= UPLOAD_ERR_OK){
	switch($_FILES["userfile"]["error"]){
		case UPLOAD_ERR_INI_SIZE:
			$_SESSION['file_error'] = "Превышен максимально допустимый размер"; break;
		case UPLOAD_ERR_FORM_SIZE:
			$_SESSION['file_error'] = "Превышено значение MAX_FILE_SIZE"; break;
		case UPLOAD_ERR_PARTIAL:
			$_SESSION['file_error'] = "Файл загружен частично"; break;
		case UPLOAD_ERR_NO_FILE:
			$_SESSION['file_error'] = "Файл не был загружен"; break;
		case UPLOAD_ERR_NO_TMP_DIR:
			$_SESSION['file_error'] = "Отсутствует временная папка"; break;
		case UPLOAD_ERR_CANT_WRITE:
			$_SESSION['file_error'] = "Не удалось записать файл не диск";
	}
}else{
	$_SESSION['file_error'] = "<br>" . "Размер загруженного файла: " . $_FILES["userfile"]["size"] . "<br>" . "Тип загруженного файла: " . $_FILES["userfile"]["type"] . "<br>";
	move_uploaded_file($_FILES["userfile"]["tmp_name"], IMG_DIR . "/" . $_FILES["userfile"]["name"]);
}
header('Location: /index.php'); 
exit;