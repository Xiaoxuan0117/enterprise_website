<?php
	//include_once "database.php";
    session_start();

    $link = mysqli_connect("localhost","root","","enterprise")
          or die("無法開啟MySQL資料庫連接!<br/>");

	switch ($_GET["method"]) {
		case "add":
			add();
			break;
		case "update":
			update();
			break;
		case "del":
			del();
			break;
		default:
			break;
	}

    function add(){
        date_default_timezone_set("Asia/Taipei");
        $UserID = $_SESSION["UserID"];
        //$articleID=$_POST["articleID"];
        $anonymous = $_POST["anonymous"];
        $type = $_POST["type"];
        $CompanyName = $_POST["CompanyName"];
        $position = $_POST["position"];
        $pro = $_POST["pro"];
        $con = $_POST["con"];
        $time= date("Y/m/j G:i:s");
        $sql = "INSERT INTO article (UserID,anonymous,type,CompanyName, position, pro, con, dateandtime)
        VALUES ('$UserID','$anonymous', '$type','$CompanyName','$position', '$pro','$con', '$time')";
        global $link;
        $result = mysqli_query($link , $sql) or die('MySQL query error');
        echo "<script type='text/javascript'>";
        echo "location.href='indexmyarticle.php';";
        echo "</script>";
    }

    function del(){
        $articleID = $_GET["articleID"];
        $sql = "DELETE FROM article WHERE articleID = '$articleID'";
        global $link;
        $result = mysqli_query($link , $sql) or die('MySQL query error');
        echo "<script type='text/javascript'>";
        echo "location.href='indexmyarticle.php';";
        echo "</script>";
    }

    ?>