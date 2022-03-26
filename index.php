<?php

require 'articlecontroller.php';
$articlecontroller=new articlecontroller();
$title='最新評論';
$subtitle='我想看⬇';

if (isset($_POST['type']))
{
	$articletable=$articlecontroller->createarticletable($_POST['type']);
}
else
{
	$articletable=$articlecontroller->createarticletable('%');
}

$content=$articlecontroller->createarticletypedroplist().$articletable;

include 'mainpage.php';
?>