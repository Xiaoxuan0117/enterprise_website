<?php

require("articleEntity.php");

class articlemodel{

	function getarticletype(){
	require 'credentials.php';

	$link= mysqli_connect($host,$user,$passwd,$database)or die("無法開啟MySQL資料庫連接!<br/>");

	$sql="SELECT DISTINCT type FROM article";
	$result = mysqli_query($link, $sql);
	$type=array();

	while($row=mysqli_fetch_array($result)){

		array_push($type, $row[0]);
	}
	mysqli_close($link);
	return $type;

	}

	function getnewestarticlebytype($type)
	{
	require 'credentials.php';

	$link= mysqli_connect($host,$user,$passwd,$database)or die("無法開啟MySQL資料庫連接!<br/>");

	$sql="SELECT * FROM article WHERE type LIKE '$type'";
	$result = mysqli_query($link, $sql);
	$articlearray=array();

	while($row=mysqli_fetch_array($result,MYSQLI_NUM))
	{
	$articleid=$row[0];
	$userid=$row[1];
	$anonymous=$row[2];
	$type=$row[3];
	$companyname=$row[4];
	$job=$row[5];
	$pro=$row[6];
	$con=$row[7];
	$time=$row[8];
	if ($anonymous=="是"){
		$userid="匿名";
	}

	$article = new ArticleEntity($articleid, $userid, $companyname, $pro, $con, $job, $anonymous, $type, $time);
	array_push($articlearray,$article);
	}
	mysqli_close($link);
	return $articlearray;
	}

	function getsinglearticle($articleid)
	{
	require 'credentials.php';

	$link= mysqli_connect($host,$user,$passwd,$database)or die("無法開啟MySQL資料庫連接!<br/>");

	$sql="SELECT * FROM article WHERE articleid = '$articleid'";
	$result = mysqli_query($link, $sql);
	$row=mysqli_fetch_array($result,MYSQLI_NUM);

	$articleid=$row[0];
	$userid=$row[1];
	$anonymous=$row[2];
	$type=$row[3];
	$companyname=$row[4];
	$job=$row[5];
	$pro=$row[6];
	$con=$row[7];
	$time=$row[8];

	$article = new ArticleEntity($articleid, $userid, $companyname, $pro, $con, $job, $anonymous, $type, $time);
	mysqli_close($link);
	return $article;
	}

	function getcompanyarticlebytype($search)
	{
	require 'credentials.php';

	$link= mysqli_connect($host,$user,$passwd,$database)or die("無法開啟MySQL資料庫連接!<br/>");

	$sql="SELECT * FROM article WHERE CompanyName LIKE '%$search%' OR position LIKE '%$search%'";
	$result = mysqli_query($link, $sql);
	$articlearray=array();

	while($row=mysqli_fetch_array($result,MYSQLI_NUM))
	{
	$articleid=$row[0];
	$userid=$row[1];
	$anonymous=$row[2];
	$type=$row[3];
	$companyname=$row[4];
	$job=$row[5];
	$pro=$row[6];
	$con=$row[7];
	$time=$row[8];


	$article = new ArticleEntity($articleid, $userid, $companyname, $pro, $con, $job, $anonymous, $type, $time);
	array_push($articlearray,$article);
	}
	mysqli_close($link);
	return $articlearray;
	}

	function getmyarticlebytype($userid)
	{
	require 'credentials.php';

	$link= mysqli_connect($host,$user,$passwd,$database)or die("無法開啟MySQL資料庫連接!<br/>");

	$sql="SELECT * FROM article WHERE UserID LIKE '$userid'";
	$result = mysqli_query($link, $sql);
	$articlearray=array();

	while($row=mysqli_fetch_array($result,MYSQLI_NUM))
	{
	$articleid=$row[0];
	$userid=$row[1];
	$anonymous=$row[2];
	$type=$row[3];
	$companyname=$row[4];
	$job=$row[5];
	$pro=$row[6];
	$con=$row[7];
	$time=$row[8];

	$article = new ArticleEntity($articleid, $userid, $companyname, $pro, $con, $job, $anonymous, $type, $time);
	array_push($articlearray,$article);
	}
	mysqli_close($link);
	return $articlearray;
	}

}

?>