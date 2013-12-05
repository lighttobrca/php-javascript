 <!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<script type="text/javascript">
<!--
function check(){
	str = document.getElementsByName("year");

regex = new RegExp("\d{1}|\d{2}\|d{3}|\d{4}");

if(regex.test(str) == false){
	return true;
}

if (regex.test(str) == true) {
    alert("正しい年度を入れてください。");
    return false;
}

}
-->
</script>
<body>
<table>
<form action="yearmember.php" method="get" onsubmit="javascript:return(check());">
<tr>
	<td>年度検索</td><td><input type="text" name="year"></td><td><input type="submit" value="検索"></td>
</tr>

</form>
</body>
</htm