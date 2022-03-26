<?php
 if (!isset($_SESSION)) {
	session_start();
}

require("commentmodel.php");

class commentcontroller{
	function inputcomment($articleid)
	{
		if(isset($_SESSION["UserID"])){
		$result="
		<form action='comment.php' method='post' style='text-align: left'>
		<input type='text' name='content' class='commentcontent'/>
		<input type='text' name='articleid' value='$articleid' size='15' maxlength='10'/ readonly='readonly'/>
		<input class='typesearchingbottom' type='submit' name='viewarticle' value='送出'/>
		</form>";
		}
		else{
		$result="<div class='commenttitle' style='font-size:20px'>需先登入才能留言</div>";
		}
	return $result;
	}

	function createcommenttable($articleid)
	{
		$commentmodel= new commentmodel();
		$commentarray= $commentmodel->getcommentbyid($articleid);
		$result="";

		foreach($commentarray as $key=>$comment)
		{	
		$result=$result."
			<div class='commentbox'>
			<table style='height: 50%'>
				<td style='width: 200px;'>
					<img src='https://i.imgur.com/WvC6Lo9.png' style='width: 20%' >
				</td>
				<td style='width: 700px;text-align: left'>$comment->content</td>
				<td style='width: 200px'>
					<div style='font-size: 15px;text-align: right'>$comment->userid</div>
					<div style='font-size: 15px;text-align: right;'>$comment->time</div>
				</td>
			</table>
			</div>";
		}
	return $result;
	}
}