<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1,user-scalable=no,maximum-scale=1,initial-scale=1"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="format-detection" content="telephone=no"/>
<meta name="description" content=""/>
<title><?php  echo $reply['title'];?></title>
<script src="../addons/wdl_scratch/style/js/jquery.js" type="text/javascript" type="text/javascript"></script>
<script src="../addons/wdl_scratch/style/js/wScratchPad.js" type="text/javascript" type="text/javascript"></script>
<script src="../addons/wdl_scratch/style/js/alert.js" type="text/javascript" type="text/javascript"></script>
<style>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, textarea, p, blockquote, th, td {
	margin: 0;
	padding: 0;
	font: 14px/1.5 Microsoft YaHei, Helvitica, Verdana, Arial, san-serif;
}
.activity-lottery-winning{ background: url(../addons/wdl_scratch/style/image/activity-lottery-bg2.jpg) #2a8a00;overflow-x: hidden;}
.activity-lottery-end{ background: url(../addons/wdl_scratch/style/image/activity-lottery-bg2.jpg) #2a8a00;overflow-x: hidden;}
.activity-coupon-winning{ background-color:#8d0001;overflow-x: hidden;}
.activity-coupon-end{ background-color:#8d0001;overflow-x: hidden;}
.activity-scratch-card-winning{background: url(../addons/wdl_scratch/style/image/activity-scratch-card-bg.jpg) #944f20;overflow-x: hidden;}
.activity-scratch-card-end{background: url(../addons/wdl_scratch/style/image/activity-scratch-card-bg.jpg) #944f20;overflow-x: hidden;}
.activity-lottery-winning .main{
	background: url(../addons/wdl_scratch/style/image/activity-lottery-bg.png) no-repeat top center;
	background-size: 320px auto;
}
body{background: url(../addons/wdl_scratch/style/image/activity-scratch-card-bg.jpg) #944f20;}

#outer-cont {
	position: relative;
	width: 100%;
	top: 20px;
	margin-bottom: 30px;
}
#inner-cont {
	position: absolute;
	width: 100%;
	top: 70px;
}
#outer {
	height: 227px;
    margin: 0 auto;
    max-width: 227px;
    width: 227px;
}
#inner {
	cursor: pointer;
    height: 110px;
    margin: 0 auto;
    max-width: 90px;
    width: 90px;
}
#outer img, #inner img {
	display: block;
	margin: 0 auto;
}
.cover{
	width: 320px;
	max-width: 480px;
	margin: 0 auto;
	position: relative;
}
.cover img{
	width: 320px;
}
#scratchpad,#prize{
	position: absolute;
	width: 150px;
	height: 40px;
	top: 140px;
	left: 105px;
	text-align: center;
	font-size: 20px;
	line-height: 40px;
	color:#333;
}
.btn-cont{
	position: absolute;
	bottom: 3px;
	right: 3px;
	display: none;
}
.content {
	margin:0px 0 15px 0;
}
.banner {
	text-align:center;
}
.main img {
	max-width: 100%;
	border: 0 none;
}
.boxcontent {
	margin:15px 15px 0;
	border-radius: 5px;
	padding: 2px;
	background-color: #FEF8B2;
	-webkit-box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
	-o-box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
	box-shadow: 0 0 6px rgba(0, 0, 0, 0.5);
}
.boxyellow{
	background-color: #FEF8B2;
}
.boxwhite{
	background-color: #ffffff;
}
.box {
	border-radius: 5px;
	font-size:14px;
	border: 1px dashed rgba(0, 0, 0, 0.3);
}
.box .title-red {
	padding: 0 5px 0px 10px;
	background:url(../addons/wdl_scratch/style/image/title-bg-red.png) no-repeat 0 0;
	border-radius: 3px 3px 3px 0;
	color:#ffffff;
	height:22px;
	margin:-1px;
}
.box .title-orange {
	padding: 0 5px 0px 10px;
	background:url(../addons/wdl_scratch/style/image/title-bg-orange.png) no-repeat 0 0;
	border-radius: 3px 3px 3px 0;
	color:#ffffff;
	height:22px;
	margin:-1px;
}
.box .title-green {
	padding: 0 5px 0px 10px;
	background:url(../addons/wdl_scratch/style/image/title-bg-green.png) no-repeat 0 0;
	border-radius: 3px 3px 3px 0;
	color:#ffffff;
	height:22px;
	margin:-1px;
}
.box .title-brown {
	padding: 0 5px 0px 10px;
	background:url(../addons/wdl_scratch/style/image/title-bg-brown.png) no-repeat 0 0;
	border-radius: 3px 3px 3px 0;
	color:#ffffff;
	height:22px;
	margin:-1px;
}
.box .Detail {
	padding: 15px;
}
.Detail img {
	height: auto;
	max-width: 100%;
	border: 0 none;
}
.red {
	color:red
}
.green {
	color:green
}
.px {
	margin: 0.5em 0;
	position: relative;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) inset;
	background-color: #FFFFFF;
	border-radius: 0.6em 0.6em 0.6em 0.6em;
	border: 1px solid rgba(0, 0, 0, 0.3);
	color: #333333;
	text-shadow: 0 1px 0 #FFFFFF;
	display: block;
	width: 100%; 
	padding:6px 10px;
	font-size: 18px;
	margin:10px 0 0 0;
	font-family:Arial, Helvetica, sans-serif;
	-webkit-appearance:none;
}
.px:hover {
	border: 1px solid #ff6501;
}
.px:focus {
	border: 1px solid #ff6501;
	box-shadow: 0 0 5px #ff6501;
}
.px[type="text"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
.px[type="password"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
.pxbtn {

	background: #ff6501;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffa201 ), to( #ff6501 ));
	background-image: -webkit-linear-gradient( #ffa201 , #ff6501 );
	background-image:    -moz-linear-gradient( #ffa201 , #ff6501 );
	background-image:     -ms-linear-gradient( #ffa201 , #ff6501 );
	background-image:      -o-linear-gradient( #ffa201 , #ff6501 );
	background-image:         linear-gradient( #ffa201 , #ff6501 );
	border: 1px solid #ff6501;
	border-bottom: 1px solid #d35605;
	color: #ffffff;
	font-weight: bold;
	text-shadow: 0 1px 0 #FFFFFF;
	border-radius: 0.6em 0.6em 0.6em 0.6em;
	display: block;
	width: 100%;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
	text-overflow: ellipsis;
	white-space: nowrap;
	cursor: pointer;
	text-align: center;
	font-weight: bold;
	text-shadow: 0 0 2px #BE4205;
	font-size: 18px;
	padding:10px;
	margin:10px 0 0 0;
}
.pxbtn:visited {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffa201 ), to( #ff6501 ));
	background-image: -webkit-linear-gradient( #ffa201 , #ff6501 );
	background-image:    -moz-linear-gradient( #ffa201 , #ff6501 );
	background-image:     -ms-linear-gradient( #ffa201 , #ff6501 );
	background-image:      -o-linear-gradient( #ffa201 , #ff6501 );
	background-image:         linear-gradient( #ffa201 , #ff6501 );
}
.pxbtn:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ff7f01 ), to( #ff6501 ));
	background-image: -webkit-linear-gradient( #ff7f01 , #ff6501 );
	background-image:    -moz-linear-gradient( #ff7f01 , #ff6501 );
	background-image:     -ms-linear-gradient( #ff7f01 , #ff6501 );
	background-image:      -o-linear-gradient( #ff7f01 , #ff6501 );
	background-image:         linear-gradient( #ff7f01 , #ff6501 );
}
.pxbtn:active {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ff6501 ), to( #ffa201 ));
	background-image: -webkit-linear-gradient( #ff6501 , #ffa201 );
	background-image:    -moz-linear-gradient( #ff6501 , #ffa201 );
	background-image:     -ms-linear-gradient( #ff6501 , #ffa201 );
	background-image:      -o-linear-gradient( #ff6501 , #ffa201 );
	background-image:         linear-gradient( #ff6501 , #ffa201 );
	border: 1px solid #ff6501;
	border-top: 1px solid #d35605;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) inset;
}
input::-moz-placeholder, textarea::-moz-placeholder { color: #999;}
.no{background:#a9a9a7;}
</style>
<script type="text/javascript">
function loading(canvas,options){   
  this.canvas = canvas;   
  if(options){   
    this.radius = options.radius||12;   
    this.circleLineWidth = options.circleLineWidth||4;   
    this.circleColor = options.circleColor||'lightgray';   
    this.moveArcColor = options.moveArcColor||'gray';   
  }else{   
    this.radius = 12;   
    this.circelLineWidth = 4;   
    this.circleColor = 'lightgray';   
    this.moveArcColor = 'gray';   
  }   
}   
loading.prototype = {   
  show:function (){   
    var canvas = this.canvas;   
    if(!canvas.getContext)return;   
    if(canvas.__loading)return;   
    canvas.__loading = this;   
    var ctx = canvas.getContext('2d');   
    var radius = this.radius;   
    var me = this;   
    var rotatorAngle = Math.PI*1.5;   
    var step = Math.PI/6;   
    canvas.loadingInterval = setInterval(function(){   
      ctx.clearRect(0,0,canvas.width,canvas.height);   
      var lineWidth = me.circleLineWidth;   
      var center = {x:canvas.width/2,y:canvas.height/2};   
      ctx.beginPath();   
      ctx.lineWidth = lineWidth;   
      ctx.strokeStyle = me.circleColor;   
      ctx.arc(center.x,center.y+20,radius,0,Math.PI*2);   
      ctx.closePath();   
      ctx.stroke();   
      //在圆圈上面画小圆   
      ctx.beginPath();   
      ctx.strokeStyle = me.moveArcColor;   
      ctx.arc(center.x,center.y+20,radius,rotatorAngle,rotatorAngle+Math.PI*.45);   
      ctx.stroke();   
      rotatorAngle+=step;   
    },100);   
  },   
  hide:function(){   
    var canvas = this.canvas;   
    canvas.__loading = false;   
    if(canvas.loadingInterval){   
      window.clearInterval(canvas.loadingInterval);   
    }   
    var ctx = canvas.getContext('2d');   
    if(ctx)ctx.clearRect(0,0,canvas.width,canvas.height);   
  }   
};   
</script>
<title>刮刮卡抽奖页</title>
</head>

<body data-role="page" data-aid="904">
<style type="text/css">
#more,#follow { 
	display:block;
	color:#FFF;
	font-size:16px;
	text-align:center;
	width: 200px;
	height:40px;
	margin: 5px auto;
	line-height:40px;
	text-decoration: none;
	text-shadow:0 -1px 1px rgba(0, 0, 0, .5);
	border-radius:5px;
	background-color:#25b025;
	background-image:-webkit-gradient(linear, left top, left bottom, from(#39d139), to(#25b025));
	background-image:-webkit-linear-gradient(top, #39d139, #25b025);
	background-image:linear-gradient(to bottom, #39d139, #25b025)
}
</style>
<div class="main">
<script type="text/javascript">
//var loadingObj = new loading(document.getElementById('loading'),{radius:20,circleLineWidth:8});   
//loadingObj.show();   
</script>
<div class="cover" id="cover">
	<img src="../addons/wdl_scratch/style/image/activity-scratch-card-bannerbg.png">
	<div id="prize"></div>
	<div id="scratchpad"></div>
	<a href="javascript:;" id="more"  target="_self" style="display: none">再来一次 (<span id="flood">5</span>)</a>
</div>
<div class="content">
	<div id="result" <?php  if(!(!empty($awardone)&&empty($fans['tel']))) { ?>style="display:none"<?php  } ?> class="boxcontent boxwhite">
		<div class="box">
			<div class="title-red"><span>恭喜你中奖了</span></div>
			<div class="Detail">
				<p>你中了：<span class="red" id="name"><?php  if(empty($awardone['name'])) { ?>感谢参与<?php  } else { ?><?php  echo $awardone['name'];?> - <?php  echo $awardone['description'];?><?php  } ?></span></p>
				<p style="display:none">兑奖<?php  echo $reply['sn_rename'];?>：<span class="red" id="sncode" ><?php  echo $awardone['award_sn'];?></span></p>
				<p class="red">本次兑奖码已经关联你的微信号，你可以发送【<?php  $tempArr=explode(',',$reply['keyword']);echo $tempArr['0'];?>】进行查询</p>
				<div id="settel">
					<p><input type="hidden" id="drawid" value="" /></p>
					<p><input name=""  class="px" id="tel" value="<?php  echo $_W['fans']['mobile'];?>" type="text" placeholder="请输入您的<?php  echo $reply['tel_rename'];?>"></p>
					<p><input class="pxbtn" name="提 交"  id="save-btn" type="button" value="用户提交"></p>
				</div>
			</div>
		</div>
	</div>
	<?php  if(!$followed && $reply['follow']==1 && !empty($reply['share_url'])) { ?>
        <a id='follow' href="<?php  echo $reply['share_url'];?>"  target="_self" style="display:block;width:90%;" >我也想玩刮刮卡</a>
        <?php  } ?>
	<div class="boxcontent boxwhite">
		<div class="box">
			<div class="title-brown"><span>奖项设置：</span></div>
			<div class="Detail">
			<?php  echo $awardstr;?>
			</div>
		</div>
	</div>
	<div class="boxcontent boxwhite">
		<div class="box">
			<div class="title-brown">活动说明：</div>
				<div class="Detail">
					<p class="red" ><?php  echo $detail;?></p>
					<p class="green" >活动时间: <br><?php  echo date('Y-m-d H:i',$reply['starttime']);?> 至 <?php  echo date('Y-m-d H:i',$reply['endtime']);?></p>
					<p><?php  echo $reply['description'];?></p>
				</div>
			</div>
		</div>
	</div>
	<?php  if(!empty($award)) { ?>
	<div  class="boxcontent boxwhite">
		<div class="box">
			<div class="title-red"><span>恭喜你中奖了</span></div>
			<div class="Detail">
				<?php  if(is_array($award)) { foreach($award as $row) { ?>
				<p>你中了：<span class="red" id="name"><?php  if(empty($row['name'])) { ?>感谢参与<?php  } else { ?><?php  echo $row['name'];?> - <?php  echo $row['description'];?> <?php  } ?></span></p>
				<p>兑奖<?php  echo $reply['sn_rename'];?>：<span class="red" id="sncode" ><?php  echo $row['award_sn'];?></span></p>
				<?php  } } ?>
				<p class="red">本次兑奖码已经关联你的微信号，你可以发送【<?php  echo $tempArr['0'];?>】进行查询<br/>
						<?php  echo $reply['ticket_information'];?></p>
			
			</div>
		</div>
	</div>	
	<?php  } ?>
</div>
</body>
<script type="text/javascript">
window.sncode = "null";
window.prize = "感谢参与";
var num = 0;
var goon = true;
var count = 0;
var credit = 0;
var bonus = 0;
var flood = 3;

$(function(){
	var useragent = window.navigator.userAgent.toLowerCase();
	var statu="enable";
	if(bonus) {
		if(credit < bonus) {
			$('#prize').hide();
			alert('您的积分不足');
			return;
		}
	}
<?php  if($running==false) { ?>
$("#scratchpad").addClass("no");
$("#scratchpad").mousedown(function() {
	alert('<?php  echo $msg;?>');
});
<?php  } else { ?>
$("#scratchpad").wScratchPad({
	width : 150,
	height : 40,
	color : "#a9a9a7",
	scratchMove : function(){
		num++;
		if(num == 2){
			$.ajax({
				url: '<?php  echo $this->createMobileUrl('getaward', array('id' => $id,'openid'=>$openid))?>',dataType: 'json',type: 'post',
				success: function(data) {
			 
					goon = false;
					count ++;
					credit -= bonus;
					$("#credit").text(credit);
					if($("#count").length>0){
						$("#count").text(parseInt($("#count").text())+1);
					}
					if($("#totalcount").length>0){
						$("#totalcount").text(parseInt($("#totalcount").text())+1)
					}					
					if(data.success) {
						$("#drawid").attr("value", data.drawid)
						$("#sncode").text(data.sn);
						$("#prize").text(data.name);
						$("#name").text(data.name + " - " + data.award);
						$("#result").slideToggle(500);
					} else {
						$("#prize").text(data.name);
						$('#more').show();
						setTimeout('time_flood()', 1000);
					}
				}
			});
		}

		if (useragent.indexOf("android 4") > 0) {
			if ($("#scratchpad").css("color").indexOf("51") > 0) {
				$("#scratchpad").css("color", "rgb(50,50,50)");
			} else if($("#scratchpad").css("color").indexOf("50") > 0) {
				$("#scratchpad").css("color", "rgb(51,51,51)");
			}
		}
	}
});
<?php  } ?>
//loadingObj.hide();
	$(".loading-mask").remove();
});

function time_flood() {
	flood --;
	$('#flood').text(flood);
	if(flood > 0) {
		setTimeout('time_flood()', 1000);
	} else {
      
		$('#more').attr('href', '<?php  echo $this->createMobileUrl('index', array('id' => $id,'timestamp'=>time()))?>');
	}
}

$("#save-btn").bind("click", function() {
	var btn = $(this);
	var tel = $("#tel").val();
	if (tel == '') {
		alert("请输入手机号码");
		return
	}

	var submitData = {
		code: $("#sncode").text(),
		tel: tel,
		ac: "settel"
	};
	$.post('<?php  echo $this->createMobileUrl('settel', array('id' => $id,'openid'=>$openid))?>', submitData, function(data) {
		if (data.success == true) {
			alert(data.msg);
			$("#result").slideUp(500);
		} else {
			alert(data.msg);
		}
		$('#more').show();
		setTimeout('time_flood()', 1000);			
		},"json")
});


<?php  
            $jssdk = new JSSDK();
            $signPackage = $jssdk->GetSignPackage();
        ?>
             wx.config({
                debug:false,
                appId: "<?php  echo $_W['account']['appid_share'];?>",
                timestamp: <?php  echo $signPackage["timestamp"];?>,
                nonceStr: '<?php  echo $signPackage["nonceStr"];?>',
                signature: '<?php  echo $signPackage["signature"];?>',
                jsApiList: [
                  'onMenuShareTimeline','onMenuShareAppMessage','onMenuShareWeibo'
                ]
              });
               var shareMeta = {
	 imgUrl:"<?php  echo $shareimg;?>",
	 link :  "<?php  echo $sharelink;?>",
	 desc : "<?php  echo $sharedesc;?>",
	 title : "<?php  echo $sharetitle;?>"
               };
               wx.ready(function(){
                  wx.onMenuShareTimeline(shareMeta);
                  wx.onMenuShareAppMessage(shareMeta);
                  wx.onMenuShareWeibo(shareMeta);
             });
       
</script>
<footer style="text-align:center; color:#ffd800;margin:20px"><a>&copy;<?php  if(empty($reply['copyright'])) { ?><?php  echo $_W['account']['name'];?><?php  } else { ?><?php  echo $reply['copyright'];?><?php  } ?></a></footer>
</html>	 		