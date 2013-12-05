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
		
	         <form action="./admin_Complete_newCustomer.php" method="post">

              <table id="formTable" cellspacing="0" cellpadding="0">
                <tr>
                  <td class="formTableTitle">名前(name)</td><td><input type="text" name="name" size="20" class="textBox" /></td>
              </tr>
              <tr> 
                  <td class="formTableTitle">ID</td>
                  <td>
	                  <input type="text" name="id" size="20" class="textBox">
              	</td>
             </tr>  
             <tr>
                  <td class="formTableTitle">パスワード(password)</td>
                  <td>
                  	<input type="password" name="password" size="20" class="textBox">
                  </td>
                </tr>
                <tr>
                	<td class="formTableTitle">性別(seibetsu)</td>
                	<td><select name="seibetsu">
                		<option value="男">男</option>
                		<option value="女">女</option>
                	</td>
                </tr>
                <tr>
                	<td class="formTableTitle">生年月日(birthday)</td>
                	<td><input type="text" name="birthday" size="20" class="textBox"><br/>例）2013年07月18日 -> 20130718</td>
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