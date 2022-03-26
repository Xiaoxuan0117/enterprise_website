<?php
session_start();
require 'credentials.php';

$articleID = $_GET["articleID"];

$link= mysqli_connect($host,$user,$passwd,$database)or die("無法開啟MySQL資料庫連接!<br/>");
$sql = "DELETE FROM article WHERE articleID = '$articleID' AND UserID='$userid'";

$result = mysqli_query($link , $sql) or die('MySQL query error');
        echo "<script type='text/javascript'>";
        echo "alert('刪除留言成功');";
        echo "location.href='indexmyarticle.php';";
        echo "</script>";

?>