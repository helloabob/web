$(document).ready(function(){
		$(".ch-nav").pngFix({
				sizingMethod: "crop"
		});
		$("div#float_r").pngFix({
				sizingMethod: "crop"
		});	
		$("div#float_l").pngFix({
				sizingMethod: "crop"
		});		
		$('#ch-tabs').tabs({
            select: function(event, ui) {
                ddd_index(ui.index);
                return true;
            }
            });
            
		_$("chnBar").style.height = _$("slider").clientHeight * Math.min(_$("chnContent").clientHeight / _$("chnContent").scrollHeight, 1) + "px";
        
        var chnsld = new Slider("slider", "chnBar","barup","bardown","mask", { Horizontal: false,
            MaxValue: _$("chnContent").scrollHeight - _$("chnContent").clientHeight,
            onMove: function(){ _$("chnContent").scrollTop = this.GetValue(); }
        });
        
        chnsld.WheelBind(_$("chnContent"));
        chnsld.KeyBind(_$("chnContent"));
		
		//����tab����display:block
		for(var i=2;i<19;i++)
		{
			$(((i>9)?"#ch0":"#ch00")+i).css({display:"inline"});	
		}
				//����ر�
		$(".close").each(
			function(){
			$(this).bind("click", function(){
				$(this).parent().css({display:"none"});
			});
		} );
		
		
		//����
         $('.dateinput').datepicker({
                   dateFormat: 'yy-mm-dd',  
                   prevText:'ǰһ��',
                   nextText:'��һ��',
                   currentText:' ',
                   monthNames:['1��','2��','3��','4��','5��','6��','7��','8��','9��','10��','11��','12��']
         });
//��������3̬
$(".date").mouseover(function(){ 
                   $(this).css({"background-position":"-1px -51px" });
                   }).mouseout(function(){
                   $(this).css({"background-position":"-1px 2px" });
                   }).click(function(){
                   $(this).css({"background-position":"-1px -102px" });
                   });              

		

			
	}
);


