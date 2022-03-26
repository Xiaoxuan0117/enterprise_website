<?php
 if (!isset($_SESSION)) {
	session_start();
}

$_SESSION["articleid"]=$_POST["articleid"];
require 'articlecontroller.php';
require 'commentcontroller.php';
$articlecontroller=new articlecontroller();
$commentcontroller=new commentcontroller();
$title='文章分享';
$subtitle='留言告訴我們想法~';

if(isset($_POST['articleid']))
{
	$articletable=$articlecontroller->createsinglearticletable($_POST['articleid']);
}
$content1=$articletable;
$content2=$commentcontroller->inputcomment($_POST['articleid']).$commentcontroller->createcommenttable($_POST['articleid']);

include 'singlearticlepage.php';
?>