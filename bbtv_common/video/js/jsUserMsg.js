// JavaScript Document
/*
author:ybyt
date:2009-4-18
function:�û�״̬����
*/
window.onload=function()
{
		var DialogWin=new Dialog();
		DialogWin.BindEvent();
		document.onclick=function(event)
		{
			event=event||window.event;
			var tag=event.srcElement||event.target;
			if(tag.id!="userMsgDate"&&tag.id!="txtUserMsg")
			{
				if(DialogWin.pad.style.display=="block"||DialogWin.shadow.style.display=="block")
				{
					DialogWin.doCancle();
				}
			}
		}

}
var Dialog=function(){
	this.eleObject=null;
	this.shadow=null;
	this.pad=null;
	this.txtInput=null;
	this.btnCfm=null;
	this.btnCle=null;
	this.dateCtn=null;
	this._init();
};
Dialog.prototype=
{
	_init	:function(){
		this.eleObject=this._$("userTxt");
		this.pad=this._$("userpad");
		this.shadow=this._$("userpad_shadow");
		this.txtInput=this._$("txtUserMsg");
		this.btnCfm=this._$("btnCfmMsg");
		this.btnCle=this._$("btnCleMsg");
		this.dateCtn=this._$("userMsgDate");

		this.txtInput.value="������...";

	},
	_$	:function(ele){
		return document.getElementById(ele);
	},
	//�����ԶԻ���
	showpad	:function(){
		this.pad.style.display="block";
		this.shadow.style.display="block";
		//this.txtbord.focus();
		this.addEventHandler(this.txtInput,"focus",(function(context, fun){return function(){return fun.apply(context);};})(this, this.focusInput));
		this.addEventHandler(this.btnCfm,"click",(function(context, fun){return function(){return fun.apply(context);};})(this, this.doConfirm));
		this.addEventHandler(this.btnCle,"click",(function(context, fun){return function(){return fun.apply(context);};})(this, this.doCancle));
	},
	//��������¼�
	addEventHandler	:function(oTarget, sEventType, fnHandler){
		if (oTarget.addEventListener) {
			oTarget.addEventListener(sEventType, fnHandler, false);
		} else if (oTarget.attachEvent) {
			oTarget.attachEvent("on" + sEventType, fnHandler);
		} else {
			oTarget["on" + sEventType] = fnHandler;
		}
	},
	//ȡ��
	doCancle	:function(){
		this.pad.style.display="none";
		this.shadow.style.display="none";
	},
	//ȷ��
	doConfirm	:function(){
		if(this.txtInput.value==""||this.txtInput.value=="������...")
		{
			window.alert("����δ����״̬Ŷ��")
		}
		else
		{
		this.pad.style.display="none";
		this.shadow.style.display="none";
		this.eleObject.innerHTML=this.txtInput.value;
		var mydate=new Date();
		var editDate = "";
		var editDate = (mydate.getMonth()+1) + "��" + mydate.getDate() + "��";
		this.dateCtn.innerHTML=editDate +"����";
		}
	},
	//�����۽�
	focusInput	:function(){
		this.txtInput.value="";
	},
	BindEvent	:function()
	{		
		this.addEventHandler(this.dateCtn,"click",(function(context, fun){return function(){return fun.apply(context);};})(this, this.showpad));
	}
};





