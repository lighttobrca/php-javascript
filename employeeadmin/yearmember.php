<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link rel="stylesheet" href="./css/base.css">
<body>
	
	<table>
	<caption>入社年度別社員一覧</caption>
	<tr>
		<th class="id">ID</th><th class="name">名前</th><th class="post">部署名</th><th class="offtitle">役職名</th>
	</tr>

	<?php	
				$i = 0;
				
				if(isset($_GET["i"])){
					$i = $_GET["i"];
				}
				
				$i = $i * 5;

				//echo $i;
				$year = "";
				if(isset($_GET["year"])){
					$year = $_GET["year"];
				}
				$connection = mysqli_connect("localhost","root","");
				mysqli_set_charset($connection,"utf8");
				$isConnected = mysqli_select_db($connection,"thscontest");

				$SQL = "";
					
				$SQL = "SELECT em.id,em.name,ps.id,em.offtitle from employee em JOIN post ps ON em.post = ps.id where em.joinyear = ".$year." LIMIT ".$i.",10";

				if($_GET["year"] == ""){
					$SQL = $SQL = "SELECT em.id,em.name,ps.id,em.offtitle from employee em JOIN post ps ON em.post = ps.id LIMIT ".$i.",10";
				}

				$result = mysqli_query($connection,$SQL);
				
				while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
				{ 
					?>
					<tr>
						<td class="id"><a href="./member.php?id=<?php echo $resultstring["0"];?>"><?php echo $resultstring["0"];?></a></td>
						<td class="name"><?php echo $resultstring["1"];?></td>
						<td class="post"><?php echo $resultstring["2"];?></td>
						<td class="offtitle"><?php echo $resultstring["3"];?></td>
					</tr>
					<?php
				}
				

				$SQL = "SELECT count(*) from employee em where em.joinyear = ".$year;

				if($_GET["year"] == ""){
					$SQL = "SELECT count(*) from employee";
				}
				$result = mysqli_query($connection,$SQL);
						?>
					</table>
					<p>◂
				<?php
				while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
				{
					$endi = (int)($resultstring[0] / 10);
					for($i=1;$i<=$endi;$i++){
						?>
					</table>
					<a class="paging" href="./allmember.php?i=<?php echo $i;?>"><?php echo $i;?></a>
						<?php
					}
				}
				mysqli_close($connection);

?>
▸</p>
	
</body>
</html>
