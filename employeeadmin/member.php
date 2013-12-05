<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link rel="stylesheet" href="./css/base.css">
<body>
	<table>
	<caption>社員詳細一覧</caption>
	<tr>
		<th class="id">ID</th>
		<th class="name">名前</th>
		<th class="id">性別</th>
		<th class="post">部署名</th>
		<th class="offtitle">役職名</th>
		<th class="id">入社年</th>
		<th class="name">誕生日</th>
	</tr>
<?php	
				$i = 0;
				
				if(isset($_GET["i"])){
					$i = $_GET["i"];
				}
				
				$i = $i * 5;
				//echo $i;

				$id = "";

				if(isset($_GET["id"])){
					$id = $_GET["id"];
				}

				if(is_null($_GET["id"])){
					header('location:http://localhost/S_contest/index.php');
				}
				$connection = mysqli_connect("localhost","root","");
				mysqli_set_charset($connection,"utf8");
				$isConnected = mysqli_select_db($connection,"thscontest");

				
				$post = "";
				$SQL = "";

				$SQL = "SELECT em.id,em.name,em.sex,ps.id,em.offtitle,em.joinyear,em.birth from employee em JOIN post ps ON em.post = ps.id where em.id = ".$id." LIMIT ".$i.",10";

				if(isset($_GET["post"])){
					$post = $_GET["post"];
					$SQL = "SELECT em.id,em.name,em.sex,ps.id,em.offtitle,em.joinyear,em.birth from employee em JOIN post ps ON em.post = ps.id where ps.id = ".$post."AND em.id = ".$id." LIMIT ".$i.",10";
				}

				$result = mysqli_query($connection,$SQL);
				
				?>
					</table>
					<p>◂
				<?php

				while($resultstring = mysqli_fetch_array($result, MYSQLI_BOTH)) 
				{ 
					?>
					<tr>
						<td class="id"><?php echo $resultstring["0"];?></td>
						<td class="name"><?php echo $resultstring["1"];?></td>
						<td class="id"><?php if($resultstring["2"] == 1){echo "男性";}?></td>
						<td class="post"><?php echo $resultstring["3"];?></td>
						<td class="offtitle"><?php echo $resultstring["4"];?></td>
						<td class="id"><?php echo $resultstring["5"];?></td>
						<td class="name"><?php echo $resultstring["6"];?></td>
					</tr>
					<?php
				}
				
				mysqli_close($connection);

?>	
▸</p>

</body>
</html>
