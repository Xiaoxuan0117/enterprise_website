<?php
	session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
    <meta charset="UTF-8">
    <title>登入</title>
    <style type="text/css">
    body {
        background-image: url(display.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: 100%; 
} 
      .background{
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: -999

      }
      .background img{
        min-height: 100%;
        min-width: 1000px;
        width: 100%;
        margin-top:-200px; 
      }
      .left{
        position:fixed;
        width: 50%;
        font-family: 'Noto Sans CJK TC Black';
        color: white;
        letter-spacing: 20px;
        padding-top: 50px;
        text-align: right;
      }
      .right{
        width: 50%;
        float: right;
        padding-top: 50px;
      }
      .infobox{
        margin-top: 30px;
        margin-left: 30px;
        padding: 15px;
        border-radius: 10px;
        background-color: white;
        opacity: 93%;
        color:  #4F4F4F;
        width: 60%;
        height: 300px;
        margin-left: 40px;
        font-family: 'Noto Sans CJK TC Black';
        font-size: 18px;
        letter-spacing: 10px;
      }
      .input-update {
        border: 0;
        border-radius: 5px;
        background-color: white;
        color:  #4F4F4F;
        font-family: 'Noto Sans CJK TC Black';
        font-size: 18px;
      }
      .input-update:hover{
        background-color: #4F4F4F;
        color: white;
      }
      .login{
        margin-top: 15px;
        margin-left: 50px;
        color:  #4F4F4F;
        font-family: 'Noto Sans CJK TC Black';
        font-size: 18px;
        letter-spacing: 10px;
      }
  </style>
<body>
    <div class="background">
      <img class="background img"  >
    </div>
    <div class="left">
      <a href="https://localhost/enterprise/index.php" style="color: white;font-size: 80px;text-decoration:none;">企業地圖</a>
      <div style="font-size: 50px;margin-top: -17px">個人資料</div>
      <div style="font-size: 20px">隨時隨地，更新你的最新消息</div>
    </div>
  </div>
    <div class="right">
    <div class="infobox">
	<form name="update" action="update.php" method="post">
	<table  align="center" RULES=ROWS style="border-top:0px #FFFFFF solid;  border-right:0px #FFFFFF solid; border-left:0px #FFFFFF solid;"cellspacing="1" cellpadding="8" border="1" >
	    <tr style="border-bottom:0px #FFFFFF solid">
	        <td width="50%" align="right">帳號:</td>
	        <td width="84%"><input type="text" name="account" value = "<?php echo $_SESSION["account"] ?>" size="15" maxlength="10"/ readonly="readonly"></td>
	    </tr>
	    <tr style="border-bottom:0px #FFFFFF solid">
	        <td width="55%" align="right">使用者密碼:</td>
	        <td width="84%"><input type="password" name="password" value = "<?php echo $_SESSION["password"] ?>" size="15" maxlength="10"/ readonly="readonly"></td>
	    </tr>
	   	<tr style="border-bottom:0px #FFFFFF solid">
	        <td width="55" align="right">用戶ID:</td>
	        <td width="84%"><input type="text" name="UserID" size="15" value = "<?php echo $_SESSION["UserID"] ?>"  maxlength="10"/ readonly="readonly"></td>
	    </tr>
	    <tr style="border-bottom:0px #FFFFFF solid">
	        <td width="55%" align="right">email:</td>
	        <td width="84%"><input type="text" name="email" size="15" value = "<?php echo $_SESSION["email"] ?>"  maxlength="20"/></td>
	    </tr>
	    <tr style="border-bottom:0px #FFFFFF solid">
	        <td width="55%" align="right">生日:</td>
	        <td width="84%"><input type="text" name="birthday" size="15" value = "<?php echo $_SESSION["birthday"] ?>"  maxlength="20"/></td>
	    </tr>
	    <!-- <tr style="border-bottom:0px #FFFFFF solid">
	        <td width="55%" align="right">畢業年度:</td>
	        <td width="84%"><input type="text" name="year" size="15" value = "<?php echo $_SESSION["graduate"] ?>"  maxlength="10"/></td>
	    </tr> -->
	    <tr style="border-bottom:0px #FFFFFF solid">
          <td><input class="input-update" type="submit" name="logout" value="登出" onClick="this.form.action='logout.php';this.form.submit();"></td>
          <td><input class="input-update" type="submit" name="update" value="修改" onClick="this.form.action='update.php';this.form.submit();"></td>
          <td><input class="input-update" type="submit" name="view" value="我的文章" onclick="this.form.action='indexmyarticle.php';this.form.submit();"></td>
          <!-- <td class="login"><a href="http://localhost/project1/login.html">回登入頁面</a> -->
      </tr>


	</table>
</form>
</div>
</div>
</body>
</html>