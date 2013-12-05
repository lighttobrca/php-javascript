

<?php
#---------------------------------テキストボックスで入力された値のdata.txtへの書き込み。---------------------------------
if(isset($_POST["textcon"])){
	$textcon = $_POST["textcon"];
	$textcon = $textcon."\n";

	if($_POST["subbut"] != ""){
		$fp = fopen("./data/data.txt","a");
		fputs($fp,$textcon);
		fclose($fp);
	}
}
?>

<html>
<!-----------------------------------------------html 本文--------------------------------------------------------------->
	<link rel="stylesheet" type="text/css" href="./base/base.css">
	<body>
	<div class="wrap">
		<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="titleleft"></div>
		<div class="titleformwrap">	
			<div class="title">
				<h1>簡易掲示板</h1>
			</div>
			<div class="form">
				<h2>＠一言メモ:<h2><input style="margin-left:280px;" type="text" name="textcon">
				<input style="margin-left:390px;"type="submit" name="subbut" value="送信">
			</div>
		</div>
	<div class="titleright"></div>
	</form>

<div class="contentswrap">
	<div class="contentsleft"></div>
		<div class="contents">
		<h2>＠内容：</h2>

		<?php
#----------------------------------------------------------読み込み--------------------------------------------------------
		if(is_readable('./data/data.txt')){
			$pointer = fopen('./data/data.txt','r');
			while(($line = fgets($pointer)) !== false){
				$arrayb = file('./data/data.txt');
				$arraya = array_reverse($arrayb);
				$countar = count($arraya);
				$countara = array_reverse($arraya);

						foreach($arraya as $aaa)
						{
		?>
		 <table>
			<hr/>
			<tr>
			<th style="font-size:30px;">quwieorpt:</th><td style="font-size:30px;"><?php echo $aaa?></td>
			</tr>
			
		 </table>

		<?php
				}
				break;
				fclose($pointer);
			}
		}
		?>
				</div>

			<div class="contentsright"></div>
		</div>
	</div>
#-------------------------------------------------------------------------------------------------------------------------------
	</body>
</html>