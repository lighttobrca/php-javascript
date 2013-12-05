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
	<div id="loginWrapper">
    
           <!-- ヘッダー -->
	       <div id="header">
	           
	           <div id="headerInner">
	               
                  <h1><img src="./img/logo.png" alt="logo" /></h1>
                   
	           </div><!-- headerInner -->

	       </div><!-- header -->
          
          <div id="loginBox">
            <h1>Administrator Login</h1>

            <form action="" method="post">
              <span>UserID</span><span><input type="text" name="user"></span>
              <span>PASS</span><span><input type="password" name="pass"></span>
              <input type="submit" name="submit" value="login" id="submitButton" />
            </form>
              <?php
              if (isset($_POST["user"])) {
              if($_POST["user"] == "aaa")
              {
              		if($_POST["pass"] == "aaa")
              		{
              			header("location:./top.php");
              		}
              		?>

              	<h2><?php echo "パスワードが違います。"; ?></h2>
              	<?php
              }
          }
              ?>
            

          </div><!-- loginBox -->

	
  </div><!-- loginWrapper -->
	</body>
</html>




