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
					<li>削除</li>
        		</ul>     
	

<?php
	$connection = mysqli_connect("localhost","store","admin");
	mysqli_set_charset($connection,"utf8");
$isConnected = mysqli_select_db($connection,"storedb");

$getid = $_GET["id"];
$SQL = "DELETE from user where id=".$getid;



$result = mysqli_query($connection,$SQL);
?>
<p>削除完了しました。</p>
         </div><!--rightColumn -->
	           
	       </div><!-- contents -->   
	       
	       
	   
        <!-- フッター -->
        <div id="footer">
            <?php require_once("module/footer.php");?>
            
        
        </div><!-- footer -->

	
	</body>
</html>


