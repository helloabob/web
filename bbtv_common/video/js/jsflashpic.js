// JavaScript Document
/*
 * �ļ�����jsflashpic.js
 * �����ˣ�ybyt
 * ����ʱ�䣺2009-04-29 9:20
 * �����£�
 * ����˵����imgUrl��imgLink��imgText����ĳ�ʼ��ֵ�ڵ���ҳ�����
 * ����:bbtv��Ϣҳ��ͼƬ����
 * ��ʷ�޸ļ�¼��
 * smgbb.cn
*/
var imgUrl=[];
var imgLink=[];
var imgText=[];
var picNum=0;
var theTimer;
function NextPic(k){
	if (theTimer){clearInterval(theTimer);}
	picNum=k;
	var imageObj=document.getElementById("jsImg");
	var txtObj=document.getElementById("jstxt");
	var links=[];
	for(var i=1;i<5;i++)
	{
		links.push("<a id='link"+i+"'  href='javascript:NextPic("+i+")'>"+i+"</a>")
	}
	document.getElementById("jslinks").innerHTML=links.join("");
    if (document.all){
        imageObj.filters.revealTrans.Transition=Math.floor(Math.random()*23);
        imageObj.filters.revealTrans.apply();
        imageObj.filters.revealTrans.play();
    }
    imageObj.src=imgUrl[picNum];
    imageObj.alt=imgText[picNum];
    txtObj.innerHTML="<a href='"+imgLink[picNum]+"' title='"+imgText[picNum]+"'>"+imgText[picNum]+"</a>";
	
	document.getElementById("link"+picNum).style.cssText="background:#862627";
   if(picNum<4) picNum++ ;//��ʾ4��ͼƬ
    else picNum=1;
    theTimer=setTimeout('NextPic("'+picNum+'")', 3000);
}

function goUrl(){
    window.open(imgLink[picNum],'_blank');
}
