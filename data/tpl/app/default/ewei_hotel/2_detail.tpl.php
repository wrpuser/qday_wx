<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>酒店详情</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-title" content="酒店预定"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta content="telephone=no" name="format-detection"/>
    <link href="<?php  echo $this->_css_url?>css.css" rel="stylesheet"/>
    <script language='javascript' src='<?php  echo $this->_script_url?>jquery.js'></script>
    <script language='javascript' src='<?php  echo $this->_script_url?>common.js'></script>
    <script language='javascript' src='<?php  echo $this->_script_url?>photoswipe/simple-inheritance.min.js'></script>
    <script language='javascript' src='<?php  echo $this->_script_url?>photoswipe/photoswipe-1.0.11.min.js'></script>
    <link href="<?php  echo $this->_script_url?>photoswipe/photoswipe.css" rel="stylesheet" />
    <!--<script type="application/x-javascript">addEventListener('DOMContentLoaded', function () {-->
    <!--setTimeout(function () {-->
    <!--scrollTo(0, 1);-->
    <!--}, 0);-->
    <!--}, false);</script>-->
    <style type="text/css">.slide-back:active {
        opacity: 0.7;
    }
    .slide-back {
        position: absolute;
        left: 0;
        top: 0;
        width: 68px;
        height: 48px;
        background-color: #15a4d5;
        z-index: 999;
    }
    .slide-back:before {
        position: absolute;
        content: "";
        left: 25px;
        top: 16px;
        width: 12px;
        height: 20px;
        background: url(../addons/ewei_hotel/template/style/css/comm_bg.png) no-repeat -100px -105px;
        background-size: 242px 260px;
    }
    .slide-back em {
        display: none;
    }
    /*modify by pp 0926*/
    .slide-view-page {
        background: #fff;
    }
    .slide-head {
        background-color: #1491c5;
        height: 48px;
        line-height: 48px;
    }
    .slide-cont {
        padding: 5px 0px 40px;
    }
    .cui-slide-list {
        background-color: #fff;
    }
    .slide-title {
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        position: absolute;
        top: 0;
        width: 100%;
        text-align: center;
    }
    .cui-slide-bottom {
        background-color: #31a9e9;
        height: 30px;
        line-height: 30px;
    }
    .canbook {
        -webkit-appearance: none;
        border-radius: 0px;
    }
    .nobook {
        width: 50px;
        height: 25px;
        background: #f2f2f2;
        color: #999999;
        -webkit-appearance: none;
        border-radius: 0px;
    }
    #hotelImgList {
        height: 100%;
    }
    .topic-list dd {
        text-align: center;
    }
    body #room .ui-grid-b .oneline {
        width: auto !important;
    }
    .ui-btn-up-c {
        border: 1px solid #cecece;
        text-shadow: none;
        font-weight: normal;
        margin: 0px;
        margin-top: 10px;
    }
    .main {
        clear: both;
    }
    #menu {
        width: 100%;
        height: 45px;
        line-height: 45px;
        text-align: center;
        background: #f2f2f2;
        color: #afafaf;
        margin: 0px !important;
    }
    #menu li.hover {
        background: #fff;
        color: #ec4e00;
    }
    #content ul {
        display: none;
    }
    #room .ui-grid-b {
        border-bottom: 1px solid #F5F5F5;
        height: auto;
        margin: 5px 0;
        padding-bottom: 30px;
    }
    #room .ui-grid-b .ui-block-a {
        width: 24%;
        margin: 5px 0 0 10px;
    }
    #room .ui-grid-b .ui-block-b {
        width: 45%;
        margin: 5px 0;
    }
    #room .ui-grid-b .ui-block-c {
        width: 25%;
        text-align: right;
        margin: 5px 0;
        position: relative;
    }
    .right {
        float: right;
        padding-right: 40px;
    }
    .info .ui-grid-a .ui-block-a {
        width: 70%;
    }
    .info .ui-grid-a .ui-block-b {
        width: 30%;
    }
    .ui-grid-d .ui-block-a {
        width: 24%;
    }
    .ui-grid-d .ui-block-b {
        width: 22%;
    }
    .ui-grid-d .ui-block-c {
        width: 8%;
    }
    .ui-grid-d .ui-block-d {
        width: 24%;
    }
    .ui-grid-d .ui-block-e {
        width: 22%;
    }
    .status {
        width: 55px;
        height: 8px;
        background: #ebf4fa;
        margin-top: 5px;
    }
    .status div {
        background-color: #2a97e3;
        width: 95%;
        height: 100%;
    }
    #hotelpic img, #room .ui-block-a img {
        background: rgba(0, 0, 0, 0.5) url(../addons/ewei_hotel/template/style/css/loading2.gif) 50% 50% no-repeat;
    }
    #hotelpic .wrap, #gallery .wrap {
        margin-left: 4px;
        white-space: nowrap;
        -webkit-transition: all 1s;
        -o-transition: all 1s;
        -moz-transition: all 1s;
        transition: all 1s;
    }
    #hotelpic {
        width: 300px;
        height: 180px;
        margin: 0 auto;
        overflow: hidden;
    }
    #gallery {
        width: 300px;
        height: 320px;
        margin: -160px 0 0 -150px;
        overflow: hidden;
        position: absolute;
        left: 50%;
        top: 45%;
    }
    #hotelpic .topic-list, #gallery .topic-list {
        font-size: 16px;
        display: inline-block;
        width: 300px;
        height: 180px;
        background: #444 50% 50% no-repeat;
        position: relative;
        margin: 0 0 0 -4px;
    }
    #hotelpic .topic-list dd {
        position: absolute;
        margin: 0;
        width: 100%;
        height: 100%;
        max-width: 300px;
    }
    #hotelpic .topic-list dt {
        color: #fff;
        text-align: center;
        z-index: 100;
        width: 90px;
        height: 30px;
        line-height: 30px;
        background: rgba(0, 0, 0, 0.5);
        float: right;
        position: relative;
        top: 140px;
    }
    #hotelpic .topic-list img {
        width: 100%;
        min-height: 185px;
        max-width: 300px;
    }
    #gallery .topic-list {
        height: 320px;
    }
    #gallery .topic-list dd {
        margin: 0;
        position: absolute;
    }
    #gallery .topic-list dt {
        bottom: 0;
        position: absolute;
        width: 100%;
        line-height: 20px;
        height: 20px;
        color: #fff;
    }
    #gallery .des {
        float: left;
        padding-left: 12px;
    }
    #gallery .int {
        float: right;
        padding-right: 12px;
    }
    #gallery strong {
        font-weight: normal;
    }
    #gallery .topic-list img {
        width: 300px;
        height: 300px;
    }
    #content .hide {
        display: none;
    }
    #content .block {
        display: block;
    }
    #content ul div.text_ct:hover {
        background: #f2f2f2;
    }
    #address, #checkinout {
        height: 45px;
        line-height: 45px;
        background: #fff;
        padding-left: 10px;
        overflow: hidden;
        font-size: 15px;
        font-weight: bold;
    }
    #checkinout {
        border-top: 1px solid #e8ebef;
        margin-bottom: 10px;
        padding-left: 0px;
    }
    #address:active, #checkinout:active {
        background: #f2f2f2;
    }
    #mask {
        z-index: 999;
        position: absolute;
        left: 0;
        background-color: #fff;
        width: 100%;
        visibility: hidden;
    }
    #mask .single {
        position: absolute;
        height: 320px;
        left: 50%;
        top: 110px;
        margin-left: -150px;
        overflow: hidden;
        text-align: center;
    }
    #mask .single img {
        width: 300px;
        background: #7D7A74 url(../addons/ewei_hotel/template/style/css/loading2.gif) 50% 50% no-repeat;
        vertical-align: bottom;
        margin: 0 auto;
        display: block;
    }
    #mask p {
        text-align: center;
        color: #fff;
        line-height: 30px;
        width: 300px;
        margin: 20px auto 0;
        background: #31a9e9;
    }
    #mask .returnurl {
        position: absolute;
        z-index: 10;
    }
    header {
        text-align: center;
    }
    header h1 {
        text-align: center !important;
        margin-left: auto !important;
        margin-right: auto !important;
    }
    .time {
        height: 45px;
        line-height: 45px;
        background: #fff;
        margin-bottom: 10px;
        overflow: hidden;
        border-top: 1px solid #F5F5F5;
        text-align: center;
    }
    body .ico_time {
        margin: 10px;
    }
    .time .ui-block-a:active, .time .ui-block-b:active {
        background: #f2f2f2;
    }
    .hotbluetip {
        border-top: 30px solid #31A9E9;
        border-right: 10px solid transparent;
        height: 0;
        width: 100px;
        color: #fff;
        text-align: center;
        position: relative;
        margin: 10px 0 10px -15px;
    }
    .hotbluetip span {
        position: absolute;
        bottom: 15px;
        right: -5px;
        height: 10px;
        width: 100px;
    }
    .iconlist p {
        margin-bottom: 7px;
    }
    .roomlist {
        position: relative;
        overflow: hidden;
    }
    .room_btn {
        padding: 5px 0;
        position: absolute;
        width: 200px;
        right: 0;
    }
    .roomdetailinfo {
        background-color: #fff;
        color: #666666;
        font-size: 14px;
        clear: both;
        margin-bottom: 10px;
        position: relative;
    }
    .roomdetailinfo li {
        line-height: 25px;
    }
    .roomdetailinfo p {
        margin-top: 10px;
    }
    .roomdetailinfo .hotel_fan, .roomdetailinfo .hotel_li, .roomdetailinfo .hotel_cu, .roomdetailinfo .hotel_quan {
        margin: 3px 5px 0 0;
    }
    .infotop {
        width: 100%;
        height: 208px;
        background: #eef2f3;
        position: relative;
    }
    .infotop2 {
        width: 100%;
        height: 50px;
        background-color: #1491c5;
        position: relative;
        overflow: hidden;
    }
    .toptxt {
        text-overflow: ellipsis;
        white-space: nowrap;
        padding-top: 15px;
        text-indent: 15px;
        font-size: 15px;
        font-weight: bold;
        color: #fff;
        position: absolute;
        left: 50%;
        top: 0px;
        margin-left: -150px;
        width: 220px;
        overflow: hidden;
        z-index: 2;
    }
    body .imgempty {
        margin: 0px;
        left: 0px;
        width: auto;
        margin-right: 30px;
        position: static;
    }
    .imgclose {
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        position: absolute;
        right: 15px;
        z-index: 2;
    }
    .imgclose em {
        display: inline-block;
        background: rgba(0, 0, 0, 0.5);
        width: 25px;
        height: 25px;
        line-height: 23px;
        border-radius: 50px;
    }
    .infocontent {
        padding: 10px 15px;
    }
    .infobottom {
        width: 100%;
        height: 42px;
        background-color: #F0F0F0;
    }
    .infobottom .ui-block-a {
        line-height: 42px;
        text-indent: 15px;
    }
    .infobottom .ui-block-b {
        text-align: right;
    }
    .btn-order {
        background: #ff7800;
        color: #fff;
        padding:0 6px;
        height: 42px;
        font-size: 14px;
        border: none;
        -webkit-appearance: none;
        border-radius: 0px;
    }
    .icomobile {
        width: 60px;
        height: 15px;
        line-height: 15px;
        padding: 1px;
        text-align: center;
        font-family: "STHEITI";
        font-size: 12px;
        font-weight: bold;
        background-color: #FB4C2E;
        color: #ffffff;
        display: inline-block;
    }
    body .roomdetail-view-page {
        background: rgba(0, 0, 0, 0.3);
    }
    .roomdetail-box {
        padding: 10px 0px;
        margin: 0px 10px;
    }
    .slide {
        width: 300px;
        height: 100%;
        margin: auto;
    }
    .roomdetail-box {
        padding-top: 60px;
    }
    .hoteltitle {
        width: 58%;
        height: 60px;
        overflow: hidden;
    }
    .hm {
        text-align: center;
    }
    header h1 {
        position: relative !important;
    }
    .hot_ico {
        width: 300%;
        position: absolute;
        right: 0;
    }
    .hot_ico .fantxt:last-child {
        margin-right: 0;
    }</style>
</head>
<body style='padding-bottom:40px'>
<div id="roomdetail"></div>
<div id="ctripPage">
    <section id="ydwxcsH"></section>
    <header>
        <h1 class="hoteltitle"><?php  echo $reply['title'];?></h1>
        <div class="lefthead" onClick="location.href='javascript:history.back();'">
            <div class="header_return"></div>
        </div>
        <div class="righthead">
            <a class="header_home" href="<?php  echo $this->createMobileUrl('index', array('hid' => $hid))?>">&nbsp;</a>
            <a class="header_tel __hreftel__" href="tel:<?php  echo $tel;?>"></a>
        </div>
    </header>
    <menu style="padding:10px">
        <div id="hotelpic">
            <div class="wrap">
                <dl class="topic-list">
                    <dt>共<span class="bold span1"><?php  echo $thumbcount;?></span>&nbsp;张</dt>
                    <dd index="0" des="<?php  echo $reply['title'];?>" alt="<?php  echo $reply['title'];?>">
                        <a href="<?php  echo tomedia($reply['thumb'])?>" rel="external">
                            <img src="<?php  echo tomedia($reply['thumb'])?>" id="hotelImgList" index="0" des="<?php  echo $reply['title'];?>" alt="<?php  echo $reply['title'];?>" />
                        </a>
                        <?php  if(is_array($thumbs)) { foreach($thumbs as $thumb) { ?>
                        <a href="<?php  echo tomedia($thumb)?>" rel="external">
                            <img id="hotelImgList" index="0" des="<?php  echo $reply['title'];?>" title="<?php  echo $reply['title'];?>" src="<?php  echo tomedia($thumb)?>" />
                        </a>
                        <?php  } } ?>
                    </dd>
                </dl>
            </div>
        </div>
        <script language="JavaScript">
            $(function(){
                $(".topic-list a").photoSwipe();
            });
        </script>
        <a  href="http://api.map.baidu.com/geocoder?address=<?php  echo $reply['address'];?>&output=html">
            <div id="address"><span class="ico_map"></span><?php  echo $reply['address'];?>
                <span class="icon_arrow" style="position:relative; right: 10px; top:15px;"></span>
            </div>
        </a>
        <div id="checkinout">
            <div id="selinTime" onClick="location.href='<?php  echo $this->createMobileUrl('date', array('hid' => $hid))?>'">
                <span class="ico_time"></span>入住&nbsp;<span id="CheckInDay"><?php  if(($search_array['bdate'] != '')) { ?><?php  echo $search_array['bdate'];?><?php  } else { ?>--<?php  } ?></span>
                <span class="span2" id="CheckOutDay"><?php  if(($search_array['day'] != '')) { ?>住<?php  echo $search_array['day'];?>晚<?php  } else { ?>--<?php  } ?></span><span
                    class="icon_arrow" style="position:relative; right:10px; top:15px;"></span>
            </div>
        </div>
        <select id="CheckInDaysDom" style="display:none"></select>
        <div class="conlist" style="width:100%; padding:0px; display:inline-block;">
            <ul class="ui-grid-b" id="menu">
                <li class="ui-block-a tab-click hover" id="liOrder">房型预订</li>
                <!--<li class="ui-block-b" id="liDp">客户点评</li>-->
                <li class="ui-block-c tab-click" id="liMore">酒店详情</li>
            </ul>
            <div id="content" style="padding:0px;">
                <ul class="block" id="room">
                    <div id="d_list"></div>
                    <div class="text_ct hide block" id="d_page" style="display: none;">
                        <a href="javascript:;" id="d_more" class="ui-link" style="height:45px; line-height:45px;">点击加载更多房型</a>
                    </div>
                </ul>
                <ul id="detail">
                    <li>
                        <div class="conlist">
                            <div class="bold size16 hm" data-hoteldatatype="1"><?php  echo $reply['title'];?></div>
                            <?php  if(!empty($device)) { ?>
                            <div class="hotbluetip"><span>酒店设施</span></div>
                            <p><span class="bold size15">服务项目</span><br><span class="span2"><?php  echo $device;?></span></p>
                            <?php  } ?>

                            <?php  if(!empty($reply['content'])) { ?>
                            <div class="hotbluetip"><span>订房说明</span></div>
                            <p style="word-wrap:break-word;"><?php  echo $reply['content'];?></p>
                            <?php  } ?>

                            <?php  if(!empty($reply['description'])) { ?>
                            <div class="hotbluetip"><span>酒店介绍</span></div>
                            <p style="word-wrap:break-word;"><?php  echo $reply['description'];?></p>
                            <?php  } ?>

                            <?php  if(!empty($reply['traffic'])) { ?>
                            <div class="hotbluetip"><span>位置交通</span></div>
                            <p style="word-wrap:break-word;"><?php  echo $reply['traffic'];?></p>
                            <?php  } ?>

                            <?php  if(!empty($reply['sales'])) { ?>
                            <div class="hotbluetip"><span>促销信息</span></div>
                            <p style="word-wrap:break-word;"><?php  echo $reply['sales'];?></p>
                            <?php  } ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="waring"></div>
    </menu>
</div>
<div id="calendar" class="ui-overlay-shadow ui-corner-all ui-body-c pop none"></div>
<script>
    $(function(){
        $(".tab-click").click(function () {
            $(".tab-click").removeClass("hover");
            $(this).addClass("hover");
            if ($(this).attr("id") == "liOrder") {
                $("#room").show();
                $("#detail").hide();
            } else if ($(this).attr("id") == "liMore") {
                $("#room").hide();
                $("#detail").show();
            }
        });
    });
    function clear_device() {
        $("#waring").empty();
        $('html,body').animate({scrollTop: '300px'}, 800);
    }
    function show_room_device(hid, id, has, price, total_price) {
        show_loading();
        $.post("<?php  echo $this->createMobileUrl('roomdevice')?>",{hid:hid,id:id,has:has,price:price,total_price:total_price},function(data){
            hide_loading();
            data  =eval("(" + data +")");
            if(data.result==1){
                $("#waring").html(data.code);
                $('html,body').animate({scrollTop: '0px'}, 200);
            }
        });
    }
</script>

<input type="hidden" id="page_id" value="212094"/>
<section id="ydwxcsF"></section>
<div id="footer"></div>

<script type="text/javascript">
    $(function(){
        var next_page  = 0;
        function get_list(page) {
            show_loading();
            $.post("<?php  echo $this->createMobileUrl('detail')?>",{ac:'getDate',hid:<?php  echo $hid;?>,page:page},function(data){
                hide_loading();
                data  =eval("(" + data +")");
                if(data.result == 1){
                    $("#top-title").html(data.title);
                    $("#d_list").append(data.code);
                    if (data.isshow == 1) {
                        next_page = data.nindex;
                        $("#d_page").show();
                    } else {
                        $("#d_page").hide();
                    }
                }else{
                }
            });
        }
        get_list(1);
        $("#d_more").click(function () {
            get_list(next_page);
        });
    });
</script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('hotelfooter', TEMPLATE_INCLUDEPATH)) : (include template('hotelfooter', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('hotel_msg', TEMPLATE_INCLUDEPATH)) : (include template('hotel_msg', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('share', TEMPLATE_INCLUDEPATH)) : (include template('share', TEMPLATE_INCLUDEPATH));?>
</body>
</html>