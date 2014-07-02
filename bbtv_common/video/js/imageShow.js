var _$ = function (d){return document.getElementById( d );};
var isIE = (document.all) ? true : false;
var Bind = function (obj,fun,arr){return function() {arr || (arr = arguments);return fun.apply(obj,arr);}};//��
var Tween =  function(t,b,c,d){return c*t/d + b;};//���庯��
function addEventHandler(oTarget, sEventType, fnHandler) {if (oTarget.addEventListener) {oTarget.addEventListener(sEventType, fnHandler, false);} else if (oTarget.attachEvent) {oTarget.attachEvent("on" + sEventType, fnHandler);} else {oTarget["on" + sEventType] = fnHandler;
	}
};//�¼�����
function removeEventHandler(oTarget, sEventType, fnHandler) {
    if (oTarget.removeEventListener) {
        oTarget.removeEventListener(sEventType, fnHandler, false);
    } else if (oTarget.detachEvent) {
        oTarget.detachEvent("on" + sEventType, fnHandler);
    } else { 
        oTarget["on" + sEventType] = null;
    }
};//�Ƴ�����
//////////////////////////////////////////////
var Timer = {};//Timer
Timer.add = function (fn){return new this.fn(fn)};
Timer.fn = function (fn){
  var timer;
  this.play = function (speed,only){
    speed || ( speed = 10 );
	if(only)timer = window.setTimeout(fn,speed);
    else timer = window.setInterval(fn,speed);
  };
  this.stop = function (){clearTimeout(timer);clearInterval(timer)};
};
//-----------------------------------Mask ���ֶ���
var Mask = function (){
	 this.fl = Timer.add(Bind(this,this.fn));
	 this.from_num = 0;
	 this.speed = 140;//�����ٶȣ�Խ��Խ��
};
Mask.prototype.ready = function (ele,pos){
     if(this.ele)this.set(this.maxWidth,this.maxHeight);
     this.ele = ele;
     this.maxWidth = this.ele.offsetWidth;
	 this.maxHeight = this.ele.offsetHeight;
	 this.ele.style.position = "absolute";
	 this.from_num = 0;
	 if(!pos){
		 var  x = ["left","center","right",""][parseInt(4*Math.random())],
              y = ["top","center","bottom",""][parseInt(4*Math.random())];
		if(x == "" && y == "")x = "left";//����ͬʱΪ""	  
	     this.position = [x,y];		  
	 }else{
	    this.position = pos;
	 }
	 this.set(0,0);
	 this.fl.stop();
};
Mask.prototype.start = function (){this.fl.play();};
Mask.prototype.stop = function (){this.fl.stop();};
Mask.prototype.set = function (width,height){//�������ֵľ��Σ����ڶ�λ���ֵı任����
    var t,r,b,l;
	switch(this.position[0]){
	 case "left"   : 
	      l = 0; 
		  r = width; 
		  break;
	 case "center" : 
	      l = (this.maxWidth - width)/2; 
		  r = (this.maxWidth + width)/2;
		  break;
	 case "right"  : 
	      l = this.maxWidth - width;
		  r = this.maxWidth; 
		  break;
	 default:
	      l = 0;
		  r = this.maxWidth; 	  
	}
    switch(this.position[1]){
	 case "top"    : 
	      t = 0; 
		  b = height; 
		  break;
	 case "center" : 
	      t = (this.maxHeight - height)/2; 
		  b = (this.maxHeight + height)/2;
		  break;
	 case "bottom"  : 
	      t = this.maxHeight - height;
		  b = this.maxHeight; 
		  break;
	 default :
	      t = 0;
		  b = this.maxHeight;
		  break;	  
	}
	this.ele.style.clip = "rect("
	                + t + "px,"
					+ r + "px,"
					+ b + "px,"
					+ l + "px)" ;
};
Mask.prototype.fn = function (){
     var w,h; 
     this.from_num ++ ;
	 if(this.from_num<=this.speed){
	    w = Tween(this.from_num,0,this.maxWidth,this.speed);
		h = Tween(this.from_num,0,this.maxHeight,this.speed);
		this.set(w,h);
	 }else{
	    this.fl.stop();
		//this.start();//������Ҫ�ظ������������ע�ͣ��Ͼ䲻ע��
	 }
	 
};
function ImgFlash(box){
        this.box = box.getElementsByTagName("dl");
		this.ge = 6;//�л��������
		this.menu = [];
		this.mask = new Mask();//�������ֶ����������ò��� �� ���Ч��
		this.zIndex = this.box.length;
		var _div = document.createElement('div');
		this.dang = 0;
		for(i=0;i<this.zIndex;i++){
			this.box[i].style.zIndex = this.zIndex-i;
			var _em = document.createElement('em'),_span = document.createElement('span');
			var _dt = this.box[i].getElementsByTagName("dt")[0];
			_dt.appendChild(_span);
			//_em = _em;
			addEventHandler(_em,'mouseover',Bind(this,this.emEvent,[this.zIndex-i-1,true]));
			_div.appendChild(_em);
			this.menu.push(_em);
			if(this.zIndex-i==1){
				_em.className = 'd';
			}
		}
		box.appendChild(_div);
		addEventHandler(box,'mouseover',Bind(this,function(){this.fl.stop()}));
		addEventHandler(box,'mouseout',Bind(this,function(){this.fl.play(this.ge*1000)}));
		this.fl = Timer.add(Bind(this,this.enterFrame))
		this.fl.play(this.ge*1000);
}
ImgFlash.prototype.enterFrame = function(){
        var ddd = this.dang==2?0:this.dang+1;
		this.emEvent(ddd);	
};
ImgFlash.prototype.emEvent = function (index,b){
		if(b)this.fl.stop();
		if(index == this.dang)return;
		this.menu[this.menu.length-1-this.dang].className="";
		var odl = this.box[this.dang];
		this.zIndex++;
		this.dang = index;
		this.menu[this.menu.length-1-this.dang].className="d";
		var ndl = this.box[this.dang];
		var img = ndl.getElementsByTagName("img")[0];
		this.mask.ready(img);
		this.mask.start();
		ndl.style.zIndex = this.zIndex;
}
