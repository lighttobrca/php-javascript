<html>
<body>
<h1>ログイン</h1>
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post">
ID:<input type="text" name="id_string">
PASS:<input type="text" name="pass_string">
<input type="submit" name="button" value="送信">
</form>
<?php

if(isset($_POST["button"])){

$id_string = $_POST["id_string"];
$pass_string = $_POST["pass_string"];


$pointer = fopen('./csv/pass.csv','r');
	while(($csvLine = fgetcsv($pointer)) !== false){

		if($csvLine[0] != $id_string){
		echo "ログインIDが存在しません。";
		}
		
		else if( $csvLine[0] == $id_string){
		

			if($csvLine[1] == $pass_string){
				echo "ログインできました。";
				break;
			}
		echo "パスワードが間違ってます。";
		}
		
		else{
		echo "何か入力してください。";
		break;

		}
	
	
	}
	fclose($pointer);
}
?>
<body>
</html>