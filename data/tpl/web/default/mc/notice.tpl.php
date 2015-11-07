<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<li><a href="<?php  echo url('mc/fans/display');?>">粉丝列表</a></li>
	<li class="active"><a href="javascript:;"><i class="icon-group"></i> 发送客服消息</a></li>
</ul>
<style>
	.infol{margin-left:15px;padding:5px;max-width:60%;}
	.infor{margin-right:15px;padding:5px;max-width:60%;}
	.pull-left,.pull-right{position:relative;}
	.alert{margin-bottom:5px;padding:5px}
	.more{cursor:pointer;}
</style>
<div class="clearfix">
	<div class="panel panel-default">
		<div class="panel-heading">
			和 <span class="text-danger"> <?php  echo $nickname;?> </span> 的聊天记录
		</div>
		<div class="panel-body" id="log" style="max-height:300px;overflow-y:scroll">
			<div id="more" data-id="<?php  echo $maxid;?>" class="text-center more text-info"><i class="fa fa-clock-o"></i> 查看更多消息</div>
			<div id="prev" data-id="<?php  echo $maxid;?>">
				<div id="position"></div>
			</div>
			<div id="last" data-id="<?php  echo $maxid;?>" style="margin-bottom:30px;"></div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			和 <span class="text-danger"> <?php  echo $nickname;?> </span> 的聊天
		</div>
		<div class="panel-body">
			<form action=""  class="form-horizontal" role="form" id="form0">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">消息类型</label>
					<div class="col-sm-10">
						<label class="radio-inline"><input type="radio" value="7" name="msgtype" checked>文本</label>
						<label class="radio-inline"><input type="radio" value="2" name="msgtype">图片</label>
						<label class="radio-inline"><input type="radio" value="3" name="msgtype">语音</label>
						<label class="radio-inline"><input type="radio" value="4" name="msgtype">视频</label>
						<label class="radio-inline"><input type="radio" value="5" name="msgtype">音乐</label>
						<label class="radio-inline"><input type="radio" value="6" name="msgtype">图文</label>
					</div>
				</div>
			</form>
			<form action="<?php  echo url('mc/notice/post')?>" method="post" class="form-horizontal reply" role="form" id="form7">
				<input type="hidden" name="msgtype" value="text">
				<input type="hidden" name="acid" value="<?php  echo $fans['acid'];?>">
				<input type="hidden" name="openid" value="<?php  echo $fans['openid'];?>">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">消息内容</label>
					<div class="col-sm-10">
						<textarea name="content" id="contentinput" class="form-control" cols="30" rows="2" placeholder="添加要回复的内容"></textarea>
						<div class="help-block">设置用户添加公众帐号好友时，发送的欢迎信息。<a href="javascript:;" id="content"><i class="fa fa-github-alt"></i> 表情</a></div>
					</div>
				</div>
			</form>
			<form action="<?php  echo url('mc/notice/post')?>" method="post" class="form-horizontal reply" role="form" id="form2" style="display:none;">
				<input type="hidden" name="msgtype" value="image">
				<input type="hidden" name="acid" value="<?php  echo $fans['acid'];?>">
				<input type="hidden" name="openid" value="<?php  echo $fans['openid'];?>">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">上传图片</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_wechat_image('media_id', '', '');?>
						<span class="help-block">请上传所要回复的图片</span>
					</div>
				</div>
			</form>
			<form action="<?php  echo url('mc/notice/post')?>" method="post" class="form-horizontal reply" role="form" id="form3" style="display:none;">
				<input type="hidden" name="msgtype" value="voice">
				<input type="hidden" name="acid" value="<?php  echo $fans['acid'];?>">
				<input type="hidden" name="openid" value="<?php  echo $fans['openid'];?>">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">上传语音</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_wechat_voice('media_id', '');?>
						<span class="help-block">请上传所要回复的语音</span>
					</div>
				</div>
			</form>
			<form action="<?php  echo url('mc/notice/post')?>" method="post" class="form-horizontal reply" role="form" id="form4" style="display:none;">
				<input type="hidden" name="msgtype" value="video">
				<input type="hidden" name="acid" value="<?php  echo $fans['acid'];?>">
				<input type="hidden" name="openid" value="<?php  echo $fans['openid'];?>">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">视频标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" class="form-control" placeholder="添加视频消息的标题" name="title" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">上传媒体缩略图</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_wechat_image('thumb_media_id', '', '', array('type' => 'thumb'));?>
						<span class="help-block">请上传所要回复的媒体缩略图，上传图片必须是JPG类型</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">上传视频</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_wechat_video('media_id', '');?>
						<span class="help-block">请上传所要回复的视频，上传视频必须是MP4类型</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">描述</label>
					<div class="col-sm-9 col-xs-12">
						<textarea style="height:80px;" class="form-control" cols="70" name="description" placeholder="添加视频消息的简短描述" ></textarea>
						<span class="help-block">描述内容将出现在视频名称下方，建议控制在20个汉字以内最佳</span>
					</div>
				</div>
			</form>
			<form action="<?php  echo url('mc/notice/post')?>" method="post" class="form-horizontal reply" role="form" id="form5" style="display:none;">
				<input type="hidden" name="msgtype" value="music">
				<input type="hidden" name="acid" value="<?php  echo $fans['acid'];?>">
				<input type="hidden" name="openid" value="<?php  echo $fans['openid'];?>">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">音频标题</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" class="form-control" placeholder="添加音乐消息的标题" name="title" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">上传媒体缩略图</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_image('thumb_media_id', '', '', array('tabs'=>array('remote'=>'active')));?>
						<span class="help-block">请上传所要回复的媒体缩略图，上传图片必须是JPG类型</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">音频链接</label>
					<div class="col-sm-9 col-xs-12">
						<?php  echo tpl_form_field_audio('musicurl', '', array(''));?>
						<span class="help-block">选择上传的音频文件或直接输入URL地址，常用格式：mp3</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">高品质链接</label>
					<div class="col-sm-9 col-xs-12">
						<input type="text" class="form-control" placeholder="" name="hqmusicurl">
						<span class="help-block">没有高品质音乐链接，请留空。高质量音乐链接，WIFI环境优先使用该链接播放音乐</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">描述</label>
					<div class="col-sm-9 col-xs-12">
						<textarea style="height:80px;" class="form-control" cols="70" name="description"placeholder="添加音乐消息的简短描述" ></textarea>
						<span class="help-block">描述内容将出现在音乐名称下方，建议控制在20个汉字以内最佳</span>
					</div>
				</div>
			</form>
			<form action="<?php  echo url('mc/notice/post')?>" method="post" class="form-horizontal reply" role="form" id="form6" style="display:none">
				<input type="hidden" name="msgtype" value="news">
				<input type="hidden" name="acid" value="<?php  echo $fans['acid'];?>">
				<input type="hidden" name="openid" value="<?php  echo $fans['openid'];?>">
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">关联关键字:</label>
					<div class="col-sm-9 col-xs-12" style="position:relative">
						<div class="input-group">
							<input type="hidden" name="ruleid" class="form-control" id="ruleid" value="" />
							<input type="text" name="keyword" class="form-control" id="keywordinput" value="" placeholder="可根据关键字直接关联指定的回复规则" autocomplete="off" />
							<div class="input-group-btn">
								<span class="btn btn-primary" id="keyword_search"><i class="fa fa-search"></i> 搜索</span>
							</div>
						</div>
						<div id="keyword_menu" style="width:100%;position:absolute;top:35px;left:16px;display:none;z-index:10000">
							<ul class="dropdown-menu" style="display:block;width:91%;height:400px;overflow-y:scroll;"></ul>
						</div>
						<div class="help-block">请选择"图文消息"关联关键字。</div>
						<div class="help-block">发送图文消息仅支持关联已添加的图文关键字</div>
					</div>
				</div>
			</form>

			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
				<div class="col-sm-10">
					<input type="submit" class="btn btn-primary" name="submit" value="立即发送" id="submit"/>
					<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php  echo url('mc/notice/end', array('fanid' => $fanid, 'from' => base64_encode($_SERVER['HTTP_REFERER'])))?>" class="btn btn-danger">关闭</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php  echo $_SERVER['HTTP_REFERER'];?>" class="btn btn-default">返回</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
		function ajax_chats_log() {
			var id = $('#last').attr('data-id');
			var fanid = "<?php  echo $fanid;?>";
			$.post("<?php  echo url('mc/notice/log')?>", {'id' : id, 'fanid' : fanid, 'type' : 'asc'}, function(data) {
				data = $.parseJSON(data);
				if(data.code == 1) {
					$('#last').attr('data-id', data.id);
					$('#last').append(data.str);
					$('#log').scrollTop(100000000000);
				}
				setTimeout(ajax_chats_log, 3000);
			});
		}
		ajax_chats_log();

		$('#more').click(function(){
			var oldhtml = $(this).html();
			$(this).html('<i class="fa fa-spinner"></i> 加载中');
			var id = $('#prev').attr('data-id');
			var fanid = "<?php  echo $fanid;?>";
			$.post("<?php  echo url('mc/notice/log')?>", {'id' : id, 'fanid' : fanid, 'type' : 'desc'}, function(data) {
				data = $.parseJSON(data);
				if(data.code == 1) {
					$('#more').html(oldhtml);
					$('#prev').attr('data-id', data.id);
					$('#position').after(data.str);
					$('#log').scrollTop(-100);
				} else {
					$('#more').html('<i class="fa fa-info-circle"></i> 已加载全部');
				}
			});
		});

		util.emotion($("#content"), $("#contentinput")[0]);
		function select_keyword(clickid, menuid, inputid, ruleid){
			$(clickid).click(function(){
				var search_value = $(inputid).val();
				$('body').append('<div class="layer_bg"></div>');
				$('.layer_bg').height($(document).height());
				$('.layer_bg').css({width : '100%', position : 'absolute', top : '0', left : '0', 'z-index' : '0'});
				$.post("<?php  echo url('mc/notice/keyword')?>", {'key_word' : search_value}, function(data){
					var data = $.parseJSON(data);
					var total = data.length;
					var html = '';
					if(total > 0) {
						for(var i = 0; i < total; i++) {
							html += '<li><a href="javascript:;" id="'+ data[i]['rid'] +'">' + data[i]['content'] + '</a></li>';
						}
					} else {
						html += '<li><a href="javascript:;" class="no-result">没有匹配到您输入的关键字</a></li>';
					}
					$(menuid + ' ul').html(html);
					$(menuid + ' ul li a[class!="no-result"]').click(function(){
						$('.layer_bg').remove();
						$(inputid).val($(this).html());
						$(ruleid).val($(this).attr('id'));
						$(menuid).hide();
					});
					$(menuid).show();
				});
				$('.layer_bg').click(function(){
					$(menuid).hide();
					$(this).remove();
				});

			});
			$(inputid).keydown(function(event){
				if(event.keyCode == 13){
					$(clickid).click();
					return false;
				}
			});
		}
		select_keyword('#keyword_search', '#keyword_menu', '#keywordinput', '#ruleid');

		$('#form0 :radio').click(function(){
			$('.reply').hide();
			var msgtype =  $('#form0 :radio:checked').val();
			$('#form' + msgtype).show();
		});
		$('#submit').click(function(){
			var openid = $(':hidden[name="openid"]').val();
			var acid = $(':hidden[name="acid"]').val();
			if(!openid) {
				util.message('粉丝openid丢失', '', 'error');
				return;
			}

			var params = {
				'openid' : openid,
				'acid' : acid
			};

			var msgtype = $('#form0 :radio:checked').val();
			if(msgtype == '7') {
				var content = $('#form7 textarea[name="content"]').val();
				if(!content) {
					util.message('请完善消息内容', '', 'error');
					return;
				}
				params.content = content;
				params.msgtype = 'text';
			} else if (msgtype == '2') {
				var media_id = $('#form2 :text[name="media_id"]').val();
				if(!media_id) {
					util.message('请上传图片', '', 'error');
					return;
				}
				params.media_id = media_id;
				params.msgtype = 'image';
			} else if (msgtype == '3') {
				var media_id = $('#form3 :text[name="media_id"]').val();
				if(!media_id) {
					util.message('请上传语音消息', '', 'error');
					return;
				}
				params.media_id = media_id;
				params.msgtype = 'voice';
			} else if (msgtype == '4') {
				var media_id = $('#form4 :text[name="media_id"]').val();
				var thumb_media_id = $('#form4 :text[name="thumb_media_id"]').val();
				if(!thumb_media_id) {
					util.message('请上传媒体缩略图', '', 'error');
					return;
				}
				if(!media_id) {
					util.message('请上传视频消息', '', 'error');
					return;
				}
				params.msgtype = 'video';
				params.media_id = media_id;
				params.thumb_media_id = thumb_media_id;
				params.title = $('#form4 :text[name="title"]').val();
				params.description = $('#form1 textarea[name="description"]').val();
			} else if (msgtype == '5') {
				var thumb_media_id = $('#form5 :text[name="thumb_media_id"]').val();
				var musicurl = $('#form5 :text[name="musicurl"]').val();
				var hqmusicurl = $('#form5 :text[name="hqmusicurl"]').val();
				if(!thumb_media_id) {
					util.message('请上传媒体缩略图', '', 'error');
					return;
				}
				if(!musicurl) {
					util.message('请上传音频文件或填写音频链接', '', 'error');
					return;
				}
				params.msgtype = 'music';
				params.thumb_media_id = thumb_media_id;
				params.musicurl = musicurl;
				params.hqmusicurl = hqmusicurl;
				params.title = $('#form4 :text[name="title"]').val();
				params.description = $('#form1 textarea[name="description"]').val();
			} else if (msgtype == '6') {
				var ruleid = $('#ruleid').val();
				var keyword = $('#keywordinput').val();
				if(!ruleid || !keyword) {
					util.message('选择图文消息关联的关键字', '', 'error');
					return;
				}
				params.msgtype = 'news';
				params.keyword = keyword;
				params.ruleid = ruleid;
			}
			var url = "<?php  echo url('mc/notice/post')?>";
			$.post(url, params, function(data){
				try{data = $.parseJSON(data);}catch (e) {eval(data);}
				if(data.type) {
					util.message(data.message, '', 'error');
					return;
				}
				if(data.status == 'error') {
					util.message(data.message, '', 'error');
					return;
				} else if(data.status == 'success') {
					$("input:text").val('');
					$("textarea").val('');
					$('.input-group img').attr('src', './resource/images/nopic.jpg');
					//util.message(data.message, '', 'success');
					return;
				}
			});
			return;
		});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
