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
					<li>商品登録</li>
        		</ul>     
		
		<?php

$post_product_name = htmlspecialchars($_POST["product_name"],ENT_QUOTES);
$post_product_price = htmlspecialchars($_POST["product_price"],ENT_QUOTES);
$post_product_info = htmlspecialchars($_POST["product_info"],ENT_QUOTES);
$post_product_name = mysql_real_escape_string($post_product_name);
$post_product_price = mysql_real_escape_string($post_product_price);
$post_product_info = mysql_real_escape_string($post_product_info);

				$connection = mysqli_connect("localhost","store","admin");
				mysqli_set_charset($connection,"utf8");
				$isConnected = mysqli_select_db($connection,"storedb");

			
				$SQL = "SELECT id,category,name,price,info,company from product";
				$result = mysqli_query($connection,$SQL);

						$flag = "";
			while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
			{ 
				
				if($resultstring["name"] == $post_product_name){
					header("Location:./adminNewProduct.php?errmsg=入力された商品名は既に入っています。");
				}
			}
			
			echo $flag;
if ($post_product_price == "") {
	
	header("Location:./adminNewProduct.php?errmsg=商品の価格が未入力です。");
}
if($post_product_info == "") {
	header("Location:./adminNewProduct.php?errmsg=商品の詳細説明が未入力です。");
}

$post_product_category = $_POST["product_category"];
$post_product_company = $_POST["product_company"];

$SQL = "INSERT INTO `product` (`category`, `name` ,`price` ,`info`, `company`) values('$post_product_category','$post_product_name',$post_product_price,'$post_product_info','$post_product_company')";


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
            <?php require_once("../module/footer.php");?>
            
        
        </div><!-- footer -->

	
	</body>
</html>




