<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html class="ie"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>酒店订单详情</title>
    <meta name="viewport" content="width=320.1, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-title" content="酒店预定">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="telephone=no" name="format-detection">
    <link href="<?php  echo $this->_css_url?>css.css" rel="stylesheet"/>
    <link href="<?php  echo $this->_css_url?>main.css" rel="stylesheet"/>
    <link href="<?php  echo $this->_css_url?>hotel.css" rel="stylesheet"/>
    <script language='javascript' src='<?php  echo $this->_script_url?>jquery.js'></script>
    <script language='javascript' src='<?php  echo $this->_script_url?>common.js'></script>

    <style type="text/css">
        .ui-btn-up-g { width:100%;height:35px;line-height: 35px}
    </style>
</head>

<body onselectstart="return false" tabindex="10000" style="padding-bottom:40px">
<div id="headerview" style="height: 48px;">
    <header>
        <a href="<?php  echo $this->createMobileUrl('index')?>">
            <i class="icon_home i_bef" id="c-ui-header-home"></i>
        </a>
        <a href="tel:<?php  echo $tel;?>" class="icon_phone i_bef __hreftel__" id="c-ui-header-tel"></a>
        <h1>订单详情</h1><i id="c-ui-header-return" class="returnico i_bef" onClick="javascript:history.back();"></i></header>
</div>
<div id="main" class="h100">
    <div class="main-frame">
        <div class="main-viewport">
            <div class="sub-viewport" id="id_viewport2" page-id="212057" page-url="domestic/hotelorderdetail">
                <article class="p10" id="orderDetail">
                    <section class="cont_box_white">
                        <dl class="order_dl">
                            <dt>订单总额</dt>
                            <dd class="corange"><?php  echo $item['sum_price'];?></dd>
                        </dl>
                        <dl class="order_dl">
                            <dt>订单状态</dt>
                            <dd>
                                <?php  if($item['paystatus']==0) { ?>
                                <?php  if($item['status'] == -1) { ?>
                                已取消
                                <?php  } else if($item['status'] == 0) { ?>
                                <?php  if($item['paytype']==1 || $item['paytype']==2) { ?>待支付<?php  } else { ?>等待确认<?php  } ?>
                                <?php  } else if($item['status'] == 1) { ?>
                                已通过
                                <?php  } else if($item['status'] == 2) { ?>
                                已拒绝
                                <?php  } else if($item['status'] == 3) { ?>
                                已完成
                                <?php  } ?>
                                <?php  } else { ?>
                                <?php  if($item['status'] == -1) { ?>
                                已支付 已取消
                                <?php  } else if($item['status'] == 0) { ?>
                                已支付 确认中
                                <?php  } else if($item['status'] == 1) { ?>
                                已支付 已通过
                                <?php  } else if($item['status'] == 2) { ?>
                                已支付 已退款
                                <?php  } else if($item['status'] == 3) { ?>
                                已完成
                                <?php  } ?>
                                <?php  } ?>
                            </dd>
                        </dl>
                        <dl class="order_dl">
                            <dt>订单编号</dt>
                            <dd><?php  echo $item['ordersn'];?></dd>
                        </dl>
                        <dl class="order_dl">
                            <dt>订单备注</dt>
                            <dd> <?php  echo $item['msg'];?></dd>
                        </dl>
                        <dl class="order_dl">
                            <dt>预订日期</dt>
                            <dd> <?php  echo date('Y-m-d',$item['time'])?></dd>
                        </dl>
                        <dl class="order_dl">
                            <dt>支付方式</dt>
                            <dd><?php  if($item['paytype']==1) { ?>
                                余额支付
                                <?php  } else if($item['paytype']==21) { ?>
                                微信支付
                                <?php  } else if($item['paytype']==22) { ?>
                                支付宝
                                <?php  } else { ?>
                                到店付款
                                <?php  } ?></dd>
                        </dl>
                    </section>
                    <?php  if($item['paystatus']==0 && $item['paytype']==1) { ?>
                    <section class="cont_box_white pos_rel" id='btns'>
                        <dl class="order_dl">
                            <form action="<?php  echo url('mc/cash/credit', array('weid' => $_W['uniacid']), true);?>" method="post">
                                <input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
                                <button class="ui-btn-up-g" type="submit" value="credit">余额支付 （余额支付当前 <?php  echo sprintf('%.2f', $member['credit2']);?>元)</button>
                            </form>
                        </dl>
                    </section>
                    <?php  } ?>
                    <?php  if($item['paystatus']==0 && $item['paytype']==21) { ?>
                    <section class="cont_box_white pos_rel" id='btns'>
                        <dl class="order_dl">
                            <form action="<?php  echo url('mc/cash/wechat', array('weid' => $_W['uniacid']), true);?>" method="post">
                                <input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
                                <button class="ui-btn-up-g" disabled="disabled" type="submit" id="wBtn" value="wechat">微信支付(必须使用微信内置浏览器)</button>
                            </form>
                            <script type="text/javascript">
                                document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
                                    $('#wBtn').removeAttr('disabled');
                                    $('#wBtn').html('微信支付');
                                });
                            </script>
                        </dl>
                    </section>
                    <?php  } ?>
                    <?php  if($item['paystatus']==0 && $item['paytype']==22) { ?>
                    <section class="cont_box_white pos_rel" id='btns'>
                        <dl class="order_dl">
                            <form action="<?php  echo url('mc/cash/alipay', array('weid' => $_W['uniacid']), true);?>" method="post">
                                <input type="hidden" name="params" value="<?php  echo base64_encode(json_encode($params));?>" />
                                <button class="ui-btn-up-g" type="submit" name="alipay">支付宝支付</button>
                            </form>
                        </dl>
                    </section>
                    <?php  } ?>
                    <section class="myhotelbox">
                        <h4 class="blue_tit">酒店信息</h4>
                        <ul class="line_li">
                            <li data-id="341689" id="goDetail"><?php  echo $item['title'];?><!--i class="newarr_r"></i--></li>
                            <li>
                                <dl class="lmr_infobox">
                                    <dt class="dl_l"><?php  echo $item['style'];?></dt>
                                    <dd class="lmr_mg"><?php  echo $item['nums'];?>间</dd>
                                </dl>
                                <dl class="lmr_infobox">
                                    <dt>入住时间</dt>
                                    <dd class="dl_m"><?php  echo date('m月d日',$item['btime'])?>-<?php  echo date('m月d日',$item['etime'])?></dd>
                                    <dd><?php  echo $item['day'];?>晚</dd>
                                </dl>
                                <!--<dl class="lmr_infobox">-->
                                <!--<dt>最晚到店</dt>-->
                                <!--<dd class="dl_m">2014-05-28 23:59</dd>-->
                                <!--</dl>-->
                            </li>
                            <li class="" onclick="location.href='http://api.map.baidu.com/geocoder?address=<?php  echo $item['address'];?>&output=html'">地址: <?php  echo $item['address'];?></li>
                            <li class="" id="js_hotel_tel" onclick="location.href='tel:<?php  echo $tel;?>'">电话: <?php  echo $tel;?><i class="newarr_r"></i></li>
                        </ul>
                    </section>
                    <section class="myhotelbox">
                        <h4 class="blue_tit">其它信息</h4>
                        <ul class="lrlist">
                            <li>
                                <em>入住人</em><span><?php  echo $item['name'];?></span>
                            </li>
                            <li>
                                <em>联系人</em><span><?php  echo $item['contact_name'];?></span>
                            </li>
                            <li>
                                <em>手机号</em><span><?php  echo $item['mobile'];?></span>
                            </li>
                            <!--<li>-->
                            <!--<em>特殊需求</em><span>无</span>-->
                            <!--</li>-->
                        </ul>
                    </section>
                    <!--<aside class="overflow">-->
                    <!--<a href="tel:4000086666">-->
                    <!--<button class="orderdtl_greybtn fr"><i class=" mydtl_icon_conn"></i>联系客服</button>-->
                    <!--</a>-->
                    <!--</aside>-->
                </article>
            </div>
        </div>
        <div class="main-state"></div>
    </div>
</div>
<div id="footer"></div>
<input type="hidden" id="page_id" value="212057">
<input type="hidden" id="bf_ubt_orderid" value="">
<div class="cui-view cui-layer cui-loading" id="cui-1398129065092"
     style="visibility: visible; margin-left: -45px; margin-top: -40px; z-index: 3496; display: none;">
    <div class="cui-layer-padding">
        <div class="cui-layer-content">
            <div class="cui-breaking-load">
                <div class="cui-w-loading"></div>
                <i class="cui-white-logo"></i></div>
        </div>
    </div>
</div>
<div class="cui-view cui-mask cui-opacitymask" id="cui-1398129065093" style="position: absolute; left: 0px; top: 0px; width: 100%; height: 630px; z-index: 3494; display: none;"><div></div>
</div>
<script language='javascript'>
    function tel(){
    }
</script>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('share', TEMPLATE_INCLUDEPATH)) : (include template('share', TEMPLATE_INCLUDEPATH));?>

</body>
</html>