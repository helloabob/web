$(document).ready(
	function(){
		inputTipText();    //ֱ�ӵ��þ�OK��
	}
);

function inputTipText(){ 
$("input[class*=grayTips]") //������ʽ���к���grayTips��input
.each(function(){
   var oldVal=$(this).val();     //Ĭ�ϵ���ʾ���ı�
   $(this)
   .css({"color":"#888"})     //��ɫ
   .focus(function(){
    if($(this).val()!=oldVal){$(this).css({"color":"#000"})}else{$(this).val("").css({"color":"#878787"})}
   })
   .blur(function(){
    if($(this).val()==""){$(this).val(oldVal).css({"color":"#878787"})}
   })
   .keydown(function(){$(this).css({"color":"#000"})})
  
})
}

