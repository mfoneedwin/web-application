<?php 
include 'db/init.php'; 

if(isset($_POST['NbClick'])&&isset($_POST['newsID'])){	
	$nbclick = $_POST['NbClick']+1;
	$id = $_POST['newsID'];

	//$sql = "SELECT `user_id` FROM `user` WHERE `email`='$email' LIMIT 1";
	$sql = "UPDATE `news` SET `click`=$nbclick WHERE `news_id`=$id ";

	if(mysql_query($sql)){
		echo "success";
		exit();
	}else{
		echo "Error";
		exit();
	}	
	exit();
}
if(isset($_POST['NewsLetterEm'])){	
	$email = $_POST['NewsLetterEm'];

	$sql = "INSERT IGNORE INTO `email`(`email`) VALUES ('$email') ";

	if(mysql_query($sql)){
		echo "success";
		exit();
	}else{
		echo "Error";
		exit();
	}	

	exit();
}



?>