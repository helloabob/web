<?php

// $video_type=$_REQUEST["type"];
// echo $video_type;
//http://segment.livehls.kksmg.com/m3u8/216_1403746090.m3u8
//http://www.codecomposer.net/hls/bipbop/gear4/prog_index.m3u8

$serial1=array("start" => 124.08,"end" => 301.6,"total" => 177.52);
$serial2=array("start" => 429.64,"end" => 590.2,"total" => 160.56);
$serial=array($serial1,$serial2);
$arr = array(
	'videoName' => "TEST11",
	'videoURL' => "http://domhttp.kksmg.com/2012/09/15/h264_450k_mp4_0717609ae3a6426eb1012167def9131e_2158948.mp4",
	'duration' => 628.7,
	'totalBytes' => 41000000,
	'epg' => $serial,
	'kft' => "0;1.68;3.68;5.6;7.6;9.6;11.2;13.2;15.2;16.92;18.92;20.64;22.52;23.76;25.76;27.76;29.76;31.76;33.76;35.76;37.76;39.08;41.08;43.08;45.08;47.08;49.08;51.08;53.08;55.08;56.4;58.4;60.4;62.16;63.64;65.64;67.64;68.96;70.24;72.24;73.72;75.72;77.6;79.6;81.24;83.24;85.24;87.24;89.24;90.72;92.72;94.72;96.72;98.72;100.72;102.72;104.44;106.44;107.76;109.76;111.76;113.76;115.04;116.64;118.64;120.36;122.08;124.08;126.08;128.08;129.88;131.56;133.56;135.24;137.2;139.2;141.2;143.2;145.2;147.2;149.2;151.2;153.2;155.2;156.44;158.44;159.88;161.84;163.12;165.12;166.64;168.64;170.64;172.64;174.28;176.28;177.48;179.48;181.48;183.48;185.48;186.72;188.12;190.04;192.04;194.04;196.04;198.04;200.04;202.04;203.08;205.08;207.08;209.08;211.08;212.64;214.64;216.64;218.64;220.2;221.6;223.6;225.6;227.6;229.6;231.6;233.6;235.6;237.6;239.6;241;243;245;246.84;248.84;250.84;252.84;254.84;256.84;258.84;260.04;261.76;263.76;264.96;266.96;268.96;270.92;272.92;274.92;276.92;278.92;280.92;282.92;284.88;286.88;288.88;290.88;292.88;294.52;296.52;297.6;299.6;301.6;303.6;305.12;307.12;309.12;310.84;312.28;313.96;315.96;317.96;319.96;321.96;323.96;325.96;327.96;329.96;331.4;333.4;335.4;337.4;339.4;341.4;343.4;345.4;347.4;349.4;351.4;353.16;355.16;357.16;359.16;361.16;363.16;365.16;367;369;371;373;375;377;379;381;382.04;384.04;386.04;388.04;390.04;392.04;394.04;396.04;398.04;400.04;402.04;404.04;405.44;407.44;409.44;411.44;413.44;414.72;416.72;418.72;420.72;422.72;424.56;426.12;427.64;429.64;431.64;433.64;435.64;437.64;439.64;441.64;443.64;445.64;446.8;448.8;450.12;452.04;453.4;455.4;457.4;458.44;460.44;462.44;464.44;466.44;467.48;469.48;471.48;472.88;474.88;476.88;478.88;480.88;482.4;484.4;486.4;488.12;490.12;492.12;494.12;496.12;498.12;499.84;501.84;503.84;505.16;507.16;508.96;510.96;512.96;514.88;516.88;518.88;520.88;522.12;524.04;526.04;528.04;530.04;532.04;534.04;535.88;537.88;539.88;541.88;543.88;545.6;547.6;549.6;551.6;553.6;555.6;557.6;559.6;561.6;563.6;565.6;567.08;569.08;570.28;572.28;574.28;576.28;578.28;579.84;581.12;583.08;584.2;586.2;588.2;590.2;592.2;593.84;595.84;597.28;598.84;600.84;602.28;604.28;606.28;608.28;610.28;612.28;614.28;616.28;618.28;620.28;622.28;623.92;625.92;627.92", );
echo json_encode($arr);

// $serial1=array("start" => 124.08,"end" => 301.6,"total" => 177.52);
// $serial2=array("start" => 429.64,"end" => 590.2,"total" => 160.56);
// $serial=array($serial1,$serial2);
// $arr = array(
// 	'videoName' => "TEST11",
// 	'videoURL' => "http://www.codecomposer.net/hls/bipbop/gear4/prog_index.m3u8",
// 	'duration' => 1900,
// 	'totalBytes' => 41000000,
// 	'epg' => $serial,
// 	'kft' => "0;10;20;30;40;50;60;70;80;90;100;110;120;130;140;150;160;170;180;190;200;210;220;230;240;250;260;270;280;290;300;310;320;330;340;350;360;370;380;390;400;410;420;430;440;450;460;470;480;490;500;510;520;530;540;550;560;570;580;590;600;610;620;630;640;650;660;670;680;690;700;710;720;730;740;750;760;770;780;790;800;810;820;830;840;850;860;870;880;890;900;910;920;930;940;950;960;970;980;990;1000;1010;1020;1030;1040;1050;1060;1070;1080;1090;1100;1110;1120;1130;1140;1150;1160;1170;1180;1190;1200;1210;1220;1230;1240;1250;1260;1270;1280;1290;1300;1310;1320;1330;1340;1350;1360;1370;1380;1390;1400;1410;1420;1430;1440;1450;1460;1470;1480;1490;1500;1510;1520;1530;1540;1550;1560;1570;1580;1590;1600;1610;1620;1630;1640;1650;1660;1670;1680;1690;1700;1710;1720;1730;1740;1750;1760;1770;1780;1790;1800", );
// echo json_encode($arr);
?>