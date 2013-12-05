<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link rel="stylesheet" href="./css/base.css">
<body>
<table>
<caption>部署一覧</caption>
<tr>
<th class="id">ID</th><th class="name">名前</th>
</tr>

<?php	
				$i = 0;
				
				if(isset($_GET["i"])){
					$i = $_GET["i"];
				}
				
				$i = $i * 5;
				//echo $i;

				$connection = mysqli_connect("localhost","root","");
				mysqli_set_charset($connection,"utf8");
				$isConnected = mysqli_select_db($connection,"thscontest");

				$SQL = "SELECT id,name from post LIMIT ".$i.",5";
				$result = mysqli_query($connection,$SQL);
				
				while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
				{ 
					?>
					<tr>
						<td class="id"><?php echo $resultstring["id"];?></td>
						<td class="name"><?php echo $resultstring["name"];?></td>
					</tr>
					<?php
				}
				
				$SQL = "SELECT count(*) from post";
				$result = mysqli_query($connection,$SQL);
				?>
					</table>
					<p>◂
				<?php
				while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
				{
					$endi = (int)($resultstring[0] / 5);

					
					for($i=1;$i<=$endi;$i++){
						?>
					
					<a class="paging" href="./postdisp.php?i=<?php echo $i;?>"><?php echo $i;?></a>
						<?php
					}
				}
				mysqli_close($connection);

?>
▸</p>

</body>
</html>