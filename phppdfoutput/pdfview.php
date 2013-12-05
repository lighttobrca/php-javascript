<?php

	$productname1 = "";
	$productprice1 = "";
	$productnumber1 = "";

	$productname2 = "";
	$productprice2 = "";
	$productnumber2 = "";

	$productname3 = "";
	$productprice3 = "";
	$productnumber3 = "";

	$productcalcp1="";
	$productcalcp2="";
	$productcalcp3="";

	if(isset($_POST["productname1"])){
		$productname1 = $_POST["productname1"];
	}
	
	if(isset($_POST["productprice1"])){
		$productprice1 = $_POST["productprice1"];
	}

	if(isset($_POST["productnumber1"])){
		$productnumber1 = $_POST["productnumber1"];
	}
	if(isset($_POST["productprice2"]) && isset($_POST["productnumber2"])){
		$productcalcp1 = $productprice1 * $productnumber1;
	}
	if(isset($_POST["productname2"])){
		$productname2 = $_POST["productname2"];
	}

	if(isset($_POST["productprice2"])){
		$productprice2 = $_POST["productprice2"];
	}

	if(isset($_POST["productnumber2"])){
		$productnumber2 = $_POST["productnumber2"];
	}

	if(isset($_POST["productprice2"]) && isset($_POST["productnumber2"])){
		$productcalcp2 = $productprice2 * $productnumber2;
	}
	if(isset($_POST["productname3"])){
		$productname3 = $_POST["productname3"];
	}
	if(isset($_POST["productprice3"])){
		$productprice3 = $_POST["productprice3"];
	}
	if(isset($_POST["productnumber3"])){
		$productnumber3 = $_POST["productnumber3"];
	}

	if(isset($_POST["productprice3"]) && isset($_POST["productnumber3"])){
		$productcalcp3 = $productprice3 * $productnumber3;
	}
	
	$calcprice = $productcalcp1 + $productcalcp2 + $productcalcp3;
	
	$tax = $calcprice / 100 * 5;
	
	$smallcalcprice = $calcprice;
	$calcprice = $calcprice + $tax;
	
	$contents = "";
	if(isset($_POST["contents"])){
		$contents = $_POST["contents"];
	}

	$contents = mb_convert_encoding($contents, "SJIS", "auto");
	require('mbfpdf.php');

	$pdf = new MbfPdf('P','mm','A4');

	$pdf -> addMbFont(GOTHIC,'SJIS');

	$pdf -> open();

	$pdf -> addPage();

	$pdf -> setFont(GOTHIC,'',10);

	$pdf -> setTextColor(0,0,0);

	

	$nowdate = date("Y/m/d h:i:s");
	
	$pdf -> SetXY(180,5);

	$pdf -> write(0,$nowdate,'');

	$pdf -> SetXY(5,10);

	$pdf -> write(0,'§160-0023','');

	$pdf -> SetXY(5,15);

	$pdf -> write(0,'“Œ‹ž“sVh‹æ¼Vh1-7-3','');
	
	$pdf -> setFont(GOTHIC,'',25);

	$pdf -> SetXY(5,25);

	$pdf -> write(0,'HAL “Œ‹ž Œä’†','');

	$pdf -> image('./hal.png',120,35,75,15);

	
	$pdf -> setTextColor(0,0,0);
	$pdf -> setFont(GOTHIC,'',12);
	
	$pdf -> SetXY(120,55);

	$pdf -> write(0,'§160-0023');

	$pdf -> SetXY(120,62);

	$pdf -> write(0,'“Œ‹ž“sVh‹æ¼Vh1-7-3');

	$pdf -> SetXY(120,67);

	$pdf -> write(0,'TEL:03-XXXX-XXXX');

	$pdf -> SetXY(120,72);

	$pdf -> write(0,'FAX:03-XXXX-XXXX');

	
	$pdf -> SetXY(5,90);
        $pdf -> setFont(GOTHIC,'',15);
	$pdf -> write(0,'‚ ‚è‚ª‚Æ‚¤‚²‚´‚¢‚Ü‚·B‰º‹L‚Ì’Ê‚è,¿‹\‚µã‚°‚Ü‚·B');
	
	
	if($calcprice == 0){
		$calcprice = "";
	}
	else{
		$calcprice = "\\".$calcprice;
	}
	
	
	$pdf -> SetXY(5,110);
	$pdf -> write(0,'‡Œv‹àŠz:'.$calcprice);
	$pdf -> line(5,113,200,113);
	
	
	$pdf -> SetXY(10,125);
	$pdf -> SetTextColor(255,255,255);
	
	
	$pdf -> setFillColor(0,0,0);
	$pdf -> cell(57,13,'¤•i–¼',1,0,'C',1);
	$pdf -> cell(37,13,'‰¿Ši',1,0,'C',1);
	$pdf -> cell(37,13,'ŒÂ”',1,0,'C',1);
	$pdf -> cell(57,13,'‘Šz',1,1,'C',1);
	
	$pdf -> SetTextColor(0,0,0);
		
	
	$pdf -> setFillColor(255,255,255);
	

	if($productprice1 == 0){
		$productprice1 = "";
	}
	else{
	$productprice1 = "\\".$productprice1;
	}
	
	if($productprice2 == 0){
		$productprice2 = "";
	}
	else{
	$productprice2 = "\\".$productprice2;
	}
	
	if($productprice3 == 0){
		$productprice3 = "";
	}
	else{
	$productprice3 = "\\".$productprice3;
	}
	

	if($productcalcp1 == 0){
		$productcalcp1 = "";
	}
	else{
	$productcalcp1 = "\\".$productcalcp1;
	}
	
	if($productcalcp2 == 0){
		$productcalcp2 = "";
	}
	else{
	$productcalcp2 = "\\".$productcalcp2;
	}
	
	if($productcalcp3 == 0){
		$productcalcp3 = "";
	}
	else{
	$productcalcp3 = "\\".$productcalcp3;
	}
	

	
	
	
	$pdf -> cell(57,13,$productname1,1,0,'L',1);
	$pdf -> cell(37,13,$productprice1,1,0,'C',1);
	$pdf -> cell(37,13,$productnumber1,1,0,'C',1);
	$pdf -> cell(57,13,$productcalcp1,1,1,'C',1);
	
	
	$pdf -> cell(57,13,$productname2,1,0,'L',1);
	$pdf -> cell(37,13,$productprice2,1,0,'C',1);
	$pdf -> cell(37,13,$productnumber2,1,0,'C',1);
	$pdf -> cell(57,13,$productcalcp2,1,1,'C',1);
	
	
	
	$pdf -> cell(57,13,$productname3,1,0,'L',1);
	$pdf -> cell(37,13,$productprice3,1,0,'C',1);
	$pdf -> cell(37,13,$productnumber3,1,0,'C',1);
	$pdf -> cell(57,13,$productcalcp3,1,1,'C',1);
	
	
	
	$pdf -> SetXY(114,200);
	
	
	if($smallcalcprice == 0){
		$smallcalcprice = "";
	}
	else{
		$smallcalcprice = "\\".$smallcalcprice;
	}
	
	if($tax == 0){
		$tax = "";
	}
	else{
		$tax = "\\".$tax;
	}
	
	
	$pdf -> setFillColor(0,0,0);
	$pdf -> SetTextColor(255,255,255);
	$pdf -> cell(37,13,'¬Œv',1,0,'L',1);
	
	$pdf -> setFillColor(255,255,255);
	$pdf -> SetTextColor(0,0,0);
	$pdf -> cell(47,13,$smallcalcprice,1,1,'L',1);
	
	$pdf -> SetXY(114,213);
	
	$pdf -> setFillColor(0,0,0);
	$pdf -> SetTextColor(255,255,255);
	$pdf -> cell(37,13,'Á”ïÅ(5%)',1,0,'L',1);
	
	$pdf -> setFillColor(255,255,255);
	$pdf -> SetTextColor(0,0,0);
	$pdf -> cell(47,13,$tax,1,1,'L',1);
	

	$pdf -> SetXY(5,240);
	
	$pdf -> cell(195,15,'”õlF'.$contents,1,0,'L',1);

	ob_end_clean();
	$pdf -> output($nowdate.'.pdf','I');
	
?>
