<?php
       $account = $_POST["account"];
       $password = $_POST["password"];
       $UserID = $_POST["UserID"];
       $email = $_POST["email"];
       $birthday= $_POST["birthday"];
       

	session_start();  // 啟用交談期
    $link = mysqli_connect("localhost","root","","enterprise")
            or die("無法開啟MySQL資料庫連接!<br/>");

   	//送出UTF8編碼的MySQL指令
    mysqli_query($link, "SET NAMES 'utf8'"); 

	$sql = "INSERT INTO register (account, password, UserID, email, birthday)
	VALUES ('$account', '$password', '$UserID', '$email', '$birthday')";

	if ($link->query($sql) === TRUE) {
	  echo "New record created successfully，點擊跳轉回登入頁面";
	  echo '<a href="http://localhost/project1/login.html" >登入</a>';
	  header("Location: login.html");
	} else {
	  echo "Error: " . $sql . "<br>" . $link->error;
	}

	$link->close();

?>
