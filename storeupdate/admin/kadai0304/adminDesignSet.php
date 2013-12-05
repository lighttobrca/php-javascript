<?php
  //データベース接続・ユーザーチェック
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/admin.css" />

    <link rel="stylesheet" href="./js/farbtastic/farbtastic.css" type="text/css" />
    <!-- Drawページ用のカラーライブラリ -->
    <script src="./js/jquery-1.10.1.min.js"></script>
    <script src="js/farbtastic/farbtastic.js"></script>

    <script src="js/script.js"></script>

		<title>store</title>
	</head>
	<body>
	
           <!-- ヘッダー -->
	       <div id="header">

            <?php

              require_once("module/header.php");

            ?>

	       </div><!-- header -->
           

           
           <!-- メインコンテンツ -->
	       <div id="main">

	           <div id="leftColumn">


              <?php

              require_once("module/adminLeftMenu1.php");

              ?>


	           </div><!--leftColumn -->

	           <div id="rightColumn">

              <ul id="mainTitle">
                <li>サイト設定</li>
                <li>デザイン</li>
              </ul>
             
            <form action="designSet.php" method="post">

              <div id="designBoxOuter">
                <div class="designBox">
                  <h2>ヘッダー</h2>
                  <div id="colorpicker1"></div>
                  <input type="text" id="color1" name="color1" value="#123456" /><img src="./img/iconSlideUp.png" />
                </div>

                <div class="designBox">
                  <h2>フッター</h2>
                  <div id="colorpicker2"></div>
                  <input type="text" id="color2" name="color2" value="#123456" /><img src="./img/iconSlideUp.png" />
                </div>

                <div class="designBox">
                  <h2>メニュー</h2>
                  <div id="colorpicker3"></div>
                  <input type="text" id="color3" name="color3" value="#123456" /><img src="./img/iconSlideUp.png" />
                </div>

              </div><!-- designBoxOuter -->

              <div id="designBoxOuter">

                <div class="designBox">
                  <h2>メニュー 文字</h2>
                  <div id="colorpicker4"></div>
                  <input type="text" id="color4" name="color4" value="#123456" /><img src="./img/iconSlideUp.png" />
                </div>
          
                <div class="designBox">
                  <h2>サブメニュー1</h2>
                  <div id="colorpicker5"></div>
                  <input type="text" id="color5" name="color5" value="#123456" /><img src="./img/iconSlideUp.png" />
                </div>
                <div class="designBox">
                  <h2>サブメニュー2</h2>
                  <div id="colorpicker6"></div>
                  <input type="text" id="color6" name="color6" value="#123456" /><img src="./img/iconSlideUp.png" />
                </div>
              </div><!-- designBoxOuter -->

              <div class="formTableSubmit">
                <input type="submit" value="デザイン設定" />
              </div>

            </form>



	           </div><!--rightColumn -->
	           
	       </div><!-- contents -->   
	       
	       
	   
        <!-- フッター -->
        <div id="footer">
          
          <?php 
             require_once("module/footer.php");
          ?>

        </div><!-- footer -->

	
	</body>
</html>