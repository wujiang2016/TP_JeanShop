<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>立即购买页</title>
	<link rel="stylesheet" href="/jd/Public/Home/css/resite.css">
	<link rel="stylesheet" href="/jd/Public/Home/css/main.css">
</head>
<body>
	<div class="header">
		<div class="headerNav">
			<div class="commonWidth">
				<ul class="fl">
					<li>
						<a href="">关注</a>
					</li>
					<li>
						<a href="">收藏到桌面</a>
					</li>
					<li>
						<a href="">手机版</a>
					</li>
					<li>
						<a href="">在线客服</a>
					</li>
					<li>
						<a href="">邀请好友</a>
					</li>
				</ul>
				<div class="bonus"></div>
				<ul class="fr">
					<?php  if (isset($_COOKIE['user'])) { ?>
							<li>欢迎，
								<?php  echo $_COOKIE['user']; if ('admin'==$_COOKIE['user']) { ?>
									<script>var user='<?php echo $_COOKIE['user'];?>';</script>
									<a style="color:green;" href="<?php echo U('Jean/updatejeaninfo');?>">添加数据</a>
									<?php
 } ?>
							</li>
							<?php  ?>
							<li><a href="<?php echo U('User/logoff');?>">注销</a></li>
							<?php
 } else { ?>
							<li><a href="<?php echo U('User/login');?>">你好，请登录</a></li>
							<li><a href="<?php echo U('User/register');?>">免费注册</a></li>
							<?php
 } ?>
					<li>
						<a href="">帮助中心</a>
					</li>
					<li>
						<a href="">合作中心</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="headerLogo">
			<div class="commonWidth">
				<div class="logo">
					<a href="">
						<img src="/jd/Public/images/logo/logo.jpg" alt="实惠折扣">
					</a>
				</div>
				<div class="step">
					<ul>
						<li>
							<span>拍下商品</span>
							<div class="steplist1"></div>
						</li>
						<li>
							<span>付款到支付宝</span>
							<div class="steplist2">2</div>
						</li>
						<li>
							<span>确认收货</span>
							<div class="steplist3">3</div>
						</li>
						<li>
							<span>评价</span>
							<div class="steplist4">4</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="order_content">
		<div class="commonWidth">
			<div class="order_address">
				<ul>
					<?php if(is_array($address)): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["default_address"] == 1): ?><li class="address1 select">
						<?php else: ?> 
							<li class="address1"><?php endif; ?>
						
							<span class="address1_name"><script>document.write('<?php echo ($vo["area"]); ?>'.slice(0,'<?php echo ($vo["area"]); ?>'.indexOf(' ','<?php echo ($vo["area"]); ?>'.indexOf(' ')+1)))</script> （<?php echo ($vo["receiver"]); ?> 收）</span>
							<span class="address1_a"><?php echo ($vo["area"]); echo ($vo["detailed_address"]); ?><script>document.write('<?php echo ($vo["tel_mobile"]); ?>'.replace('<br>',' '))</script></span>
							<a href="">修改</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					
				</ul>
				<div style='clear:both;'></div>
				<a href="" class="address_all fl">显示全部地址</a>
				<a href="<?php echo U('User/address');?>" class="address_man fr">管理收货地址</a>
			</div>
			<div class="rookie clearfix">
				<span class="rookie_name">菜鸟驿站代收服务<a href="">免费</a></span>
				<div>收货不便，可以使用菜鸟驿站代收服务</div>
			</div>
			<div class="confirm">
				<h3 class="confirm_title">确认订单信息</h3>
				<ul class="confirm_product">
					<li>店铺宝贝</li>
					<li>商品属性</li>
					<li>单价</li>
					<li>数量</li>
					<li>优惠方式</li>
					<li>小计</li>
				</ul>
				<div class="shopName">
					<img src="/jd/Public/images/icon/tianmao.jpg" alt="">
					<span class="name">店铺: 侃侃衣诚旗舰店</span>
				</div>
				<ul class="attribute clearfix">
					<li>
						<img src="<?php echo ($fashion_img); ?>" alt="">
						<span><?php echo ($jeanName); ?></span>
					</li>
					<li>
						<span>款式分类：<?php echo ($fashion_name); ?> 现货</span>
						<span>尺码：<?php echo ($size); ?></span>
					</li>
					<li>
						<span class='price'><?php echo ($price); ?></span>
					</li>
					<li>
						<span class="minus">-</span>
						<input type="text" class="add" value='<?php echo ($number); ?>'>
						<span class="plus">+</span>
						<br>
						<span class="reminder" style='color:red;'></span>
					</li>
					<li>
						<span>省382：回馈价</span>
					</li>
					<li>
						<span class='subtotal'><script>document.write((parseFloat('<?php echo ($price); ?>'.slice(8))*<?php echo ($number); ?>).toFixed(2))</script></span>
					</li>
				</ul>
				<div class="messageBox clearfix">
					<span>给买家留言：</span>
					<input type="text" placeholder="选填：对本次交易的说明">
				</div>
				<div class="wayBox">
					<span class="way">运送方式:普通配送快递 免邮</span>
					<span class="way_price fr">0.00</span>
				</div>
				<div class="safeBox wayBox">
					<span class="safe">运费险：</span>
					<input type="checkbox" name='cif'>￥4.4购买
					<span class="safe_price">4.40</span>
				</div>
				<div class="amountBox clearfix">
					<span>商品合计费用：<i id='totalCost'>￥67.00</i></span>
				</div>
				<div class="anonymousBox clearfix">
					<input type="checkbox">找人代付
					<input type="checkbox">匿名购买
				</div>
				<div class="anonymousBox clearfix">
					<input type="checkbox">使用天猫点券
					<span>结算扣时</span>
				</div>
				<?php if(is_array($address)): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["default_address"] == 1): ?><ul class="msg_address">
							<li>
								<span>实付款：<i id='realPay'>￥67.00</i></span>
							</li>
							<li>
								<span>寄送至：<i id='addressTo'><?php echo ($vo["area"]); echo ($vo["detailed_address"]); ?></i></span>
							</li>
							<li>
								<span>收货人：<i id='receiver'><?php echo ($vo["receiver"]); ?> <script>document.write('<?php echo ($vo["tel_mobile"]); ?>'.replace('<br>',' '))</script></i></span>
							</li>
							<input type="button" value="提交订单" onclick="placeOrder()">
						</ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				
			</div>
		</div>
	</div>
	<div class="footer clearfix">
		<div class="commonWidth">
			<div class="company">
				<div class="clarify">
					<img src="/jd/Public/images/logo/erweima.jpeg" alt="">
				</div>
				<ul class="update">
					<h3>获取更新</h3>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
				</ul>
				<ul class="cooperate">
					<h3>商务合作</h3>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
				</ul>
				<ul class="companyMes">
					<h3>公司信息</h3>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
				</ul>
				<ul class="help">
					<h3>帮助中心</h3>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
					<li><a href="">iphone/Android</a></li>
				</ul>
				<div class="service">
					<div class="service_icon">
						<a href=""><img src="/jd/Public/images/logo/service.jpg" alt=""></a>
					</div>
					<div class="service_time">
						<span class="day">周一到周六</span>
						<span class="time">9:00-22:00</span>
					</div>
				</div>
			</div>
			<div class="link">
				<ul class="fl">
					<span class="link_text">友情链接:</span>
					<li><a href="">天天特价官网</a></li>
					<li><a href="">天天特价官网</a></li>
					<li><a href="">天天特价官网</a></li>
					<li><a href="">天天特价官网</a></li>
					<li><a href="">天天特价官网</a></li>
					<li><a href="">天天特价官网</a></li>
					<li><a href="">天天特价官网</a></li>
					<li><a href="">天天特价官网</a></li>
					<li><a href="">天天特价官网</a></li>
					<li><a href="">天天特价官网</a></li>
					<li><a href="">更多 >></a></li>
				</ul>
			</div>
			<div class="copyright">
				拾惠网 粤ICP备16078785号-1 Copyright © 2015 - 2018 Www.shihuizk.com All Rights Reserved
			</div>
		</div>
	</div>
	<script src='/jd/Public/Home/js/jquery-2.1.3.js'></script>
	<script>
		var totalStorage=<?php echo ($totalStorage); ?>;
		var jean_id=<?php echo ($jean_id); ?>;
		var fashion_name="<?php echo ($fashion_name); ?>";
		var size="<?php echo ($size); ?>";
		var user_id=<?php echo "'".$_COOKIE['user']."'"; ?>;
	</script>
	<script src='/jd/Public/Home/js/buynow.js'></script>
</body>
</html>