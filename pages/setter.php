<?php
	$p = $_GET;

	$result_arr["status"]=false; //預設輸出狀態為 false
	
	if($p["appkey"]=="your-app-key"){
		
		require("connection.php");
		
		$sql = "INSERT INTO ........"; //新增語法
		/*
		$sql = "UPDATE SET ........."; //更新語法
		$sql = "DELETE FROM ........"; //刪除語法
		*/
		
		if($link->query($sql)){
			$result_arr["status"]=true; //操作成功
		}else{
			$result_arr["error_msg"] = mysqli_error($link); //操作失敗，輸出錯誤訊息
		}
		
	}else{
		$result_arr["error_msg"] = "Wrong API key or version."; //App key 不符，輸出錯誤訊息
	}
	
	echo json_encode($result_arr,JSON_UNESCAPED_UNICODE);  //將要輸出的資訊以JSON方式呈現於網頁
?>
