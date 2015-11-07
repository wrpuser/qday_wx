<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<ul class="nav nav-tabs">
		<li<?php  if($_GPC['do'] == 'manage') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('manage');?>">大转盘管理</a></li>
		<li<?php  if($_GPC['do'] == 'post') { ?> class="active"<?php  } ?>><a href="<?php  echo url('platform/reply/post',array('m'=>'stonefish_bigwheel'));?>">添加大转盘规则</a></li>
		<li<?php  if($_GPC['do'] == 'fanslist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('fanslist',array('rid' => $rid));?>">参与粉丝</a></li>
		<li<?php  if($_GPC['do'] == 'awardlist') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('awardlist',array('rid' => $rid));?>">中奖名单</a></li>
		<?php  if($stonefish_branch) { ?><li<?php  if($_GPC['do'] == 'branch') { ?> class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('branch',array('rid' => $rid));?>">商家赠送项</a></li><?php  } ?>
		<li><a href="<?php  echo url('platform/reply/post',array('m'=>'stonefish_bigwheel', 'rid' => $rid));?>">编辑大转盘规则</a></li>
	</ul>
    <div class="panel panel-info">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
        	<input type="hidden" name="m" value="stonefish_bigwheel" />
        	<input type="hidden" name="do" value="fanslist" />
        	<input type="hidden" name="rid" value="<?php  echo $_GPC['rid'];?>" />
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">真实姓名</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<input class="form-control" name="realname" id="" type="text" value="<?php  echo $_GPC['realname'];?>" placeholder="真实姓名"> 
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">手机号码</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<input class="form-control" name="mobile" id="" type="text" value="<?php  echo $_GPC['mobile'];?>" placeholder="手机号码"> 
				</div>
			</div>			
			<div class="form-group">
				<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">状态</label>
				<div class="col-xs-12 col-sm-8 col-lg-9">
					<select name="status" class="form-control" style="float:left">
                    	<option value="" <?php  if($_GPC['status']=='') { ?>selected<?php  } ?>>全部</option>
                        <option value="1" <?php  if($_GPC['status']=='1') { ?>selected<?php  } ?>>已中奖</option>
                        <option value="2" <?php  if($_GPC['status']=='2') { ?>selected<?php  } ?>>已兑换</option>
						<option value="3" <?php  if($_GPC['status']=='3') { ?>selected<?php  } ?>>未兑换</option>
						<option value="4" <?php  if($_GPC['status']=='4') { ?>selected<?php  } ?>>未中奖</option>
						<option value="5" <?php  if($_GPC['status']=='5') { ?>selected<?php  } ?>>虚拟奖</option>
                	</select>
				</div>
                <div class=" col-xs-12 col-sm-2 col-lg-2">
					<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
	<div class="row-fluid">
    	<div class="span8 control-group">			
			<a class="btn btn-default<?php  if($_GPC['status']=='') { ?> btn-primary active<?php  } ?>" href="<?php  echo $this->createWebUrl('fanslist',array('rid'=>$rid))?>">全　部</a>
			<a class="btn btn-default<?php  if($_GPC['status']==1) { ?> btn-primary active<?php  } ?>" href="<?php  echo $this->createWebUrl('fanslist',array('rid'=>$rid,'status'=>1))?>">已中奖</a>
			<a class="btn btn-default<?php  if($_GPC['status']==2) { ?> btn-primary active<?php  } ?>" href="<?php  echo $this->createWebUrl('fanslist',array('rid'=>$rid,'status'=>2))?>">已兑换</a>
			<a class="btn btn-default<?php  if($_GPC['status']==3) { ?> btn-primary active<?php  } ?>" href="<?php  echo $this->createWebUrl('fanslist',array('rid'=>$rid,'status'=>3))?>">未兑换</a>
			<a class="btn btn-default<?php  if($_GPC['status']==4) { ?> btn-primary active<?php  } ?>" href="<?php  echo $this->createWebUrl('fanslist',array('rid'=>$rid,'status'=>4))?>">未中奖</a>
			<a class="btn btn-default<?php  if($_GPC['status']==5) { ?> btn-primary active<?php  } ?>" href="<?php  echo $this->createWebUrl('fanslist',array('rid'=>$rid,'status'=>5))?>">虚拟奖</a>
        </div>
    </div>
	<div class="alert" style="margin-bottom:0;">
		本次活动参与粉丝总数：<?php  echo $num1;?>个　　中奖数：<?php  echo $num2;?>个　　未兑换：<?php  echo $num3;?>个　　 已兑换：<?php  echo $num4;?>个　　 未中奖：<?php  echo $num5;?>个　　 虚拟中奖：<?php  echo $num6;?>个
	</div>
	<div class="row-fluid">
    	<div class="span8 control-group">
			<a class="btn btn-primary" href="<?php  echo $this->createWebUrl('download',array('rid'=>$rid,'status'=>$_GPC['status'],'fans'=>1))?>"><i class="fa fa-download"></i> 导出<?php  echo $statustitle;?>用户信息</a>
        </div>
    </div>
</div>
	<form method="post" class="form-horizontal" id="formfans">
	<input type="hidden" name="op" value="del" />
	<div style="position:relative">
		<div class="panel-body table-responsive">
			<table class="table table-hover" style="position:relative">
			<thead class="navbar-inner">
				<tr>
					<th style="width:50px;">删？</th>
					<th style="width:50px;">序号</th>
					<th style="width:100px;">真实姓名</th>
					<th style="width:120px;">手机号码</th>					
					<th style="width:150px;">中奖情况</th>
					<th style="width:120px;">状态</th>
					<th style="width:80px;">分享量</th>
					<th style="width:150px;">成功分享</th>
					<th style="width:150px;">参与时间</th>
					<th style="width:120px;">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php  if(is_array($list)) { foreach($list as $row) { ?>
				<tr>
					<td><input type="checkbox" name="uid[]" value="<?php  echo $row['id'];?>" class=""></td>
					<td><?php  echo $row['id'];?></td>
					<td><a href="javascript:void(0)" id="<?php  echo $row['id'];?>" class="btn btn-default btn-sm userinfo" style="width:100px;" data-toggle="tooltip" data-placement="top" title="用户兑奖参数项"><i class="fa fa-child"></i> <?php  echo $row['realname'];?></a></td>
					<td><?php  echo $row['mobile'];?></td>
					<td><?php  if($row['zhongjiang']==0) { ?>未中奖<?php  } else { ?><a href="javascript:void(0)" id="<?php  echo $row['id'];?>" class="btn btn-success btn-sm awardinfo" style="width:130px;" data-toggle="tooltip" data-placement="top" title="中奖详情"><i class="fa fa-gift"></i> 中奖详情[<?php  echo $row['awardinfo'];?>]</a><?php  } ?></td>
					<td><?php  if($row['zhongjiang']==0) { ?><span class="label label-default">未中奖
						<?php  } else if($row['zhongjiang']==1) { ?><span class="label label-warning">未兑奖
						<?php  } else { ?><span class="label label-success">已兑奖<?php  } ?>
						<?php  if($row['xuni']==0) { ?>/真实</span>
						<?php  } else { ?>/虚拟</span><?php  } ?></td>
					<td><?php  echo $row['sharenum'];?></td>
					<td><?php  if($row['share_num']==0) { ?>未成功分享<?php  } else { ?><a href="javascript:void(0)" id="<?php  echo $row['id'];?>" class="btn btn-success btn-sm sharenum" style="width:130px;" data-toggle="tooltip" data-placement="top" title="分享详情"><i class="fa fa-share-alt"></i> 分享详情[<?php  echo $row['share_num'];?>]</a><?php  } ?></td>
					<td><?php  echo date('Y/m/d H:i',$row['createtime']);?></td>
					<td>
						<a href="javascript:void(0)" id="<?php  echo $row['id'];?>" class="btn btn-default btn-sm manage" data-toggle="tooltip" data-placement="top" title="增加中奖"><i class="fa fa-gift"></i> 增加中奖</a>
					</td>
				</tr>
				<?php  } } ?>
				<tr>
					<td><input type="checkbox" name="" onclick="var ck = this.checked;$(':checkbox').each(function(){this.checked = ck});"></td>
					<td colspan="9"><input name="token" type="hidden" value="<?php  echo $_W['token'];?>" /><input type="submit" name="submit" class="btn btn-primary" value="删除选中的粉丝"></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</form>
</div>
<?php  echo $pager;?>
</div>
<div id="guanbi" class="hide">
	<span type="button" class="pull-right btn btn-primary" data-dismiss="modal" aria-hidden="true">关闭</span>
</div>
<script>
	require(['jquery', 'util'], function($, u){
		$('.manage').click(function(){
			var uid = parseInt($(this).attr('id'));
			$.get("<?php  echo url('site/entry/addaward',array('m' => 'stonefish_bigwheel','rid' => $rid))?>&uid=" + uid, function(data){
				if(data == 'dataerr') {
					u.message('未找到指定粉丝', '', 'error');
				} else {
					var obj = u.dialog('增加虚拟中奖奖项', data, $('#guanbi').html());
				}
				obj.modal('show');
			});
		})
		$('.awardinfo').click(function(){
			var uid = parseInt($(this).attr('id'));
			$.get("<?php  echo url('site/entry/awardfrom',array('m' => 'stonefish_bigwheel','rid' => $rid))?>&uid=" + uid, function(data){
				if(data == 'dataerr') {
					u.message('未找到指定粉丝', '', 'error');
				} else {
					var obj = u.dialog('中奖详细情况', data, $('#guanbi').html());
				}
				obj.modal('show');
			});
		})
		$('.userinfo').click(function(){
			var uid = parseInt($(this).attr('id'));
			$.get("<?php  echo url('site/entry/userinfo',array('m' => 'stonefish_bigwheel','rid' => $rid))?>&uid=" + uid, function(data){
				if(data == 'dataerr') {
					u.message('未找到指定粉丝资料', '', 'error');
				} else {
					var obj = u.dialog('粉丝资料兑奖参数', data, $('#guanbi').html());
				}
				obj.modal('show');
			});
		})
		$('.sharenum').click(function(){
			var uid = parseInt($(this).attr('id'));
			$.get("<?php  echo url('site/entry/sharelist',array('m' => 'stonefish_bigwheel','rid' => $rid))?>&uid=" + uid, function(data){
				if(data == 'dataerr') {
					u.message('未找到指定粉丝分享记录', '', 'error');
				} else {
					var obj = u.dialog('分享详细情况', data, $('#guanbi').html());
				}
				obj.modal('show');
			});
		})
		$('#formfans').submit(function(){
		    if($(":checkbox[name='uid[]']:checked").size() > 0){
			    var check = $(":checkbox[name='uid[]']:checked");
			    if( confirm("确认要删除选择的粉丝中奖记录?")){
		            var id = new Array();
				    var rid = <?php  echo $rid;?>;
		            check.each(function(i){
			            id[i] = $(this).val();
		            });
		            $.post('<?php  echo $this->createWebUrl('deletefans')?>', {idArr:id,rid:rid},function(data){
			        if (data.errno ==0){
						location.reload();
			        } else {
				        alert(data.error);
			        }
		            },'json');
		        }
		    }else{
		        u.message('没有选择粉丝', '', 'error');
		        return false;
		    }		    
	    });    
		
	});	
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>