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
					<li>新規登録</li>
        		</ul>     
		
		<?php


$user = $_POST["user"];
$pass = $_POST["pass"];
				$connection = mysqli_connect("localhost","store","admin");
				mysqli_set_charset($connection,"utf8");
				$isConnected = mysqli_select_db($connection,"storedb");

			
				$SQL = "SELECT id,name,password,admin from user";
				$result = mysqli_query($connection,$SQL);

						$flag = "";
			while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
			{ 
				
				if($resultstring["name"] == $user){
					header("Location:./adminNewRegister.php?errmsg=入力された項目名は既に入っています。");
				}
			}
			
			echo $flag;
if ($user == "") {
	if($pass == ""){
		header("Location:./adminNewRegister.php?errmsg=項目名とパスワードが未入力です。");
	}
	header("Location:./adminNewRegister.php?errmsg=項目名が未入力です。");
}
if($pass == "") {
	header("Location:./adminNewRegister.php?errmsg=パスワードが未入力です。");
}
$admin = $_POST["admin"];

$SELECT_SQL = "SELECT id,name,password,admin from user";

$result = mysqli_query($connection,$SELECT_SQL);



$SQL = "INSERT into user(name,password,admin) values('$user','$pass','$admin')";



$result = mysqli_query($connection,$SQL);

if(!$result){
	"SQLエラー";
}

mysqli_close($connection);
echo "登録完了しました。";
		?>
	           </div><!--rightColumn -->
	           
	       </div><!-- contents -->   
	       
	       
	   
        <!-- フッター -->
        <div id="footer">
            <?php require_once("module/footer.php");?>
            
        
        </div><!-- footer -->

	
	</body>
</html>




