<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
		<li class="active"><a href="###">余额导入</a></li>
	</ul>

	<form action="" class="form-horizontal form" method="post" enctype="multipart/form-data">
		<div class="panel panel-default">
			<div class="panel-heading">会员余额导入</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">说明</label>
					<div class="col-sm-8">
						<span class="help-block">
							<strong class="text-danger">应用场景: </strong>有线下会员系统且无法提供接口同步余额信息到此系统！<br />
							<strong class="text-danger">匹配标准: </strong>目前是通过电话栏目进行一对一匹配<br />
							<strong class="text-danger">支持文件: </strong>仅支持EXCEL（.xls和.xlsx）文件！<br />
							<strong class="text-danger">文件格式: </strong>A列：姓名，B列：电话，C列：余额！从第二行开始为有效数据，如下图：<br /><img src="<?php echo MODULE_URL;?>template/tpl.jpg" /><br />
						</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">文件</label>
					<div class="col-sm-8">
						<input type="file" name="file" value="" />
						<span class="help-block"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">强制更新</label>
					<div class="col-sm-8">
						<label class="checkbox-inline">
							<input type="checkbox" value="1" name="force" checked /> 强制更新余额为EXCEL表中的余额！
						</label>
						<span class="help-block">
							强制更新表示如果会员有余额则不更新!
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-12">
				<button type="submit" class="btn btn-primary col-lg-1" name="submit" value="提交">提交</button>
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
			</div>
		</div>
	</form>

	</div>
<script type="text/javascript">
function message(msg){
    require(['util'],function(util){
        util.message(msg);
    })
}
$(function(){
	$('form').submit(function(){
		if($.trim($('input[name="file"]').val()) == '') {
			message('必须上传更新文件.', '', 'error');
			return false;
		}
		if( !confirm('你确认导入数据格式正确，此操作不可恢复！\n\n请谨慎操作！') ){
			return false;
		}
		return true;
	});
});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
