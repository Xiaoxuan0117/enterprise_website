<?php

class ArticleEntity
{
	public $articleid;
	public $userid;
	public $companyname;
	public $pro;
	public $con;
	public $job;
	public $anonymous;
	public $type;
	public $time;

	function __construct($articleid, $userid, $companyname, $pro, $con, $job, $anonymous, $type, $time)
	{
		$this->articleid=$articleid;
		$this->userid=$userid;
		$this->companyname=$companyname;
		$this->pro=$pro;
		$this->con=$con;
		$this->job=$job;
		$this->anonymous=$anonymous;
		$this->type=$type;
		$this->time=$time;
	}
}
?>