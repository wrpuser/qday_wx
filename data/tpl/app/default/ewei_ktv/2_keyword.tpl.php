<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>ktv推荐</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-title" content="ktv预订"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta content="telephone=no" name="format-detection"/>
    <link href="<?php  echo $this->_css_url?>css.css" rel="stylesheet"/>
      <script language='javascript' src='<?php  echo $this->_script_url?>jquery.js'></script>
    <script language='javascript' src='<?php  echo $this->_script_url?>common.js'></script>
    <!--<script type="application/x-javascript">addEventListener('DOMContentLoaded', function () {-->
        <!--setTimeout(function () {-->
            <!--scrollTo(0, 1);-->
        <!--}, 0);-->
    <!--}, false);</script>-->
    <style type="text/css">body .ui-fa fa-searchfield {
        -left: 35px !important;
    }

    #righthead a {
        color: #fff !important;
    }

    .conlist .ui-grid-b {
        border-bottom: 1px solid #E4E4E4;
        padding-bottom: 10px;
        padding-top: 10px;
        height: 25px;
        line-height: 25px;
    }

    .conlist .ui-grid-b .ui-block-a {
        width: 30%;
        text-align: center;
    }

    .conlist .ui-grid-b .ui-block-b {
        width: 60%;
        text-align: right;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        -o-text-overflow: ellipsis;
    }

    .conlist .ui-grid-b .ui-block-c {
        width: 8%;
        text-align: center;
    }

    .choose {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        z-index: 1002;
        overflow: none;
    }

    .choo {
        text-align: center;
        height: 46px;
        line-height: 18px;
        background: #f2f2f2;
        text-overflow: ellipsis;
        white-space: normal; /*overflow: hidden; text-overflow: ellipsis;*/
    }

    .choo_act {
        background: #15a4d5 !important;
        color: #fff;
    }

    .ui-grid-a .ui-block-a {
        width: 30%;
        text-align: center;
        color: #afafaf;
    }

    .ui-grid-a .ui-block-b {
        width: 70%;
        background: #fff;
    }

    #menu0 li {
        height: 45px;
        line-height: 45px;
        border-bottom: 1px solid #f2f2f2;
        background: #fff;
        color: #666666;
    }

    #menu li {
        height: 45px;
        line-height: 45px;
        border-bottom: 1px solid #f2f2f2;
    }

    #menu li.hover {
        background: #f2f2f2;
        color: #000;
    }

    #menu2 li {
        height: 45px;
        line-height: 45px;
        background: #f2f2f2;
        color: #000;
        border-right: 1px solid #fff;
    }

    #content2 li {
        height: 46px;
        line-height: 46px;
        text-align: center;
        background: #f2f2f2;
        letter-spacing: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    #content2 li.active {
        background: #15a4d5 !important;
        color: #fff;
    }

    #mask {
        opacity: 0.8;
        position: absolute;
        left: 0;
        background-color: #000;
        width: 100%;
        z-index: 99;
    }

    #choosed a {
        display: block;
    }

    #main0 ul {
        display: none;
    }

    #main0 .on {
        display: block;
    }

    input.ui-input-text {
        background: none !important;
        clear: both;
    }

    .ui-input-search {
        border-radius: 30px;
        height: 30px;
    }

    .choose h1 {
        margin-left: auto !important;
        margin-right: auto !important;
        text-align: center !important;
        width: 60%;
    }

    #area div, #shop div, #brand div {
        line-height: 46px;
    }

    .choo table {
        height: 100%;
        width: 100%;
        vertical-align: middle;
        margin: auto;
        padding: 0px 5px;
        text-align: center;
    }

    .choo table * {
        vertical-align: middle;
    }

    /*modify by pp 0926*/
    .search-keyword-contr {
        position: relative;
        background-color: #dfeaf1;
    }

    .search-input-box-mr {
        margin-right: 70px;
    }

    .history-close {
        display: none;
        position: absolute;
        top: 7px;
        right: 0px;
        width: 70px;
        height: 32px;
        line-height: 32px;
        font-size: 16px;
        text-align: center;
    }

    .history-close .hclose {
        line-height: 30px;
        font-size: 16px;
        color: #1491c5;
    }

    .ktv_head {
        background-color: #1491c5;
        width: 100%;
        height: 48px;
        line-height: 48px;
        text-align: center;
        position: relative;
    }

    .ktv_head h1 {
        color: #fff;
        font: 600 1.286em/2.8 "STXihei";
    }

    .left.back:active {
        opacity: 0.7;
    }

    .left.back {
        position: absolute;
        left: 0;
        top: 0;
        width: 68px;
        height: 48px;
        padding: 0;
        background-color: #15a4d5;
        z-index: 999;
    }

    .left.back:before {
        position: absolute;
        content: "";
        left: 25px;
        top: 16px;
        width: 12px;
        height: 20px;
        background: url(http://res.m.ctrip.com/html5/content/images/comm_bg.png) no-repeat -100px -105px;
        background-size: 242px 260px;
    }
    </style>
</head>
<body id="ctripPage">
<section id="ydwxcsH"></section>
<header>
    <h1>关键字</h1>

    <div class="lefthead" onClick="location.href='javascript:history.back();'">
        <div class="header_return"></div>
    </div>
    <div style="position: absolute; top: 0; right: 70px; width:0; height:0; border-width:22px 6px; border-style:solid; border-color:  #0073C3 #31a9e9 #31a9e9 #0073C3;"
         class="angle"></div>
    <div id="righthead" class="righthead"><span>恢复默认</span></div>
</header>
<div class="search-keyword-contr">
    <div class="search-input-box">
        <div class="ui-listview-filter ui-fa fa-searchfield clear-input-box"><span>
            <input data-type="search" id="Keywords" placeholder="请输入ktv名称" value="<?php  echo $search_array['keyword'];?>" class="cityinput">
            <a class="clear-input " href="javascript:;" style="display: none;"><span></span></a></span><span
                style=" display:none; width:0px; height:0px;" id="hideKey"></span></div>
    </div>
    <div class="history-close" style="display: none;">
        <span class="hclose">取消</span>
    </div>
</div>
<div id="content">
    <div class="conlist" style="padding: 0px;" id="choosed">
            <span class="ui-link positionTab">
                <div class="ui-grid-b" onclick="ShowDiv('area-content')">
                    <div class="ui-block-a">商圈</div>
                    <div class="ui-block-b title" id="choosed_area">不限</div>
                    <div class="ui-block-c icon_arrow" style="margin-top: 5px;"></div>
                </div>
            </span>
            <span class="ui-link brandTab">
                <div class="ui-grid-b" onclick="ShowDiv('brand-content')">
                    <div class="ui-block-a">品牌</div>
                    <div class="ui-block-b title" id="choosed_brand">不限</div>
                    <div class="ui-block-c icon_arrow" style="margin-top: 5px;"></div>
                </div>
            </span>
    </div>
    <input id="submitDate" type="button" class="ui-btn-up-g" value="确定">
</div>


<div class="choose" id="area-content">
    <div class="ktv_head">
        <div class="left back" onClick="CloseDiv('area-content');">
            <div class="header_return"></div>
        </div>
        <h1>位置区域</h1>
    </div>
    <div class="conlist" style="padding: 0px;">
        <div class="ui-grid-a" style="background-color:#fff;">
            <div id="menu" class="ui-block-a">
                <ul class="menu0" id="menu0">
                    <!--<li onclick="setTab(0,0)" class="tab hover" id="areaTab">行政区</li>-->
                    <li onclick="setTab(0,0)" class="tab hover" id="shopTab">商圈</li>
                    <!--<li onclick="setTab(0,2)" class="tab" id="subwayTab">地铁线</li>-->
                </ul>
            </div>
            <div id="contentmenu" class="ui-block-b">
                <div class="main" id="main0">
                    <!--<ul class="on">-->
                        <!--<li id="area">-->
                            <!--<div class="choo" area="">不限</div>-->

                            <!--<div class="choo" data-flag="1" area="94">朝阳区</div>-->

                            <!--<div class="choo" data-flag="2" area="93">东城区</div>-->

                            <!--<div class="choo" data-flag="3" area="92">西城区</div>-->

                            <!--<div class="choo" data-flag="4" area="96">海淀区</div>-->

                            <!--<div class="choo" data-flag="5" area="101">丰台区</div>-->

                            <!--<div class="choo" data-flag="6" area="95">房山区</div>-->

                            <!--<div class="choo" data-flag="7" area="97">石景山区</div>-->

                            <!--<div class="choo" data-flag="8" area="98">顺义区</div>-->

                            <!--<div class="choo" data-flag="9" area="102">怀柔区</div>-->

                            <!--<div class="choo" data-flag="10" area="130">门头沟区</div>-->

                            <!--<div class="choo" data-flag="11" area="103">密云县</div>-->

                            <!--<div class="choo" data-flag="12" area="104">昌平区</div>-->

                            <!--<div class="choo" data-flag="13" area="105">大兴区</div>-->

                            <!--<div class="choo" data-flag="14" area="106">平谷区</div>-->

                            <!--<div class="choo" data-flag="15" area="108">通州区</div>-->

                            <!--<div class="choo" data-flag="16" area="109">延庆县</div>-->

                        <!--</li>-->
                    <!--</ul>-->
                    <ul class="on">
                        <li id="shop">
                            <div class="choo" shop="0">不限</div>

                            <?php  if(is_array($business_list)) { foreach($business_list as $item) { ?>
                            <div class="choo" shop="<?php  echo $item['id'];?>"><?php  echo $item['title'];?></div>
                            <?php  } } ?>

                        </li>
                    </ul>

                    <!--<ul>-->
                        <!--<li id="subway">-->
                            <!--<div class="choo" subway="" style="line-height:46px;">不限</div>-->

                            <!--<div class="choo" subway="1" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="1">1号线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="2" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="2">2号线外环</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="3" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="3">4号线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="4" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="4">5号线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="5" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="5">8号线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="6" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="6">10号线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="7" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="7">13号线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="8" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="8">八通线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="10" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="10">15号线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="11" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="11">昌平线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="12" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="12">亦庄线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="13" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="13">大兴线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                            <!--<div class="choo" subway="14" style="letter-spacing:0px;">-->
                                <!--<table>-->
                                    <!--<tbody>-->
                                    <!--<tr>-->
                                        <!--<td subway="14">房山线</td>-->
                                    <!--</tr>-->
                                    <!--</tbody>-->
                                <!--</table>-->
                            <!--</div>-->

                        <!--</li>-->
                    <!--</ul>-->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="choose" id="brand-content">
    <div class="ktv_head">
        <div class="left back" onClick="CloseDiv('brand-content');">
            <div class="header_return"></div>
        </div>
        <h1>品牌</h1>
    </div>
    <div style="background-color:#fff;" class="ui-grid-a">
        <ul class="ui-block-a" id="menu2">
            <li>品牌</li>
        </ul>
        <div class="ui-block-b" id="content2">

            <ul class="block" id="brand">
                <li class="choo" brand="0" data-name="">不限</li>
                <?php  if(is_array($brand_list)) { foreach($brand_list as $item) { ?>
                <li class="choo" brand="<?php  echo $item['id'];?>" data-name="<?php  echo $item['title'];?>"><?php  echo $item['title'];?></li>
                <?php  } } ?>
            </ul>

        </div>
    </div>
</div>

<div id="mask"></div>

<!--<script type="text/html" id="area_template">-->
    <!--<div class="choo" area=''>不限</div>-->
    <!--<% _.each(list,function(record,k){ %>-->
    <!--<div class="choo" data-flag="<%= record.WeightFlag %>" area='<%= record.LocationId %>'><%= record.LocationName %>-->
    <!--</div>-->
    <!--<% })%>-->
<!--</script>-->
<!--<script type="text/html" id="shop_template">-->
    <!--<div class="choo" shop=''>不限</div>-->
    <!--<% _.each(list,function(record,k){ %>-->
    <!--<div class="choo" shop='<%= record.ZoneId %>'><%= record.ZoneName %></div>-->
    <!--<% })%>-->
<!--</script>-->
<!--<script type="text/html" id="subway_template">-->
    <!--<div class="choo" subway='' style="line-height:46px;">不限</div>-->
    <!--<% _.each(list,function(record,k){ %>-->
    <!--<div class="choo" subway='<%= record.MetroLine %>' style="letter-spacing:0px;">-->
        <!--<table>-->
            <!--<tr>-->
                <!--<td subway='<%= record.MetroLine %>'><%= record.MetroName %></td>-->
            <!--</tr>-->
        <!--</table>-->
    <!--</div>-->
    <!--<% })%>-->
<!--</script>-->
<!--<script type="text/html" id="brand_template">-->
    <!--<li brand='' data-name='不限'>不限</li>-->
    <!--<% _.each(list,function(record,k){ %>-->
    <!--<li data-flag="<%= record.HotFlag %>" data-name=<%=-->
        <!--record.BrandNamePY && record.BrandNamePY.Trim().length>0?record.BrandName+"("+record.BrandNamePY+")":record.BrandName%> brand='<%= record.BrandId %>'>-->
    <!--<%= record.BrandName%><% if (record.BrandNamePY && record.BrandNamePY.Trim().length>0){%><span-->
            <!--style="letter-spacing: 0px;" data-name=<%=-->
            <!--record.BrandNamePY && record.BrandNamePY.Trim().length>0?record.BrandName+"("+record.BrandNamePY+")":record.BrandName %> brand='<%= record.BrandId %>'>(<%= record.BrandNamePY %>)</span><% }%></li>-->
    <!--<% })%>-->
<!--</script>-->

<input type="hidden" id="page_id" value="210089"/>
<section id="ydwxcsF"></section>
<div id="cui-cid246787441" class="cui-history" style="position: absolute; display: none;">
    <div class="cui-history-border">
        <ul class="cui-history-list">
            <li class="cui-clear-history,clearbutton">无搜索历史</li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        var business_id = <?php  echo $search_array['business_id'];?>;
        var business_title = "<?php  echo $search_array['business_title'];?>";
        var brand_id = <?php  echo $search_array['brand_id'];?>;
        var brand_title = "<?php  echo $search_array['brand_title'];?>";

        if (business_id > 0) {
            $(".choo").each(function(){
                if ($(this).attr("shop") == "<?php  echo $search_array['business_id'];?>") {
                    $(this).addClass("choo_act chooact");
                    var code = $(this).html();
                    $("#choosed_area").html(code);
                    return false;
                }
            });
        }

        if (brand_id > 0) {
            $(".choo").each(function(){
                if ($(this).attr("brand") == "<?php  echo $search_array['brand_id'];?>") {
                    $(this).addClass("choo_act chooact");
                    var code = $(this).html();
                    $("#choosed_brand").html(code);
                    return false;
                 }
            });
        }

        $(".choo").click(function () {
            var name = $(this).parent().attr('id');
            var code = $(this).html();

            $(this).siblings().removeClass("choo_act chooact");
            $(this).addClass("choo_act chooact");

            if (name == 'shop') {
                var this_id = $(this).attr('shop');
                business_id = this_id;
                business_title = code;
                $("#choosed_area").html(code);
                CloseDiv('area-content');
            } else if (name == 'brand') {
                var this_id = $(this).attr('brand');
                brand_id = this_id;
                brand_title = code;
                $("#choosed_brand").html(code);
                CloseDiv('brand-content');
            }
        });

        $("#submitDate").click(function () {
            var keyword = $("#Keywords").val();
                $.post("<?php  echo $this->createMobileUrl('ajaxData')?>",{ac:'brand', business_id:business_id, business_title:business_title,brand_id:brand_id,brand_title:brand_title,keyword:keyword},function(data){
                    //alert(data);return false;
                    data  =eval("(" + data +")");
                    if(data.result==1){
                        location.href = data.url;
                    }
                });
        });

        $("#righthead").click(function () {
            $("#Keywords").val('');
            $("#choosed_area").html('不限');
            $("#choosed_brand").html('不限');

            $.post("<?php  echo $this->createMobileUrl('ajaxData')?>",{ac:'clear_brand'},function(data){
                data  =eval("(" + data +")");
                if(data.result==1){
                    location.href = data.url;
                }
            });
        });

    });

    function setTab(m, n) {
        var tli = document.getElementById("menu" + m).getElementsByTagName("li");
        var mli = document.getElementById("main" + m).getElementsByTagName("ul");
        for (i = 0; i < tli.length; i++) {
            tli[i].className = i == n ? "hover" : "";
            mli[i].style.display = i == n ? "block" : "none";
        }
    }

    function ShowDiv(show_div) {
        document.getElementById(show_div).style.display = 'block';
    }

    function CloseDiv(show_div) {
        document.getElementById(show_div).style.display = 'none';
    }
</script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('share', TEMPLATE_INCLUDEPATH)) : (include template('share', TEMPLATE_INCLUDEPATH));?>

</body>
</html>