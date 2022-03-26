<?php

require("commentEntity.php");

class commentmodel{

	function getcommentbyid($articleid)
	{
	require 'credentials.php';

	$link= mysqli_connect($host,$user,$passwd,$database)or die("無法開啟MySQL資料庫連接!<br/>");

	$sql="SELECT * FROM comment WHERE articleID LIKE '$articleid'";
	$result = mysqli_query($link, $sql);
	$commentarray=array();

	while($row=mysqli_fetch_array($result,MYSQLI_NUM))
	{
	$articleid=$row[1];
	$userid=$row[2];
	$content=$row[3];
	$time=$row[4];

	$comment = new commentEntity($articleid, $userid, $content, $time);
	array_push($commentarray,$comment);
	}
	mysqli_close($link);
	return $commentarray;
	}
}

?>