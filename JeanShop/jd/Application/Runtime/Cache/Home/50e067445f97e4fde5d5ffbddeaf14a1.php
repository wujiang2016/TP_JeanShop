<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品详情页</title>
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
	<div class="dProduct">
		<div class="commonWidth">
			<div class="dProduct_title">
				<a href="">实惠网 ></a>
				<a href="">女装 ></a>
				<a href="">牛仔裤 ></a>
				<a href=""><?php echo ($jeanName); ?></a>
			</div>
			<div class="dProduct_content">
				<div class="dProduct_contentP">
					<div class="dc_img">
						<img id='show' style="width:270px;height:300px;" src="/jd/Public/images/<?php echo ($image); ?>" alt="">
					</div>
					<div class="dc_text">
						<a href="" class="dc_pName" id='jeanId' jeanId='<?php echo ($jeanId); ?>'>[包邮]<?php echo ($jeanName); ?></a>
						<span class="dc_price"><i>￥</i><?php echo ($priceStr); ?></span>

						
						<span class="dc_oldPrice">原价：<i>258元</i>（2.6折）</span>
						<span class="boss">掌柜：<a href="">xxx旗舰店</a></span>

						款式：
						<?php if(is_array($allFashion)): $i = 0; $__LIST__ = $allFashion;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><img style="width:45px;height:45px;margin-left:10px;cursor:pointer;" class='fashion' src="/jd/Public/images/<?php echo ($vo); ?>" title="<?php echo ($key); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
						<div style="clear:both;"></div>

						尺码：
						<ul style="display:inline-block;">
							<?php if(is_array($allSize)): $i = 0; $__LIST__ = $allSize;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class='size' style="text-align:center;height:28px;line-height:28px;padding:0 10px;margin:10px 5px -2px;float:left;cursor:pointer;"><?php echo ($vo); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div style="clear:both;"></div>

						数量：
						<ul style="display:inline-block;">
							<li id='minus' style="margin:10px 0 -3px;width:25px;height:25px;text-align:center;border:1px solid #ccc;float:left;cursor:pointer;">-</li>

							<input style="margin:10px 0 -3px;width:46px;height:25px;text-align:center;border-top:1px solid #ccc;border-bottom:1px solid #ccc;float:left;" type="text" value=1 class='buynum' name='buynum'>

							<li id='plus' style="margin:10px 0 -3px;width:25px;height:25px;text-align:center;border:1px solid #ccc;float:left;cursor:pointer;">+</li>

						</ul>
						库存<span id="totalStorage"><?php echo ($totalStorage); ?></span>件
						<span style="color:red" class="reminder"></span>

						<div style="clear:both;"></div>
						<div class="buy">
							<a href="javascript:void(0)" onclick="buynow()"><h3>立即购买</h3></a>
							<a href="javascript:void(0)" onclick="addCart()"><h3>加入购物车</h3></a>	
						</div>

						<div class="dc_clarify">
							<span>手机扫一扫购买</span>
							<img src="/jd/Public/images/logo/erweima.jpeg" alt="">
						</div>
						<div class="dotted"></div>
					</div>
				</div>
			</div>
			<div id="reminder" style='width:900px;display:none;background:pink;height:50px;line-height:50px;font-size:20px;font-weight:bold;text-align:center;'></div>
			<div class="dconnect">
				<span class="dconnect_title">
					相关资讯
				</span>
				<ul class="dconnect_news">
					<li>
						<a href="">新晋女神装！应景的红外套+万年黑才是绝配</a>
						<span>02-05 22:05</span>
					</li>
					<li>
						<a href="">新晋女神装！应景的红外套+万年黑才是绝配</a>
						<span>02-05 22:05</span>
					</li>
					<li>
						<a href="">新晋女神装！应景的红外套+万年黑才是绝配</a>
						<span>02-05 22:05</span>
					</li>
					<li>
						<a href="">新晋女神装！应景的红外套+万年黑才是绝配</a>
						<span>02-05 22:05</span>
					</li>
					<li>
						<a href="">新晋女神装！应景的红外套+万年黑才是绝配</a>
						<span>02-05 22:05</span>
					</li>
					<li>
						<a href="">新晋女神装！应景的红外套+万年黑才是绝配</a>
						<span>02-05 22:05</span>
					</li>
					<li>
						<a href="">新晋女神装！应景的红外套+万年黑才是绝配</a>
						<span>02-05 22:05</span>
					</li>
					<li>
						<a href="">新晋女神装！应景的红外套+万年黑才是绝配</a>
						<span>02-05 22:05</span>
					</li>
					<li>
						<a href="">新晋女神装！应景的红外套+万年黑才是绝配</a>
						<span>02-05 22:05</span>
					</li>
					<li>
						<a href="">新晋女神装！应景的红外套+万年黑才是绝配</a>
						<span>02-05 22:05</span>
					</li>
				</ul>
			</div>
			<div class="dgus">
				<ul class="dgus_content">
					<span>你是不是要找：</span>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
					<li><a href="">风衣女中长款</a></li>
				</ul>
			</div>
			<div class="ddetail">
				<ul class="ddetail_tab">
					<li class="ddetail_active"><a href="">商品详情</a></li>
					<li><a href="">买家评论</a></li>
					<li><a href="">评论吐槽</a></li>
				</ul>
				<ul class="ddtail_test clearfix">
					<li><a href="">质检信息</a></li>
					<li><a href="">商品描述</a></li>
					<li><a href="">活动说明</a></li>
				</ul>
				<div class="ddtail_testInfo">
					<h3>
						<div class="line"></div>
						<div class="test_txt">质检信息</div>
					</h3>
					<div class="test_img">
						<img src="/jd/Public/images/logo/test.png" alt="">
					</div>
				</div>

				<div class="ddtail_testInfo">
					<h3>
						<div class="line"></div>
						<div class="test_txt">产品参数</div>
					</h3>
					<ul class="parameter">
						<?php if(is_array($param)): $i = 0; $__LIST__ = $param;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($key); ?>：<?php echo ($vo); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<div style="clear:both;"></div>
				<div class="ddtail_testInfo">
					<h3>
						<div class="line"></div>
						<div class="test_txt">穿着效果</div>
					</h3>
					<?php if(is_array($wear_effect)): $i = 0; $__LIST__ = $wear_effect;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="test_img">
							<img src="/jd/Public/images/<?php echo ($vo); ?>" alt="">
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>

				<div class="ddtail_testInfo">
					<h3>
						<div class="line"></div>
						<div class="test_txt">细节做工</div>
					</h3>
					<?php if(is_array($detail_work)): $i = 0; $__LIST__ = $detail_work;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="test_img">
							<img src="/jd/Public/images/<?php echo ($vo); ?>" alt="">
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>

				<div class="ddtail_testInfo">
					<h3>
						<div class="line"></div>
						<div class="test_txt">活动信息</div>
					</h3>
					<div class="action_title">
						<span>2016秋装新款小西装女中长款外套大码韩版修身长袖休闲西服女春秋 价格：￥67 活动时间：10月21日 10:00至03月26日 12:12</span>
					</div>
					<span class="criticle">以下是来自天猫卖家的评论</span>
					<div class="dCrit">
						<ul class="f1">
							<span class="uName">1**饭</span>
							<li class="time">2016-11-07</li>
							<li class="color">颜色分类：粉色 现货</li>
							<li class="size">尺码：XXL</li>
							<li class="from">评论来自 天猫</li>
							<li class="dC_content clearfix">很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！</li>
						</ul>
						<ul class="f1">
							<span class="uName">1**饭</span>
							<li class="time">2016-11-07</li>
							<li class="color">颜色分类：粉色 现货</li>
							<li class="size">尺码：XXL</li>
							<li class="from">评论来自 天猫</li>
							<li class="dC_content clearfix">很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！</li>
						</ul>
						<ul class="f1">
							<span class="uName">1**饭</span>
							<li class="time">2016-11-07</li>
							<li class="color">颜色分类：粉色 现货</li>
							<li class="size">尺码：XXL</li>
							<li class="from">评论来自 天猫</li>
							<li class="dC_content clearfix">很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！</li>
						</ul>
						<ul class="f1">
							<span class="uName">1**饭</span>
							<li class="time">2016-11-07</li>
							<li class="color">颜色分类：粉色 现货</li>
							<li class="size">尺码：XXL</li>
							<li class="from">评论来自 天猫</li>
							<li class="dC_content clearfix">很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！</li>
						</ul>
						<ul class="f1">
							<span class="uName">1**饭</span>
							<li class="time">2016-11-07</li>
							<li class="color">颜色分类：粉色 现货</li>
							<li class="size">尺码：XXL</li>
							<li class="from">评论来自 天猫</li>
							<li class="dC_content clearfix">很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！很不错，穿着很修身！</li>
						</ul>
						<div class="dC_more">
							<a href="">查看更多评论（4529）条 ></a>
						</div>
						<div class="dC_debunk">
							实惠网用户吐槽
						</div>
						<div class="debunk_text">
							<input type="button" value="登录" class="btn_login">
							<input type="text" class="debunk">
							<input type="button" value="吐槽一下" class="btn_submit">
						</div>
					</div>
				</div>
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
	<script src='/jd/Public/Home/js/detail.js'></script>
</body>
</html>