<?php
    $companyname=$_POST["companyname"];
    session_start();
    $link = mysqli_connect("localhost","root","","enterprise")
          or die("無法開啟MySQL資料庫連接!<br/>");
    $sql = "SELECT * FROM `article` where CompanyName = '$companyname'";
	
    $result = mysqli_query($link, $sql) or die('MySQL query error');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="eview.css" rel="stylesheet" media="all">
</head>
<body>
<?php
    while($row = mysqli_fetch_array($result)){
?>
    <div class="articleblock">
        
            </h4>
        <div class="card-body">
            <h5 class="card-title">作者：<?php echo $row["UserID"];?></h5>
            <p class="card-text">
                <?php echo $row["CompanyName"];?>
            </p>
            <p class="card-text">
                <?php echo $row["pro"];?>
            </p>
            <p class="card-text">
                <?php echo $row["con"];?>
            </p>
            
        </div>
        
    </div>
<?php
    }
?>


</body>
</html>