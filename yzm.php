<?php

	 header('Content-type:image/png');
	// 图片大小
	$x_size = 200;
	$y_size = 60;
	// 创建一个图片资源
	$im =imagecreate($x_size,$y_size);
	// 分配图片颜色
	$backgournd = imagecolorallocate($im, 200, 200, 200);
	// 输入图片的文字
	$char = "abcdefghijklmnopqrstuvwxyz0123456789";

	 $code = '';
	 // 分开字体
	$distance = 40;
	// // 长度
	$len = strlen($char)-1;
	// 随机取出4个字符
	for($i=1; $i<=4; $i++){
	$rand_num = rand(0,$len);
	// 定义文字颜色
	$color = imagecolorallocate($im, 0,0,0);
	// 加载字体样式
	$fontfile = "arial.ttf";
	$angle = $distance*$i;
	// 水平画一条字符串
	imagestring($im, 5, 10, 10, $code, $color);
	// 用 TrueType 字体向图像写入文本
	imagettftext($im,32,0,$angle,50,$color,$fontfile,$char[$rand_num]);
	// imagepsslantfont($code,22.5);
	 }
	//添加干扰线
	$line_num = 6;
	 // 随机干扰线的颜色
	 while($line_num--){
	 	$x1 = rand(10,166);
	 	$y1 = rand(10,208);
	    $x2 = rand(30,160);
	 	$y2 = rand(10,230);
	 	$line_background = imagecolorallocate($im, rand(10,100),rand(10,220), rand(100,250));
	 	imageline($im,$x1,$y1,$x2,$y2,$line_background);}

	$loog = 500;
	while($loog--){
		$pot_background = imagecolorallocate($im,rand(0,100),rand(100,200),rand(100,250));
		imagesetpixel($im, rand(20,200), rand(10,180), $pot_background);
	}      
	 imagepng($im);

 ?>