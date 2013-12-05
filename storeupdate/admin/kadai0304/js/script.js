$(function(){
	
	for(var i=1;i<7;i++)
		$('#colorpicker'+i).farbtastic('#color'+i).slideUp(0);

	$("#designBoxOuter img").each(
		function(i){
			$(this).click(function(){
				$("#colorpicker"+(i+1)).slideToggle(400);
			});

		}
	);

});