<?php

class commentEntity
{
	public $articleid;
	public $userid;
	public $content;
	public $time;

	function __construct($articleid, $userid, $content, $time)
	{
		$this->articleid=$articleid;
		$this->userid=$userid;
		$this->content=$content;
		$this->time=$time;
	}
}
?>