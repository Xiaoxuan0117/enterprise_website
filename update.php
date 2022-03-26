<?php
	$account=$_POST["account"];
    $password = $_POST["password"];
    $UserID = $_POST["UserID"];
    $email = $_POST["email"];
    $birthday= $_POST["birthday"];
    

    session_start();
    $link=mysqli_connect("localhost","root","","enterprise")
    	or die("無法開啟MySQL資料庫連接!<br/>");
    mysqli_query($link,"SET NAMES 'utf8'");

    $sql="UPDATE register SET UserID='$UserID',email='$email',birthday='$birthday'  WHERE account='$account' AND password='$password'";
	if ($link->query($sql) === TRUE) {
		  echo "Update successfully，點擊跳轉回登入頁面";
		  echo '<a href="http://localhost/test2/login.html" >登入</a>';
		  header("Location: login.html");
		} else {
		  echo "Error: " . $sql . "<br>" . $link->error;
		}

		$link->close();
?>
