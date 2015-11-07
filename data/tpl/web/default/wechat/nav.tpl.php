<?php defined('IN_IA') or exit('Access Denied');?><ul class="nav nav-tabs">
	<li <?php  if($action == 'account') { ?>class="active"<?php  } ?>><a href="<?php  echo url('wechat/account');?>" style="color:#d9534f"><i class="fa fa fa-cog fa-spin"></i> 公众号列表</a></li>
	<li <?php  if($do == 'logo') { ?>class="active"<?php  } ?>><a href="<?php  echo url('wechat/manage/logo');?>">门店logo</a></li>
	<li <?php  if($do == 'location_list') { ?>class="active"<?php  } ?>><a href="<?php  echo url('wechat/manage/location_list');?>">门店列表</a></li>
	<?php  if($do == 'location_post') { ?><li class="active"><a href="<?php  echo url('wechat/manage/location_post');?>">添加门店</a></li><?php  } ?>
	<li <?php  if($do == 'whitelist') { ?>class="active"<?php  } ?>><a href="<?php  echo url('wechat/manage/whitelist');?>">测试白名单</a></li>
	<li <?php  if($_GPC['f'] == 'post') { ?>class="active"<?php  } ?>><a href="javascript:;" id="add-card">添加微信券</a></li>
	<li <?php  if($do == 'display') { ?>class="active"<?php  } ?>><a href="<?php  echo url('wechat/card/display');?>">微信券</a></li>
	<?php  if($do == 'qr') { ?><li class="active"><a href="javascript:;">卡券投放二维码</a></li><?php  } ?>
	<?php  if($do == 'record') { ?><li class="active"><a href="javascript:;">卡券领取记录</a></li><?php  } ?>
</ul>
<style>
	.marbot0{margin-bottom:0px}
</style>
<div id="card-content" class="hide clearfix">
	<div class="form-horizontal">
		<div class="form-group marbot0">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
			<div class="col-sm-9 col-xs-12">
				选择你要创建的卡券类型
			</div>
		</div>
		<div class="form-group marbot0">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
			<div class="col-sm-9 col-xs-12">
				<label class="radio-inline">
					<input type="radio" name="type" value="discount"/> 折扣券
				</label>
				<div class="help-block">可为用户提供消费折扣</div>
			</div>
		</div>
		<div class="form-group marbot0">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
			<div class="col-sm-9 col-xs-12">
				<label class="radio-inline">
					<input type="radio" name="type" value="cash"/> 代金券
				</label>
				<div class="help-block">可为用户提供抵扣现金服务。可设置成为“满*元，减*元”</div>
			</div>
		</div>
		<div class="form-group marbot0">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
			<div class="col-sm-9 col-xs-12">
				<label class="radio-inline">
					<input type="radio" name="type" value="gift"/> 礼品券
				</label>
				<div class="help-block">可为用户提供消费送赠品服务</div>
			</div>
		</div>
		<div class="form-group marbot0">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
			<div class="col-sm-9 col-xs-12">
				<label class="radio-inline">
					<input type="radio" name="type" value="groupon"/> 团购券
				</label>
				<div class="help-block">可为用户提供团购套餐服务</div>
			</div>
		</div>
		<div class="form-group marbot0">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
			<div class="col-sm-9 col-xs-12">
				<label class="radio-inline">
					<input type="radio" name="type" value="general_coupon"/> 优惠券
				</label>
				<div class="help-block">即“通用券”，建议当以上四种无法满足需求时采用</div>
			</div>
		</div>
	</div>
</div>
<div id="card-footer" class="hide">
	<span id="card-cancel" class="pull-right btn btn-default">取消</span>
	<span id="card-submit" class="pull-right btn btn-primary" style="margin-right:10px">确定</span>
</div>
<script>
	require(['util'], function(u){
		$('#add-card').click(function(){
			var obj = u.dialog('选择卡券类型', $('#card-content').html(), $('#card-footer').html());
			obj.modal('show');
			obj.find('#card-submit').click(function(){
				var type = $(':radio[name="type"]:checked').val();
				if(type) {
					location.href = "<?php  echo url('wechat/card/')?>" + 'f=post&do=' + type;
				} else {
					alert('请选择卡券类型');
				}
				return false;
			});
			obj.find('#card-cancel').click(function(){
				obj.modal('hide');
				return false;
			});
			return false;
		});
	});
</script>