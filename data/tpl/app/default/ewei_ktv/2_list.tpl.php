<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>ktv列表</title>
    <meta name="viewport"  content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-title" content="ktv预定"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta content="telephone=no" name="format-detection"/>
    <link href="<?php  echo $this->_css_url?>css.css" rel="stylesheet"/>
     <script language='javascript' src='<?php  echo $this->_script_url?>jquery.js'></script>
    <script language='javascript' src='<?php  echo $this->_script_url?>common.js'></script>
    
    <style type="text/css">
        p.placeholders {
            height: 23px;
        }

        .empty-box {
            text-align: center;
        }

        html .emptybody {
            background: #fff;
        }

        .empty-box .empty-message {
            padding: 80px 20px 0px;
        }

        #listtop .orderby {
            height: 45px;
            line-height: 45px;
            width: 100%;
            font-weight: normal;
            font-size: 14px;
            color: #666666;
            text-shadow: none;
            text-align: center;
            border-right: 1px solid #dddddd;
            border-bottom: 1px solid #dddddd;
        }

        #listtop .hover {
            background: #DDDDDD;
        }

        #listtop .ui-btn-corner-all {
            border-radius: 0px;
        }

        #listtop .ui-shadow {
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
        }

        .ktvlist {
            padding-top: 5px;
            padding-bottom: 5px;
            border-bottom: 1px solid #e8ebef;
            position: relative;
            -webkit-tap-highlight-color: #f2f2f2;
        }

        .ktvlist:active {
            background: #f2f2f2;
        }

        .ktvlist .ui-grid-c .ui-block-a {
            width: 25%;
            text-align: center;
        }

        .ktvlist .ui-grid-c .ui-block-b {
            width: 45%;
        }

        .ktvlist .ui-grid-c .ui-block-c {
            width: 22%;
        }

        .ktvlist .ui-grid-c .ui-block-d {
            width: 8%;
            padding-top: 15px;
        }

        .star {
            font-size: 12px;
            color: #ff7800;
        }

        .pointColor {
            color: Red;
        }

        /*新增感兴趣ktv*/
        .top_tips {
            line-height: 22px;
            background: #ffeea0;
            color: #34301d;
            font-size: 12px;
            border-bottom: #fff 1px solid;
            box-shadow: 0 1px 0 #ffc067;
            padding: 0px;
            margin-bottom: 1px;
            word-break: break-all;
        }

        .hd_tit {
            font: 600 1.28em/2 'Tahoma';
            position: absolute;
            width: 100%;
            line-height: 40px;
            text-align: center;
            letter-spacing: 2px;
            color: #fff;
        }

        .cui-load-fail {
            margin: 0px auto 30px;
        }

        .cui-load-error {
            color: #878787;
        }

        .i, .icon_phone:before {
            background: url(../addons/ewei_ktv/template/style/css/comm_bg.png) no-repeat;
            background-size: 242px 260px;
        }

        .cui-wifi {
            background-position: 0 -110.5px;
        }

        .icon_phone {
            width: 42px;
            height: 100%;
            top: 0;
            position: relative;
            z-index: 9;
            float: right;
        }

        .cui-btns-tel .icon_phone:before {
            width: 11px;
            height: 20px;
            top: 16px;
            right: 12px;
            background-position: -172.5px 0;
            top: 0;
            left: -52px;
            right: auto;
            content: "";
            position: absolute;
        }

        .interest_ktv {
            border-top: #ddd 1px solid;
            border-bottom: #ddd 1px solid;
            padding: 5px 10px;
        }

        /*新增感兴趣ktv*/
        /*cui 网络异常*/
        .cui-load-fail {
            width: 60%;
            margin: 78px auto;
        }

        .cui-text-center {
            text-align: center;
        }

        .cui-load-error {
            width: 100%;
            margin: auto;
            word-break: break-all;
            text-align: center;
            margin-top: 60px;
        }

        .cui-wifi {
            width: 68px;
            height: 69px;
            position: relative;
            margin: 0 auto 5px;
            background-position: 0 -110.5px;
        }

        .cui-exclam:before {
            width: 10px;
            height: 31px;
            top: 12px;
            left: 50%;
            margin-left: -5px;
            background: #626262;
            border-radius: 5px;
        }

        .cui-exclam:before, .cui-exclam:after {
            position: absolute;
            content: "";
        }

        .cui-exclam:after {
            width: 10px;
            height: 10px;
            bottom: 11px;
            left: 50%;
            margin-left: -5px;
            background: #626262;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }

        .cui-exclam:before, .cui-exclam:after {
            position: absolute;
            content: "";
        }

        .cui-load-error {
            text-align: center;
        }

        .cui-glines {
            border-bottom: #dfdfdf 1px solid;
            margin: 40px auto 26px;
        }

        .cui-grayc {
            color: #878787;
        }

        .cui-btns-tel {
            min-width: 100px;
            display: inline-block;
            margin: 10px auto;
            background: #a9a9a9;
            padding: 10px 0 10px 15px;
            color: #fff;
        }
    </style>
</head>
<body id="ctripPage" style="padding-bottom:40px">
<section id="ydwxcsH"></section>
<header>
    <h1>
        <string id="top-title"></string>
        <em id="ktv-total"></em></h1>
    <div class="lefthead returnurl" onClick="javascript:history.back();">
        <div class="header_return"></div>
    </div>
 
    <!--<div class="lefthead" onClick="javascript:history.back();">-->
        <!--<div class="header_return"></div>-->
    <!--</div>-->
    <!--<div class="righthead">-->
        <!--<a href="<?php  echo $this->createMobileUrl('index')?>" class="header_home"></a>-->
        <!--&lt;!&ndash;<a href="tel:" class="header_tel __hreftel__"></a>&ndash;&gt;-->
    <!--</div>-->
</header>
<menu style="background: #fff;position:relative;">
    <!--<div id="in_footer" class=" js_in_Footer">-->
        <!--<ul class="tab_search">-->
            <!--<li class="tab_ktv">ktv查询</li>-->
            <!--<li class="tab_ktv">团购ktv</li>-->
        <!--</ul>-->
    <!--</div>-->

    <div id="listtop" class="ui-grid-c">
    <div class="ui-block-a">
    <div id="d_default" class="ui-btn-up-c" >推荐</div>
    </div>
    <!--&lt;!&ndash;<div class="ui-block-b" status="1">&ndash;&gt;-->
    <!--&lt;!&ndash;<div class="ui-btn-up-c ui-btn-text">评分&nbsp;<img alt="" src="http://res.m.ctrip.com/html5/Content/images/icodata_down.png" width="8" title="只降序排序"></div>&ndash;&gt;-->
    <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--&lt;!&ndash;<div class="ui-block-c">&ndash;&gt;-->
    <!--&lt;!&ndash;<div class="ui-btn-up-c">筛选</div>&ndash;&gt;-->
    <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--<div class="ui-block-d" data-first="0" status="2">-->
    <div id="d_price" class="ui-btn-up-c ui-btn-text">价格<span class="icoprice_down"></span></div>
    </div>
    </div>
    <div id="listContent" class="hot_list" style="padding:0px;">
        <div id="d_list">
        </div>

        <div class="cui-load-fail cui-text-center" id="no_list" style="display: none;">
            <div class="cui-load-error">
                <div class="i cui-wifi cui-exclam">
                </div>居然没有找到任何ktv<br>换个查询条件试试吧
            </div>
            <div class="cui-glines"></div>
            <!--<p class="cui-grayc">或者拨打客服电话</p>-->
            <!--<a href="tel:" class="cui-btns-tel">-->
                <!--<i class="i icon_phone i_bef"></i>联系客服-->
            <!--</a>-->
        </div>

        <div class="text_ct hide block" id="d_page" style="display: none;">
            <a href="javascript:;" id="d_more" class="ui-link" style="height:45px; line-height:45px;">点击加载更多ktv</a>
        </div>

    </div>
</menu>
<!--<script type="text/html" id="template">-->

    <!--<% _.each(list,function(record,k){ %>-->
    <!--<ul class="hot_list_tab <%= record.IsRoomFull==1?"-->
        <!--ktv_full":"" %> " ktvId="<%= record.ktvID %>" data-full="<%= record.IsRoomFull %>">-->
    <!--<li class="hot_img">-->
        <!--<% if (record.ktvUrl == null || record.ktvUrl == ""){ %>-->
        <!--<img width="67px" height="50px" src="http://res.m.ctrip.com/html5/Content/images/roomPic.png?v=2.3"/>-->
        <!--<% }%>-->
        <!--<% if(record.ktvUrl != ""){ %>-->
        <!--<img width="67px" height="50px" src=<%= record.ktvUrl %>-->
        <!--onerror="javascript:ctrip.ktv.list.noFindPic(this)"/>-->
        <!--<% }%>-->
    <!--</li>-->
    <!--<li class="hot_ktv">-->
        <!--<% if (record.ktvName){ %>-->
        <!--<p class="name"><%= record.ktvName %></p>-->
        <!--<% }else {%>-->
        <!--<p class="placeholders"></p>-->
        <!--<% }%>-->
        <!--<% if(record.Points){ %>-->
        <!--<p class="data size12"><strong class="size16"><%= record.Points %></strong>分</p>-->
        <!--<% }else {%>-->
        <!--<p class="placeholders"></p>-->
        <!--<% }%>-->
        <!--<p>-->
            <!--<% if (record.Star <= 1){ %>-->
            <!--<% if (record.IsStar){ %>二星级及以下<% }else{ %>经济型ktv<% }%>-->
            <!--<% }%>-->
            <!--<% if (record.Star == 2){ %>-->
            <!--<% if (record.IsStar){ %>二星级及以下<% }else{ %>经济型ktv<% }%>-->
            <!--<% }%>-->
            <!--<% if (record.Star == 3){ %>-->
            <!--<% if (record.IsStar){ %>三星级ktv<% }else{ %>舒适ktv<% }%>-->
            <!--<% }%>-->
            <!--<% if (record.Star ==4){ %>-->
            <!--<% if (record.IsStar){ %>四星级ktv<% }else{ %>高档ktv<% }%>-->
            <!--<% }%>-->
            <!--<% if (record.Star >= 5){ %>-->
            <!--<% if (record.IsStar){ %>五星级ktv<% }else{ %>豪华ktv<% }%>-->
            <!--<% }%>-->
        <!--</p>-->
        <!--<% if (record.ZoneName){ %>-->
        <!--<p><%= record.ZoneName %></p>-->
        <!--<% }else{ %>-->
        <!--<p class="placeholders"></p>-->
        <!--<% }%>-->
    <!--</li>-->
    <!--<li class="hot_price">-->
        <!--<dfn>&yen;</dfn><strong><%= record.LowPrice %></strong><span class="txt_gray">起</span>-->

        <!--<p class="hot_ico">-->
            <!--<% if (record.IsCu == 1){ %>-->
            <!--<em>促</em>-->
            <!--<% }%>-->
            <!--<% if (record.IsGift == 1){ %>-->
            <!--<em>礼</em>-->
            <!--<% }%>-->
            <!--<% if (record.IsQuan == 1){ %>-->
            <!--<em>券</em>-->
            <!--<% }%>-->

            <!--<% if (record.IsFan){ %>-->
            <!--<i class="fan">可返</i>-->
            <!--<% if (record.FanPrice && record.FanPrice>0){ %>-->
            <!--<span class="fantxt">￥<%= record.FanPrice %></span>-->
            <!--<% }else{ %>-->

            <!--<% }%>-->
            <!--<% }%>-->
            <!--<% if (record.IsMP){ %>-->
            <!--<i class="mobile">手机专享</i>-->
            <!--<% }%>-->

        <!--</p>-->
    <!--</li>-->
    <!--</ul>-->
    <!--<% })%>-->
<!--</script>-->
<input type="hidden" id="page_id" value="212093"/>
<section id="ydwxcsF"></section>
<div id="footer"></div>
 
<script>
    $(function(){
        var order_name = <?php  echo $order_name;?>;
        var order_type = <?php  echo $order_type;?>;
        var next_page  = 0;

        function get_list(page) {
            show_loading();
            $.post("<?php  echo $this->createMobileUrl('list')?>",{ac:'getDate',page:page},function(data){
                //alert(data);return false;   
                hide_loading();
                data  =eval("(" + data +")");
                if(data.result == 1){
                    //alert(data.code);
                    $("#top-title").html(data.title);
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

        $("#d_more").click(function () {
            get_list(next_page);
        });
        
        function setClass(){
            $(".ui-btn-up-c").removeClass("hover");
            if(order_name==0 || order_name==''){
                $("#d_default").addClass("hover");
            }
            else if (order_name == 1) {
                $("#d_price").addClass("hover");
                if (order_type == "2") {//升序
                   $("#d_price").find('span').addClass('icoprice_down').removeClass('icoprice_up');
                }
                else if (order_type == "1") {//降序
                   $("#d_price").find('span').addClass('icoprice_up').removeClass('icoprice_down');
                }
             }
        }
   
        setClass(); get_list(1);
        
        $(".ui-btn-up-c").click(function () {
            var this_id = $(this).attr('id');

            if (this_id == 'd_price'){
                order_name = 1;
                
                if (order_type == 2) {
                    order_type = 1;
                } else {
                    order_type = 2;
                }
            
            }
            else{
                order_name = 0;
            }
            
            setClass();

            $("#d_list").empty();
            next_page = 0;
            $.post("<?php  echo $this->createMobileUrl('ajaxData')?>",{ac:'orderby', order_name:order_name, order_type:order_type},function(data){
                data  =eval("(" + data +")");
                if(data.result==1){
                    //location.href = data.url;
                    get_list(1);
                }
            });

        });
    });

</script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('ktvfooter', TEMPLATE_INCLUDEPATH)) : (include template('ktvfooter', TEMPLATE_INCLUDEPATH));?>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('share', TEMPLATE_INCLUDEPATH)) : (include template('share', TEMPLATE_INCLUDEPATH));?>

</body>
</html>