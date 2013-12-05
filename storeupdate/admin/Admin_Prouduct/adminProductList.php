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
					<li>ショップ運営</li>
					<li>商品管理</li>
        		</ul>     
			
<a href="./adminNewProduct.php">商品新規登録</a>

<table id="formTable">
 <tr>
 	<td>商品ID</td>
 	<td>商品名</td>
 	<td>カテゴリ</td>
 	<td></td>
 	<td></td>
 </tr>

<form action="" method="post">
<span>検索一覧</span><br/>
<span>商品名：<input type="text" name="search_product_name"><input type="submit" value="検索"></span>

</form>

<?php
$connection = mysqli_connect("localhost","store","admin");
	mysqli_set_charset($connection,"utf8");
$isConnected = mysqli_select_db($connection,"storedb");


$SQL = "SELECT * from product";




	//$connection = mysqli_connect("localhost","store","admin");
	//mysqli_set_charset($connection,"utf8");
//$isConnected = mysqli_select_db($connection,"storedb");
//$SQL = "SELECT * from product";

if (isset($_POST["search_product_name"])) {
	$SQL = "SELECT * from product where name LIKE '%".$_POST["search_product_name"]."%'";
}
$result = mysqli_query($connection,$SQL);
?>
<?php

while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
{ 

?>

<tr>

<td><?php echo $resultstring["id"];?></td> 
<td><?php echo $resultstring["name"];?></td>
<td><?php echo $resultstring["category"];?></td>

<?php

	$editUrl = "./adminEditProduct.php?id=".$resultstring["id"];
	$deleteUrl = "./deleteProductList.php?id=".$resultstring["id"];

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


