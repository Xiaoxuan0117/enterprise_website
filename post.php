<?php
	session_start();
    if (!isset($_SESSION["UserID"])){
        echo "<script type='text/javascript'>";
        echo "alert('登入才能發文喔~');";
        echo "location.href='login.html';";
        echo "</script>";       
    }
    else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>發布新文章</title>
    <link rel='stylesheet' type='text/css' href='post.css?20080203'>
    <link rel='stylesheet' type='text/css' href='style.css?20080203'>
</head>
<body>
    <div class="left" style="font-size: 50px; ">新增文章</div>
    <div class="box">
    <form name="post" action="mes.php?method=add" method="post">
        <table  align="center" bgcolor="white" style="line-height:40px" width:10% cellspacing="40px" cellpadding="10px" class=postbox>
            <tr>
                <td width="30%" align="right">用戶ID:</td>
                <td width="70%"><input type="text" name="UserID" value = "<?php echo $_SESSION["UserID"] ?>" size="15" maxlength="10"/ readonly="readonly"></td>
            </tr>
            <tr>
                <td width="20%" align="right">是否匿名:</td>
                <td>
                <input type="radio" name="anonymous"  value="是"/>是
                <input type="radio" name="anonymous"  value="否"/>否
                </td>
                <!-- <td><input type="radio" name="anonymous"  value="是"/>是</td>
                <td><input type="radio" name="anonymous"  value="否"/>否</td> -->
            </tr>
            <tr>
                <td width="16%" align="right">類型:</td>
                <!-- <td><input type="radio" name="type"  value="面試"/>面試</td>
                <td><input type="radio" name="type"  value="工作"/>工作</td> -->
                <td>
                    <input type="radio" name="type"  value="面試"/>面試
                    <input type="radio" name="type"  value="工作"/>工作
                </td>
            </tr>
            <tr>
                <td width="16%" align="right">公司名稱:</td>
                <td width="84%"><input type="text" name="CompanyName"  size="15" maxlength="10"/></td>
            </tr>
            <tr>
                <td width="16%" align="right">職位名稱:</td>
                <td width="84%"><input type="text" name="position"  size="15" maxlength="10"/></td>
            </tr>
            <tr>
                <td width="16%" align="right">優點:</td>
                <!-- <td width="84%"><input type="text" name="pro"  size="15" maxlength="10"/></td> -->
                <td><textarea name="pro" rows="5" col="100"></textarea><td>
            </tr>
            <tr>
                <td width="16%" align="right">缺點:</td>
                <!-- <td width="84%"><input type="text" name="con"  size="15" maxlength="10"/></td> -->
                <td><textarea name="con" rows="5" col="100"></textarea><td>
            </tr>
            
            <tr>
            <td><input class="input-login" type="submit" name="post" value="提交"></td>
            </tr>  
        </table>
</div>
    </form>
<div class="pagehead">
    <table class="headtable">
        <td class="headtitle"><a href="https://localhost/enterprise/index.php" style="color: white;text-decoration:none;">企業地圖</a></td>
        <td style="width: 33%;text-align: center"><a href="https://localhost/enterprise/post.php" class="goarticle" style="text-decoration:none;">分享你的工作經驗</a></td>
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
</body>
</html>

<?php }?>