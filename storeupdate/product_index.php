<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/customize.css" />

		<title>store</title>
	</head>
	<body>
	
           <!-- ヘッダー -->
	       <div id="header">
	           
	           <div id="headerInner">
	               
                  <h1><img src="./img/logo.png" alt="logo" /></h1>
                  <div id="cartBox">
                    <div id="cartIn1">¥0</div>
                    <div id="cartIn2">0点</div>
                    <a href="cart.php"><img src="./img/cartInsite.png" /></a>
                  </div><!-- cartBox -->
                  <ul>
                    <li>ようこそ ゲスト 様</li><li class="userBt"><a href="./login_index.php">ログイン</a></li><li class="userBt"><a href="./admin/Admin_Customer/adminNewCustomer.php">新規登録</a></li>
                  </ul>
                   
	           </div><!-- headerInner -->

	       </div><!-- header -->
           
           
           <!-- グローバルナビ -->
           <div id="gNavi">
               <div id="gNaviInner">
                   
                   <ul>
                       <li>HOME</li>
                       <li>ご利用ガイド</li>
                       <li>店舗情報</li>
                       <li>お問い合わせ</li>
                   </ul>
                   <div id="searchBox">
                       <input type="text" name="searchText" /><input type="submit" value="search" id="searchSubmit" />
                   </div>
                   
              </div><!-- gNaviInner -->
           </div><!-- gNavi -->
           
           
           <!-- メインコンテンツ -->
	       <div id="main">

	           <div id="leftColumn">

                   <ul id="category">
                       <li>カテゴリ−１</li>
                       <li>カテゴリ−２</li>
                       <li>カテゴリ−３</li>
                       <li>カテゴリ−４</li>
                   </ul>

                   <ul id="ranking">
                       <li>Ranking</li>
                       <li>１商品B</li>
                       <li>２商品E</li>
                       <li>３商品A</li>
                       <li>４商品D</li>
                       <li>５商品C</li>
                   </ul>   

	           </div><!--leftColumn -->

	           <div id="rightColumn">

              <!-- メインビジュアル ------------------ -->
              <div id="mainVisual">
	               <div id="sliderBox">
                  <div id="sliderBoxInner">
                    <img src="./img/mainVisual1.png" />
                    <img src="./img/mainVisual2.png" />
                    <img src="./img/mainVisual3.png" />
                    <img src="./img/mainVisual4.png" />
                  </div>
                 </div><!-- sliderBox -->

                 <div id="sideButton">
                  <div id="sideCover"></div>
                  <ul>
                    <li>wood Chair</li>
                    <li>watch</li>
                    <li>mobile Phone</li>
                    <li>SAKE</li>
                  </ul>
                 </div><!-- sideButton -->
              </div><!-- mainVisual -->
              <!-- メインビジュアル ここまで ----------- -->


              <!-- New Item -->
              <h2>New Item</h2>
              <div id="newItemBox">
                <div id="newItemBoxInner">
                  
              <?php
	$connection = mysqli_connect("localhost","store","admin");
	mysqli_set_charset($connection,"utf8");
$isConnected = mysqli_select_db($connection,"storedb");


$SQL = "SELECT * from product order by sales_date";
$result = mysqli_query($connection,$SQL);
$i=1;
while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
{ 	

					if($i > 5){
						goto label;
					}					
                	$product_name = $resultstring["name"];
                	$product_price = $resultstring["price"];
                    echo "<div class='newItemBox'>";
                    echo "<a href=''>";
                    echo "<img src='./img/itemImage.png' />";
                    echo "<div class='newItemInfo'>".$product_name."<br />￥".$product_price."</div>";
                    echo "</a>";
                    echo "</div>";
                    $i++;
                    label:
                }
              ?>

                </div><!-- newItemBoxInner -->
              </div><!-- newItemBox -->


              <!-- RECOMMEND List -->
              <h2>Recommend Item</h2>
              <div id="recommendBox">
                <div id="recommendBoxInner">
              <?php
                for($i=0;$i<3;$i++){
                    echo "<div class='recommendItemBox'>";
                    echo "<a href=''>";
                    echo "<img src='./img/itemImage.png' class='recommendImage' />";
                    echo "</a>";

                    echo "<div class='userComment'>コメントコメントコメントコメントコメントコメントコメン36文字以内</div>";
                    echo "<div class='userComment2'></div>";
                    echo "<div class='userInfo'><img src='./img/user1.png' />username </div>";
                    echo "</div>";
                }
            
              ?>
                </div><!-- recommendBoxInner -->
              </div><!-- recommendBox -->



              <!-- Check Item -->
              <h2>Check Item　最近チェックしたアイテム</h2>
              <div id="checkBox">
                <a href="item.php"><img src="./img/itemImage.png" /></a>
                <a href="item.php"><img src="./img/itemImage.png" /></a>
                <a href="item.php"><img src="./img/itemImage.png" /></a>
                <a href="item.php"><img src="./img/itemImage.png" /></a>
                <a href="item.php"><img src="./img/itemImage.png" /></a>
              </div><!-- checkBox -->




	           </div><!--rightColumn -->
	           
	       </div><!-- contents -->   
	       
	       
	   
        <!-- フッター -->
        <div id="footer">
            
            <div id="footerInner">
                
                <div class="footerBox">    
                    <h2>商品カテゴリ</h2>
                    ファッション<br />
                    インテリア雑貨<br />
                    家具・収納<br />
                    キッチン・食器<br />
                    ステーショナリー<br />
                    バス・ハウスキーピング<br />

                </div>
                <div class="footerBox">
                    <h2>会員サービス</h2>
                    新規登録<br />
                    ログイン<br />
                    登録情報変更<br />
                    メルマガ購読
                </div>
                <div class="footerBox">  
                    <h2>ヘルプ＆ガイド</h2>
                    はじめての方へ<br />
                    よくある質問<br />
                    配送日のご案内<br />
                    送料について<br />
                    お支払方法について<br />
                    キャンセル・返品<br />
                    サイトマップ  
                </div>
                <div class="footerBox">    
                    <h2>モバイル&SNS</h2>
                    モバイルサイト<br />
                    twitter<br />
                    FaceBook<br />
                    mixi
                </div>
                
                
                
            </div>
        
        </div><!-- footer -->

	
	</body>
</html>