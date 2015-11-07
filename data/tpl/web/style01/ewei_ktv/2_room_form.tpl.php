<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php  load()->func('tpl')?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common', TEMPLATE_INCLUDEPATH)) : (include template('common', TEMPLATE_INCLUDEPATH));?>
<div class="main">
<ul class="nav nav-tabs">
	<li><a href="<?php  echo $this->createWebUrl('ktv');?>">ktv管理</a></li>
	<li><a href="<?php  echo $this->createWebUrl('ktv', array('op'=>'edit','id' => $ktvid));?>">ktv编辑</a></li>
	<li <?php  if($_GPC['op'] == 'edit') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('room', array('op'=>'edit','ktvid' => $ktvid));?>">添加房型</a></li>
	<li <?php  if(empty($_GPC['op'])) { ?>class="active"<?php  } ?> ><a href="<?php  echo $this->createWebUrl('room', array('ktvid' => $rid));?>">房型管理</a></li>
</ul>
<form action="" class="form-horizontal form" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">
<input type="hidden" name="id" value="<?php  echo $item['id'];?>">
<div class="panel panel-default">
	<div class="panel-heading">
		<?php  if($_GPC['op'] == 'edit' && $_GPC['id'] != '') { ?>
		编辑房型
		<?php  } else { ?>
		添加房型
		<?php  } ?>
	</div>
	<div class="panel-body">
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">所属ktv</label>
			<div class="col-sm-9 col-xs-12">
				<input type='hidden' id='ktvid' name='ktvid' value="<?php  echo $ktv['id'];?>" />
				<div class='input-group'>
					<input type="text" name="ktv" maxlength="30" value="<?php  echo $ktv['title'];?>" id="ktv" class="form-control" readonly />
					<div class='input-group-btn'>
						<button class="btn btn-default" type="button" onclick="popwin = $('#modal-module-menus').modal();">选择ktv</button>
					</div>
				</div>
				<div id="modal-module-menus"  class="modal fade" tabindex="-1">
					<div class="modal-dialog" style='width: 920px;'>
						<div class="modal-content">
							<div class="modal-header"><button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button><h3>选择ktv</h3></div>
							<div class="modal-body" >
								<div class="row">
									<div class="input-group">
										<input type="text" class="form-control" name="keyword" value="" id="search-kwd" placeholder="请输入ktv名称" />
										<span class='input-group-btn'><button type="button" class="btn btn-default" onclick="search_ktvs();">搜索</button></span>
									</div>
								</div>
								<div id="module-menus" style="padding-top:5px;"></div>
							</div>
							<div class="modal-footer"><a href="#" class="btn btn-default" data-dismiss="modal" aria-hidden="true">关闭</a></div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">房型</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" name="title" id="title" value="<?php  echo $item['title'];?>" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">前台价(原价)</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" name="oprice" id="oprice" value="<?php  echo $item['oprice'];?>" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">优惠价(现价)</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" name="cprice" id="cprice" value="<?php  echo $item['cprice'];?>" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">会员价</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" name="mprice" id="mprice" value="<?php  echo $item['mprice'];?>" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">缩略图</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_image('thumb',$item['thumb'])?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">房型图片</label>
			<div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_multi_image('thumbs',$piclist)?>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">房间参数</label>
			<div class="col-sm-4">
				<div class="input-group">
                <span class="input-group-addon">
                    <label class='checkbox-inline' style='margin-top:-5px;' > <input type='checkbox' id='area_show' name="area_show" value="1" <?php  if($item['area_show']==1) { ?>checked<?php  } ?> /> 房间面积</label></span>
					<input type="text" name="area" id="area" class="form-control" value="<?php  echo $item['area'];?>" />
					<span class="input-group-addon">平方米</span>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="input-group">
                <span class="input-group-addon">
                    <label class='checkbox-inline' style='margin-top:-5px;' > <input type='checkbox' id='floor_show' name="floor_show" value="1" <?php  if($item['floor_show']==1) { ?>checked<?php  } ?>/> 楼层</label></span>
					<input type="text" name="floor" id="floor" class="form-control" value="<?php  echo $item['floor'];?>" />
					<span class="input-group-addon">楼</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">订房积分</label>
			<div class="col-sm-9 col-xs-12">
				<input type="text" name="score" id="score" class="form-control" value="<?php  echo $item['score'];?>" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">促销信息</label>
			<div class="col-sm-9 col-xs-12">
				<textarea style="height:100px;" id="sales" class="form-control" name="sales" cols="70" id="reply-add-text"><?php  echo $item['sales'];?></textarea>
				<span class="help-block">房间的促销信息（选填）</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">其他说明</label>
			<div class="col-sm-9 col-xs-12">
				<textarea style="height:100px;" id="device" class="form-control" name="device" cols="70" id="reply-add-text1"><?php  echo $item['device'];?></textarea>
				<span class="help-block">房间的特别说明（选填）</span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
			<div class="col-sm-9 col-xs-12">
				<label class="radio-inline">
					<input type="radio" name="status" value="1" <?php  if($item['status'] == 1) { ?>checked<?php  } ?>/>显示
				</label>
				<label class="radio-inline">
					<input type="radio" name="status" value="0" <?php  if($item['status'] == 0) { ?>checked<?php  } ?>/>隐藏
				</label>
				<span class='help-block'>手机前台是否显示</span>
			</div>
		</div>
	</div>
</div>
<div class="form-group col-sm-12">
	<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
	<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
</div>

</form>

<script type="text/javascript">
	// kindeditor($('.richtext-clone'));

	function search_ktvs() {
		$("#module-menus").html("正在搜索....")
		$.post('<?php  echo $this->createWebUrl('ktv',array('op'=>'query'));?>', {
			keyword: $.trim($('#search-kwd').val()),
			industry: $.trim($("#industry").val()),
			nature: $.trim($("#nature").val()),
			scale: $.trim($("#scale").val())
		}, function(dat){
			$('#module-menus').html(dat);
		});
	}
	function select_ktv(o) {
		$("#ktvid").val(o.id);
		$("#ktv").val( o.title );
		$(".close").click();
	}

	function formcheck() {
		if ($("#ktv").isEmpty()) {
			Tip.focus("ktv", "请选择所属ktv!", "right");
			return false;
		}
		if ($("#title").isEmpty()) {
			Tip.focus("title", "请填写房型名称!", "right");
			return false;
		}
		return true;
	}
	$(function(){

		$('.change_breakfast').click(function() {
			var value = $(this).val();
			var name = $("#title").val();
			var new_name = name.replace(/\[含早\]/g,'');

			if (value == 0) {
				$("#title").val(new_name);
			} else  {
				$("#title").val(new_name + "[含早]");
			}
		});
	});

</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
