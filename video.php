<?php

 $video_type=$_REQUEST["t"];
//  echo $video_type;
//http://segment.livehls.kksmg.com/m3u8/216_1403746090.m3u8
//http://www.codecomposer.net/hls/bipbop/gear4/prog_index.m3u8
//http://segment.livehls.kksmg.com/m3u8/216_1404670365.m3u8
//http://v.youku.com/player/getM3U8/vid/XNzMwMjk4NDk2/type/mp4/video.m3u8

if(!$video_type)$video_type="1";

if($video_type=="1"){
$serial1=array("start" => 124.08,"end" => 301.6,"total" => 177.52);
$serial2=array("start" => 429.64,"end" => 590.2,"total" => 160.56);
$serial=array($serial1,$serial2);
$arr = array(
	'videoName' => "TEST11",
	'videoURL' => "http://domhttp.kksmg.com/2012/09/15/h264_450k_mp4_0717609ae3a6426eb1012167def9131e_2158948.mp4",
	'duration' => 628.7,
	'totalBytes' => 41000000,
	'kft' => "0;1.68;3.68;5.6;7.6;9.6;11.2;13.2;15.2;16.92;18.92;20.64;22.52;23.76;25.76;27.76;29.76;31.76;33.76;35.76;37.76;39.08;41.08;43.08;45.08;47.08;49.08;51.08;53.08;55.08;56.4;58.4;60.4;62.16;63.64;65.64;67.64;68.96;70.24;72.24;73.72;75.72;77.6;79.6;81.24;83.24;85.24;87.24;89.24;90.72;92.72;94.72;96.72;98.72;100.72;102.72;104.44;106.44;107.76;109.76;111.76;113.76;115.04;116.64;118.64;120.36;122.08;124.08;126.08;128.08;129.88;131.56;133.56;135.24;137.2;139.2;141.2;143.2;145.2;147.2;149.2;151.2;153.2;155.2;156.44;158.44;159.88;161.84;163.12;165.12;166.64;168.64;170.64;172.64;174.28;176.28;177.48;179.48;181.48;183.48;185.48;186.72;188.12;190.04;192.04;194.04;196.04;198.04;200.04;202.04;203.08;205.08;207.08;209.08;211.08;212.64;214.64;216.64;218.64;220.2;221.6;223.6;225.6;227.6;229.6;231.6;233.6;235.6;237.6;239.6;241;243;245;246.84;248.84;250.84;252.84;254.84;256.84;258.84;260.04;261.76;263.76;264.96;266.96;268.96;270.92;272.92;274.92;276.92;278.92;280.92;282.92;284.88;286.88;288.88;290.88;292.88;294.52;296.52;297.6;299.6;301.6;303.6;305.12;307.12;309.12;310.84;312.28;313.96;315.96;317.96;319.96;321.96;323.96;325.96;327.96;329.96;331.4;333.4;335.4;337.4;339.4;341.4;343.4;345.4;347.4;349.4;351.4;353.16;355.16;357.16;359.16;361.16;363.16;365.16;367;369;371;373;375;377;379;381;382.04;384.04;386.04;388.04;390.04;392.04;394.04;396.04;398.04;400.04;402.04;404.04;405.44;407.44;409.44;411.44;413.44;414.72;416.72;418.72;420.72;422.72;424.56;426.12;427.64;429.64;431.64;433.64;435.64;437.64;439.64;441.64;443.64;445.64;446.8;448.8;450.12;452.04;453.4;455.4;457.4;458.44;460.44;462.44;464.44;466.44;467.48;469.48;471.48;472.88;474.88;476.88;478.88;480.88;482.4;484.4;486.4;488.12;490.12;492.12;494.12;496.12;498.12;499.84;501.84;503.84;505.16;507.16;508.96;510.96;512.96;514.88;516.88;518.88;520.88;522.12;524.04;526.04;528.04;530.04;532.04;534.04;535.88;537.88;539.88;541.88;543.88;545.6;547.6;549.6;551.6;553.6;555.6;557.6;559.6;561.6;563.6;565.6;567.08;569.08;570.28;572.28;574.28;576.28;578.28;579.84;581.12;583.08;584.2;586.2;588.2;590.2;592.2;593.84;595.84;597.28;598.84;600.84;602.28;604.28;606.28;608.28;610.28;612.28;614.28;616.28;618.28;620.28;622.28;623.92;625.92;627.92", );
echo json_encode($arr);
}else if($video_type=="2"){
 $serial1=array("start" => 124.08,"end" => 301.6,"total" => 177.52);
 $serial2=array("start" => 429.64,"end" => 590.2,"total" => 160.56);
 $serial=array($serial1,$serial2);
 $arr = array(
 	'videoName' => "TEST11",
 	'videoURL' => "http://segment.livehls.kksmg.com/m3u8/216_1404670365.m3u8",
 	'duration' => 4429.45,
 	'totalBytes' => 41000000,
 	'kft' => "0;10.10;20.34;31.63;42.33;53.40;65.94;80.14;91.53;105.36;119.85;130.05;140.14;150.78;161.87;172.49;184.09;198.62;212.66;222.77;232.94;248.23;259.03;270.66;285.73;297.01;310.97;328.46;339.67;354.15;367.87;381.18;391.35;402.87;416.33;429.82;441.97;453.22;464.42;478.19;488.37;499.36;512.45;523.57;535.21;549.33;564.09;580.25;591.19;603.11;615.78;626.83;638.62;651.46;661.67;676.59;687.78;697.87;711.54;722.51;738.17;753.56;766.07;783.67;793.86;809.14;821.16;835.48;847.53;864.87;876.36;888.20;900.18;914.62;924.74;938.90;956.43;974.02;992.07;1005.77;1015.99;1032.77;1044.00;1055.85;1068.21;1079.05;1092.34;1103.99;1115.18;1126.59;1139.19;1152.39;1167.81;1178.00;1189.20;1201.50;1211.63;1225.20;1236.80;1252.39;1266.45;1280.52;1295.22;1307.20;1323.53;1335.83;1348.16;1364.34;1375.38;1385.58;1396.79;1411.80;1427.44;1438.11;1453.24;1467.11;1477.23;1487.39;1498.06;1511.99;1524.06;1536.82;1551.51;1562.96;1573.87;1587.13;1601.26;1618.94;1634.12;1645.93;1659.21;1671.37;1681.44;1694.11;1707.49;1726.66;1738.00;1748.99;1761.72;1776.56;1789.10;1799.25;1814.01;1824.45;1839.46;1853.07;1864.31;1875.51;1885.76;1897.30;1907.79;1918.55;1931.44;1943.26;1953.97;1964.67;1977.79;1988.92;2002.22;2013.93;2027.63;2044.41;2055.12;2065.20;2076.60;2087.14;2098.52;2117.10;2129.80;2140.59;2158.39;2168.78;2181.26;2193.38;2205.08;2216.08;2228.88;2241.68;2255.51;2268.51;2279.87;2292.97;2303.15;2313.69;2324.27;2334.85;2349.33;2359.46;2375.82;2386.91;2397.71;2409.54;2419.72;2432.99;2443.79;2456.18;2471.87;2481.98;2492.79;2504.06;2514.46;2527.42;2537.61;2553.57;2563.65;2574.49;2585.27;2597.05;2607.94;2618.80;2632.30;2647.27;2666.35;2676.58;2693.55;2704.81;2715.21;2730.73;2744.39;2756.05;2766.60;2778.94;2791.47;2811.35;2822.81;2837.13;2849.78;2860.03;2872.22;2882.29;2893.17;2905.01;2915.58;2926.93;2941.36;2953.31;2966.46;2977.29;2989.08;3001.65;3014.43;3025.67;3040.00;3054.92;3067.36;3080.67;3096.38;3109.09;3119.89;3132.68;3142.83;3158.34;3168.50;3178.66;3192.51;3205.63;3222.85;3236.10;3249.67;3261.08;3273.67;3288.40;3298.72;3314.07;3330.14;3347.50;3358.01;3375.81;3387.72;3398.63;3414.29;3424.47;3438.09;3449.89;3464.19;3478.57;3490.00;3507.35;3521.23;3538.35;3552.72;3563.30;3574.93;3590.53;3600.73;3611.94;3625.31;3635.94;3650.27;3660.46;3678.50;3690.99;3703.62;3713.99;3724.64;3737.81;3750.96;3762.71;3776.02;3787.73;3802.42;3813.75;3824.54;3838.02;3848.37;3860.14;3872.00;3886.22;3901.31;3913.14;3923.60;3935.15;3945.23;3959.83;3972.33;3983.26;3998.22;4010.43;4022.02;4034.34;4044.47;4057.24;4068.20;4080.48;4091.28;4102.20;4112.89;4123.01;4135.09;4150.31;4170.15;4187.13;4198.35;4212.39;4226.73;4244.76;4254.87;4265.04;4277.56;4290.11;4302.38;4315.09;4327.05;4341.11;4356.39;4366.66;4377.93;4392.52;4406.19;4418.55", );
 echo json_encode($arr);
}else{
// $serial1=array("start" => 42.33,"end" => 301.6,"total" => 177.52);
//  $serial2=array("start" => 429.64,"end" => 590.2,"total" => 160.56);
//  $serial=array($serial1,$serial2);
//  $arr = array(
//  	'videoName' => "TEST11",
//  	'videoURL' => "http://segment.livehls.kksmg.com/m3u8/216_1404670365.m3u8",
//  	'duration' => 4429.45,
//  	'totalBytes' => 41000000,
//  	'epg' => $serial,
//  	'kft' => "0;10.10;20.34;31.63;42.33;53.40;65.94;80.14;91.53;105.36;119.85;130.05;140.14;150.78;161.87;172.49;184.09;198.62;212.66;222.77;232.94;248.23;259.03;270.66;285.73;297.01;310.97;328.46;339.67;354.15;367.87;381.18;391.35;402.87;416.33;429.82;441.97;453.22;464.42;478.19;488.37;499.36;512.45;523.57;535.21;549.33;564.09;580.25;591.19;603.11;615.78;626.83;638.62;651.46;661.67;676.59;687.78;697.87;711.54;722.51;738.17;753.56;766.07;783.67;793.86;809.14;821.16;835.48;847.53;864.87;876.36;888.20;900.18;914.62;924.74;938.90;956.43;974.02;992.07;1005.77;1015.99;1032.77;1044.00;1055.85;1068.21;1079.05;1092.34;1103.99;1115.18;1126.59;1139.19;1152.39;1167.81;1178.00;1189.20;1201.50;1211.63;1225.20;1236.80;1252.39;1266.45;1280.52;1295.22;1307.20;1323.53;1335.83;1348.16;1364.34;1375.38;1385.58;1396.79;1411.80;1427.44;1438.11;1453.24;1467.11;1477.23;1487.39;1498.06;1511.99;1524.06;1536.82;1551.51;1562.96;1573.87;1587.13;1601.26;1618.94;1634.12;1645.93;1659.21;1671.37;1681.44;1694.11;1707.49;1726.66;1738.00;1748.99;1761.72;1776.56;1789.10;1799.25;1814.01;1824.45;1839.46;1853.07;1864.31;1875.51;1885.76;1897.30;1907.79;1918.55;1931.44;1943.26;1953.97;1964.67;1977.79;1988.92;2002.22;2013.93;2027.63;2044.41;2055.12;2065.20;2076.60;2087.14;2098.52;2117.10;2129.80;2140.59;2158.39;2168.78;2181.26;2193.38;2205.08;2216.08;2228.88;2241.68;2255.51;2268.51;2279.87;2292.97;2303.15;2313.69;2324.27;2334.85;2349.33;2359.46;2375.82;2386.91;2397.71;2409.54;2419.72;2432.99;2443.79;2456.18;2471.87;2481.98;2492.79;2504.06;2514.46;2527.42;2537.61;2553.57;2563.65;2574.49;2585.27;2597.05;2607.94;2618.80;2632.30;2647.27;2666.35;2676.58;2693.55;2704.81;2715.21;2730.73;2744.39;2756.05;2766.60;2778.94;2791.47;2811.35;2822.81;2837.13;2849.78;2860.03;2872.22;2882.29;2893.17;2905.01;2915.58;2926.93;2941.36;2953.31;2966.46;2977.29;2989.08;3001.65;3014.43;3025.67;3040.00;3054.92;3067.36;3080.67;3096.38;3109.09;3119.89;3132.68;3142.83;3158.34;3168.50;3178.66;3192.51;3205.63;3222.85;3236.10;3249.67;3261.08;3273.67;3288.40;3298.72;3314.07;3330.14;3347.50;3358.01;3375.81;3387.72;3398.63;3414.29;3424.47;3438.09;3449.89;3464.19;3478.57;3490.00;3507.35;3521.23;3538.35;3552.72;3563.30;3574.93;3590.53;3600.73;3611.94;3625.31;3635.94;3650.27;3660.46;3678.50;3690.99;3703.62;3713.99;3724.64;3737.81;3750.96;3762.71;3776.02;3787.73;3802.42;3813.75;3824.54;3838.02;3848.37;3860.14;3872.00;3886.22;3901.31;3913.14;3923.60;3935.15;3945.23;3959.83;3972.33;3983.26;3998.22;4010.43;4022.02;4034.34;4044.47;4057.24;4068.20;4080.48;4091.28;4102.20;4112.89;4123.01;4135.09;4150.31;4170.15;4187.13;4198.35;4212.39;4226.73;4244.76;4254.87;4265.04;4277.56;4290.11;4302.38;4315.09;4327.05;4341.11;4356.39;4366.66;4377.93;4392.52;4406.19;4418.55", );
//  echo json_encode($arr);
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
}




?>