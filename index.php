<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="skeleton.css">
<style>
body {background-color:#1c1b22;}
img {width:100%;}
.text {position:absolute;top:0;left:0;margin:48px;font-size:96px;color:#fff;text-shadow:1px 1px 1px #000;}
.sub-text {font-size:48px;}
.icon {position:absolute;bottom:0;width:100%;text-align:center;}
.icon img {width:100px;height:100px;border:6px dashed #666;}
p {line-height:1em;}
</style>
</head>
<body>
<div class="container">
  <img src="1.jpg">
  <div class="text">
  	<?php date_default_timezone_set("Asia/Shanghai"); ?>
    <p><?php echo date("H:i",time()); ?></p>
    <p class="sub-text"><?php echo date("m月d日",time());echo " ";$week = date("w",time());if ($week == 0){echo "星期日";}if ($week == 1){echo "星期一";}if ($week == 2){echo "星期二";}if ($week == 3){echo "星期三";}if ($week == 4){echo "星期四";}if ($week == 5){echo "星期五";}if ($week == 6){echo "星期六";} ?></p>
    <p class="sub-text">welcome to juncy</p>
  </div>
  <div class="icon">
  	<a href="http://juncy.cn/bbs/"><img src="5.jpg"></a>
  	<a href="http://baidu.com"><img src="2.jpg"></a>
  	<a href="http://search.bilibili.com"><img src="3.jpg"></a>
  	<a href="http://www.kugou.com/yy/html/search.html#searchType=song&searchKeyWord=fff"><img src="4.jpg"></a>
  </div>
</div>
</body>
</html>
