<?php
header("Content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>"; 
echo "<config>";
$time=time()+8*3600;
$time=date("ymdHis",$time);  
echo "<systemtime>20".$time."</systemtime>";
echo "</config>";
?>