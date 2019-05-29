<?php
	$p = $_GET;

	$result_arr["status"]=false; //預設輸出狀態為 false
	
	if($p["appkey"]=="your-app-key"){
	
		require("connection.php");	//引入連線功能
	
		$sql = "SELECT ......"; //查詢語法
		
		if($data = $link->query($sql)){
			$arr = array();  
			while($row = $data->fetch_assoc()) {
				array_push($arr,$row);  
			}
			
			$result_arr["status"]=true;  			//操作成功
			$result_arr["count"]=COUNT($arr);		//顯示取得資料數
			$result_arr["results"] = $arr;			//資料陣列
		}else{
			$result_arr["error_msg"] = mysqli_error($link);  //操作失敗，輸出錯誤訊息
		}
		
	}else{
		$result_arr["error_msg"] = "Wrong API key or version.";  //App key 不符，輸出錯誤訊息
	}
	
	echo json_encode($result_arr,JSON_UNESCAPED_UNICODE);  //將要輸出的資訊以JSON方式呈現於網頁
?>