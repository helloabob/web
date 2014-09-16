<?php
header("Content-Type: text/html;charset=utf-8");
?>
<html>
<head>
<metahttp-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<center>
<script type="text/javascript">
	function thisMovie(pName) {
		if (navigator.userAgent.indexOf("MSIE") != -1) {
			return window[pName];
		}else {
			return document[pName];
		}
	}
	function preview(){
		this.swfOcj=thisMovie("player3");
		this.swfOcj.startPreview();
	}
	function sel(){
		this.swfOcj=thisMovie("player1");
		alert(this.swfOcj.getSelectionInfo());
	}
	function getEditDat(){
		this.swfOcj=thisMovie("player1");
		return this.swfOcj.getEditDat();
	}
	function save(){
		this.swfOcj=thisMovie("player1");
		alert(this.swfOcj.getEditDat());
	}
	function onSelectItem(src){
		alert(unescape(src));
	}
	function onUpdateItem(src){
		alert(src);
	}
</script>
<?php
if(isset($_REQUEST['interface_url'])&&!empty($_REQUEST['interface_url'])){
	$url=$_REQUEST['interface_url'];
	
	
	$sub1= $_REQUEST['sub1'];
$sub2= $_REQUEST['sub2'];
$sub3= $_REQUEST['sub3'];
$param="";

if($sub1){
	$param= "?t=1";
}else if($sub2){
	$param= "?t=2";
}else if($sub3){
	$param= "?t=3";
}else{
	$param= "?t=1";
}
	$url=$url.$param;
	
	?>
<div>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="player1" width="980" height="570">
<param name="movie" value="EasyEditor.swf?publisherId=88000&t=<?php echo time() ?>">
<param name="flashvars" value="playerId=84863534562803713&apiDomain=apivideo.kankanews.com&vid=<?php echo $url ?>">
<param name="allowFullScreen" value="true">
<param name="wmode" value="transparent">
<param name="allowscriptaccess" value="always">
<embed src="EasyEditor.swf?publisherId=88000&t=<?php echo time() ?>" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="980" height="570" name="player1" flashvars="playerId=84863534562803713&apiDomain=apivideo.kankanews.com&vid=<?php echo $url ?>">
</object>
</div>
<div style="height:20;"></div>
<div>
<a href="#preview" id="btn-preview" style="width:93; height:32; background:#d30915; text-align:center; cursor:pointer; color:#fff; display:inline-block; vertical-align:middle; TEXT-DECORATION:none; font:12px/18px arial;" onclick="preview()">预览</a>
</div>
 <div style="height:20;"></div>
 <div>
<a id="btn-sel" style="width:93; height:32; background:#d30915; text-align:center; cursor:pointer; color:#fff; display:inline-block; vertical-align:middle; TEXT-DECORATION:none; font:12px/18px arial;" onclick="sel()">当前选择</a>
</div>
 <div style="height:20;"></div>
<div>
<a name="preview"></a>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="player3" width="698" height="433"><param name="movie" value="PreviewPlayer?publisherId=88000"><param name="flashvars" value="playerId=84863534562803713&apiDomain=apivideo.kankanews.com&vid=<?php echo $url ?>"><param name="allowFullScreen" value="true"><param name="wmode" value="transparent"><param name="allowscriptaccess" value="always"><embed src="PreviewPlayer.swf?publisherId=88000" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="698" height="433" name="player3" flashvars="playerId=84863534562803713&apiDomain=apivideo.kankanews.com&vid=<?php echo $url ?>"></object>
</div>
<div style="height:20;"></div>
<div>
<a id="btn-save" style="width:93; height:32; background:#d30915; text-align:center; cursor:pointer; color:#fff; display:inline-block; vertical-align:middle; TEXT-DECORATION:none; font:12px/18px arial;" onclick="save()">保存</a>
</div>
</center>
	<?php
}else{
	?>
<script type="text/javascript">alert("参数不对");</script>
	<?php
	// $url="video.php";
}
?>
    </body>
</html>