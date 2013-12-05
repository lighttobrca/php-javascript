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
	       <?php require_once("../module/header2.php");?>

	       </div><!-- header -->
           

           
           <!-- メインコンテンツ -->
	       <div id="main">

	           <div id="leftColumn">

	           </div><!--leftColumn -->

	           <div id="rightColumn">
				<ul id="mainTitle">
					<li>新規登録</li>
        		</ul>     
		
		<?php
$name = htmlspecialchars($_POST["name"],ENT_QUOTES); 
$id = htmlspecialchars($_POST["id"],ENT_QUOTES);
$password = htmlspecialchars($_POST["password"],ENT_QUOTES);
$seibetsu = htmlspecialchars($_POST["seibetsu"],ENT_QUOTES);
$birthday = htmlspecialchars($_POST["birthday"],ENT_QUOTES);

$name = mysql_real_escape_string($name);
$id = mysql_real_escape_string($id);
$password = mysql_real_escape_string($password);
$seibetsu = mysql_real_escape_string($seibetsu);
$birthday = mysql_real_escape_string($birthday);

				$connection = mysqli_connect("localhost","store","admin");
				mysqli_set_charset($connection,"utf8");
				$isConnected = mysqli_select_db($connection,"storedb");

			
				$SQL = "SELECT  * from customer";
				$result = mysqli_query($connection,$SQL);

						$flag = "";
			while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
			{ 
				
				if($resultstring["name"] == $name){
					header("Location:./adminNewCustomer.php?errmsg=入力された名前は既に存在してます。");
				}
			}
			
			echo $flag;
if ($id == "") {
	if($password == ""){
		header("Location:./adminNewCustomer.php?errmsg=名前とパスワードが未入力です。");
	}
	header("Location:./adminNewCustomer.php?errmsg=名前が未入力です。");
}
if($password == "") {
	header("Location:./adminNewCustomer.php?errmsg=パスワードが未入力です。");
}
if($birthday == ""){
	header("Location:./adadminNewCustomer.php?errmsg=生年月日が未入力です。");
}
$SELECT_SQL = "SELECT * from customer";

$result = mysqli_query($connection,$SELECT_SQL);

$SQL = "INSERT into customer(name,id,password,seibetsu,birthday) values('$name','$id','$password','$seibetsu','$birthday')";

$result = mysqli_query($connection,$SQL);

if(!$result){
	"SQLエラー";
}

mysqli_close($connection);
echo "登録完了しました。";


		?>
<a href="../../product_index.php">商品サイトへ</a>
	           </div><!--rightColumn -->
	           
	       </div><!-- contents -->   
	       
	       
	   
        <!-- フッター -->
        <div id="footer">
            <?php require_once("../module/footer.php");?>
            
        
        </div><!-- footer -->

	
	</body>
</html>




