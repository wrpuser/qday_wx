<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common', TEMPLATE_INCLUDEPATH)) : (include template('common', TEMPLATE_INCLUDEPATH));?>
<?php  load()->func('tpl')?>
<input type="hidden" name="reply_id" value="<?php  echo $reply['id'];?>" />
<div class="panel panel-default">
    <div class="panel-heading">
        活动设置
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 活动名称</label>
            <div class="col-sm-9 col-xs-12">
               	<input type="text" id="title" class="form-control" placeholder="" name="title" value="<?php  echo $reply['title'];?>">
            </div>
        </div>
 		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 活动图片</label>
            <div class="col-sm-9 col-xs-12">
               	<?php  echo tpl_form_field_image('start_picurl',$reply['start_picurl']);?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 活动说明</label>
            <div class="col-sm-9 col-xs-12">
               	<textarea style="height:60px;" id='description' name="description" class="form-control" cols="60"><?php  echo $reply['description'];?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 活动时间</label>
            <div class="col-sm-9 col-xs-12">
               	<?php  echo tpl_form_field_daterange('datelimit', array('starttime'=>date('Y-m-d',$reply['starttime']),'endtime'=>date('Y-m-d',$reply['endtime'])))?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 兑奖信息</label>
            <div class="col-sm-9 col-xs-12">
               		<input type="text" id="ticket_information" class="form-control" placeholder="" name="ticket_information" value="<?php  echo $reply['ticket_information'];?>">
                                       <div class="help-block">例如: 兑奖请联系我们，电话 13xxxxxxxxx</div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 重复抽奖信息</label>
            <div class="col-sm-9 col-xs-12">
                <input type="text" id="repeat_lottery_reply" class="form-control" placeholder="" name="repeat_lottery_reply" value="<?php  echo $reply['repeat_lottery_reply'];?>">
				<div class="help-block">如果设置只允许抽一次奖的，可写：你已经玩过了，下次再来。 如果设置可多次抽奖，请写：继续努力哦！</div>
            </div>
        </div>
           <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">必须关注</label>
            <div class="col-sm-9 col-xs-12">
               <label class='radio-inline' >
                            <input type='radio' name='follow' value='1' <?php  if($reply['follow']==1) { ?>checked<?php  } ?> /> 必须关注
                        </label>
                        <label class='radio-inline' >
                            <input type='radio' name='follow' value='0' <?php  if($reply['follow']==0) { ?>checked<?php  } ?> /> 不需要关注
                        </label>
                	<div class="help-block">玩刮刮卡游戏，是否必须关注, 不需要关注的话，需要填写您的号是认证服务号或者借用 oauth2 高级接口</div>
            </div>
        </div>
        
           <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">引导关注链接</label>
            <div class="col-sm-9 col-xs-12">
               	<input type="text" id="share_url" class="form-control" placeholder="" name="share_url" value="<?php  echo $reply['share_url'];?>">
                	<div class="help-block">引导关注的链接! 推荐用微信平台的素材库，转成短地址。<a target="_blank" href="http://www.dwz.cn/">短网址转换</a></div>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">版权信息</label>
            <div class="col-sm-9 col-xs-12">
                    <input type="text" id="copyright" class="form-control" placeholder="" name="copyright" value="<?php  echo $reply['copyright'];?>">
		<div class="help-block">版权信息，如果不填写，默认为公众号名称！</div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        活动结束设置
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 结束标题</label>
            <div class="col-sm-9 col-xs-12">
               	<input type="text" id="end_theme" class="form-control" placeholder="" name="end_theme" value="<?php  echo $reply['end_theme'];?>">
            </div>
        </div>
 		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 结束图片</label>
            <div class="col-sm-9 col-xs-12">
               	<?php  echo tpl_form_field_image('end_picurl',$reply['end_picurl']);?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 结束说明</label>
            <div class="col-sm-9 col-xs-12">
               	<textarea style="height:60px;" id='end_instruction' name="end_instruction" class="form-control" cols="60"><?php  echo $reply['end_instruction'];?></textarea>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        活动详细设置
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span> 奖品设置</label>
            <div class="col-sm-9 col-xs-12">
				<div class="panel panel-default">
               	<div class="panel-body table-responsive">
						<table class='table'>
							<thead>
								<tr>
									<th>奖品类别(10字以内)</th>
									<th>奖品名称(50字以内)</th>
									<th>奖品数量</th>
                                    <th>中奖概率(%)</th>
								</tr>
							</thead>
							<tbody id="re-items">
							<tr id='c_one'>
								<td><input id="c_type_one" name="c_type_one" type="text" class="form-control" value="<?php  echo $reply['c_type_one'];?>" maxlength="10" placeholder='例如:一等奖' style="width:100px;"/></td>
								<td><input id="c_name_one" name="c_name_one" type="text" class="form-control" value="<?php  echo $reply['c_name_one'];?>"  maxlength="50"/></td>
								<td><input id="c_num_one"  name="c_num_one" type="text" class="form-control" value="<?php  echo $reply['c_num_one'];?>" /></td>
								<td><input id="c_rate_one"  name="c_rate_one" type="text" class="form-control" value="<?php  echo $reply['c_rate_one'];?>" /></td>
							</tr>
							<tr id='c_two'>
								<td><input id="c_type_two" name="c_type_two" type="text" class="form-control" value="<?php  echo $reply['c_type_two'];?>" placeholder='例如:二等奖' maxlength="10" style="width:100px;"/></td>
								<td><input id="c_name_two" name="c_name_two" type="text" class="form-control" value="<?php  echo $reply['c_name_two'];?>"  maxlength="50"/></td>
								<td><input id="c_num_two"  name="c_num_two" type="text" class="form-control" value="<?php  echo $reply['c_num_two'];?>"/></td>
								<td><input id="c_rate_two"  name="c_rate_two" type="text" class="form-control" value="<?php  echo $reply['c_rate_two'];?>" /></td>
							</tr>
							<tr id='c_three'>
								<td><input id="c_type_three" name="c_type_three" type="text" class="form-control" value="<?php  echo $reply['c_type_three'];?>" maxlength="10" placeholder='例如:三等奖' style="width:100px;"/></td>
								<td><input id="c_name_three" name="c_name_three" type="text" class="form-control" value="<?php  echo $reply['c_name_three'];?>"  maxlength="50"/></td>
								<td><input id="c_num_three"  name="c_num_three" type="text" class="form-control" value="<?php  echo $reply['c_num_three'];?>"/></td>
								<td><input id="c_rate_three"  name="c_rate_three" type="text" class="form-control" value="<?php  echo $reply['c_rate_three'];?>" /></td>
							</tr>
							<tr id='c_four'>
								<td><input id="c_type_four" name="c_type_four" type="text" class="form-control" value="<?php  echo $reply['c_type_four'];?>" maxlength="10" placeholder='例如:四等奖' style="width:100px;"/></td>
								<td><input id="c_name_four" name="c_name_four" type="text" class="form-control" value="<?php  echo $reply['c_name_four'];?>" maxlength="50"/></td>
								<td><input id="c_num_four"  name="c_num_four" type="text" class="form-control" value="<?php  echo $reply['c_num_four'];?>"/></td>
								<td><input id="c_rate_four"  name="c_rate_four" type="text" class="form-control" value="<?php  echo $reply['c_rate_four'];?>" /></td>
							</tr>
							<tr id='c_five'>
								<td><input id="c_type_five" name="c_type_five" type="text" class="form-control" value="<?php  echo $reply['c_type_five'];?>" placeholder='例如:纪念奖' maxlength="10" style="width:100px;"/></td>
								<td><input id="c_name_five" name="c_name_five" type="text" class="form-control" value="<?php  echo $reply['c_name_five'];?>"  maxlength="50"/></td>
								<td><input id="c_num_five"  name="c_num_five" type="text" class="form-control" value="<?php  echo $reply['c_num_five'];?>"/></td>
								<td><input id="c_rate_five"  name="c_rate_five" type="text" class="form-control" value="<?php  echo $reply['c_rate_five'];?>" /></td>
							</tr>
							<tr id='c_six'>
								<td><input id="c_type_six" name="c_type_six" type="text" class="form-control" value="<?php  echo $reply['c_type_six'];?>" placeholder='例如:参与奖' maxlength="10" style="width:100px;"/></td>
								<td><input id="c_name_six" name="c_name_six" type="text" class="form-control" value="<?php  echo $reply['c_name_six'];?>" maxlength="50"/></td>
								<td><input id="c_num_six"  name="c_num_six" type="text" class="form-control" value="<?php  echo $reply['c_num_six'];?>"/></td>
								<td><input id="c_rate_six"  name="c_rate_six" type="text" class="form-control" value="<?php  echo $reply['c_rate_six'];?>" /></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
            </div>
        </div>
 		<div class="form-group">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label">每人最多获奖次数</label>
            <div class="col-sm-5 col-xs-6">
               	<div class="input-group">
					<input type="text" class="form-control" name="award_times" value="<?php  echo $reply['award_times'];?>" />
					<span class="input-group-addon">次</span>
				</div>
				<div class="help-block">单个用户最多共享几个奖项，0为不限制，推荐设置为1次!</div>
            </div>
        </div>
     	<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">每人最多抽奖次数</label>
            <div class="col-sm-5 col-xs-6">
               	<div class="input-group">
					<input type="text" class="form-control" name="number_times" value="<?php  echo $reply['number_times'];?>" />
					<span class="input-group-addon">次</span>
				</div>
				<div class="help-block">抽奖总次数限制,0为不限制</div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">每人每天最多抽奖次数</label>
            <div class="col-sm-5 col-xs-6">
               	<div class="input-group">
					<input type="text" class="form-control" name="most_num_times" value="<?php  echo $reply['most_num_times'];?>" />
					<span class="input-group-addon">次</span>
				</div>
				<div class="help-block">必须小于总抽奖次数！ 0 为不限制 抽完总数就不能抽了! 可以抽奖天数 = 总数/每天抽奖次数!</div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>SN码重命名</label>
            <div class="col-sm-9 col-xs-12">
            	<input type="text" id="sn_rename" class="form-control" placeholder="" name="sn_rename" value="<?php  echo $reply['sn_rename'];?>">
				<div class="help-block">例如：CND码,充值密码,SN码 这个主意用于修改SN码的名称,你导入自己的SN码可以是充值密码 你就可以设为 充值密码 </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>手机号重命名</label>
            <div class="col-sm-9 col-xs-12">
               	<input type="text" id="tel_rename" class="form-control" placeholder="" name="tel_rename" value="<?php  echo $reply['tel_rename'];?>">
				<div class="help-block">例如：QQ号,微信号,手机号,,邮寄地址! 不懂请默认设置手机号! 此字段主要收集用户的信息方便联系</div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>显示奖品数量</label>
            <div class="col-sm-9 col-xs-12">
               	<label class="radio-inline">
                	<input type="radio" name="show_num" value="1" <?php  if($reply['show_num'] == 1) { ?> checked="checked"<?php  } ?>/>显示
                </label>
                <label class="radio-inline">
                	<input type="radio" name="show_num" value="2" <?php  if($reply['show_num'] == 2) { ?> checked="checked"<?php  } ?>/>不显示
                </label>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        分享设置
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享标题</label>
            <div class="col-sm-9 col-xs-12">
               	<input type="text" id="share_title" class="form-control" placeholder="" name="share_title" value="<?php  echo $reply['share_title'];?>">
            </div>
        </div>
     
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享描述</label>
            <div class="col-sm-9 col-xs-12">
     	<textarea style="height:60px;" id='share_desc' name="share_desc" class="form-control" cols="60"><?php  echo $reply['share_desc'];?></textarea>
            </div>
        </div>
    </div>
</div>
<script language='javascript'>
    
     $('form').submit(function(){

   if($("#title").isEmpty()){
		Tip.focus("title","请输入活动名称!","right");
		return false;
   }
  
    if($("#ticket_information").isEmpty()){
		Tip.focus("ticket_information","请输入兑奖信息!","right");
		return false;
   }
   if($("#repeat_lottery_reply").isEmpty()){
		Tip.focus("repeat_lottery_reply","请输入重复抽奖信息!","right");
		return false;
   }
  
   if($("#c_type_one").isEmpty()){	Tip.focus("c_type_one","请输入奖品类别!","left");	return false;  }
   if($("#c_name_one").isEmpty()){	Tip.focus("c_name_one","请输入奖品名称!","bottom");	return false;  }
   if($("#c_num_one").isEmpty()){	Tip.focus("c_num_one","请输入奖品数量!","right");	return false;  }

     if(!$("#c_type_two").isEmpty()){
         if($("#c_name_two").isEmpty()){	Tip.focus("c_name_two","请输入奖品名称!","left");	return false;  }
         if($("#c_num_two").isEmpty()){	Tip.focus("c_num_two","请输入奖品数量!","right");	return false;  }
     }
     if(!$("#c_type_three").isEmpty()){
         if($("#c_name_three").isEmpty()){	Tip.focus("c_name_three","请输入奖品名称!","left");	return false;  }
         if($("#c_num_three").isEmpty()){	Tip.focus("c_num_three","请输入奖品数量!","right");	return false;  }
     }
     if(!$("#c_type_four").isEmpty()){
         if($("#c_name_four").isEmpty()){	Tip.focus("c_name_four","请输入奖品名称!","left");	return false;  }
         if($("#c_num_four").isEmpty()){	Tip.focus("c_num_four","请输入奖品数量!","right");	return false;  }
     }
     if(!$("#c_type_five").isEmpty()){
         if($("#c_name_five").isEmpty()){	Tip.focus("c_name_five","请输入奖品名称!","left");	return false;  }
         if($("#c_num_five").isEmpty()){	Tip.focus("c_num_five","请输入奖品数量!","right");	return false;  }
     }
     if(!$("#c_type_six").isEmpty()){
         if($("#c_name_six").isEmpty()){	Tip.focus("c_name_six","请输入奖品名称!","left");	return false;  }
         if($("#c_num_six").isEmpty()){	Tip.focus("c_num_six","请输入奖品数量!","right");	return false;  }
     }



     if($("#sn_rename").isEmpty()){
		Tip.focus("sn_rename","请输入SN码重命名!","right");
		return false;
   }
   if($("#tel_rename").isEmpty()){
		Tip.focus("tel_rename","请输入电话重命名!","right");
		return false;
   }
   return true;
});
 function moreItem() {
	 var more = $("#more_item").val();
	 if(more=="0" || more==""){
	    $("#c_four").show();
	    $("#c_five").show();
	    $("#c_six").show();
	 }
	 else{
	    $("#c_four").hide();
	    $("#c_five").hide();
	    $("#c_six").hide();
	 }
	 $("#more_item").val(more=='1'?'0':'1');
}
function doDeleteItemImage(obj,id) {
		var filename = $('input#' + id+"-value").val();
		$('.' + id +"_preview").html("");
		$(obj).html("正在删除...").attr("disabled",true);
 		   ajaxopen('./index.php?act=attachment&do=delete&filename=' + filename, function(){
		   $(obj).html("<i class='icon-upload-alt'></i> 删除").hide().removeAttr("disabled");
		});
	}
        
        
    require(['jquery', 'util'], function($, u){
		$(function(){
			//u.editor($('.richtext')[0]);
		});
            });
    
</script>

