<?php
require 'articlecontroller.php';
$articlecontroller=new articlecontroller();
$title=$_POST['search'];
$subtitle='累積經驗，了解公司';

$articletable=$articlecontroller->createcompanyarticletable($_POST['search']);

$content=$articletable;

include 'mainpage.php';
?>