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
					<li>顧客管理</li>
					<li>顧客一覧</li>
        		</ul>     
			
<?php
	$connection = mysqli_connect("localhost","store","admin");
	mysqli_set_charset($connection,"utf8");
$isConnected = mysqli_select_db($connection,"storedb");


$SQL = "SELECT * from customer";



$result = mysqli_query($connection,$SQL);
?>
<a href="./adminNewCustomer.php">新規顧客登録</a>

<table id="formTable">
 <tr>
 	<td>顧客ID</td>
 	<td>顧客名</td>
 	<td>性別</td>
 	<td></td>
 	<td></td>
 </tr>

<?php
while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
{ 

?>
<tr>

<td><?php echo $resultstring["id"];?></td> 
<td><?php echo $resultstring["name"];?></td>
<td><?php echo $resultstring["seibetsu"];?></td>

<?php

	$editUrl = "./adminNewCustomer.php?id=".$resultstring["id"];
	$deleteUrl = "./adminDeleteCustomer.php?id=".$resultstring["id"];

?>
<td><a href="<?php echo $editUrl;?>">編集</a></td>
<td><a href="<?php echo $deleteUrl;?>">削除</a></td> 
</tr>
<?php
} 
?>
</table>
	           </div><!--rightColumn -->
	           
	       </div><!-- contents -->   
	       
	       
	   
        <!-- フッター -->
        <div id="footer">
            <?php require_once("../module/footer.php");?>
            
        
        </div><!-- footer -->

	
	</body>
</html>


