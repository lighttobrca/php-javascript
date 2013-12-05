<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/admin.css" />

		<title>store</title>
	</head>
	<body>
	
           <!-- ヘッダー -->
	       <div id="header">
	       <?php require_once("module/header.php");?>

	       </div><!-- header -->
           

           
           <!-- メインコンテンツ -->
	       <div id="main">

	           <div id="leftColumn">
<?php

//共通の左側メニュー
//adminLeftMenu1.phpを読み込む
require_once("module/adminLeftMenu1.php");
?>

	           </div><!--leftColumn -->

	           <div id="rightColumn">
				<ul id="mainTitle">
					<li>システム管理者</li>
					<li>管理者一覧</li>
					<li>編集</li>
        		</ul>     
			
<?php
	$connection = mysqli_connect("localhost","store","admin");
	mysqli_set_charset($connection,"utf8");
$isConnected = mysqli_select_db($connection,"storedb");

$getid = $_GET["id"];
$SQL = "SELECT id,name,password,admin from user where id=".$getid;



$result = mysqli_query($connection,$SQL);
?>

<table id="formTable">
<form action="./editUser.php" method="post">
<?php
while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
{ 

?>
 
<tr>
	<td class="formTableTitle">id</td><td><?php echo $resultstring["id"];?></td> 
	<input type="hidden" name="userid" value="<?php echo $resultstring['id'];?>">
</tr>

<tr>
	<td class="formTableTitle">ユーザー名(20文字以内)</td>
	<td><input type="textbox" name="username" value="<?php echo $resultstring["name"];?>"></td>
</tr>

<tr>
	<td class="formTableTitle">パスワード(20文字以内)</td>
	<td><input type="textbox" name="userpass" value="<?php echo $resultstring["password"];?>"></td>
</tr>

<tr>
	<td class="formTableTitle">権限</td>
	<td>
	    <select name="useradmin">
	       	<option value="1">管理者</option>
	       	<option value="2">ショップ管理者</option>
	       	<option value="3">サイト管理者</option>
	    </select>
	</td>
</tr>
<?php
} 
?>
</table>
<div class="formTableSubmit">
<input type="submit" value="上記内容で更新する">
</div>
</form>
	           </div><!--rightColumn -->
	           
	       </div><!-- contents -->   
	       
	       
	   
        <!-- フッター -->
        <div id="footer">
            <?php require_once("module/footer.php");?>
            
        
        </div><!-- footer -->

	
	</body>
</html>


