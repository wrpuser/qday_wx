<?php defined('IN_IA') or exit('Access Denied');?>		<?php  if(empty($footer_off)) { ?>
			<div class="text-center footer" style="margin:10px 0; width:100%; text-align:center; word-break:break-all;">
				<?php  if(!empty($_W['page']['footer'])) { ?>
					<?php  echo $_W['page']['footer'];?>
				<?php  } else { ?>
					<?php  if(IMS_FAMILY != 'x') { ?><a href="http://www.qdaygroup.com">关于情天</a>&nbsp;&nbsp;<a href="http://www.qdaygroup.com">情天帮助</a><?php  } ?>
				<?php  } ?>
				&nbsp;&nbsp;<?php  echo $_W['setting']['copyright']['statcode'];?>
			</div>
		<?php  } ?>
		<?php  if(!empty($_W['quickmenu']['menus']) && empty($_W['quickmenu']['disabled'])) { ?>
			<?php  include_once template($_W['quickmenu']['template'], TEMPLATE_INCLUDEPATH);?>
		<?php  } ?>
		<script>require(['bootstrap']);</script>
	</div>
	<style>
		h5{color:#555;}
	</style>
<?php
	$_share['title'] = !empty($_share['title']) ? $_share['title'] : $_W['account']['name'];
	$_share['imgUrl'] = !empty($_share['imgUrl']) ? $_share['imgUrl'] : '';
	if(isset($_share['content'])){
		$_share['desc'] = $_share['content'];
		unset($_share['content']);
	}
	$_share['desc'] = !empty($_share['desc']) ? $_share['desc'] : '';
	$_share['desc'] = preg_replace('/\s/i', '', str_replace('	', '', cutstr(str_replace('&nbsp;', '', ihtmlspecialchars(strip_tags($_share['desc']))), 60)));
	if(empty($_share['link'])) {
		$_share['link'] = '';
		$query_string = $_SERVER['QUERY_STRING'];
		if(!empty($query_string)) {
			//加上分享人的uid
			parse_str($query_string, $query_arr);
			$query_arr['u'] = $_W['member']['uid'];
			$query_string = http_build_query($query_arr);
			$_share['link'] = $_W['siteroot'].'app/index.php?'. $query_string;
		}
	}
?>
	<script type="text/javascript">
	
	wx.config(jssdkconfig);
	
	var $_share = <?php  echo json_encode($_share);?>;
	
	if(typeof sharedata == 'undefined'){
		sharedata = $_share;
	} else {
		sharedata['title'] = sharedata['title'] || $_share['title'];
		sharedata['desc'] = sharedata['desc'] || $_share['desc'];
		sharedata['link'] = sharedata['link'] || $_share['link'];
		sharedata['imgUrl'] = sharedata['imgUrl'] || $_share['imgUrl'];
	}

	function tomedia(src) {
		if(typeof src != 'string')
			return '';
		if(src.indexOf('http://') == 0 || src.indexOf('https://') == 0) {
			return src;
		} else if(src.indexOf('../addons') == 0 || src.indexOf('../attachment') == 0) {
			src=src.substr(3);
			return window.sysinfo.siteroot + src;
		} else if(src.indexOf('./resource') == 0) {
			src=src.substr(2);
			return window.sysinfo.siteroot + 'app/' + src;
		} else if(src.indexOf('images/') == 0) {
			return window.sysinfo.attachurl+ src;
		}
	}
	
	if(sharedata.imgUrl == ''){
		var _share_img = $('body img:eq(0)').attr("src");
		if(_share_img == ""){
			sharedata['imgUrl'] = window.sysinfo.attachurl + 'images/global/wechat_share.png';
		} else {
			sharedata['imgUrl'] = tomedia(_share_img);
		}
	}
	
	if(sharedata.desc == ''){
		var _share_content = _removeHTMLTag($('body').html());
		if(typeof _share_content == 'string'){
			sharedata.desc = _share_content.replace($_share['title'], '')
		}
	}
	
	wx.ready(function () {
		wx.onMenuShareAppMessage(sharedata);
		wx.onMenuShareTimeline(sharedata);
		wx.onMenuShareQQ(sharedata);
		wx.onMenuShareWeibo(sharedata);
	});
	<?php  if($controller == 'site' && $action == 'site') { ?>
		$('#category_show').click(function(){
			$('.head .order').toggleClass('hide');
			return false;
		});
		//文章点击和分享加积分
		<?php  if(!empty($_GPC['u'])) { ?>
			var url = "<?php  echo url('site/site/handsel/', array('id' => $detail['id'], 'action' => 'click', 'u' => $_GPC['u']), true);?>";
			$.post(url, function(dat){});
		<?php  } ?>
		sharedata.success = function(){
			var url = "<?php  echo url('site/site/handsel/', array('id' => $detail['id'], 'action' => 'share'));?>";
			$.post(url, function(dat){});
		}
	<?php  } ?>
	</script>
	<script>
		require(['jquery'],function(){
			$(function(){
				if($('.quick')!=null && $('.quick')!=''){
					var h = $('.quick').height()+'px';
					$('body').css("padding-bottom",h);
				}else{
					$('body').css("padding-bottom", "0");
				}
			})
		});
	</script>
</body>
</html>
