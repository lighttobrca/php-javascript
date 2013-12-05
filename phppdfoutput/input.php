<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>請求書入力画面</h1>
	<form action="pdfview.php" method="post">
		<table>
		
		<tr>
			<td>①商品名</td><td><input type="text" name="productname1"></td>
		</tr>
		<tr>
			<td>①価格</td><td><input type="text" name="productprice1"></td>
		</tr>
		<tr>
			<td>①個数</td><td><input type="text" name="productnumber1"></td>
		</tr>
		
		<tr>
			<td>②商品名</td><td><input type="text" name="productname2"></td>
		</tr>
		<tr>
			<td>②価格</td><td><input type="text" name="productprice2"></td>
		</tr>
		<tr>
			<td>②個数</td><td><input type="text" name="productnumber2"></td>
		</tr>
		
		<tr>
			<td>③商品名</td><td><input type="text" name="productname3"></td>
		</tr>
		<tr>
			<td>③価格</td><td><input type="text" name="productprice3"></td>
		</tr>
		<tr>
			<td>③個数</td><td><input type="text" name="productnumber3"></td>
		</tr>
		
		<tr>
			<td>備考</td><td><input type="text" name="contents"></td>
		</tr>
		</table>
	<input type="submit" value="送信">
	</form>
</body>
</html>