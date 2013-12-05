<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/admin.css" />

		<title>store</title>
	</head>
	<body>
	
           <!-- ヘッダー -->
	       <div id="header">
	       <?php require_once("../module/header.php");?>

	       </div><!-- header -->
           

           
           <!-- メインコンテンツ -->
	       <div id="main">

	           <div id="leftColumn">
<?php

//共通の左側メニュー
//adminLeftMenu1.phpを読み込む
require_once("../module/adminLeftMenu1.php");
?>

	           </div><!--leftColumn -->

	           <div id="rightColumn">
				<ul id="mainTitle">
					<li>システム管理者</li>
					<li>管理者一覧</li>
					<li>更新完了</li>
        		</ul>     
			
<?php
$product_id = htmlspecialchars($_POST["product_id"],ENT_QUOTES); 
$product_name = htmlspecialchars($_POST["product_name"],ENT_QUOTES);
$product_category = htmlspecialchars($_POST["product_category"],ENT_QUOTES);
$product_price = htmlspecialchars($_POST["product_price"],ENT_QUOTES);
$product_company = htmlspecialchars($_POST["product_company"],ENT_QUOTES);
$product_info = htmlspecialchars($_POST["product_info"],ENT_QUOTES);

$product_id = mysql_real_escape_string($product_id);
$product_name = mysql_real_escape_string($product_name);
$product_category = mysql_real_escape_string($product_category);
$product_price = mysql_real_escape_string($product_price);
$product_company = mysql_real_escape_string($product_company);
$product_info = mysql_real_escape_string($product_info);

	$connection = mysqli_connect("localhost","store","admin");
	mysqli_set_charset($connection,"utf8");
$isConnected = mysqli_select_db($connection,"storedb");


$SQL = "UPDATE product SET category='".$product_category."', name='".$product_name."', price='".$product_price."' , info='".$product_info."', company='".$product_company."' WHERE id='".$product_id."'";


$result = mysqli_query($connection,$SQL);

?>
	           <p><?php echo "更新完了しました。";?></p>
	           <?php echo $SQL;?>
	           </div><!--rightColumn -->
	           
	       </div><!-- contents -->   
	       
	       
	   
        <!-- フッター -->
        <div id="footer">
            <?php require_once("../module/footer.php");?>
            
        
        </div><!-- footer -->

	
	</body>
</html>


