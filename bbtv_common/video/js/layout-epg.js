$(document).ready(function(){
		$(".epgCon").pngFix();
		$(".time-line-sd").pngFix({
				sizingMethod: "crop"
		});
		$("div#float_r").pngFix({
				sizingMethod: "crop"
		});	
		$("div#float_l").pngFix({
				sizingMethod: "crop"
		});
                $('#dateinput').datepicker({
					dateFormat: 'yy-mm-dd',  
					prevText:'ǰһ��',
					nextText:'��һ��',
					currentText:' ',
					monthNames:['1��','2��','3��','4��','5��','6��','7��','8��','9��','10��','11��','12��']
				});
	}
);
