<div id="headerInner">
	<?php require_once($_SERVER["DOCUMENT_ROOT"]."/php_kadai05/store/admin/access_check/access_check.php");?>               
                  <h1><img src="../img/logo.png" alt="logo" /></h1>
                  <ul>
                    <li><?php echo $_SESSION["LOGIN_ID"];?>さんようこそ。</li><li class="userBt"><a href="<?php echo "http://localhost";?>/php_kadai05/store/admin/module/logout.php">ログアウト</a></li>
                  </ul>
                   <ul>
                       <li><a href="http://localhost/php_kadai05/store/admin/admin_top.php">HOME</a></li>
                       <li><a href="<?php echo "http://localhost/php_kadai05/store/product_index.php";?>" target="_blank">サイトをみる</a></li>
                   </ul>                   
</div>
