<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户地址</title>
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
	<div class="receiveAdress">
		<h3>收货地址</h3>
		<p><span style='color:red;margin-right:15px;'>新增收货地址</span>电话号码、手机号选填一项, 其余均为必填项</p>
		<form action="" method='post'>
			<input type="hidden" name='id' value=''>
			<span>所在地区<span style='color:red;'>*</span></span>
			<select name="country" id="">
				<option value="中国大陆" checked>中国大陆</option>
			</select>
			<input type="text" name='location' value=''>
			<!-- //陕西 / 汉中 / 勉县 / 稍后再说 -->
			<br><br>

			<span>详细地址<span style='color:red;'>*</span></span>
			<textarea style="width: 506px; height: 52px;" name="detailed_address" placeholder='建议您如实填写详细收货地址，例如街道名称，门牌号码，楼层和房间号等信息' id=""></textarea>
			<br><br>
			<span>邮政编码</span><input type="text" name='postcode' placeholder='如您不清楚邮递区号，请填写000000'>
			<br><br>
			<span>收货人姓名<span style='color:red;'>*</span></span><input type="text" name='receiver' placeholder='长度不超过25个字符'>
			<br><br>
			 
			<span>手机号码</span>
			<select name="mobileCountry" id="">
				<option value="中国大陆 +86" checked>中国大陆 +86</option>
			</select>
			<input type="text" name='mobile' value='' placeholder='电话号码、手机号码必须填一项'>
			<br><br>

			<span>电话号码</span>
			<select name="telCountry" id="">
				<option value="中国大陆 +86" checked>中国大陆 +86</option>
			</select>
			<input type="text" name='areacode' value='' placeholder='区号'>-
			<input type="tel" name='telphone' value='' placeholder='电话号码'>-
			<input type="text" name='extension' value='' placeholder='分机'>
			<br><br>

			<span></span><input type="checkbox" name='default_address'>设置为默认收货地址

			<br><br>
			<span></span><span></span>
			<input type="submit" value='保存'>

		</form>
	</div>
	<div class='savedaddress'>
		
		<p style='color:red;'>已保存了3条地址，还能保存17条地址</p>

		<table>
			<tr style='background:#ccc;'>
				<th>收货人</th>
				<th>所在地区</th>
				<th>详细地址</th>
				<th>邮编</th>
				<th>电话/手机</th>
				<th>操作</th>
				<th></th>
			</tr>
			<tr>
				<td>张林英</td>
				<td>陕西省 汉中市 勉县 定军山镇</td>
				<td>左所村四组</td>
				<td>724200</td>
				<td>86-0916-3319818<br>86-13*******41</td>
				<td>修改 | 删除	</td>
				<td>默认地址</td>
			</tr>
		</table>
	
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