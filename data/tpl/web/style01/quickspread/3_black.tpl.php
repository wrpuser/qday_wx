<?php defined('IN_IA') or exit('Access Denied');?><div class="main">
    <div style="padding:5px 15px 0 15px">
        <form action="<?php  echo $this->createWebUrl('Spread', array('op'=>'black'))?>" method="post">
            <div class="panel panel-info">
                <div class="panel-heading">筛选</div>
                <div class="panel-body">
                    <div class="form-group">
                
                        <div class="col-xs-5">
                            <div class="input-group">
                                <div class="input-group-addon">将</div>
                                <input class="form-control" name="from_user"  type="text" value="" placeholder="微信用户 OPENID">
                           
                                <div class="input-group-btn">
                                     <button type="submit" class="btn span2"><i class="fa fa-plus"></i> 加入到黑名单</button>
                                </div>
                            </div>
                        </div> 
              
                    </div>
                    <div class="form-group">
                    </div>
                </div>
        </form>
    </div>
<div class="panel panel-default">
  
    <div class="panel-body">
        <table class="table table-hover">
            <thead class="navbar-inner">
                <tr>
                    <th class="span6">微信id</th>
                    <th class="span3">加入黑名单时间</th>
                    <th class="span2">拦截次数</th>
                    <th style="text-align:right; min-width:60px;">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php  if(is_array($list)) { foreach($list as $item) { ?>
                <tr>
                    <td><?php  echo $item['from_user'];?></td>
                    <td><?php  echo date('Y-m-d H:i:s', $item['access_time'])?></td>
                    <td><?php  echo $item['hit'];?></td>
                    <td style="text-align:right;">
                        <a class="btn btn-default" href="<?php  echo $this->createWebUrl('Spread', array('from_user' => $item['from_user'], 'op' => 'black_remove'))?>" onclick="return confirm('此操作不可恢复，确认删除？');
                    return false;" title="删除" class="btn btn-small"><i class="fa fa-remove"></i> 删除</a>
                    </td>
                </tr>
                <?php  } } ?>
            </tbody>
        </table>
    </div>
</div>
