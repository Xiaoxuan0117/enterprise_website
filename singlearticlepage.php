<?php
 if (!isset($_SESSION)) {
	session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html" charset="UTF-8">
	<title>企業地圖</title>
	<link rel='stylesheet' type='text/css' href='style.css?20080203'>
</head>

<body>
<div class="firstblock">
	<div class="headpic">
		<img src="https://i.imgur.com/HAjsNrf.jpg" style="width: 101%;margin:0px">
	</div>
	<div class="maintitle">
		<div>企業地圖</div>
		<div style="font-size: 30px">查詢公司</div>
		<form name="searching" action="indexcompany.php" method="post">
			<div style="margin-top: -70px"><input type="text" name="companyname" class="search"></div>
			<div style="margin-top: -68px"><input type="submit" name="searching" value="查 詢" class="searchingbottom"></div>
		</form>
	</div>
</div>
<div class="secondblock">
	<div class="articletitle">
		<div><?php echo $title;?></div>
		<div class='articlefilter'><?php echo $subtitle;?></div>
		<!--
		<table class="articlefilter">
			<td style="width: 220px">我想看 ⇩</td>
			<td><input type="submit" name="job" value="工作" class="searchingbottom" style="width: 70px"></td>
			<td><input type="submit" name="QA" value="問答" class="searchingbottom" style="width: 70px"></td>
		</table>
	-->
	</div>
	<div class="articleblock">
		<?php echo $content1; ?>
</div>
<div class="commentblock">
	<div class="commentbox">
		<div class="commenttitle">留言</div>
		<div><?php echo $content2; ?></div>
	</div>
</div>
<div class="pagehead">
	<table class="headtable">
		<td class="headtitle"><a href="https://localhost/enterprise/index.php" style="color: white;text-decoration:none;">企業地圖</a></td>
		<td style="width: 33%;text-align: center;"><a href="https://localhost/enterprise/post.php" class="goarticle" style="text-decoration:none;">分享你的工作經驗</a></td>
		<?php if(isset($_SESSION["UserID"])){?>
			<td style="width: 33%;text-align: right">
			<a href="https://localhost/enterprise/display2.php" class="loginbottom" style="text-decoration:none;">個人資料</a>
			<a href="https://localhost/enterprise/logout.php" class="loginbottom" style="text-decoration:none;">登出</a></td>
		<?php }
		else{?>
		<td style="width: 33%;text-align: right">
			<a href="https://localhost/enterprise/login.html" class="loginbottom" style="text-decoration:none;">登入</a>
			<a href="https://localhost/enterprise/register.html" class="loginbottom" style="text-decoration:none;">註冊</a></td>
		<?php }?>
	</table>
</div>

</div>
</body>
</html>