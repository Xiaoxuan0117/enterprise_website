<?php
 require("articlemodel.php");

class articlecontroller{

	function createarticletypedroplist()
	{
		$articlemodel= new articlemodel();
		$result="<form action='' method='post'>
		<select class='typesearch' name='type'>
		<option value = '%'>All</option>
		".$this->createoptionvalues($articlemodel->getarticletype()).
		"</select>
		<input class='typesearchingbottom' type='submit' value='送出'/>

		</form>";

		return $result;
	}

	function createoptionvalues(array $valuearray)
	{
		$result="";

		foreach($valuearray as $value)
		{
			$result=$result."<option value='$value'>$value</option>";
		}
		return $result;
	}

	function createarticletable($type)
	{
		$articlemodel= new articlemodel();
		$articlearray= $articlemodel->getnewestarticlebytype($type);
		$result="";

		foreach($articlearray as $key=>$article)
		{	
			$result = $result .
				"
				<div class='articlebox'>
					<div class='articleboxhead'>
						<table style='width: 100%'>
							<td style='text-align: left;color:white;padding-left: 20px;width:33%'>$article->companyname</td>
							<td style='text-align: center;color:white;width:33%'>$article->type</td>
							<td style='text-align: right;color:white;padding-right: 20px;width:33%'>$article->job</td>
						</table>
					</div>
					<div class='articlecontext'>
						<div>
							<table style='width: 40%;height: 60px'>
								<td style='width: 20%'>
									<img src='https://i.imgur.com/WvC6Lo9.png' style='width: 80%'>
								</td>
								<td style='widows: 1000px;padding-top: 0px'>
									<div style='font-size: 15px;text-align: left'>$article->userid</div>
									<div style='font-size: 15px;text-align: left;'>$article->time</div>
								</td>
							</table>
						</div>
						<div style='width: 100%;'>
							<div class='conandprobox'>
								<div>優點</div>
							<div>$article->pro</div>
							</div>
							<div class='conandprobox'>
								<div>缺點</div>
							<div>$article->con</div>
							</div>
						</div>
					</div>
					<form name='viewarticle' action='indexarticle.php' method='post'>
					<input type='text' name='articleid' value='$article->articleid' size='15' maxlength='10'/ readonly='readonly'>
					<input class='typesearchingbottom' type='submit' name='viewarticle' value='查看完整文章'>
					</form>
				</div>
				";
		}
		return $result;
	}

	function createsinglearticletable($articleid)
	{
		$articlemodel= new articlemodel();
		$article= $articlemodel->getsinglearticle($articleid);
		$result="";

		$result ="<div class='articlebox'>
					<div class='articleboxhead'>
						<table style='width: 100%'>
							<td style='text-align: left;color:white;padding-left: 20px;width:33%'>$article->companyname</td>
							<td style='text-align: center;color:white;width:33%'>$article->type</td>
							<td style='text-align: right;color:white;padding-right: 20px;width:33%'>$article->job</td>
						</table>
					</div>
					<div class='articlecontext'>
						<div>
							<table style='width: 40%;height: 60px'>
								<td style='width: 20%'>
									<img src='https://i.imgur.com/WvC6Lo9.png' style='width: 80%'>
								</td>
								<td style='widows: 1000px;padding-top: 0px'>
									<div style='font-size: 15px;text-align: left'>$article->userid</div>
									<div style='font-size: 15px;text-align: left;'>$article->time</div>
								</td>
							</table>
						</div>
						<div style='width: 100%;'>
							<div class='conandprobox'>
								<div>優點</div>
							<div>$article->pro</div>
							</div>
							<div class='conandprobox'>
								<div>缺點</div>
							<div>$article->con</div>
							</div>
						</div>
					</div>
					<p style='text-align:right'><a href='http://localhost/enterprise/index.php' class='typesearchingbottom'>回主畫面</a></p>
				</div>";
		return $result;
	}

	function createcompanyarticletable($search)
	{
		$articlemodel= new articlemodel();
		$articlearray= $articlemodel->getcompanyarticlebytype($search);
		$result="";

		foreach($articlearray as $key=>$article)
		{	
			$result = $result .
				"<form name='viewarticle' action='indexarticle.php' method='post'>
				<div class='articlebox'>
					<div class='articleboxhead'>
						<table style='width: 100%'>
							<td style='text-align: left;color:white;padding-left: 20px;width:33%'>$article->companyname</td>
							<td style='text-align: center;color:white;width:33%'>$article->type</td>
							<td style='text-align: right;color:white;padding-right: 20px;width:33%'>$article->job</td>
						</table>
					</div>
					<div class='articlecontext'>
						<div>
							<table style='width: 40%;height: 60px'>
								<td style='width: 20%'>
									<img src='https://i.imgur.com/WvC6Lo9.png' style='width: 80%'>
								</td>
								<td style='widows: 1000px;padding-top: 0px'>
									<div style='font-size: 15px;text-align: left'>$article->userid</div>
									<div style='font-size: 15px;text-align: left;'>$article->time</div>
								</td>
							</table>
						</div>
						<div style='width: 100%;'>
							<div class='conandprobox'>
								<div>優點</div>
							<div>$article->pro</div>
							</div>
							<div class='conandprobox'>
								<div>缺點</div>
							<div>$article->con</div>
							</div>
						</div>
					</div>
					<input type='text' name='articleid' value='$article->articleid' size='15' maxlength='10'/ readonly='readonly'>
					<input class='typesearchingbottom' type='submit' name='viewarticle' value='查看完整文章'>
				</div>
				</form>";
		}
		return $result;
	}

	function createmyarticletable($userid)
	{
		$articlemodel= new articlemodel();
		$articlearray= $articlemodel->getmyarticlebytype($userid);
		$result="";

		foreach($articlearray as $key=>$article)
		{	
			$result = $result .
				"<form name='viewarticle' method='post' action='indexarticle.php'>
				<div class='articlebox'>
					<div class='articleboxhead'>
						<table style='width: 100%'>
							<td style='text-align: left;color:white;padding-left: 20px;width:33%'>$article->companyname</td>
							<td style='text-align: center;color:white;width:33%'>$article->type</td>
							<td style='text-align: right;color:white;padding-right: 20px;width:33%'>$article->job</td>
						</table>
					</div>
					<div class='articlecontext'>
						<div>
							<table style='width: 40%;height: 60px'>
								<td style='width: 20%'>
									<img src='https://i.imgur.com/WvC6Lo9.png' style='width: 80%'>
								</td>
								<td style='widows: 1000px;padding-top: 0px'>
									<div style='font-size: 15px;text-align: left'>$article->userid</div>
									<div style='font-size: 15px;text-align: left;'>$article->time</div>
								</td>
							</table>
						</div>
						<div style='width: 100%;'>
							<div class='conandprobox'>
								<div>優點</div>
							<div>$article->pro</div>
							</div>
							<div class='conandprobox'>
								<div>缺點</div>
							<div>$article->con</div>
							</div>
						</div>
					</div>
					<input type='text' name='articleid' value='$article->articleid' size='15' maxlength='10'/ readonly='readonly'>
					<input class='typesearchingbottom' type='submit' name='viewarticle' value='查看完整文章'/>
				</div>
				</form>
				<a href='mes.php?method=del&articleID=$article->articleid' class='typesearchingbottom'>刪除</a>";
		}
		return $result;
	}
}

?>