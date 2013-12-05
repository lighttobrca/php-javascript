<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<table>
<form action="postmember.php" method="get">
<tr>
	<td>部署検索</td><td>
		<select name="post">
			
		<?php
		$connection = mysqli_connect("localhost","root","");
				mysqli_set_charset($connection,"utf8");
				$isConnected = mysqli_select_db($connection,"thscontest");

				$SQL = "SELECT id,name from post";
				$result = mysqli_query($connection,$SQL);
				
				while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) {
						?>
					<option value="<?php echo $resultstring[0];?>">
					<?php echo $resultstring[1];?>
					</option>
					<?php
				}
		?>
			</select>
		
	
	</td><td><input type="submit" value="検索"></td>
</tr>
</form>
</body>
</html>