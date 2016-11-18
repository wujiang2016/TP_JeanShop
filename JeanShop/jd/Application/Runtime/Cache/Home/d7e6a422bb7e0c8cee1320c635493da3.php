<?php if (!defined('THINK_PATH')) exit();?><!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" href="/jd/Public/Home/css/detail.css">
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
				<div class="logo_search">
					<ul class="logo_search_menu">
						<li class="active">
							<a href="">本站宝贝</a>
						</li>
						<li>
							<a href="">全网宝贝</a>
						</li>
						<li>
							<a href="">美文欣赏</a>
						</li>
						<li>
							<a href="">搭配指导</a>
						</li>
					</ul>
					<div class="search">
						<input type="text" placeholder="本站优惠全知道" class="logo_search_text fl">
						<input type="button" class="logo_search_button fr" value="找本站">
					</div>
					<ul class="logo_search_nav">
						<li><a href="">糖水黄桃罐头包邮12罐整箱</a></li>
						<li><a href="">糖水黄桃罐头包邮12罐整箱</a></li>
						<li><a href="">糖水黄桃罐头包邮12罐整箱</a></li>
					</ul>
				</div>
				<div class="shopCar fr">
					<span class="shopText">购物车</span>
					<span class="shopNumber fr">10</span>
				</div>
			</div>
		</div>
		<div class="headerMenu">
			<div class="commonWidth">
				<ul class="headerMenu_left">
					<h3 class="active"><a href="">最新折扣</a></h3>
					<li><a href="">品牌折扣</a></li>
					<li><a href="">天猫精选</a></li>
					<li><a href="">9.9包邮</a></li>
					<li><a href="">优点推荐</a></li>
					<li><a href="">明日预告</a></li>
					<li><a href="">手机版</a></li>
				</ul>
				<ul class="headerMenu_right">
					<li><a href="">积分商城</a></li>
					<li><a href="">签到领取积分</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="banner">
		<div class="commonWidth">
			<ul class="banner_classify">
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
				<li><a href="">女装</a></li>
			</ul>
			<div class="slider">
				<ul>
					<li>
						<a href="">
							<img src="/jd/Public/images/slider/57585495-5E3F-4941-A031-97E215D7EFA8.png" alt="">
						</a>
					</li>
				</ul>
			</div>
			<div class="banner_new">
				<ul>
					<li>
						<a href=""><img src="/jd/Public/images/5aa.png" alt=""></a>
					</li>
					<li>
						<a href=""><img src="/jd/Public/images/5aa.png" alt=""></a>
					</li>
					<li>
						<a href=""><img src="/jd/Public/images/5aa.png" alt=""></a>
					</li>
					<li>
						<a href=""><img src="/jd/Public/images/5aa.png" alt=""></a>
					</li>
					<li class="div">
						<a href=""><img src="/jd/Public/images/5aa.png" alt=""></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="dailyRecommand">
		<div class="commonWidth">
			<div class="daily_menu">
				<ul class="fl">
					<li><span class="dailyRecommand_eng">SALE</span></li>
					<li>
						<h2>今日推荐</h2>
					</li>
					<li>
						<i>内部券天天领</i>
					</li>
				</ul>
				<ul class="fr">
					<li><a href="">换一组</a></li>
					<li><a href="">更多内部优惠</a></li>
				</ul>
			</div>
			<div class="R_product">
				<ul>
					<?php if(is_array($newJeanInfo)): $i = 0; $__LIST__ = $newJeanInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="<?php echo U('Jean/detail');?>?id=<?php echo ($vo["id"]); ?>">
								<img src="/jd/Public/images/<?php echo ($vo["fashion_img"]); ?>" alt="">
							</a>
							<span class="name"><a href=""><?php echo ($vo["name"]); ?></a></span>
							<span class="price fl">￥<script>document.write(<?php echo ($vo["price"]); ?>.toFixed(2))</script></span>
							<span class="old_price fl">￥128</span>
							<span class="default fr">新品上架</span>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					
					<!-- <li>
						<a href="">
							<img src="/jd/Public/images/product/2233.png" alt="">
						</a>
						<span class="name"><a href="">瑶浴正品泡澡中药粉泡澡药包驱寒祛湿熏</a></span>
						<span class="price fl">￥88</span>
						<span class="old_price fl">￥128</span>
						<span class="default fr">新品上架</span>
					</li> -->
				</ul>
			</div>
			<div class="interval">
				<div class=" fl leftArea">
					<div class="interval_text">
						<span>每天十点更新</span><br>
						<i>距离更新还有</i>

					</div>
					<div id="setinterval">
						时分秒
					</div>
				</div>
				<ul class="rightArea fr">
					<li>淘宝天猫一折起</li>
					<li>淘宝天猫一折起</li>
					<li>淘宝天猫一折起</li>
				</ul>
			</div>
			<div class="onSell">
				<ul>
					<li>
						<a href=""><img src="/jd/Public/images/product/onsell.jpeg" alt=""></a>
						<div class="band">
							<img src="/jd/Public/images/band/cpb.jpg" class="fl" alt="">
							<a href="" class="fr">马上抢</a>
						</div>
					</li>
					<li>
						<a href=""><img src="/jd/Public/images/product/onsell.jpeg" alt=""></a>
						<div class="band">
							<img src="/jd/Public/images/band/cpb.jpg" class="fl" alt="">
							<a href="" class="fr">马上抢</a>
						</div>
					</li>
					<li>
						<a href=""><img src="/jd/Public/images/product/onsell.jpeg" alt=""></a>
						<div class="band">
							<img src="/jd/Public/images/band/cpb.jpg" class="fl" alt="">
							<a href="" class="fr">马上抢</a>
						</div>
					</li>
				</ul>
				<div class="more">
					<span>更多特卖品牌:</span>
					<ul>
						<li>
							<a href="">
								<img src="/jd/Public/images/band/cpb.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="/jd/Public/images/band/weimeng.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="/jd/Public/images/band/cpb.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="/jd/Public/images/band/weimeng.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="/jd/Public/images/band/cpb.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="/jd/Public/images/band/weimeng.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="/jd/Public/images/band/cpb.jpg" alt="">
							</a>
						</li>
						<li>
							<a href="">
								<img src="/jd/Public/images/band/weimeng.jpg" alt="">
							</a>
						</li>
					</ul>
					<a href="">查看全部 >></a>
				</div>
			</div>
		</div>
	</div>
	<div class="productShow">
		<div class="commonWidth">
			<ul>
				
				<?php if(is_array($allJeanInfo)): $i = 0; $__LIST__ = $allJeanInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
						<a href="<?php echo U('Jean/detail');?>?id=<?php echo ($vo["id"]); ?>">
							<img style="width:280px;height:280px;" src="/jd/Public/images/<?php echo ($vo["fashion_img"]); ?>" alt="">
						</a>
						<div class="p_meg">
							<i>[包邮]</i>	
							<a href="<?php echo U('Jean/detail');?>?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a>
							<span class="fr">已售1.1w</span>
						</div>
						<div class="p_p">
							<span class="p_np">￥<script>document.write(<?php echo ($vo["price"]); ?>.toFixed(2))</script></span>
							<span class="p_op">￥689(0.6折)</span>
							<a href="<?php echo U('Jean/detail');?>?id=<?php echo ($vo["id"]); ?>">去看看</a>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<!-- <li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li>
				<li>
					<a href="">
						<img src="/jd/Public/images/product/product1.jpeg" alt="">
					</a>
					<div class="p_meg">
						<i>[包邮]</i>	
						<a href="">最大1111元全网通用红包</a>
						<span class="fr">已售1.1w</span>
					</div>
					<div class="p_p">
						<span class="p_np">￥39.9</span>
						<span class="p_op">￥689(0.6折)</span>
						<a href="">去看看</a>
					</div>
				</li> -->
				<div class="clearfix"></div>
			</ul>
			<div class="page">
				<ul>
					<li>上一页</li>
					<li class="active"><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">...</a></li>
					<li><a href="">331</a></li>
					<li><a href="">下一页</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer">
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
	<script src='/jd/Public/Home/js/jean_index.js'></script>
</body>
</html>