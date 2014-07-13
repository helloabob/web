<?php
header("Content-Type: text/html;charset=utf-8");

$sub1= $_REQUEST['sub1'];
$sub2= $_REQUEST['sub2'];
$sub3= $_REQUEST['sub3'];
$param="";

if($sub1){
	echo "?t=1";
}else if($sub2){
	echo "?t=2";
}else if($sub3){
	echo "?t=3";
}else{
	echo "?t=1";
}

?>