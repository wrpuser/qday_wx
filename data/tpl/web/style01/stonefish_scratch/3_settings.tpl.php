<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="form1"> 
		<div class="alert alert-info">请根据自身活动设置选择不同的权限</div>
	    <div class="panel panel-default">
		<div class="panel-heading">预留参数</div>
			<div class="panel-body">
				<?php  if($stonefish_branch) { ?>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">商家网点权限</label>
					<div class="col-sm-9">
					    <label class="radio-inline">
					        <input type="radio" name="stonefish_scratch_num" value="0" <?php  if($settings['stonefish_scratch_num'] == 0) { ?> checked="checked"<?php  } ?>/>次数不可添加
					    </label>
						<label class="radio-inline">
					        <input type="radio" name="stonefish_scratch_num" value="1" <?php  if($settings['stonefish_scratch_num'] == 1) { ?> checked="checked"<?php  } ?>/>次数审核生效
					    </label>
						<label class="radio-inline">
					        <input type="radio" name="stonefish_scratch_num" value="2" <?php  if($settings['stonefish_scratch_num'] == 2) { ?> checked="checked"<?php  } ?>/>次数立即生效
					    </label>
						<div class="help-block"><strong>次数不可添加：</strong>商家网点只能添加人员，没有次数输入项目，需要管理员在活动中选项中再添加</div>
					    <div class="help-block"><strong>次数审核生效：</strong>商家网点添加的抽奖次数需要管理员审核后才能生效</div>
					    <div class="help-block"><strong>次数立即生效：</strong>商家网点添加的抽奖次数粉丝即可参与活动抽奖</div>
					</div>
				</div>
				<?php  } ?>
				<div class="form-group col-sm-12">
			        <input type="submit" name="submit" value="保存" class="btn btn-primary col-lg-1" />
			        <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		        </div>
			</div>
	    </div>
	
	</form>	
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>