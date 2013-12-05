<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/admin.css" />

		<title>store</title>
	</head>
	<body>
	
           <!-- ヘッダー -->
	       <div id="header">
	       <?php require_once("module/header.php");?>

	       </div><!-- header -->
           

           jj
           <!-- メインコンテンツ -->
	       <div id="main">

	           <div id="leftColumn">
<?php

//共通の左側メニュー
//adminLeftMenu1.phpを読み込む
require_once("module/adminLeftMenu1.php");
?>

	           </div><!--leftColumn -->

	           <div id="rightColumn">
				<ul id="mainTitle">
					<li>システム管理者</li>
					<li>新規登録</li>
        		</ul>     
		
	         <form action="newRegister.php" method="post">

              <table id="formTable" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="formTableTitle">項目名(20文字まで)</td><td><input type="text" name="user" size="20" class="textBox" /></td>
              </tr>
              <tr>
                  <td class="formTableTitle">パスワード(20文字まで)</td><td><input type="password" name="pass" size="20" class="textBox" /></td>
              </tr>
              <tr> 
                  <td class="formTableTitle">権限</td>
                  <td>
	                  <select name="admin">
	                  	<option value="1">管理者</option>
	                  	<option value="2">ショップ管理者</option>
	                  	<option value="3">サイト管理者</option>
	                  </select>
              	</td>
             </tr>  
                  <td></td>
                </tr>
              </table>
			<h2><?php if(isset($_GET["errmsg"])){echo $_GET["errmsg"];}
			?>
			<?php

			session_start();
			//ちゃんとログインしているのか
			//->$_SESSION["id"]はあるの?

			if(isset($_SESSION["id"])){

				//SQLを実行してログインユーザーのname,authを抽出する。
				$sql = "SELECT name,auth FROM user WHERE id=".$_SESSION["id"];

				$res = mysqli_query($connect,$SQL);
				$data = mysqli_fetch_array($res);

			}
			else{
				header("Location:index.php?error=2");
			}
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
            <?php require_once("module/footer.php");?>     
        </div><!-- footer -->

	
	</body>
</html>