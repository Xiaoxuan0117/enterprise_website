<?php
 if (!isset($_SESSION)) {
	session_start();
}

$articleid=$_SESSION["articleid"];
require 'articlecontroller.php';
require 'commentcontroller.php';
$articlecontroller=new articlecontroller();
$commentcontroller=new commentcontroller();
$title='文章分享';
$subtitle='留言告訴我們想法~';


	$articletable=$articlecontroller->createsinglearticletable($articleid);
$content1=$articletable;
$content2=$commentcontroller->inputcomment($articleid).$commentcontroller->createcommenttable($articleid);

include 'singlearticlepage.php';
?>