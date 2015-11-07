<?php defined('IN_IA') or exit('Access Denied');?><input type="hidden" name="reply_id" value="<?php  echo $reply['id'];?>" />
<?php  if($reply['id']) { ?>
<div class="panel panel-default">
    <div class="panel-heading">
        活动数据
    </div>
	<div class="panel-body">
	<div class="row-fluid">
    	<div class="span8 control-group">
			<a class="btn btn-default" href="<?php  echo $this->createWebUrl('fanslist',array('name'=>'bigwheel', 'rid' => $rid));?>">参与粉丝</a>
			<a class="btn btn-default" href="<?php  echo $this->createWebUrl('awardlist',array('name'=>'bigwheel', 'rid' => $rid));?>">中奖名单</a>
			<?php  if($stonefish_branch) { ?><a class="btn btn-default" href="<?php  echo $this->createWebUrl('branch',array('rid' => $rid));?>">商家赠送项</a><?php  } ?>
        </div>
    </div>
    </div>
</div>
<?php  } ?>
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
               	<?php  echo tpl_form_field_daterange('datelimit', array('start'=>date('Y-m-d H:i',$reply['starttime']),'end'=>date('Y-m-d H:i',$reply['endtime'])), true)?>
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
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label"> 刮刮卡刮开显示类型</label>
            <div class="col-sm-9 col-xs-6">
               	<div class="input-group">
					<label for="notaward1" class="radio-inline">
					    <input type="radio" name="notaward" value="0" id="notaward1" <?php  if(empty($reply) || $reply['notaward'] == 0) { ?>checked="true"<?php  } ?> onclick="$('#notawardpic').hide();$('#notawardtext').show();"/> 提示文字
					</label>
					<label for="notaward2" class="radio-inline">
					    <input type="radio" name="notaward" value="1" id="notaward2" <?php  if(empty($reply) || $reply['notaward'] == 1) { ?>checked="true"<?php  } ?> onclick="$('#notawardpic').show();$('#notawardtext').hide();"/> 提示图片
					</label>
				</div>				
            </div>
        </div>
		<div class="form-group" id="notawardtext"<?php  if(empty($reply) || $reply['notaward'] == 1) { ?> style="display: none;"<?php  } ?>>
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 未中奖提示语</label>
            <div class="col-sm-9 col-xs-12">
               	<textarea style="height:100px;" name="notawardtext" class="form-control" cols="60"><?php  echo $reply['notawardtext'];?></textarea>
				<div class="help-block">没有中奖时提示语每行一个;用于变化提示内容</div>
            </div>
        </div>
		<div class="form-group" id="notawardpic"<?php  if(empty($reply) || $reply['notaward'] == 0) { ?> style="display: none;"<?php  } ?>>
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 未中奖提示图</label>
            <div class="col-sm-9 col-xs-12">
               	<?php  echo tpl_form_field_multi_image('notawardpic',$reply['notawardpic']);?>
            </div>
        </div>		
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 未中奖是否赠送积分</label>
            <div class="col-sm-9 col-xs-12">
               	<div class="input-group">
					<span class="input-group-addon">未中奖时系统自动赠送</span>
					<input type="text" class="form-control" name="credit1" id="credit1" value="<?php  echo $reply['credit1'];?>" />
					<span class="input-group-addon" style="border-left:0px;border-right:0px;">至</span>
					<input type="text" class="form-control" name="credit2" id="credit2" value="<?php  echo $reply['credit2'];?>" />
					<span class="input-group-addon" style="border-left:0px;border-right:0px;">个</span>
					<select name="credittype" class="form-control">
						<?php  if(is_array($creditnames)) { foreach($creditnames as $key => $credit) { ?>
						<option value="<?php  echo $key;?>" <?php  if($key == $reply['credittype']) { ?>selected<?php  } ?>><?php  echo $credit;?></option>
						<?php  } } ?>
					</select>
					<span class="input-group-addon">随机赠送给参与粉丝</span>
				</div>
				<div class="help-block"><span style='color:red'>不赠送两个参数全部设置为0</span></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>SN码重命名</label>
            <div class="col-sm-9 col-xs-12">
            	<input type="text" id="sn_rename" class="form-control" placeholder="" name="sn_rename" value="<?php  echo $reply['sn_rename'];?>">
				<div class="help-block">例如：CND码,充值密码,SN码 这个主意用于修改SN码的名称,你导入自己的SN码可以是充值密码 你就可以设为 充值密码 </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		奖品信息
	</div>
	<div class="panel-body">
		<?php  if($prize) { ?>
			<?php  if(is_array($prize)) { foreach($prize as $item) { ?>
			<div>
			<input type="hidden" name="prize_id[<?php  echo $item['id'];?>]" value="<?php  echo $item['id'];?>" />
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">奖品类型</label>
            	<div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="prize_type[<?php  echo $item['id'];?>]" value="physical" checked="checked" onclick="$('#credit_p_<?php  echo $item['id'];?>').hide();"/>实物
					</label>
					<?php  if(is_array($creditnames)) { foreach($creditnames as $key => $credit) { ?>
					<label class="radio-inline">
						<input type="radio" name="prize_type[<?php  echo $item['id'];?>]" value="<?php  echo $key;?>" onclick="$('#p_name_<?php  echo $item['id'];?>').html('<?php  echo $credit;?>');$('#credit_p_<?php  echo $item['id'];?>').show();"/><?php  echo $credit;?>
					</label>
					<?php  } } ?>
					<?php  if($item['fans']) { ?><span style="float:right;" class="btn btn-danger">无法删除，已有粉丝刮中此奖品</span><?php  } else { ?><span style="float:right;"><a class="btn btn-danger" href="<?php  echo $item['delete_url'];?>">删除此奖品</a></span><?php  } ?>
				</div>
            </div>
			<div class="form-group" id="credit_p_<?php  echo $item['id'];?>" style="display: none;">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span id="p_name_<?php  echo $item['id'];?>"></span>金额</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="credit[<?php  echo $item['id'];?>]" value="<?php  echo $item['credit'];?>">
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">领取网址</label>
                <div class="col-sm-9">
					<input class="form-control" type="text" value="<?php  echo $item['prizetxt'];?>" name="prizetxt[<?php  echo $item['id'];?>]">
					<div class="help-block">领取奖品或奖券网址</div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 control-label">奖品类别</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" value="<?php  echo $item['prizetype'];?>" name="prizetype[<?php  echo $item['id'];?>]">
                </div>
				<label class="col-xs-12 col-sm-2 col-md-2 control-label">奖品数量</label>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input class="form-control" type="text" value="<?php  echo $item['prizetotal'];?>" name="prizetotal[<?php  echo $item['id'];?>]">
                        <span class="input-group-addon">份</span>
                    </div>
                </div>							
            </div>						
            <div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 control-label">奖品名称</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" value="<?php  echo $item['prizename'];?>" name="prizename[<?php  echo $item['id'];?>]">
                </div>
				<label class="col-xs-12 col-sm-2 col-md-2 control-label">中奖概率</label>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input class="form-control" type="text" value="<?php  echo $item['prizepro'];?>" name="prizepro[<?php  echo $item['id'];?>]">
                        <span class="input-group-addon">%</span>
                    </div>
                </div>
            </div>						
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">奖品图片</label>
                <div class="col-sm-9">
				    <?php  echo tpl_form_field_image('prizepic['.$item['id'].']',$item['prizepic']);?>
					<div class="help-block">奖品显示图片 图片大小418px X 418px</div>
				</div>
            </div>
			<hr/>
			</div>
			<?php  } } ?>		
		<?php  } ?>
		<div id="jiangpin" style="display: none">
			<input type="hidden" name="prize_type_new[]" value="physical" />
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">奖品类型</label>
                <div class="col-sm-9">
                    <div class="help-block">奖品第一添加时无法选择奖品类型，提交保存以后可以选择修改为其他类型如上面奖品设置的<span style="color:red;"><b>奖品类型</b></span></div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">领奖网址</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" value="" name="prizetxt[]">
					<div class="help-block">领取奖品或奖券网址</div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 control-label">奖品类别</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" value="" name="prizetype_new[]">
                </div>
				<label class="col-xs-12 col-sm-2 col-md-2 control-label">奖品数量</label>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input class="form-control" type="text" value="" name="prizetotal_new[]">
                        <span class="input-group-addon">份</span>
                    </div>
                </div>							
            </div>						
            <div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 control-label">奖品名称</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" value="" name="prizename_new[]">
                </div>
				<label class="col-xs-12 col-sm-2 col-md-2 control-label">中奖概率</label>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input class="form-control" type="text" value="" name="prizepro_new[]">
                        <span class="input-group-addon">%</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">奖品图片</label>
                <div class="col-sm-9">
					<?php  echo tpl_form_field_image('prizepic_new[]','');?>
					<div class="help-block">奖品显示图片 图片大小418px X 418px</div>
				</div>
            </div>
		</div>
		<?php  if(empty($prize)) { ?>
		<div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">奖品类型</label>
                <div class="col-sm-9">
					<label class="radio-inline">
						<input type="radio" name="prize_type_new[]" value="physical" checked="checked" onclick="$('#credit_p_new').hide();"/>实物
					</label>
					<?php  if(is_array($creditnames)) { foreach($creditnames as $key => $credit) { ?>
					<label class="radio-inline">
						<input type="radio" name="prize_type_new[]" value="<?php  echo $key;?>" onclick="$('#p_name_new').html('<?php  echo $credit;?>');$('#credit_p_new').show();"/><?php  echo $credit;?>
					</label>
					<?php  } } ?>
				</div>
            </div>
			<div class="form-group" id="credit_p_new" style="display: none;">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span id="p_name_new"></span>金额</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="credit_new[]">
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">领奖网址</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" value="" name="prizetxt[]">
					<div class="help-block">领取奖品或奖券网址</div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 control-label">奖品类别</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" value="" name="prizetype_new[]">
                </div>
				<label class="col-xs-12 col-sm-2 col-md-2 control-label">奖品数量</label>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input class="form-control" type="text" value="" name="prizetotal_new[]">
                        <span class="input-group-addon">份</span>
                    </div>
                </div>							
            </div>						
            <div class="form-group">
                <label class="col-xs-12 col-sm-2 col-md-2 control-label">奖品名称</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" value="" name="prizename_new[]">
                </div>
				<label class="col-xs-12 col-sm-2 col-md-2 control-label">中奖概率</label>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input class="form-control" type="text" value="" name="prizepro_new[]">
                        <span class="input-group-addon">%</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">奖品图片</label>
                <div class="col-sm-9">
					<?php  echo tpl_form_field_image('prizepic_new[]','');?>
					<div class="help-block">奖品显示图片 图片大小418px X 418px</div>
				</div>
            </div>
			<hr/>
		</div>
		<?php  } ?>
		<span id="award_insert_flag" style="display: none"></span>
		<div class="form-group">
		    <div class="col-sm-5"></div>
			<div class="col-sm-7">
				<button id="btn_add_award" type="button" class="btn btn-warning">
					<span class="glyphicon glyphicon-plus"></span> 添加奖品
				</button>
			</div>
		</div>
	</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        活动显示设置
    </div>
    <div class="panel-body">
        <div class="form-group">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label">首页滚动中奖人数</label>
            <div class="col-sm-9 col-xs-6">
				<div class="input-group">
					<span class="input-group-addon">首页显示</span>
					<input type="text" class="form-control" name="awardnum" value="<?php  echo $reply['awardnum'];?>" />
					<span class="input-group-addon">位中奖粉丝 滚动显示  0为不显示中奖信息</span>
				</div>
            </div>
        </div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"><span style='color:red'>*</span>显示奖品数量</label>
            <div class="col-sm-9 col-xs-12">
               	<label class="radio-inline">
                	<input type="radio" name="show_num" value="0" <?php  if($reply['show_num'] == 0) { ?> checked="checked"<?php  } ?>/>不显示
                </label>
                <label class="radio-inline">
                	<input type="radio" name="show_num" value="1" <?php  if($reply['show_num'] == 1) { ?> checked="checked"<?php  } ?>/>仅显示奖品
                </label>
				<label class="radio-inline">
                	<input type="radio" name="show_num" value="2" <?php  if($reply['show_num'] == 2) { ?> checked="checked"<?php  } ?>/>显示奖品以及数量
                </label>
            </div>
        </div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">奖品详细介绍</label>
            <div class="col-sm-9 col-xs-12">
               	<textarea style=" height:200px;" id='award_info' name="award_info" class="form-control richtextinfo"><?php  echo $reply['award_info'];?></textarea>
            </div>
        </div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">活动页顶部广告图</label>
            <div class="col-sm-9 col-xs-12">
               	<?php  echo tpl_form_field_image('adpic',$reply['adpic']);?>
            </div>
        </div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 广告图链接</label>
            <div class="col-sm-9 col-xs-12">
				<?php  echo tpl_form_field_link('adpicurl',$reply['adpicurl']);?>
				<div class="help-block">广告图链接必需填写完整的URL地址如：http://www.baidu.com</div>
            </div>
        </div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 秒显广告时间</label>
            <div class="col-sm-9 col-xs-12">
               	<div class="input-group">
					<span class="input-group-addon">首页显示</span>
					<input type="text" class="form-control" name="homepictime" value="<?php  echo $reply['homepictime'];?>" />
					<span class="input-group-addon">秒广告图    0秒为不显示</span>
				</div>
            </div>
        </div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">秒显广告图</label>
            <div class="col-sm-9 col-xs-12">
               	<?php  echo tpl_form_field_image('homepic',$reply['homepic']);?>
            </div>
        </div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 虚拟人数显示</label>
            <div class="col-sm-9 col-xs-12">
               	<div class="input-group">
					<span class="input-group-addon">首页显示</span>
					<input type="text" class="form-control" name="xuninum" value="<?php  echo $reply['xuninum'];?>" />
					<span class="input-group-addon">位虚拟人数+真实参与人数　此数值随下面设置自动变化</span>
				</div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 虚拟人数设置</label>
            <div class="col-sm-9 col-xs-12">
               	<div class="input-group">
					<span class="input-group-addon">每次间隔</span>
                    <input type="text" class="form-control" name="xuninumtime" id="xuninumtime" value="<?php  echo $reply['xuninumtime'];?>" />
                    <span class="input-group-addon" style="border-left:0px;border-right:0px;">秒　系统自动增加</span>
					<input type="text" class="form-control" name="xuninuminitial" id="xuninuminitial" value="<?php  echo $reply['xuninuminitial'];?>" />
					<span class="input-group-addon" style="border-left:0px;border-right:0px;">至</span>
					<input type="text" class="form-control" name="xuninumending" id="xuninumending" value="<?php  echo $reply['xuninumending'];?>" />
					<span class="input-group-addon">名虚拟人参与本活动</span>
				</div>
            </div>
        </div>
		<div class="form-group">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label">兑奖输入项提示词</label>
            <div class="col-sm-9 col-xs-6">
				<input type="text" class="form-control" name="ticketinfo" value="<?php  echo $reply['ticketinfo'];?>" />
            </div>
        </div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 兑奖输入参数项</label>
            <div class="col-sm-9 col-xs-12">
				<div style="border:1px #eee dashed; padding:10px;background:#F5F5F5;">					
               	    <label for="isrealname" class="checkbox-inline"><input id="isrealname" type="checkbox" name="isrealname" value="1" <?php  if($reply['isrealname'] == 1) { ?>checked="checked"<?php  } ?>> 姓名</label>
				    <label for="ismobile" class="checkbox-inline"><input id="ismobile" type="checkbox" name="ismobile" value="1" <?php  if($reply['ismobile'] == 1) { ?>checked="checked"<?php  } ?>> 手机</label>
				    <label for="isqq" class="checkbox-inline"><input id="isqq" type="checkbox" name="isqq" value="1" <?php  if($reply['isqq'] == 1) { ?>checked="checked"<?php  } ?>> QQ号</label>
				    <label for="isemail" class="checkbox-inline"><input id="isemail" type="checkbox" name="isemail" value="1" <?php  if($reply['isemail'] == 1) { ?>checked="checked"<?php  } ?>> 邮箱</label>
				    <label for="isaddress" class="checkbox-inline"><input id="isaddress" type="checkbox" name="isaddress" value="1" <?php  if($reply['isaddress'] == 1) { ?>checked="checked"<?php  } ?>> 地址</label>
					<label for="isgender" class="checkbox-inline"><input id="isgender" type="checkbox" name="isgender" value="1" <?php  if($reply['isgender'] == 1) { ?>checked="checked"<?php  } ?>> 性别</label>
					<label for="istelephone" class="checkbox-inline"><input id="istelephone" type="checkbox" name="istelephone" value="1" <?php  if($reply['istelephone'] == 1) { ?>checked="checked"<?php  } ?>> 固话</label>
					<label for="isidcard" class="checkbox-inline"><input id="isidcard" type="checkbox" name="isidcard" value="1" <?php  if($reply['isidcard'] == 1) { ?>checked="checked"<?php  } ?>> 证件</label>
					<label for="iscompany" class="checkbox-inline"><input id="iscompany" type="checkbox" name="iscompany" value="1" <?php  if($reply['iscompany'] == 1) { ?>checked="checked"<?php  } ?>> 公司</label>
					<label for="isoccupation" class="checkbox-inline"><input id="isoccupation" type="checkbox" name="isoccupation" value="1" <?php  if($reply['isoccupation'] == 1) { ?>checked="checked"<?php  } ?>> 职业</label>
					<label for="isposition" class="checkbox-inline"><input id="isposition" type="checkbox" name="isposition" value="1" <?php  if($reply['isposition'] == 1) { ?>checked="checked"<?php  } ?>> 职位</label>
					</div>
					<div class="help-block">必需选择一个参数兑奖 活动开启后最好不要修改 请谨慎选择 重命显示请修改下面的参数</div>
            </div>
        </div>
		<div class="form-group">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label">兑奖输入参数重命名</label>
            <div class="col-sm-9 col-xs-6">
				<input type="text" class="form-control" name="isfansname" value="<?php  echo $reply['isfansname'];?>" />
				<div class="help-block">与上面的参数一一对应，请直接修改不要改变','这个字符</div>
            </div>
        </div>
		<div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 兑奖输入参数同步</label>
            <div class="col-sm-9 col-xs-12">
				<label for="isfans_0" class="radio-inline"><input id="isfans_0" type="radio" name="isfans" value="0" <?php  if($reply['isfans'] == 0) { ?>checked="checked"<?php  } ?>> 参数项只保留本模块下</label>
				<label for="isfans_1" class="radio-inline"><input id="isfans_1" type="radio" name="isfans" value="1"  <?php  if($reply['isfans'] == 1) { ?>checked="checked"<?php  } ?>> 参数项同步更新至官方会员信息表中</label>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        抽奖次数设置
    </div>
    <div class="panel-body">
		<div class="form-group">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label">每人最多获奖次数</label>
            <div class="col-sm-9 col-xs-6">
               	<div class="input-group">
					<input type="text" class="form-control" name="award_times" value="<?php  echo $reply['award_times'];?>" />
					<span class="input-group-addon">次</span>
				</div>
				<div class="help-block">单个用户最多共享几个奖项，0为不限制，推荐设置为1次!</div>
            </div>
        </div>
		<div class="form-group">
 			<label class="col-xs-12 col-sm-3 col-md-2 control-label">抽奖次数选项</label>
            <div class="col-sm-9 col-xs-6">
               	<div class="input-group">
					<label for="opportunity1" class="radio-inline"><input type="radio" name="opportunity" value="0" id="opportunity1" <?php  if(empty($reply) || $reply['opportunity'] == 0) { ?>checked="true"<?php  } ?> onclick="<?php  if($stonefish_branch) { ?>$('#opportunity_text').hide();<?php  } ?>$('#number_times').show();$('#credit').hide();"/> 活动设置次数</label>&nbsp;&nbsp;&nbsp;
					<?php  if($stonefish_branch) { ?><label for="opportunity2" class="radio-inline"><input type="radio" name="opportunity" value="1" id="opportunity2" <?php  if(!empty($reply) && $reply['opportunity'] == 1) { ?>checked="true"<?php  } ?> onclick="$('#opportunity_text').show();$('#number_times').hide();$('#credit').hide();"/> 商户赠送次数</label>&nbsp;&nbsp;&nbsp;<?php  } ?>
					<label for="opportunity3" class="radio-inline"><input type="radio" name="opportunity" value="2" id="opportunity3" <?php  if(!empty($reply) && $reply['opportunity'] == 2) { ?>checked="true"<?php  } ?> onclick="<?php  if($stonefish_branch) { ?>$('#opportunity_text').hide();<?php  } ?>$('#number_times').hide();$('#credit').show();"/> 积分购买次数</label>
				</div>				
            </div>
        </div>
		<?php  if($stonefish_branch) { ?>
		<div class="form-group" id="opportunity_text"<?php  if(!empty($reply) && $reply['opportunity'] == 1) { ?> style="display:block"<?php  } else { ?> style="display:none"<?php  } ?>>
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">商家赠送参数</label>
            <div class="col-sm-9 col-xs-12">
               	<textarea style="height:60px;" id='opportunity_txt' name="opportunity_txt" class="form-control richtext2" cols="60"><?php  echo $reply['opportunity_txt'];?></textarea>
                <span class="help-block">商家赠送次数为0时 即商家赠送抽奖次数审核状态下给用户的说明 </span>
				<div class="help-block"><span style='color:red'>设置为商户赠送次数后，<b>每人最多抽奖次数</b>将以商户赠送的次数为准！</span></div>
            </div>
        </div>
        <?php  } ?>		
		<div class="form-group" id="credit"<?php  if(!empty($reply) && $reply['opportunity'] == 2) { ?> style="display:block"<?php  } else { ?> style="display:none"<?php  } ?>>
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">积分购买次数</label>
            <div class="col-sm-9 col-xs-6">
               	<div class="input-group">
					<span class="input-group-addon">每</span>
					<input type="text" class="form-control" name="credit_times" id="credit_times" value="<?php  echo $reply['credit_times'];?>" />
					<span class="input-group-addon" style="border-left:0px;border-right:0px;">个</span>
					<select name="credit_type" class="form-control">
						<?php  if(is_array($creditnames)) { foreach($creditnames as $key => $credit) { ?>
						<option value="<?php  echo $key;?>" <?php  if($key == $reply['credit_type']) { ?>selected<?php  } ?>><?php  echo $credit;?></option>
						<?php  } } ?>
					</select>
					<span class="input-group-addon" style="border-left:0px;border-right:0px;">抽奖一次  最多购买</span>
					<input type="text" class="form-control" name="number_times" value="<?php  echo $reply['number_times'];?>" />
					<span class="input-group-addon">次</span>
				</div>
				<div class="help-block">每抽奖一次，系统自动扣除多少积分    最多购买为0时不限制 直至积分不足无法购买停止</div>
				<div class="help-block"><span style='color:red'>设置为积分购买次数后，<b>每人最多抽奖次数</b>将以粉丝购买的次数为准！</span></div>
            </div>
        </div>
     	<div class="form-group" id="number_times"<?php  if(!empty($reply) && $reply['opportunity'] == 0) { ?> style="display:block"<?php  } else { ?> style="display:none"<?php  } ?>>
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">每人最多抽奖次数</label>
            <div class="col-sm-9 col-xs-6">
               	<div class="input-group">
					<input type="text" class="form-control" name="number_times" value="<?php  echo $reply['number_times'];?>" />
					<span class="input-group-addon">次</span>
				</div>
				<div class="help-block">抽奖总次数限制,0为不限制</div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">每人每天最多抽奖次数</label>
            <div class="col-sm-9 col-xs-6">
               	<div class="input-group">
					<input type="text" class="form-control" name="most_num_times" value="<?php  echo $reply['most_num_times'];?>" />
					<span class="input-group-addon">次</span>
				</div>
				<div class="help-block">必须小于总抽奖次数！ 0 为不限制 抽完总数就不能抽了! 可以抽奖天数 = 总数/每天抽奖次数!</div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <?php  if($ids_num>1) { ?>多子公众号分享设置<?php  } else { ?>分享设置<?php  } ?>
    </div>
    <div class="panel-body table-responsive">
		<?php  if($ids_num>1) { ?>
		<!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <?php  if(is_array($ids)) { foreach($ids as $idsname) { ?>
			<li role="presentation"<?php  if($idsname==$one) { ?> class="active"<?php  } ?>>
                <a href="#acid<?php  echo $idsname;?>" role="tab" data-toggle="tab"><?php  echo $acid_arr[$idsname]['name'];?></a>
            </li>
			<?php  } } ?>
        </ul>
		<!-- Tab panes -->
		<?php  } ?>
        <div class="tab-content">
			<?php  if(is_array($share)) { foreach($share as $shares) { ?>
			<input type="hidden" name="acid_<?php  echo $shares['acid'];?>" value="<?php  echo $shares['id'];?>"/>
            <div role="tabpanel" class="tab-pane<?php  if($shares['acid']==$one) { ?> active<?php  } ?>" id="acid<?php  echo $shares['acid'];?>">
			<?php  if($ids_num>1) { ?>
			<div class="form-group">
 			    <label class="col-xs-12 col-sm-3 col-md-2 control-label">默认显示分享信息</label>
                <div class="col-sm-9 col-xs-6">
               	    <div class="input-group">
					    <label for="share_acid<?php  echo $shares['acid'];?>" class="radio-inline"><input type="radio" name="share_acid" value="<?php  echo $shares['acid'];?>" id="share_acid<?php  echo $shares['acid'];?>" <?php  if($reply['share_acid'] == $shares['acid']) { ?>checked="true"<?php  } ?> /> 设置 <strong><?php  echo $acid_arr[$shares['acid']]['name'];?></strong> 为默认分享显示 <?php  if($acid_arr[$shares['acid']]['level']==4) { ?> <strong><font color=red>推荐</font></strong><?php  } ?></label>
				    </div>				
                </div>
		    </div>
			<?php  } else { ?>
			<input type="hidden" name="share_acid" value="<?php  if($reply['share_acid']) { ?><?php  echo $reply['share_acid'];?><?php  } else { ?><?php  echo $shares['acid'];?><?php  } ?>"/>
			<?php  } ?>
		    <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">引导关注页</label>
                <div class="col-sm-9 col-xs-12">
               	    <input type="text" id="share_url_<?php  echo $shares['acid'];?>" class="form-control" name="share_url_<?php  echo $shares['acid'];?>" value="<?php  echo $shares['share_url'];?>">
                    <div class="help-block">引导关注页的链接! 推荐用微信平台的素材库，转成短地址。<a target="_blank" href="http://www.dwz.cn/">短网址转换</a></div>
                </div>
            </div>			
		    <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享标题</label>
                <div class="col-sm-9 col-xs-12">
               	    <input type="text" id="share_title_<?php  echo $shares['acid'];?>" class="form-control" name="share_title_<?php  echo $shares['acid'];?>" value="<?php  echo $shares['share_title'];?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享描述</label>
                <div class="col-sm-9 col-xs-12">
     	            <textarea style="height:60px;" id="share_desc_<?php  echo $shares['acid'];?>" name="share_desc_<?php  echo $shares['acid'];?>" class="form-control" cols="60"><?php  echo $shares['share_desc'];?></textarea>
				    <span class="help-block">分享标题以及分享描述可用变量<br/><span style='color:red'>#参与人数# </span>所有参与活动的总数 + 虚拟人数<br/><span style='color:red'>#参与人# </span>分享人填写兑奖的真实姓名<br/><span style='color:red'>#奖品# </span>分享人所中的最大奖品名称，没有中奖则不显示</span>
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">参与规则</label>
                <div class="col-sm-9 col-xs-12">
     	            <textarea style="height:60px;" id="share_txt_<?php  echo $shares['acid'];?>" name="share_txt_<?php  echo $shares['acid'];?>" class="form-control richtext_<?php  echo $shares['acid'];?>" cols="60"><?php  echo $shares['share_txt'];?></textarea>
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享朋友或朋友圈图</label>
                <div class="col-sm-9 col-xs-12">
               	    <?php  echo tpl_form_field_image('share_imgurl_'.$shares['acid'],$shares['share_imgurl']);?>
                </div>
            </div>
		    <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享按钮</label>
                <div class="col-sm-9 col-xs-12">
                   	<?php  echo tpl_form_field_image('share_picurl_'.$shares['acid'],$shares['share_picurl']);?>
                </div>
            </div>
		    <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享弹出提示图</label>
                <div class="col-sm-9 col-xs-12">
                   	<?php  echo tpl_form_field_image('share_pic_'.$shares['acid'],$shares['share_pic']);?>
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享赠送类型</label>
                <div class="col-sm-9 col-xs-12">
                   <div class="input-group">
					   <label for="sharetype0_<?php  echo $shares['acid'];?>" class="radio-inline"><input type="radio" name="sharetype_<?php  echo $shares['acid'];?>" value="0" id="sharetype0_<?php  echo $shares['acid'];?>" <?php  if(empty($shares) || $shares['sharetype'] == 0) { ?>checked="true"<?php  } ?><?php  if($acid_arr[$shares['acid']]['level']==4) { ?> onclick="$('#share_<?php  echo $shares['acid'];?>_name').hide();"<?php  } ?>/> 分享立即赠送</label>&nbsp;&nbsp;&nbsp;
					   <label for="sharetype1_<?php  echo $shares['acid'];?>" class="radio-inline"><input type="radio" name="sharetype_<?php  echo $shares['acid'];?>" value="1" id="sharetype1_<?php  echo $shares['acid'];?>" <?php  if(!empty($shares) && $shares['sharetype'] == 1) { ?>checked="true"<?php  } ?><?php  if($acid_arr[$shares['acid']]['level']==4) { ?> onclick="$('#share_<?php  echo $shares['acid'];?>_name').show();"<?php  } ?>/> 分享成功赠送（需要打开分享的链接）</label>
				    </div>				    
                </div>
            </div>
			<?php  if($acid_arr[$shares['acid']]['level']==4) { ?>	
		    <div class="form-group" id="share_<?php  echo $shares['acid'];?>_name" style="display: none;">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享赠送次数</label>
                <div class="col-sm-9 col-xs-12">
                   <div class="input-group">
					   <label for="sharenumtype0_<?php  echo $shares['acid'];?>" class="radio-inline"><input type="radio" name="sharenumtype_<?php  echo $shares['acid'];?>" value="0" id="sharenumtype0_<?php  echo $shares['acid'];?>" <?php  if(empty($shares) || $shares['sharenumtype'] == 0) { ?>checked="true"<?php  } ?> /> 单独赠送机会</label>&nbsp;&nbsp;&nbsp;
					   <label for="sharenumtype1_<?php  echo $shares['acid'];?>" class="radio-inline"><input type="radio" name="sharenumtype_<?php  echo $shares['acid'];?>" value="1" id="sharenumtype1_<?php  echo $shares['acid'];?>" <?php  if(!empty($shares) && $shares['sharenumtype'] == 1) { ?>checked="true"<?php  } ?> /> 每人赠送机会</label>&nbsp;&nbsp;&nbsp;
					   <label for="sharenumtype2_<?php  echo $shares['acid'];?>" class="radio-inline"><input type="radio" name="sharenumtype_<?php  echo $shares['acid'];?>" value="2" id="sharenumtype2_<?php  echo $shares['acid'];?>" <?php  if(!empty($shares) && $shares['sharenumtype'] == 2) { ?>checked="true"<?php  } ?> /> 分享共计赠送</label>
				    </div>
				    <div class="help-block">分享以后得到刮刮卡次数,<br/><span style='color:red'>单独赠送机会</span>:分享以后,每个朋友第一次打开即获取分享赠送基数,累计计算赠送次数;(打开数*分享赠送基数)<br/><span style='color:red'>每人赠送基数</span>:分享以后,每个朋友打开即获取分享赠送基数,累计计算赠送次数;(打开数*分享赠送基数)<br/><span style='color:red'>分享共计赠送</span>:只要分享有一个打开即计算不累计（分享赠送基数）</div>
                </div>
            </div>
			<?php  } else { ?>
			<input type="hidden" name="sharenumtype_<?php  echo $shares['acid'];?>" value="2"/>
			<?php  } ?>
		    <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享赠送基数</label>
                <div class="col-sm-9 col-xs-6">
               	    <div class="input-group">
					    <input type="text" class="form-control" name="sharenum_<?php  echo $shares['acid'];?>" value="<?php  echo $shares['sharenum'];?>" />
					    <span class="input-group-addon">次</span>
				    </div>
				    <div class="help-block"><?php  if($acid_arr[$idsname]['level']==2) { ?>分享以后，被邀约人打开分享链接一次，分享人获取多少次机会 0为分享不赠送<?php  } else { ?>分享以后，只要有被邀约人打开分享链接，分享人获取多少次机会 0为分享不赠送<?php  } ?></div>
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享成功提示语</label>
                <div class="col-sm-9 col-xs-6">
					<input type="text" class="form-control" name="share_confirm_<?php  echo $shares['acid'];?>" value="<?php  echo $shares['share_confirm'];?>" />
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享失败提示语</label>
                <div class="col-sm-9 col-xs-6">
					<input type="text" class="form-control" name="share_fail_<?php  echo $shares['acid'];?>" value="<?php  echo $shares['share_fail'];?>" />		    
                </div>
            </div>
			<div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享中途取消提示语</label>
                <div class="col-sm-9 col-xs-6">
					<input type="text" class="form-control" name="share_cancel_<?php  echo $shares['acid'];?>" value="<?php  echo $shares['share_cancel'];?>" />		    
                </div>
            </div>
			</div>
			<?php  } } ?>
		</div>
	</div>	
</div>
<script type="text/javascript">
<!--
	function validateReplyForm(formobj, jq, underscore, util, $scope, $http) {
		if (!formobj['title'].value) {
			util.message('请输入活动名称');
			return false;
		}
		if (!formobj['ticket_information'].value) {
			util.message('请输入兑奖信息');
			return false;
		}
		if (!formobj['repeat_lottery_reply'].value) {
			util.message('请输入重复抽奖信息');
			return false;
		}
		if (!formobj['sn_rename'].value) {
			util.message('请输入SN码重命名');
			return false;
		}
	}
	
	require(['jquery', 'util'], function($, u){
		$(function(){
			u.editor($('.richtextinfo')[0]);
			<?php  if($stonefish_branch) { ?>u.editor($('.richtext2')[0]);<?php  } ?>
			<?php  if(is_array($ids)) { foreach($ids as $idsname) { ?>
			u.editor($('.richtext_<?php  echo $idsname;?>')[0]);
			<?php  } } ?>
		});
    });

	$('#btn_add_award').bind('click', function(){
		var content = '<div>';
		content += $("#jiangpin").html();
		content += '<div class="form-group">';
		content += '<label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>';
		content += '<div class="col-sm-9">';
		content += '<button type="button" class="btn btn-danger btn_del_award">删除</button>';
		content += '</div>';
		content += '</div>';
		content += '<hr/>';
		content += '</div>';
		$('#award_insert_flag').before(content);
		$('.btn_del_award').bind('click', function(){
			var obj = $(this).parent().parent().parent();
			obj.slideUp(300, function() {
				obj.remove();
			});
		});
	});
//-->
</script>