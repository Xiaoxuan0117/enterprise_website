<?php
 if (!isset($_SESSION)) {
	session_start();
}
		date_default_timezone_set("Asia/Taipei");
		$_SESSION["articleid"]=$_POST["articleid"];
       $articleid = $_POST["articleid"];
       $content = $_POST["content"];
       $time=date("Y/m/j G:i:s");
       $account=$_SESSION["account"];
       $password=$_SESSION["password"];
       $userid = $_SESSION["UserID"];
       $email=$_SESSION["email"];
       $birthday=$_SESSION["birthday"];
       $url="http://localhost/enterprise/indexarticle.php";
       $post_value=array('articleid'=>$articleid);


    $link = mysqli_connect("localhost","root","","enterprise")
            or die("無法開啟MySQL資料庫連接!<br/>");

   	//送出UTF8編碼的MySQL指令
    mysqli_query($link, "SET NAMES 'utf8'"); 

	$sql = "INSERT INTO comment (articleID, UserID, content, dateandtime)
	VALUES ('$articleid', '$userid', '$content', '$time')";

    global $link;
    $result = mysqli_query($link , $sql) or die('MySQL query error');
        echo "<script type='text/javascript'>";
        echo "location.href='indexaddcommentarticle.php';";
        echo "</script>";
	///if ($link->query($sql) === TRUE) {
	///echo curl_post($url,$post_value);
	///echo "<form action='indexarticle.php' method='post'>
			///<input type='text' name='articleid' value='$articleid' size='15'maxlength='10'/readonly='readonly'/>
			///<input class='typesearchingbottom' type='submit' name='viewarticle' value='返回文章'/>
		///</form>";
	///} else {
	///  echo "Error: " . $sql . "<br>" . $link->error;
	///}



?>