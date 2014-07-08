<?php
header("Content-Type: text/html;charset=utf-8");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	function getEditDat(){
		this.swfOcj=thisMovie("player1");
		return this.swfOcj.getEditDat();
	}
	function save(){
		this.swfOcj=thisMovie("player1");
		alert(this.swfOcj.getEditDat());
	}
</script>
<?php

	$url= video.php;
<div>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" id="player1" width="980" height="570">
<param name="movie" value="TestHLSVideo.swf?publisherId=88000">
<param name="flashvars" value="playerId=84863534562803713&apiDomain=apivideo.kankanews.com&vid=<?php echo $url ?>">
<param name="allowFullScreen" value="true">
<param name="wmode" value="transparent">
<param name="allowscriptaccess" value="always">
<embed src="TestHLSVideo.swf?publisherId=88000" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="980" height="570" name="player1" flashvars="playerId=84863534562803713&apiDomain=apivideo.kankanews.com&vid=<?php echo $url ?>">
</object>
</div>
<div style="height:20;"></div>
<div>
<a href="#preview" id="btn-preview" style="width:93; height:32; background:#d30915; text-align:center; cursor:pointer; color:#fff; display:inline-block; vertical-align:middle; TEXT-DECORATION:none; font:12px/18px arial;" onclick="preview()">预览</a>
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

?>
    </body>
</html>