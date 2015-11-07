<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<form class="form-horizontal form" id="" action="" method="post">
		<div class="panel panel-default">
			<div class="panel-heading">
				设置
			</div>
			<div class="panel-body">
				
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">引导关注素材链接</label>
					<div class="col-sm-8">
						<input class="form-control" name="subscribe_url" type="text" value="<?php  echo $settings['subscribe_url'];?>">&nbsp;&nbsp;设置一条引导关注的素材链接引导,用户关注公众号。例: <a href="javascript:;" data-toggle="modal" data-target="#subscribeurl">点击查看</a>
					</div>	
				</div>
			</div>
		</div>

		<div class="form-group col-sm-12">
			<input name="token" type="hidden" value="<?php  echo $_W['token'];?>" />
			<input type="submit" class="btn btn-primary col-lg-1" name="submit" value="提交" />
		</div>
	</form>
</div>
<div class="modal fade" id="subscribeurl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" style="width:740px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">引导关注示例</h4>
			</div>
			<div class="modal-body">
				<h4>引导关注素材示例页面</h4>
				<span class="help-block"><?php  echo date('Y-m-d', time());?>&nbsp;&nbsp;
				<a href="javascript:;"><?php  echo $_W['account']['name'];?></a></span>
				<img src="http://mmbiz.qpic.cn/mmbiz/H4e9icvgf3FWxcBqwf7R3gqMMtZWVzepD5FlCLf5K05Pllyy3FLiaGiamxYZMybQclGbuK4qg3ls46bfEM1lSVNKw/0" />
				<span class="help-block">欢迎关注<?php  echo $_W['account']['name'];?></span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<script language='javascript'>
	require(['jquery', 'util'], function($, u){
		$(function(){
			
		});
	});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>