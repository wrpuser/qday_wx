<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php  echo $reply['title'];?></title>
	<meta http-equiv="refresh" content="<?php  echo $reply['homepictime'];?>;url=<?php  echo $this->createMobileUrl('index', array('rid' => $rid))?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=yes;" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <meta content="email=no" name="format-detection" />
</head>
<style>
    body{background:<?php  echo $reply['bgcolor'];?>;color:<?php  echo $reply['textcolor'];?>;}
	img{max-width:100%!important;}
    body,div{margin:0; padding:0;}
</style>
<body>
<div style="position:absolute; width:100%; height:100%; z-index:-1"><img style="position:fixed;" src="<?php  echo toimage($reply['homepic'])?>" width="100%" height="100%" /></div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('jssdkhide', TEMPLATE_INCLUDEPATH)) : (include template('jssdkhide', TEMPLATE_INCLUDEPATH));?>
</body>
</html>