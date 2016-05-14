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
	//запись названия файла из этой формы в БД
	$file_name = $_FILES["userfile"]["name"];
	
	$_SESSION['file_error'] = "<br>" . "Имя загруженного файла: " . $_FILES["userfile"]["name"] . "<br>" . "Размер загруженного файла: " . $_FILES["userfile"]["size"] . "<br>" . "Тип загруженного файла: " . $_FILES["userfile"]["type"] . "<br>";
	move_uploaded_file($_FILES["userfile"]["tmp_name"], IMG_DIR . "/" . $_FILES["userfile"]["name"]);
}

//Здесь человекоподобное название файла забрать
if($_POST['pic_name']){
	$pic_name = $_POST['pic_name'];
}
/*Зписать в базу*/
$sql = "INSERT INTO gallery (filename, picname) VALUES ('$file_name', '$pic_name')";
$res = mysql_query($sql);

/*Редирект на главную*/
header('Location: /index.php'); 
exit;
