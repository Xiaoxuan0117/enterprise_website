<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>登入</title>
</head>
<body>
  
<?php
    session_start();
    $account="";
    $password="";

    if(isset($_POST["account"]))
      $account=$_POST["account"];
    if(isset($_POST["password"]))
      $password=$_POST["password"];

    // 檢查是否輸入使用者名稱和密碼
    if ($account != "" && $password != "") {
      // 建立MySQL的資料庫連接 
      $link = mysqli_connect("localhost","root","","enterprise")
          or die("無法開啟MySQL資料庫連接!<br/>");

      mysqli_query($link, "SET NAMES 'utf8'");

      // 建立SQL指令字串
      $sql = "SELECT * FROM register WHERE password='";
      $sql.= $password."' AND account='".$account."'";

      // 執行SQL查詢
      $result = mysqli_query($link, $sql);
      $total_records = mysqli_num_rows($result);//取得資料筆數
      $row = mysqli_fetch_array($result, MYSQLI_NUM);

     // 是否有查詢到使用者記錄
       if ( $total_records > 0 ) {
          // 成功登入, 指定Session變數
          $_SESSION["login_session"] = true;
          $_SESSION["account"] = $row[0];
          $_SESSION["password"] = $row[1];
          $_SESSION["UserID"] = $row[2];
          $_SESSION["email"] = $row[3];
          $_SESSION["birthday"] = $row[4];
          echo "<script>history.go(-2)</script>";
          //header("refresh:0;url=index.html");
          exit;
       } 
       else {  // 登入失敗
          echo "<center><font color='red'>";
          echo "使用者名稱或密碼錯誤!<br/>";
          echo "</font>";
          $_SESSION["login_session"] = false;
       }
       mysqli_close($link);  // 關閉資料庫連接 
     }
  ?>
</body>
</html>