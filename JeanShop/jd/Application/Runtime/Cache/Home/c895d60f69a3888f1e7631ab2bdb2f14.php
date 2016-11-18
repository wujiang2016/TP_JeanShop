<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>京东</title>
	<link rel="stylesheet" href="/jd/Public/Home/css/women_header.css">
</head>
<body>
	<div class="header">
		<div class="container">
			<div id="arrivalTo">送至：北京<span id="arrows"><i>◇</i></span></div>
			<div id="detail">
				<ul>
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
					<li class="space"></li>
					<li><a href="">我的订单</a></li>
					<li class="space"></li>
					<li id="myJD"><a href="">我的京东</a><span id="arrows1"><i>◇</i></span>
						<div id="myJdDiv">
							<div class="space"></div>
							<div>
								<img src="/jd/Public/images/2.jpg" alt="">
								<span><a href="">你好，请登录</a></span><br>
								<span><a href="">优惠券</a></span><span><a href="">消息</a></span>
							</div>
							<ul>
								<li>待处理订单</li>
								<li>我的关注</li>
								<li>咨询回复</li>
								<li>我的京豆</li>
								<li>降价商品</li>
								<li>我的理财</li>
								<li>返修退换货</li>
								<li>京东白条</li>
							</ul>
						</div>
					</li>
					<li class="space"></li>
					<li><a href="">京东会员</a></li>
					<li class="space"></li>
					<li><a href="">企业采购</a></li>
					<li class="space"></li>
					<li><div id="phoneJD"><img src="/jd/Public/images/jd2015img.png"></div><a href="">手机京东<span><i>◇</i></span></a></li>
					<li class="space"></li>
					<li>关注京东<span><i>◇</i></span></li>
					<li class="space"></li>
					<li>客户服务<span><i>◇</i></span></li>
					<li class="space"></li>
					<li>网站导航<span><i>◇</i></span></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="top">
		<div class="container">
			<div class="logo lf"><a href=""><img src="/jd/Public/images/logo-201305.png" alt=""></a></div>
			<div class="search lf">
				<div>
					<input type="text"><input type="button" value="搜索" name="search" onclick="shake(this);">
				</div>
				<a href="" class="active">约惠买车</a>
				<a href="">送红包</a>
				<a href="">农用物资</a>
				<a href="">低至9.9</a>
				<a href="">奥运尖货</a>
				<a href="">夹克女</a>
				<a href="">女童秋装</a>
				<a href="">0元华为</a>
				<a href="">杂粮礼盒</a>
			</div>
			<div class="mycart lf">
				<div><img src="/jd/Public/images/jd2015img.png" alt=""></div>我的购物车<i name="goodsNumber">0</i><i name="arrow"></i>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="nav">
		<div class="container">
			<ul>
				<li><a href="">女装商品分类</a>
					<ul>
						<li>
							<p>大家都在穿</p>
							<div><a href="">当季新品</a><a href="">针织衫</a><a href="">连帽卫衣</a><a href="">时尚T恤</a><a href="<?php echo U('Jean/index');?>">牛仔裤</a><a href="">轻薄羽绒服</a><a href="">毛呢外套</a><a href="">休闲裤</a><a href="">自营女装</a></div>
						</li>
						<li>
							<p>女士裙装</p>
							<div><a href="">连衣裙</a><a href="">长袖连衣裙</a><a href="">针织裙</a><a href="">棉麻连衣裙</a><a href="">背带裙</a><a href="">毛呢裙</a><a href="">性感连衣裙</a><a href="">蕾丝连衣裙</a><a href="">秋冬连衣裙</a><a href="">套装裙</a><a href="">毛衣裙</a></div>
						</li>
						<li>
							<p>女士上装<span style="float:right;">></span></p>
							<div><a href="">针织衫</a><a href="">衬衫</a><a href="">T恤</a><a href="">卫衣</a><a href="">羊绒衫</a><a href="">短外套</a><a href="">风衣</a><a href="">皮衣</a><a href="">毛呢大衣</a><a href="">羽绒服</a><a href="">皮草</a><a href="">棉服</a></div>
							<div class="expand">
							 	<p><strong>女士上装</strong></p>
							 	<div><a href="">高领毛衣</a><a href="">宽松毛衣</a><a href="">长款毛衣</a><a href="">套头毛衣</a><a href="">毛衣外套</a><a href="">针织衫</a><a href="">套头衫</a><a href="">针织开衫</a><a href="">中长款大衣</a><a href="">新款毛呢</a><a href="">羊绒大衣</a><a href="">双面绒大衣</a><a href="">轻薄羽绒</a><a href="">短款羽绒</a><a href="">中长款羽绒</a><a href="">毛领羽绒服</a><a href="">长款棉服</a><a href="">羊羔毛外套</a><a href="">皮草</a><a href="">皮衣</a><a href="">加绒卫衣</a><a href="">套头卫衣</a><a href="">风衣外套</a><a href="">卫衣套装</a><a href="">时尚T恤</a><a href="">百搭衬衫</a></div>
							</div> 
						</li>
						<li>
							<p>女士下装<span style="float:right;">></span></p>
							<div><a href="<?php echo U('Jean/index');?>">牛仔裤</a><a href="">休闲裤</a><a href="">哈伦裤</a><a href="">小脚裤</a><a href="">背带裤</a><a href="">阔腿裤</a><a href="">打底裤</a><a href="">运动裤</a><a href="">短裤</a></div>
							<div class="expand">
							 	<p><strong>女士下装</strong></p>
							 	<div><a href="">牛仔长款</a><a href="">高腰牛仔裤</a><a href="">小脚牛仔裤</a><a href="">黑色牛仔裤</a><a href="">加绒牛仔裤</a><a href="">直筒牛仔裤</a><a href="">哈伦裤</a><a href="">阔腿裤</a><a href="">背带裤</a><a href="">铅笔裤</a><a href="">喇叭裤</a><a href="">正装裤</a><a href="">包裙半裙</a><a href="">皮裙</a></div>
							</div> 
						</li>
						<li>
							<p>特色品类</p>
							<div><a href="">大码女装</a><a href="">中老年女装</a><a href="">旗袍</a><a href="">唐装</a><a href="">设计师</a><a href="">婚纱</a><a href="">礼服</a></div>
						</li>
					</ul>
				</li>
				<li style="display:<?php if (substr("/jd/index.php/Home/Women",strrpos("/jd/index.php/Home/Women",'/')+1)=="Index") { echo "none"; } else { echo "block"; } ?>;"><a href="">首页</a></li>
				<li><a href="">服装城</a></li>
				<li><a href="">美妆馆</a></li>
				<li><a href="">京东超市</a></li>
				<li><a href="">生鲜</a></li>
				<li><a href="">全球购</a></li>
				<li><a href="">闪购</a></li>
				<li><a href="">团购</a></li>
				<li><a href="">拍卖</a></li>
				<li><a href="">金融</a></li>
				<li><a href=""><img src="/jd/Public/images/579c99e6N741e69d0.jpg" alt=""></a></li>
			</ul>
		</div>
	</div>
<link rel="stylesheet" href="/jd/Public/Home/css/women.css">

<div class="lf banner">
	<div id="myCarousel" class="carousel slide">
		<!-- 轮播（Carousel）项目 -->
		<div class="carousel-inner">
			<div class="item">
				<img src="/jd/Public/images/5812a32cN1bf796be.jpg" alt="0">
			</div>
			<div class="item">
				<img src="/jd/Public/images/5812a2edN2585f788.jpg" alt="1">
			</div>
			<div class="item">
				<img src="/jd/Public/images/5812a2d3Nfee1e199.jpg" alt="2">
			</div>
			<div class="item">
				<img src="/jd/Public/images/580f3bbaN4399f08d.jpg" alt="3">
			</div>
			<div class="item">
				<img src="/jd/Public/images/58132f4dN5d0922fa.jpg" alt="4">
			</div>
		</div>
		<!-- 轮播（Carousel）指标 -->
		<ul class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" 
				class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
		</ul>
		<!-- 轮播（Carousel）导航 -->
		<a class="carousel-control left" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" data-slide="next">&rsaquo;</a>
	</div>
	<div id="dbleleven">
		<a href=""><img src="/jd/Public/images/58143514Nc4fd1f5d.jpg" alt=""><span></span></a>
		<a href=""><img src="/jd/Public/images/5812a3acNfb7d3959.jpg" alt=""><span></span></a>
		<a href=""><img src="/jd/Public/images/5812a3c1N2d0710f3.jpg" alt=""><span></span></a>
		<a href=""><img src="/jd/Public/images/5812a3d4N735acf90.jpg" alt=""><span></span></a>
	</div>
</div>
		


<div class="clearfix"></div>
<div class="selected">
	<div class="container">
		<h1>精选品牌<span>SELECTED</span></h1>
		<div><img src="/jd/Public/images/5812c462N191538ff.jpg" alt=""></div>
		<div>
			<ul>
				<li class="active" id="famous_brand">知名品牌</li>
				<li id="mass_brand">大众品牌</li>
				<li id="trendy_brand">潮流品牌</li>
			</ul>
			<div>
				<ul class="famous_brand">
					<li><img src="/jd/Public/images/580047a1N7d1304f8.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57d21651N6cabe69d.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57ff4643N03875a31.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57ff4661N128ec9e2.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5762bc40N1d14c7ae.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5743fb6bN26274231.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5743fa6eNc9173a22.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5743f715Nb45e5025.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5743f830N2dddb70f.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5743fe24N26b49b3b.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57724316Naa8a1a04.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5744054dNc495dfe4.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57fca623N1d106cdc.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5744048dN15eaabe2.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5734025fNd108d6ea.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57340280N500f2585.jpg" alt=""><span></span></li>
				</ul>
				<ul class="mass_brand" style="display:none;">
					<li><img src="/jd/Public/images/57340040N883c50e6.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57636ca5Nf965871d.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57340190N311da529.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/573401c7Nc823521b.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57aaa1a9Neb1f3d33.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57340236N8e6356ce.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57340251Nd368a6b7.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57340281N59b64143.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/573402b0Nd834e9e6.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/573402ebN9118c0e3.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57340312N72e6bf25.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57340336N57ed3166.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5734039eNe71de185.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57340403N92f88aa9.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57340443Nfb658b0f.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5734047fNc8d788c2.jpg" alt=""><span></span></li>
				</ul>
				<ul class="trendy_brand" style="display:none;">
					<li><img src="/jd/Public/images/57ada8a7N3b5526a5.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57ada8c0N94ca772c.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57ada8d6N1fd12aea.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57ada8efNd58c0dae.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57341372N054d01ec.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/573413a5N24ebaea6.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/573413e6N43822414.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57341410Ndd5bab15.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/573414a2Nace9bb20.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57341446N80a621e6.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5734146aNbb6f4499.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/573414e0N70a94ca8.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57341536Nada508c2.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/57341554N361df18d.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/5734157fN1fd98b36.jpg" alt=""><span></span></li>
					<li><img src="/jd/Public/images/573415acN44f63beb.jpg" alt=""><span></span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="new">
	<div class="container">
		<h1>品牌上新<span>new</span></h1>
		<div>
			<a><img src="/jd/Public/images/581322c2Nff071d8a.jpg" alt=""><span></span></a>
			<a><img src="/jd/Public/images/5814384fNcf3aae1b.jpg" alt=""><span></span></a>
			<a><img src="/jd/Public/images/5811cf2fN95d8bf67.jpg" alt=""><span></span></a>
			<a><img src="/jd/Public/images/5812b951N8ac95b57.jpg" alt=""><span></span></a>
			<a><img src="/jd/Public/images/5814388aNd8821624.jpg" alt=""><span></span></a>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="trend">
	<div class="container">
		<h1>潮流穿搭<span>TREND</span></h1>
		<div>
			<div>
				<a><img src="/jd/Public/images/58100a37Nbe01262b.jpg" alt=""><span></span></a>
			</div>
			<div>
				<a><img src="/jd/Public/images/5812a467N2b6ce1d8.jpg" alt=""><span></span></a>
				<a><img src="/jd/Public/images/58132f8dN546e59bd.jpg" alt=""><span></span></a>
				<a><img src="/jd/Public/images/58132fe6N4c75aac0.jpg" alt=""><span></span></a>
			</div>
			<div>
				<a><img src="/jd/Public/images/5812a502N2325b703.jpg" alt=""><span></span></a>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>

<script src="/jd/Public/Home/js/jquery-1.4.3.js"></script>
<script src="/jd/Public/Home/js/women.js"></script>
<div class="clearfix"></div>
	<div class="dkhs">
		<div class="container">
			<img src="/jd/Public/images/service_items_1.png" alt="">
			<img src="/jd/Public/images/service_items_2.png" alt="">
			<img src="/jd/Public/images/service_items_3.png" alt="">
			<img src="/jd/Public/images/service_items_4.png" alt="">
		</div>
	</div>
	<div class="zhinan">
		<div class="container">
			<ul>
				<li>购物指南</li>
				<li><a href="">购物流程</a></li>
				<li><a href="">会员介绍</a></li>
				<li><a href="">生活旅行/团购</a></li>
				<li><a href="">常见问题</a></li>
				<li><a href="">大家电</a></li>
				<li><a href="">联系客服</a></li>
			</ul>
			<ul>
				<li>配送方式</li>
				<li><a href="">上门自提</a></li>
				<li><a href="">211限时达</a></li>
				<li><a href="">配送服务查询</a></li>
				<li><a href="">配送费收取标准</a></li>
				<li><a href="">海外配送</a></li>
			</ul>
			<ul>
				<li>支付方式</li>
				<li><a href="">货到付款</a></li>
				<li><a href="">在线支付</a></li>
				<li><a href="">分期付款</a></li>
				<li><a href="">邮局汇款</a></li>
				<li><a href="">公司转账</a></li>
			</ul>
			<ul>
				<li>售后服务</li>
				<li><a href="">售后政策</a></li>
				<li><a href="">价格保护</a></li>
				<li><a href="">退款说明</a></li>
				<li><a href="">返修/退换货</a></li>
				<li><a href="">取消订单</a></li>
			</ul>
			<ul>
				<li>特色服务</li>
				<li><a href="">夺宝岛</a></li>
				<li><a href="">DIY装机</a></li>
				<li><a href="">延保服务</a></li>
				<li><a href="">京东E卡</a></li>
				<li><a href="">京东通信</a></li>
				<li><a href="">京东JD+</a></li>
			</ul>
			<ul>
				<li>京东自营覆盖区县</li>
				<li>京东已向全国2654个区县提供自营配送服务，支持货到付款、POS机刷卡和售后上门服务。</li>
				<li><a href="">查看详情 ></a></li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="footer">
		<div class="container">
			<ul>
				<li><a href="">关于我们</a></li>
				<li></li>
				<li><a href="">联系我们</a></li>
				<li></li>
				<li><a href="">联系客服</a></li>
				<li></li>
				<li><a href="">商家入驻</a></li>
				<li></li>
				<li><a href="">营销中心</a></li>
				<li></li>
				<li><a href="">手机京东</a></li>
				<li></li>
				<li><a href="">友情链接</a></li>
				<li></li>
				<li><a href="">销售联盟</a></li>
				<li></li>
				<li><a href="">京东社区</a></li>
				<li></li>
				<li><a href="">京东公益</a></li>
				<li></li>
				<li><a href="">English Site</a></li>
				<li></li>
				<li><a href="">Contact Us</a></li>
			</ul>
			<ul>
				<li><a href=""><img src="/jd/Public/images/56a0a994Nf1b662dc.png" alt="">京公网安备 11000002000088号</a></li>
				<li></li>
				<li>京ICP证070359号</li>
				<li></li>
				<li><a href="">互联网药品信息服务资格证编号(京)-经营性-2014-0008</a></li>
				<li></li>
				<li>新出发京零 字第大120007号</li>
			</ul>
			<ul>
				<li>互联网出版许可证编号新出网证(京)字150号</li>
				<li></li>
				<li><a href="">出版物经营许可证</a></li>
				<li></li>
				<li><a href="">网络文化经营许可证京网文[2014]2148-348号</a></li>
				<li></li>
				<li>违法和不良信息举报电话：4006561155</li>
			</ul>
			<ul>
				<li>Copyright © 2004 - 2016  京东JD.com 版权所有</li>
				<li></li>
				<li>消费者维权热线：4006067733</li>
			</ul>
			<ul>
				<li>京东旗下网站：<a href="">京东钱包</a></li>
			</ul>
			<ul>
				<li><a href=""><img src="/jd/Public/images/54b8871eNa9a7067e.png" alt=""></a></li>
				<li><a href=""><img src="/jd/Public/images/54b8872dNe37a9860.png" alt=""></a></li>
				<li><a href=""><img src="/jd/Public/images/56a89b8fNfbaade9a.jpg" alt=""></a></li>
				<li><a href=""><img src="/jd/Public/images/54b8875fNad1e0c4c.png" alt=""></a></li>
				<li><a href=""><img src="/jd/Public/images/5698dc03N23f2e3b8.jpg" alt=""></a></li>
				<li><a href=""><img src="/jd/Public/images/5698dc16Nb2ab99df.jpg" alt=""></a></li>
			</ul>
		</div>
	</div>
	<script src="/jd/Public/Home/js/jquery-1.4.3.js"></script>
<!-- <script src="/jd/Public/Home/js/style.js"></script> -->
	<script src="/jd/Public/Home/js/jd.js"></script>
</body>
</html>