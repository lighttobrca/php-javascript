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
					<li>商品編集</li>
        		</ul>     
			
<?php
	$connection = mysqli_connect("localhost","store","admin");
	mysqli_set_charset($connection,"utf8");
$isConnected = mysqli_select_db($connection,"storedb");

$getid = $_GET["id"];
$SQL = "SELECT * from product where id=".$getid;



$result = mysqli_query($connection,$SQL);
?>

<table id="formTable">
<form action="./admin_Complete_editProduct.php" method="post">
<?php
while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
{ 

?>
 
<tr>
	<td class="formTableTitle">id</td><td><?php echo $resultstring["id"];?></td> 
	<input type="hidden" name="product_id" value="<?php echo $resultstring['id'];?>">
</tr>

<tr>
	<td class="formTableTitle">商品名(20文字以内)</td>
	<td><input type="textbox" name="product_name" value="<?php echo $resultstring["name"];?>"></td>
</tr>

<tr>
	<td class="formTableTitle">カテゴリ(20文字以内)</td>
	<td><select name="product_category">
	                  	<option value="テーブル">テーブル</option>
	                  	<option value="椅子">椅子</option>
	                  	<option value="ソファー">ソファー</option>
	                  </select></td>
</tr>

<tr>
	<td class="formTableTitle">価格</td>
	<td>
	     <input type="text" name="product_price" value="<?php echo $resultstring["price"];?>">
	</td>
</tr>
<tr>  
      <td class="formTableTitle">会社</td>
      <td><select name="product_company">
           <option value="table">椅子工場</option>
            <option value="desk">机工場</option>
      </td>
</tr>
<tr>
     <td class="formTableTitle">詳細説明</td>
     <td><textarea cols="30" rows="5" name="product_info"></textarea></td>
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
            <?php require_once("../module/footer.php");?>
            
        
        </div><!-- footer -->

	
	</body>
</html>


