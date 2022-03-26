<?php
session_start();

$link= mysqli_connect("localhost","root","","enterprise")
	or die("無法開啟MySQL資料庫連接!<br/>");

mysqli_query($link, "SET NAMES 'utf8'");

$sql="SELECT * FROM article WHERE articleID limit 0,5";

$result = mysqli_query($link, $sql);
$total_records = mysqli_num_rows($result);//取得資料筆數
while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
          $_SESSION["login_session"] = true;
          $_SESSION["articlaid"] = $row[0];
          $_SESSION["userid"] = $row[1];
          $_SESSION["companyname"] = $row[2];
          $_SESSION["pro"] = $row[3];
          $_SESSION["con"] = $row[4];
          $_SESSION["job"] = $row[5];
          $_SESSION["anonymous"] = $row[6];
          //header("Location: mainpage.php");
          //header("refresh:0;url=index.html");
    }
    mysqli_close($link);  // 關閉資料庫連接 
    
  ?>