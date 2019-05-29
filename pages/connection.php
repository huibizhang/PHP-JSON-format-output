<?php
	
	$server_location = "localhost"; //伺服器位址
	$user_account = "your-account"; //帳號
	$password = "your-password";    //密碼
	$db = "your-db-name";			//資料庫名稱

	$link = new mysqli($server_location,$user_account,$password,$db);
	$link->query("set names utf8");
?>