<?php
session_start();
require 'articlecontroller.php';
$articlecontroller=new articlecontroller();
$title=$_SESSION["UserID"];
$subtitle='記錄生活，認識自我';
$userid=$_SESSION["UserID"];

$articletable=$articlecontroller->createmyarticletable($userid);

$content=$articletable;

include 'mainpage.php';
?>