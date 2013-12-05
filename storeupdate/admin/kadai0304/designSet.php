<?php
// DB接続・ユーザーチェック


// POSTデータを下記のCSSの色を設定する各変数($color1〜6)に代入



//ヒアドキュメント
$cssData = <<< EOF
@charset "utf-8";

#header{
	background: $color1;
}

#gNavi{
	background: $color3;
	color:$color4;
}

#leftColumn ul#category li{
	background: $color5;
}

#leftColumn li{
	background: $color6;
}

#footer{
	background: $color2;
}
EOF;


// ファイル操作
// ../css/customize.css　ファイルを上記内容で上書き




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
                <li><a href="adminDesignSet.php">デザイン</a></li>
                <li>設定完了</li>
              </ul>
             
 				デザイン設定完了しました。
 				<p>
 				<a href="../index.php" target="_blank">サイトをみる</a>
				</p>


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
