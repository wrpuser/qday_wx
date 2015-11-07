<?php defined('IN_IA') or exit('Access Denied');?><?php  if(is_array($list)) { foreach($list as $item) { ?>
<ul class="new_orderlist" id="order_list" style="">
	<a href="<?php  echo $this->createMobileUrl('orderdetail',array('id' => $item['id']))?>">
		<li>
			<h4 class="new_ordername "><?php  echo $item['title'];?></h4>
		    <div class="new_orderstate new_ordersok">
		        <?php  if($item['status'] == 0) { ?>
		        确认中
		        <?php  } else if($item['status'] == -1) { ?>
		        已取消
		        <?php  } else if($item['status'] == 1) { ?>
		        已通过
		        <?php  } else if($item['status'] == 2) { ?>
		        已拒绝
		        <?php  } else if($item['status'] == 3) { ?>
		        已完成
		        <?php  } ?>
		    </div>
		    <p class="newprice ">¥<i><?php  echo $item['price'];?></i></p>
		    <p class="new_ordernb">订单编号：<?php  echo $item['ordersn'];?></p>
		    <p class="new_ordertime">入住日期：<?php  echo date("Y-m-d",$item['btime'])?></p>
		    <p class="new_ordernb">支付方式：
				<?php  if($item['paytype']==1) { ?>
				余额支付 
				<?php  } else if($item['paytype']==21) { ?>
				微信支付
				<?php  } else if($item['paytype']==22) { ?>
				支付宝
				<?php  } else { ?>
				到店付款
				<?php  } ?>
			</p>
		<!--    <?php  if($item['paystatus']==0) { ?> <div class="new_orderpay" onclick="location.href='<?php  echo $this->createMobileUrl('orderpay',array('id' => $item['id']))?>'">立即支付</div> <?php  } ?>-->
		</li>
	</a>
</ul>
<?php  } } ?>