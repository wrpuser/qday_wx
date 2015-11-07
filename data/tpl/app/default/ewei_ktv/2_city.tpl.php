<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="description" content="ktv预订"/>
<meta name="keywords" content="ktv预订,ktv查询,宾馆住宿预订,网上订ktv,手机订ktv"/>
<title>选择城市</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="apple-mobile-web-app-title" content="ktv预订"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta content="telephone=no" name="format-detection"/>

<link href="<?php  echo $this->_css_url?>css.css" rel="stylesheet"/>
<link type="text/css" rel="stylesheet" href="<?php  echo $this->_css_url?>jquery-ui-1.10.3.css">
<script language='javascript' src='<?php  echo $this->_script_url?>jquery.js'></script>
<script language='javascript' src='<?php  echo $this->_script_url?>jquery-ui-1.10.3.min.js'></script>
<script language='javascript' src='<?php  echo $this->_script_url?>common.js'></script>

<style type="text/css">
.wapapp_calender_lable {
    font-size: 14px !important;
}

.choose {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 560px;
    background-color: #fff;
    z-index: 1002;
    overflow: none;
}

#menu {
    display: inline-block;
    width: 30%;
    float: left;
    text-align: center;
    color: #afafaf;
}

#menu0 li {
    height: 45px;
    line-height: 45px;
    border-bottom: 1px solid #f2f2f2;
    background: #fff;
    color: #666666;
}

#menu li.hover {
    background: #f2f2f2;
    color: #000;
}

#contentmenu {
    display: inline-block;
    width: 70%;
    float: right;
    background: #fff;
}

#content ul {
    padding: 0px;
}

#content li {
    padding-left: 0px;
    letter-spacing: 1px;
}

.choo {
    text-align: center;
    height: 46px;
    line-height: 46px;
    background: #f2f2f2;
}

.wapapp_calender_lable {
    top: 0px;
}

.choo_act {
    background: #15a4d5 !important;
    color: #fff;
}

div.divhover {
    width: 100%;
    background: #f2f2f2;
    position: relative;
    top: 15px;
}

#keywords {
    margin-right: 20px;
}

#ktvSearchPage {
    position: relative;
}

#mapping {
    background: none repeat scroll 0 0 #FFE100;
    color: #0073C3;
    height: 44px;
    line-height: 44px;
    overflow: hidden;
    text-align: center;
    width: 70px;
}

body .righthead {
    overflow: visible !important;
}

.righthead:after {
    content: '';
    position: absolute;
    height: 0px;
    width: 0px;
    overflow: hidden;
    border-width: 44px 12px 0px 0px;
    border-style: solid;
    border-color: #FFE100;
    border-top-color: transparent;
    left: -12px;
    top: 0px;
}

#mapping {
    background: #ddd;
    border-left-color: #999;
}

#mapping:after {
    border-right-color: #ddd;
}

.wapapp_calender_date {
    font-weight: bold;
}

/*comm*//*modify by pp 0926>>*/
header {
    background-color: #1491c5;
    width: 100%;
    height: 48px;
    line-height: 48px;
    text-align: center;
    position: relative;
}

header h1 {
    color: #fff;
    font: 600 1.286em/2.8 "STXihei";
}

header h1 em {
    font-style: normal;
    margin-left: 10px;
}

header i {
    position: absolute;
    left: 0;
    top: 0;
    width: 68px;
    height: 48px;
    background: #15a4d5;
}

header i:hover, header i:active {
    opacity: 0.7;
}

header i:before {
    background: url(../addons/ewei_ktv/template/style/css/comm_bg.png) no-repeat -100px -105px;
    background-size: 242px 260px;
    left: 25px;
    top: 16px;
    width: 12px;
    height: 20px;
    position: absolute;
    content: "";
}

/*box*/
.cont_pd_wrap {
    margin: 48px 0;
    padding: 10px;
}

.cont_box_white {
    padding: 10px;
    margin-bottom: 10px;
    background: #fff;
}

/*order_write*/
.write_list li {
    position: relative;
    padding: 0 15px;
    margin-bottom: 10px;
    line-height: 45px;
    background: #f2f2f2;
    color: #343434;
}

.write_list li:last-child {
    margin-bottom: 0;
}

.write_list .orderWrite_hint {
    height: 35px;
    line-height: 30px;
    padding: 0;
    margin-top: -10px;
    text-align: right;
    color: #fc5302;
    background: #fff;
}

.write_list .orderWrite_tit, .write_list .order_time {
    padding: 0 5px;
    margin: 0;
    line-height: 24px;
    background: #fff;
}

.write_list .orderWrite_tit {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.orderWrite_proname {
    display: inline-block;
    width: 60%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.orderWrite_txt {
    position: absolute;
    right: 15px;
    top: 0;
    width: 70%;
    padding: 0 10px;
    text-align: right;
    font-size: 1em;
    color: #238ff4;
}

/*btn*/
.btn_blue {
    display: block;
    width: 50%;
    height: 45px;
    margin: 0 auto;
    letter-spacing: 2px;
    font: bold 1.286em/45px "STXihei";
    color: #fff;
    background-color: #FF9913;
    border: none;
}

body select {
    opacity: 110; border:#cccccc 1px solid;
}

</style>
</head>
<body>
<div id="ctripPage">
    <header>
        <h1>选择城市</h1><i id="js_return" onClick="location.href='javascript:history.back();'"></i>
    </header>

    <section class="cont_pd_wrap" style="margin:0">
        <ul class="cont_box_white write_list">

            <li class="orderWrite_li">
                <select name="location_p" id="location_p" class="location span2"></select>
                <select name="location_c" id="location_c" class="location span2"></select>
                <!--<select name="location_a" id="location_a" class="location span2"></select>-->
                <script type="text/javascript" src="../addons/ewei_ktv/template/style/js/region_select.js"></script>
                <script type="text/javascript">
                    var location_p = "<?php  if(!empty($search_array['location_p'])) { ?><?php  echo $search_array['location_p'];?><?php  } else { ?><?php  } ?>";
                    var location_c = "<?php  if(!empty($search_array['location_c'])) { ?><?php  echo $search_array['location_c'];?><?php  } else { ?><?php  } ?>";
                    //var location_a = "<?php  if(!empty($reply['location_a'])) { ?><?php  echo $reply['location_a'];?><?php  } else { ?><?php  } ?>";
                    //new PCAS("location_p", "location_c", "location_a", location_p, location_c, location_a);
                    new PCAS("location_p", "location_c", location_p, location_c);
                </script>
            </li>
        </ul>
        <input type="button" class="btn_blue" id="submitCity" value="确定"/>
    </section>

</div>

<?php  include $this->template('ktv_msg')?>

<script type="text/javascript">
$(function(){
    $("#submitCity").click(function () {
        var location_p = $("#location_p").val();
        var location_c = $("#location_c").val();
        $.post("<?php  echo $this->createMobileUrl('ajaxData')?>",{ac:'city', location_p:location_p, location_c:location_c, referer:'<?php  echo $referer;?>'},function(data){
            //alert(data);return false;
            data  =eval("(" + data +")");
            if(data.result==1){
                location.href = data.url;
            }
            else{
                //show_msg(data.error);
                return false;
            }
        });
    });
});
</script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('share', TEMPLATE_INCLUDEPATH)) : (include template('share', TEMPLATE_INCLUDEPATH));?>

</body>
</html>