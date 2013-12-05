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

			<?php require_once("../access_check/access_check.php");?>
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
		
	         <form action="./admin_Complete_NewProduct.php" method="post">

              <table id="formTable" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="formTableTitle">商品名(20文字まで)</td><td><input type="text" name="product_name" size="20" class="textBox" /></td>
              </tr>
              <tr>
                  <td class="formTableTitle">カテゴリ(20文字まで)</td><td><select name="product_category">
	                  	<option value="テーブル">テーブル</option>
	                  	<option value="椅子">椅子</option>
	                  	<option value="ソファー">ソファー</option>
	                  </select></td>
              </tr>
              <tr> 
                  <td class="formTableTitle">価格</td>
                  <td>
	                  <input type="text" name="product_price">
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
              </table>
			<h2><?php if(isset($_GET["errmsg"])){echo $_GET["errmsg"];}
			?>
			
			</h2>
              <div class="formTableSubmit">
                <input type="submit" value="ボタン" >
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