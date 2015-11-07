<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<!-- saved from url=(0056)http://m.ctrip.com/webapp/myctrip/#orders/hotelorderlist -->
<html class="ie"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>足浴订单</title>
    <meta name="viewport" content="width=320.1, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="<?php  echo $this->_css_url?>css.css" rel="stylesheet"/>
    <link href="<?php  echo $this->_css_url?>main.css" rel="stylesheet"/>
    <link href="<?php  echo $this->_css_url?>myctrip.css" rel="stylesheet"/>
     <script language='javascript' src='<?php  echo $this->_script_url?>jquery.js'></script>
    <script language='javascript' src='<?php  echo $this->_script_url?>common.js'></script>
</head>
<body onselectstart="return false" tabindex="10000">
<div id="headerview" style="height: 48px;">
    <header>
        <h1 class="hoteltitle">足浴订单</h1>
        <div class="lefthead" onClick="location.href='javascript:history.back();'">
            <div class="header_return"></div>
        </div>
        <div class="righthead">
            <a id="imgHome" class="header_home" href="<?php  echo $this->createMobileUrl('index')?>">&nbsp;</a>
        </div>
    </header>
</div>
<div id="main" class="h100">
    <div class="main-frame">
        <div class="main-viewport">
            <div class="sub-viewport" id="id_viewport2" page-url="orders/hotelorderlist">
                <article class="wrap bggrey" id="d_list">
                    <ul class="new_orderlist" id="no_list" style="display: none;">
                        <div class="cui-load-error"><div class="i cui-wifi cui-exclam"></div>您还没有酒店订单哦。</div>
                    </ul>
                </article>
            </div>
            <div class="text_ct hide block" id="d_page" style="display: none;">
                <a href="javascript:;" id="d_more" class="ui-link" style="height:45px; line-height:45px;">点击加载更多订单</a>
            </div>
        </div>
        <div class="main-state"></div>
    </div>
</div>
<div id="footer"></div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('hotel_msg', TEMPLATE_INCLUDEPATH)) : (include template('hotel_msg', TEMPLATE_INCLUDEPATH));?>
<script type="text/javascript">
    $(function () {
        var next_page = 0;
        function get_list(page) {
            show_loading();
            $.post("<?php  echo $this->createMobileUrl('orderlist')?>", {ac: 'getDate', page: page}, function (data) {
                //alert(data);return false;
                //alert(data);
                hide_loading();
                data = eval("(" + data + ")");
                if (data.result == 1) {
                    //alert(data.code);
                    $("#d_list").append(data.code);
                    if (data.total == 0) {
                        $("#no_list").show();
                    }
                    if (data.isshow == 1) {
                        next_page = data.nindex;
                        $("#d_page").show();
                    } else {
                        $("#d_page").hide();
                    }
                }
            });
        }
        get_list(1);
        $("#d_more").click(function () {
            get_list(next_page);
        });
    });
</script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('share', TEMPLATE_INCLUDEPATH)) : (include template('share', TEMPLATE_INCLUDEPATH));?>

</body>
</html>