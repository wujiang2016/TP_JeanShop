<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>京东</title>
	<link rel="stylesheet" href="<?php echo C('CSS_PATH');?>HeaderFooter.css">
	<link rel="stylesheet" href="css/jd.css">
</head>
<body>
	<div class="header">
		<div class="container">
			<div id="arrivalTo">送至：北京<span id="arrows"><i>◇</i></span></div>
			<div id="detail">
				<ul>
					<li><a href="">你好，请登录</a></li>
					<li><a href="">免费注册</a></li>
					<li class="space"></li>
					<li><a href="">我的订单</a></li>
					<li class="space"></li>
					<li id="myJD"><a href="">我的京东</a><span id="arrows1"><i>◇</i></span>
						<div id="myJdDiv">
							<div class="space"></div>
							<div>
								<img src="images/2.jpg" alt="">
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
					<li><div id="phoneJD"><img src="images/jd2015img.png"></div><a href="">手机京东<span><i>◇</i></span></a></li>
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
			<div class="logo lf"><a href=""><img src="images/logo-201305.png" alt=""></a></div>
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
				<div><img src="images/jd2015img.png" alt=""></div>我的购物车<i name="goodsNumber">0</i><i name="arrow"></i>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="nav">
		<div class="container">
			<ul>
				<li><a href="">全部商品分类</a>
					<ul id="leftNav">
						<li><a href="">家用电器</a><i>></i>
							<div>
								<div class="jiaDian">
									<a href="">家电城<i>></i></a>
									<a href="">品牌日<i>></i></a>
									<a href="">智能生活馆<i>></i></a>
									<a href="">京东净化馆<i>></i></a>
									<a href="">京东帮服务店<i>></i></a>
									<a href="">家电众筹馆<i>></i></a>
								</div>
								<div style="margin-top:10px;">
									<div><a href="">大家电<i>></i></a></div>
									<ul>
										<li><a href="">平板电视</a></li>
										<li><a href="">空调</a></li>
										<li><a href="">冰箱</a></li>
										<li><a href="">洗衣机</a></li>
										<li><a href="">家庭影院</a></li>
										<li><a href="">DVD</a></li>
										<li><a href="">迷你音响</a></li>
										<li><a href="">冷柜/冰吧</a></li>
										<li><a href="">酒柜</a></li>
										<li><a href="">家电配件</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">厨卫大电<i>></i></a></div>
									<ul>
										<li><a href="">油烟机</a></li>
										<li><a href="">燃气灶</a></li>
										<li><a href="">烟灶套装</a></li>
										<li><a href="">消毒柜</a></li>
										<li><a href="">洗碗机</a></li>
										<li><a href="">电热水器</a></li>
										<li><a href="">燃气热水器</a></li>
										<li><a href="">嵌入式厨电</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">厨房小电<i>></i></a></div>
									<ul>
										<li><a href="">电饭煲</a></li>
										<li><a href="">微波炉</a></li>
										<li><a href="">电烤箱</a></li>
										<li><a href="">电磁炉</a></li>
										<li><a href="">电压力锅</a></li>
										<li><a href="">豆浆机</a></li>
										<li><a href="">咖啡机</a></li>
										<li><a href="">面包机</a></li>
										<li><a href="">榨汁机</a></li>
										<li><a href="">料理机</a></li>
										<li><a href="">电饼铛</a></li>
										<li><a href="">养生壶/煎药壶</a></li>
										<li><a href="">酸奶机</a></li>
										<li><a href="">煮蛋器</a></li>
										<li><a href="">电水壶/热水瓶</a></li>
										<li><a href="">电炖锅</a></li>
										<li><a href="">多用途锅</a></li>
										<li><a href="">电烧烤炉</a></li>
										<li><a href="">电热饭盒</a></li>
										<li><a href="">其它厨房电器</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">生活电器<i>></i></a></div>
									<ul>
										<li><a href="">电风扇</a></li>
										<li><a href="">冷风扇</a></li>
										<li><a href="">吸尘器</a></li>
										<li><a href="">净化器</a></li>
										<li><a href="">扫地机器人</a></li>
										<li><a href="">加湿器</a></li>
										<li><a href="">挂烫机/熨斗</a></li>
										<li><a href="">取暖电器</a></li>
										<li><a href="">插座</a></li>
										<li><a href="">电话机</a></li>
										<li><a href="">净水器</a></li>
										<li><a href="">饮水机</a></li>
										<li><a href="">除湿机</a></li>
										<li><a href="">干衣机</a></li>
										<li><a href="">清洁机</a></li>
										<li><a href="">收录/音机</a></li>
										<li><a href="">其它生活电器</a></li>
										<li><a href="">生活电器配件</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">电视<i>></i></a></div>
									<ul>
										<li><a href="">沸腾815</a></li>
										<li><a href="">合资品牌</a></li>
										<li><a href="">国产品牌</a></li>
										<li><a href="">互联网品牌</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">空调<i>></i></a></div>
									<ul>
										<li><a href="">壁挂式空调</a></li>
										<li><a href="">柜式空调</a></li>
										<li><a href="">空调配件</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">洗衣机<i>></i></a></div>
									<ul>
										<li><a href="">滚筒洗衣机</a></li>
										<li><a href="">洗烘一体机</a></li>
										<li><a href="">波轮洗衣机</a></li>
										<li><a href="">迷你洗衣机</a></li>
										<li><a href="">洗衣机配件</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">冰箱<i>></i></a></div>
									<ul>
										<li><a href="">多门</a></li>
										<li><a href="">对开门</a></li>
										<li><a href="">三门</a></li>
										<li><a href="">双门</a></li>
										<li><a href="">冷柜/冰吧</a></li>
										<li><a href="">酒柜</a></li>
										<li><a href="">冰箱配件</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">个护健康<i>></i></a></div>
									<ul>
										<li><a href="">剃须刀</a></li>
										<li><a href="">口腔护理</a></li>
										<li><a href="">电吹风</a></li>
										<li><a href="">美容器</a></li>
										<li><a href="">卷/直发器</a></li>
										<li><a href="">理发器</a></li>
										<li><a href="">剃/脱毛器</a></li>
										<li><a href="">足浴盆</a></li>
										<li><a href="">健康秤/厨房秤</a></li>
										<li><a href="">按摩器</a></li>
										<li><a href="">按摩椅</a></li>
										<li><a href="">血压计</a></li>
										<li><a href="">血糖仪</a></li>
										<li><a href="">体温计</a></li>
										<li><a href="">计步器/脂肪检测仪</a></li>
										<li><a href="">其它健康电器</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">家庭影音<i>></i></a></div>
									<ul>
										<li><a href="">家庭影院</a></li>
										<li><a href="">迷你音响</a></li>
										<li><a href="">DVD</a></li>
										<li><a href="">电视影音配件</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">进口电器<i>></i></a></div>
									<ul style="border:0;">
										<li><a href="">进口电器</a></li>
									</ul>
								</div>
								<div>
									<ul>
										<li><a href=""><img src="images/562f4971Na5379aba.jpg" alt=""></a></li>
										<li><a href=""><img src="images/579eb61bN39c0c737.jpg" alt=""></a></li>
										<li><a href=""><img src="images/573c0ed1Nee530fec.jpg" alt=""></a></li>
										<li><a href=""><img src="images/574c0755Nc8f19944.jpg" alt=""></a></li>
										<li><a href=""><img src="images/57a075b6Nd3e293c2.jpg" alt=""></a></li>
										<li><a href=""><img src="images/56da5bb0N016b7c32.jpg" alt=""></a></li>
										<li><a href=""><img src="images/5779c11bN13063595.jpg" alt=""></a></li>
										<li><a href=""><img src="images/56f138bfN71952631.jpg" alt=""></a></li>
										<li style="margin-top:5px;"><a href=""><img src="images/57a7528bNaea050ea.jpg" alt=""></a></li>
										<li><a href=""><img src="images/57b660c7N53145160.jpg" alt=""></a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="">手机、数码、京东通信</a><i>></i>
							<div>
								<div>
									<a href="">玩3C<i>></i></a>
									<a href="">手机频道<i>></i></a>
									<a href="">网上营业厅<i>></i></a>
									<a href="">配件城<i>></i></a>
									<a href="">影像Club<i>></i></a>
									<a href="">以旧换新<i>></i></a>
								</div>
								<div style="margin-top:10px;">
									<div><a href="">手机通讯<i>></i></a></div>
									<ul>
										<li><a href="">手机</a></li>
										<li><a href="">对讲机</a></li>
										<li><a href="">以旧换新</a></li>
										<li><a href="">手机维修</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">京东通信<i>></i></a></div>
									<ul>
										<li><a href="">选号中心</a></li>
										<li><a href="">自助服务</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">运营商<i>></i></a></div>
									<ul>
										<li><a href="">合约机</a></li>
										<li><a href="">办套餐</a></li>
										<li><a href="">选号码</a></li>
										<li><a href="">装宽带</a></li>
										<li><a href="">中国移动</a></li>
										<li><a href="">中国联通</a></li>
										<li><a href="">中国电信</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">手机配件<i>></i></a></div>
									<ul>
										<li><a href="">手机电池</a></li>
										<li><a href="">移动电源</a></li>
										<li><a href="">蓝牙耳机</a></li>
										<li><a href="">充电器</a></li>
										<li><a href="">数据线</a></li>
										<li><a href="">手机耳机</a></li>
										<li><a href="">手机支架</a></li>
										<li><a href="">贴膜</a></li>
										<li><a href="">手机存储卡</a></li>
										<li><a href="">保护套</a></li>
										<li><a href="">车载配件</a></li>
										<li><a href="">苹果周边</a></li>
										<li><a href="">创意配件</a></li>
										<li><a href="">手机饰品</a></li>
										<li><a href="">拍照配件</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">摄影摄像<i>></i></a></div>
									<ul>
										<li><a href="">数码相机</a></li>
										<li><a href="">单电/微单相机</a></li>
										<li><a href="">单反相机</a></li>
										<li><a href="">拍立得</a></li>
										<li><a href="">运动相机</a></li>
										<li><a href="">摄像机</a></li>
										<li><a href="">镜头</a></li>
										<li><a href="">户外器材</a></li>
										<li><a href="">影棚器材</a></li>
										<li><a href="">冲印服务</a></li>
										<li><a href="">数码相框</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">数码配件<i>></i></a></div>
									<ul>
										<li><a href="">存储卡</a></li>
										<li><a href="">读卡器</a></li>
										<li><a href="">支架</a></li>
										<li><a href="">滤镜</a></li>
										<li><a href="">闪光灯/手柄</a></li>
										<li><a href="">相机包</a></li>
										<li><a href="">三脚架/云台</a></li>
										<li><a href="">相机清洁/贴膜</a></li>
										<li><a href="">机身附件</a></li>
										<li><a href="">镜头附件</a></li>
										<li><a href="">电池/充电器</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">影音娱乐<i>></i></a></div>
									<ul>
										<li><a href="">耳机/耳麦</a></li>
										<li><a href="">音箱/音响</a></li>
										<li><a href="">便携/无线音箱</a></li>
										<li><a href="">收音机</a></li>
										<li><a href="">麦克风</a></li>
										<li><a href="">MP3/MP4</a></li>
										<li><a href="">专业音频</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">智能设备<i>></i></a></div>
									<ul>
										<li><a href="">智能手环</a></li>
										<li><a href="">智能手表</a></li>
										<li><a href="">智能眼镜</a></li>
										<li><a href="">智能机器人</a></li>
										<li><a href="">运动跟踪器</a></li>
										<li><a href="">健康监测</a></li>
										<li><a href="">智能配饰</a></li>
										<li><a href="">智能家居</a></li>
										<li><a href="">体感车</a></li>
										<li><a href="">无人机</a></li>
										<li><a href="">其他配件</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">电子教育<i>></i></a></div>
									<ul>
										<li><a href="">学生平板</a></li>
										<li><a href="">点读机/笔</a></li>
										<li><a href="">早教益智</a></li>
										<li><a href="">录音笔</a></li>
										<li><a href="">电纸书</a></li>
										<li><a href="">电子词典</a></li>
										<li><a href="">复读机</a></li>
									</ul>
								</div>
								<div>
									<ul>
										<li><a href=""><img src="images/5708334dN24ec1feb.jpg" alt=""></a></li>
										<li><a href=""><img src="images/5757bb0aNb53cb183.jpg" alt=""></a></li>
										<li><a href=""><img src="images/56a72d4fN4d1b42fe.jpg" alt=""></a></li>
										<li><a href=""><img src="images/574ba6beNb1d8e00d.jpg" alt=""></a></li>
										<li><a href=""><img src="images/56f4d7c6Nfd0e9c92.jpg" alt=""></a></li>
										<li><a href=""><img src="images/56da5bb0N016b7c32.jpg" alt=""></a></li>
										<li><a href=""><img src="images/55b1d930Nf0bfccbb.jpg" alt=""></a></li>
										<li><a href=""><img src="images/56f138bfN71952631.jpg" alt=""></a></li>
										<li style="margin-top:5px;"><a href=""><img src="images/57b6b9b6N5c342850.jpg" alt=""></a></li>
										<li><a href=""><img src="images/57aabf27N447b24c8.jpg" alt=""></a></li>


									</ul>
								</div>
							</div>
						</li>
						<li><a href="">电脑、办公</a><i>></i></li>
						<li><a href="">家居、家具、家装、厨具</a><i>></i></li>
						<li><a href="">男装、女装、童装、内衣</a><i>></i></li>
						<li><a href="">个护化妆、清洁用品、宠物</a><i>></i></li>
						<li><a href="">鞋靴、箱包、珠宝、奢侈品</a><i>></i></li>
						<li><a href="">运动户外、钟表</a><i>></i></li>
						<li><a href="">汽车、汽车用品</a><i>></i></li>
						<li><a href="">母婴、玩具乐器</a><i>></i></li>
						<li><a href="">食品、酒类、生鲜、特产</a><i>></i></li>
						<li><a href="">医药保健</a><i>></i></li>
						<li><a href="">图书、音像、电子书</a><i>></i></li>
						<li><a href="">彩票、旅行、充值、票务</a><i>></i></li>
						<li><a href="">理财、众筹、白条、保险</a><i>></i>
							<div style="height:465px;">
								<div>
									<a href="">金融首页<i>></i></a>
									<a href="">尖er货<i>></i></a>
									<a href="">奇趣日报<i>></i></a>
									<a href="">大牌免息<i>></i></a>
									<a href="">财发现<i>></i></a>
								</div>
								<div style="margin-top:10px;">
									<div><a href="">理财<i>></i></a></div>
									<ul>
										<li><a href="">京东小金库</a></li>
										<li><a href="">票据理财</a></li>
										<li><a href="">基金理财</a></li>
										<li><a href="">定期理财</a></li>
										<li><a href="">固收理财</a></li>
										<li><a href="">妈妈理财</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">众筹<i>></i></a></div>
									<ul>
										<li><a href="">智能硬件</a></li>
										<li><a href="">流行文化</a></li>
										<li><a href="">生活美学</a></li>
										<li><a href="">公益</a></li>
										<li><a href="">其他权益众筹</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">东家<i>></i></a></div>
									<ul>
										<li><a href="">私募股权</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">白条<i>></i></a></div>
									<ul>
										<li><a href="">京东白条</a></li>
										<li><a href="">白条联名卡</a></li>
										<li><a href="">京东钢镚</a></li>
										<li><a href="">旅游白条</a></li>
										<li><a href="">安居白条</a></li>
										<li><a href="">校园白条</a></li>
										<li><a href="">京东金采</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">钱包<i>></i></a></div>
									<ul>
										<li><a href="">京东钱包</a></li>
									</ul>
								</div>
								<div>
									<div><a href="">保险<i>></i></a></div>
									<ul style="border-bottom:0;">
										<li><a href="">车险</a></li>
										<li><a href="">健康险</a></li>
										<li><a href="">意外险</a></li>
										<li><a href="">旅行险</a></li>
									</ul>
								</div>
								<div>
									<ul>
										<li><a href=""><img src="images/54d9ec4dN10eb50a0.jpg" alt=""></a></li>
										<li><a href=""><img src="images/54d9ec61N5b4b1a20.jpg" alt=""></a></li>
										<li><a href=""><img src="images/54d9ec75N7a667ff3.jpg" alt=""></a></li>
										<li><a href=""><img src="images/54d9ec89Nc43c246b.jpg" alt=""></a></li>
										<li><a href=""><img src="images/578c3f87Nb52c6132.jpg" alt=""></a></li>
										<li><a href=""><img src="images/575f75afN4b5401f3.jpg" alt=""></a></li>
										<li><a href=""><img src="images/54d9ecc1Nddadf57b.jpg" alt=""></a></li>
										<li><a href=""><img src="images/54d9ecd7Nf4b145d1.jpg" alt=""></a></li>
										<li style="margin-top:5px;"><a href=""><img src="images/57b416b0N46af2210.jpg" alt=""></a></li>
										<li><a href=""><img src="images/57b2b759N04c28ad9.jpg" alt=""></a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li><a href="">服装城</a></li>
				<li><a href="">美妆馆</a></li>
				<li><a href="">京东超市</a></li>
				<li><a href="">生鲜</a></li>
				<li><a href="">全球购</a></li>
				<li><a href="">闪购</a></li>
				<li><a href="">团购</a></li>
				<li><a href="">拍卖</a></li>
				<li><a href="">金融</a></li>
				<li><a href=""><img src="images/579c99e6N741e69d0.jpg" alt=""></a></li>
			</ul>
		</div>
	</div>
	<div class="lf banner">
		<!-- <div class="container"> -->
			<div class="lf banner_center">
				<ul class="slider">
					<li><a href=""><img src="images/57a444e2N539ab837.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57a46109Na9a87877.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57a452b5Nf82bca09.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57a41982N7b2ecdbe.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57a97f50N7874eb0d.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57a7ef09Nbed38fd3.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57a444e2N539ab837.jpg" alt=""></a></li>
				</ul>
				<ul class="slider">
					<li class="current">1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
				</ul>
			</div>
			<div class="lf banner_right">
				<div class="bianKuang">
					<div class="title">
						<h1>京东快报</h1>
						<a href="">更多 ></a>
					</div>
					<ul class="notice">
						<li><a href=""><span>[特惠]</span>备战开学季 全民半价购数码</a></li>
						<li><a href=""><span>[公告]</span>京东稳占家电网购六成份额</a></li>
						<li><a href=""><span>[特惠]</span>百元中秋全品类礼券限量领</a></li>
						<li><a href=""><span>[公告]</span>上京东生鲜 享阳澄湖大闸蟹</a></li>
						<li><a href=""><span>[特惠]</span>每日享折扣 京东品质游</a></li>
					</ul>
					<ul class="recharge">
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>话费</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>机票</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>电影票</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>游戏</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>彩票</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>加油卡</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>酒店</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>火车票</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>理财</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>白条</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>众筹</a></li>
						<li><a href=""><span><img src="images/57620a6fN77b2b8af.png" alt=""></span>礼品卡</a></li>
					</ul>
					<div class="clearfix"></div>
					<div class="recharge_detail">
						<ul>
							<li><a href=""><img src="" alt="">话费</a>
								<div>
									<ul>
										<li><a href="">话费充值<i></i></a></li>
										<li><a href="">流量充值<i></i></a></li>
										<li><a href="">套餐变更<i></i></a></li>
									</ul>
								</div>
								<p>号码<input type="text" name="phoneNo" placeholder="移动、联通、电信"></p>
								<p>
									<span id="rechargeName">面值</span><select name="rechargeMoney" id="rechargeMoney" value="">
										<option value="10">10元</option>
									</select><span id="rechargePrice">￥9.8-￥11.0</span>
								</p>
								<a href="" class="quicklyRecharge">快速充值</a>
								<a href="" class="hotRecharge"><span>HOT</span>充250M送250M</a>
							</li>
							<li><a href=""><img src="" alt="">机票</a></li>
							<li><a href=""><img src="" alt="">电影票</a></li>
							<li><a href=""><img src="" alt="">游戏</a></li>
						</ul>
					</div>
					<!-- <div>
						<ul>
							<li><a href=""><img src="" alt="">话费</a></li>
							<li><a href=""><img src="" alt="">机票</a></li>
							<li><a href=""><img src="" alt="">电影票</a></li>
							<li><a href=""><img src="" alt="">游戏</a></li>
						</ul>
					</div> -->
				</div>
				<!-- <div class="clearfix"></div> -->
				<div class="lf banner_right_bottom">
					<a href=""><img src="images/3.jpg" alt=""></a>
				</div>
			</div>

		<!-- </div> -->
	</div>
	<div class="clearfix"></div>
	<div class="bigShow">
		<div class="container">
			<div class="bigShow_top">
				<div class="bigShow_top_left"><a href=""><img src="images/57a944c3Ne2e489d7.jpg" alt=""></a></div>
				<div class="bigShow_top_right">
					<span id="arrowToLeft">&lt;</span>
					<div id="littleScrollPic">
						<a href=""><img src="images/56e927d5N28235ac0.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/5786085aNd00dd250.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/5510d809N70c3eb71.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/5510e39fNfc1a0818.jpg" alt=""></a>
						
						<a href=""><img src="images/5510e394N7d91092f.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/5767a07fN3342bdc4.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/57a2df3aN10f35263.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/57a2dfa7N26fd0080.jpg" alt=""></a>

						<a href=""><img src="images/57a748ecNf028d305.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/57a83208N9a102347.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/57aadd1eNf2b38e29.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/57abe229Nb411cefa.jpg" alt=""></a>
						
						<a href=""><img src="images/5620506fNd536f2d9.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/57aa96feN74d3e357.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/56f4fda6Ne0d3589c.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/57aaca68N1dc1df7b.jpg" alt=""></a>
						
						<a href=""><img src="images/56e927d5N28235ac0.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/5786085aNd00dd250.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/5510d809N70c3eb71.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/5510e39fNfc1a0818.jpg" alt=""></a>

						<a href=""><img src="images/5510e394N7d91092f.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/5767a07fN3342bdc4.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/57a2df3aN10f35263.jpg" alt=""></a>
						<span></span>
						<a href=""><img src="images/57a2dfa7N26fd0080.jpg" alt=""></a>
					</div>
					<span id="arrowToRight">&gt;</span>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="bigShow_middle">
				<div class="guess">
					<span>猜你喜欢</span>
					<p>换一批</p>
				</div>
				<div class="guessgoods">
					<ul>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
						<i></i>
						<li>
							<a href=""><img src="images/rBEbRlNsvGoIAAAAAAMPWqybndgAAAuZwHzyNsAAw9y715.jpg" alt=""></a>
							<p><a href="">【京东超市】光明 莫斯利安 巴氏杀菌常温酸牛</a></p>
							<price>¥56.00</price>
						</li>
					</ul>
				</div>
			</div>
			<div class="bigShow_bottom">
				<p>京东 · 品质生活</p>
				<div class="newFound">
					<p>新发现</p>
					<div>
						<ul>
							<li>小米路由器3C</li>
							<li>高增益四天线</li>
							<li>99元火热上市</li>
						</ul>
						<a href=""></a>
					</div>
					<div style="position:relative;">
						<ul>
							<li>领券中心</li>
							<li>超值券</li>
							<li>每日限量抢</li>
							<a href=""></a>
						</ul>
					</div>
					<div style="position:relative;">
						<ul>
							<li>限时秒杀</li>
							<li>好货轮番</li>
							<li>拼的就是手速</li>
							<a href=""></a>
						</ul>
					</div>
				</div>
				<div class="goodStuff">
					<p>好东西</p>
					<div>
						<ul>
							<li>达人推荐</li>
							<li>腕上私语</li>
							<li>智能与机械结合</li>
						</ul>
						<a href=""></a>
					</div>
					<div style="position:relative;">
						<ul>
							<li>发现好物</li>
							<li>磁悬浮音箱</li>
							<li>智能触控调节</li>
						</ul>
						<a href=""></a>
					</div>
				</div>
				<div class="brands">
					<p>品牌街</p>
					<div>
						<a href=""></a>
						
					</div>
					<div style="position:relative;">
						<ul>
							<li>国际大牌</li>
							<li>kipling印花系新品</li>
							<li>满500-150不封顶</li>
						</ul>
						<a href=""></a>
					</div>
					<div style="position:relative;">
						
						<a href=""></a>
					</div>
				</div>
				<div class="logoes">
					<ul>
						<li><a href=""><img src="images/57720f10N916a423d.jpg" alt=""></a></li>
						<li><a href=""><img src="images/5716e2c4Nc925baf3.jpg" alt=""></a></li>
						<li><a href=""><img src="images/5763ad44Nd29dc824.jpg" alt=""></a></li>
						<li><a href=""><img src="images/575d1934Nb59e3dfd.jpg" alt=""></a></li>
						<li><a href=""><img src="images/5786128bN6232ac1b.jpg" alt=""></a></li>
						<li><a href=""><img src="images/56c04bc6Nb1e3b063.jpg" alt=""></a></li>
						<li><a href=""><img src="images/564d4328N6fb33fc8.png" alt=""></a></li>
						<li><a href=""><img src="images/55dd8673N4c58a983.jpg" alt=""></a></li>
						<li><a href=""><img src="images/575d1964Nb291ee77.jpg" alt=""></a></li>
						<li><a href=""><img src="images/572966eeN007d6ad3.jpg" alt=""></a></li>
						<li><a href=""><img src="images/56b2f385N8e4eb051.jpg" alt=""></a></li>
						<li><a href=""><img src="images/56a82043N6e9f3b14.jpg" alt=""></a></li>
						<li><a href=""><img src="images/56c04bc6Nb1e3b063.jpg" alt=""></a></li>
						<li><a href=""><img src="images/569dce20N87f111d4.jpg" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
<!-- 楼层导航标识 -->
	<ul id="floor_nav">
		<li><a href="javascript:void(0)">1F</a></li>
		<li><a href="javascript:void(0)">2F</a></li>
		<li><a href="javascript:void(0)">3F</a></li>
	</ul>
<!-- 右侧固定工具栏 -->
	<ul id="rightFixBar">
		<li><a href="javascript:void(0)"><img src="images/toolbars.png" alt=""></a>
			<a href="javascript:void(0)"><img src="images/toolbars.png" alt=""></a>
			<ul>
				<li><a href="">京东会员</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0)"><img src="images/toolbars.png" alt=""></a>
			<ul>
				<li><a href="">购物车</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0)"><img src="images/toolbars.png" alt=""></a>
			<ul>
				<li><a href="">我的关注</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0)"><img src="images/toolbars.png" alt=""></a>
			<ul>
				<li><a href="">我的足迹</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0)"><img src="images/toolbars.png" alt=""></a>
			<ul>
				<li><a href="">我的消息</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0)"><img src="images/toolbars.png" alt=""></a>
			<ul>
				<li><a href="">咨询JIMI</a></li>
			</ul>
		</li>
		<li><a href="#arrivalTo"><img src="images/toolbars.png" alt=""></a>
			<ul>
				<li><a href="#arrivalTo">顶部</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0)"><img src="images/toolbars.png" alt=""></a>
			<ul>
				<li><a href="">反馈</a></li>
			</ul>
		</li>
	</ul>
<!-- 右侧黑竖线 -->
	<div style="width:6px;height:1000px;position:fixed;right:0;background-color:#7A6E6E;z-index:3000;top:0;">11111111111</div>
<!-- 第一楼层 -->
	<div class="first_floor" style="margin-top:10px;">
		<div class="container">
			<div class="top">
				<p><span>1F</span>服装鞋包</p>
				<ul class="tabExchange">
					<li><a href="">大牌</a></li>
					<li><a href="">男装</a></li>
					<li><a href="">女装</a></li>
					<li><a href="">鞋靴</a></li>
					<li><a href="">箱包</a></li>
					<li><a href="">内衣配饰</a></li>
					<li><a href="">珠宝首饰</a></li>
					<li><a href="">奢品礼品</a></li>
					<li><a href="">奢华腕表</a></li>
				</ul>
			</div>
			<div class="lf main_left">
				<a href=""><img src="images/57abe7deN6a981fe3.jpg" alt="" style="border-bottom: 1px solid #EDEDED;"></a>
				<a href=""><img src="images/57ab4467Na5249097.jpg" alt="" style="border-width:0 1px 1px 1px;border-style:solid;border-color:#EDEDED;"></a>
				<div style="width:330px;height:92px;">
					<ul>
						<li><span></span><a href="">男装</a></li>
						<li><span></span><a href="">女装</a></li>
						<li><span></span><a href="">内衣</a></li>
						<li><span></span><a href="">鞋靴</a></li>
						<li><span></span><a href="">箱包</a></li>
						<li><span></span><a href="">奢侈品</a></li>
					</ul>
				</div>
				<div style="width:330px;height:129px;">
					<ul>
						<li><a href="" class="current">潮流女装</a></li>
						<li><a href="">丝巾</a></li>
						<li><a href="">服装城</a></li>
						<li><a href="">品质男鞋</a></li>
						<li><a href="">时尚女鞋</a></li>
						<li><a href="" class="current">精品男装</a></li>
						<li><a href="">纯棉内裤</a></li>
						<li><a href="">奢侈品</a></li>
					</ul>
					<ul>
						<li><a href="">菩提手串</a></li>
						<li><a href="" class="current">水晶手链</a></li>
						<li><a href="">时尚女包</a></li>
						<li><a href="">精品男包</a></li>
						<li><a href="">维氏手表</a></li>
						<li><a href="" class="current">奢品名表</a></li>
						<li><a href="">国表经典</a></li>
						<li><a href="">腕表七夕</a></li>
					</ul>
				</div>
			</div>
			<div class="lf main_right" id="tabpage_0_0">
				<ul>
					<li><a href=""><img src="images/57ab36eeN606c8f85.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab40f6N5bbae5fb.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab4142Nb5d50ec9.jpg" alt=""></a></li>
					<li id="autoScroll_1F">
						<span id="arrowToLeft_1F">&lt;</span>
						<ul id="scrollPic_1F">
							<li><a href=""><img src="images/57aca738N08746115.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3b7aN752faf62.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3b92Nc398139e.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3ba7Ne8aa38d6.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57aca738N08746115.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3b7aN752faf62.jpg" alt=""></a></li>
						</ul>
						<span id="arrowToRight_1F">&gt;</span>
						<p><i class="current"></i><i></i><i></i><i></i></p>
					</li>
					<li><a href=""><img src="images/57ab40ffN9149205a.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57abd0e3N30d508c4.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57aca799N1aea7c6a.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab375aN9c8c3b0c.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab412bN234da59f.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57adb16dNa786cc78.jpg" alt=""></a></li>
				</ul>

			</div>

			<div class="lf main_right_malecloth" id="tabpage_0_1">
				<ul>
					<li>
						<a href=""><img src="images/5796d67eNd964ea91.jpg" alt=""></a>
						<p><a href="">DickiesLOGO字母印花圆领t恤</a></p>
						<price>￥179.00</price>
					</li>
					<li>
						<a href=""><img src="images/56a18373N6375b55f.jpg" alt=""></a>
						<p><a href="">红豆纯色经典商务正装长袖衬衣</a></p>
						<price>￥129.00</price>
					</li>
					<li>
						<a href=""><img src="images/5795c359Ndbc6c150.jpg" alt=""></a><p>
						<a href="">森马 男士时尚V领撞色拼接套头毛衫</a></p>
						<price>￥99.90</price>
					</li>
					<li>
						<a href=""><img src="images/57aa9b75Ne74b9eea.jpg" alt=""></a>
						<p><a href="">海澜之家拼接休闲短袖T恤</a></p>
						<price>￥128.00</price>
					</li>
					<li>
						<a href=""><img src="images/5799ad83N7809c49e.jpg" alt=""></a>
						<p><a href="">LEE修身直脚弹力牛仔裤男</a></p>
						<price>￥690.00</price>
					</li>
					<li>
						<a href=""><img src="images/56551775Naa32394e.jpg" alt=""></a>
						<p><a href="">威可多商务正装舒适西裤 纯羊毛挺括有型西裤</a></p>
						<price>￥432.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a2a45bN28212d6d.jpg" alt=""></a>
						<p><a href="">真维斯弹性雨纹修身牛仔裤男</a></p>
						<price>￥126.00</price>
					</li>
					<li>
						<a href=""><img src="images/57aadfa4Neab3f382.jpg" alt=""></a>
						<p><a href="">GXG时尚黑色帅性修身时尚休闲裤子</a></p>
						<price>￥199.00</price>
					</li>
					<li><a href=""><img src="images/57af2a45N94024ec0.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2a5aN0c2f58eb.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab385cNf59693ca.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2a9bN08d95b13.jpg" alt=""></a></li>
				</ul>

			</div>

			<div class="lf main_right_femalecloth" id="tabpage_0_2">
				<ul>
					<li>
						<a href=""><img src="images/57a976b7N85a78386.jpg" alt=""></a>
						<p><a href="">ochirly欧时力短款钉珠图案棉质短袖T恤</a></p>
						<price>￥339.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a97904N2fe89edf.jpg" alt=""></a>
						<p><a href="">ochirly欧时力撞色条纹棉质修身套头衫</a></p>
						<price>￥369.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a97870N5972ed90.jpg" alt=""></a>
						<p><a href="">ochirly欧时力短款欧根纱刺绣镂空衬衫</a></p>
						<price>￥599.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a9781dN7e4cca1a.jpg" alt=""></a>
						<p><a href="">ochirly欧时力薄款修身字母毛巾绣套头衫</a></p>
						<price>￥369.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a977d5N9f1c5518.jpg" alt=""></a>
						<p><a href="">ochirly欧时力两件套条纹印花无袖连衣裙</a></p>
						<price>￥769.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a9778bNaa6c21a1.jpg" alt=""></a>
						<p><a href="">ochirly欧时力A字口袋刺绣花朵半身裙短裙</a></p>
						<price>￥499.00</price>
					</li>
					<li>
						<a href=""><img src="images/5745776dN2d66c751.jpg" alt=""></a>
						<p><a href="">ONLY纯棉宽松磨破设计亮钻装饰牛仔短裤</a></p>
						<price>￥199.50</price>
					</li>
					<li>
						<a href=""><img src="images/57aa912bN257571b4.jpg" alt=""></a>
						<p><a href="">ONLYV领露背百褶针织拼接连衣裙</a></p>
						<price>￥299.50</price>
					</li>
					<li><a href=""><img src="images/57af2becN8ab25828.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2c39Ne99dd55b.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2c4dN0f67c5b9.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2c60Nce914627.jpg" alt=""></a></li>
				</ul>
			</div>

			<div class="lf main_right_shoes" id="tabpage_0_3">鞋靴
			</div>

			<div class="lf main_right_luggage" id="tabpage_0_4">箱包
			</div>

			<div class="lf main_right_underwear" id="tabpage_0_5">内衣配饰
			</div>

			<div class="lf main_right_jewellery" id="tabpage_0_6">珠宝首饰
			</div>

			<div class="lf main_right_luxury" id="tabpage_0_7">奢品礼品
			</div>

			<div class="lf main_right_watches" id="tabpage_0_8">奢华腕表
			</div>


			<div class="clearfix"></div>
			<ul class="brands">
				<li><a href=""><img src="images/57abe0d0N22503beb.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e541N6ec6c73d.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e555Ne455c67b.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e567N9d0460df.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e57cNb8797b99.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e58eN2dd2816f.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57ac1c56Nab40380d.png" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/5747b251N818750c2.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/5795b807N8d1ea1cc.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/5732ec02N847c5d0f.jpg" alt=""></a></li>
			</ul>
		</div>	
	</div>

	<div class="clearfix"></div>

	<!-- 第二楼层 -->
	<div class="second_floor" style="margin-top:10px;">
		<div class="container">
			<div class="top">
				<p><span>2F</span>服装鞋包</p>
				<ul class="tabExchange">
					<li><a href="">大牌</a></li>
					<li><a href="">男装</a></li>
					<li><a href="">女装</a></li>
					<li><a href="">鞋靴</a></li>
					<li><a href="">箱包</a></li>
					<li><a href="">内衣配饰</a></li>
					<li><a href="">珠宝首饰</a></li>
					<li><a href="">奢品礼品</a></li>
					<li><a href="">奢华腕表</a></li>
				</ul>
			</div>
			<div class="lf main_left">
				<a href=""><img src="images/57abe7deN6a981fe3.jpg" alt="" style="border-bottom: 1px solid #EDEDED;"></a>
				<a href=""><img src="images/57ab4467Na5249097.jpg" alt="" style="border-width:0 1px 1px 1px;border-style:solid;border-color:#EDEDED;"></a>
				<div style="width:330px;height:92px;">
					<ul>
						<li><span></span><a href="">男装</a></li>
						<li><span></span><a href="">女装</a></li>
						<li><span></span><a href="">内衣</a></li>
						<li><span></span><a href="">鞋靴</a></li>
						<li><span></span><a href="">箱包</a></li>
						<li><span></span><a href="">奢侈品</a></li>
					</ul>
				</div>
				<div style="width:330px;height:129px;">
					<ul>
						<li><a href="" class="current">潮流女装</a></li>
						<li><a href="">丝巾</a></li>
						<li><a href="">服装城</a></li>
						<li><a href="">品质男鞋</a></li>
						<li><a href="">时尚女鞋</a></li>
						<li><a href="" class="current">精品男装</a></li>
						<li><a href="">纯棉内裤</a></li>
						<li><a href="">奢侈品</a></li>
					</ul>
					<ul>
						<li><a href="">菩提手串</a></li>
						<li><a href="" class="current">水晶手链</a></li>
						<li><a href="">时尚女包</a></li>
						<li><a href="">精品男包</a></li>
						<li><a href="">维氏手表</a></li>
						<li><a href="" class="current">奢品名表</a></li>
						<li><a href="">国表经典</a></li>
						<li><a href="">腕表七夕</a></li>
					</ul>
				</div>
			</div>
			<div class="lf main_right" id="tabpage_1_0">
				<ul>
					<li><a href=""><img src="images/57ab36eeN606c8f85.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab40f6N5bbae5fb.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab4142Nb5d50ec9.jpg" alt=""></a></li>
					<li id="autoScroll_2F">
						<span id="arrowToLeft_2F">&lt;</span>
						<ul id="scrollPic_2F">
							<li><a href=""><img src="images/57aca738N08746115.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3b7aN752faf62.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3b92Nc398139e.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3ba7Ne8aa38d6.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57aca738N08746115.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3b7aN752faf62.jpg" alt=""></a></li>
						</ul>
						<span id="arrowToRight_2F">&gt;</span>
						<p><i class="current"></i><i></i><i></i><i></i></p>
					</li>
					<li><a href=""><img src="images/57ab40ffN9149205a.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57abd0e3N30d508c4.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57aca799N1aea7c6a.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab375aN9c8c3b0c.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab412bN234da59f.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57adb16dNa786cc78.jpg" alt=""></a></li>
				</ul>

			</div>

			<div class="lf main_right_malecloth" id="tabpage_1_1">
				<ul>
					<li>
						<a href=""><img src="images/5796d67eNd964ea91.jpg" alt=""></a>
						<p><a href="">DickiesLOGO字母印花圆领t恤</a></p>
						<price>￥179.00</price>
					</li>
					<li>
						<a href=""><img src="images/56a18373N6375b55f.jpg" alt=""></a>
						<p><a href="">红豆纯色经典商务正装长袖衬衣</a></p>
						<price>￥129.00</price>
					</li>
					<li>
						<a href=""><img src="images/5795c359Ndbc6c150.jpg" alt=""></a><p>
						<a href="">森马 男士时尚V领撞色拼接套头毛衫</a></p>
						<price>￥99.90</price>
					</li>
					<li>
						<a href=""><img src="images/57aa9b75Ne74b9eea.jpg" alt=""></a>
						<p><a href="">海澜之家拼接休闲短袖T恤</a></p>
						<price>￥128.00</price>
					</li>
					<li>
						<a href=""><img src="images/5799ad83N7809c49e.jpg" alt=""></a>
						<p><a href="">LEE修身直脚弹力牛仔裤男</a></p>
						<price>￥690.00</price>
					</li>
					<li>
						<a href=""><img src="images/56551775Naa32394e.jpg" alt=""></a>
						<p><a href="">威可多商务正装舒适西裤 纯羊毛挺括有型西裤</a></p>
						<price>￥432.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a2a45bN28212d6d.jpg" alt=""></a>
						<p><a href="">真维斯弹性雨纹修身牛仔裤男</a></p>
						<price>￥126.00</price>
					</li>
					<li>
						<a href=""><img src="images/57aadfa4Neab3f382.jpg" alt=""></a>
						<p><a href="">GXG时尚黑色帅性修身时尚休闲裤子</a></p>
						<price>￥199.00</price>
					</li>
					<li><a href=""><img src="images/57af2a45N94024ec0.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2a5aN0c2f58eb.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab385cNf59693ca.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2a9bN08d95b13.jpg" alt=""></a></li>
				</ul>

			</div>

			<div class="lf main_right_femalecloth" id="tabpage_1_2">
				<ul>
					<li>
						<a href=""><img src="images/57a976b7N85a78386.jpg" alt=""></a>
						<p><a href="">ochirly欧时力短款钉珠图案棉质短袖T恤</a></p>
						<price>￥339.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a97904N2fe89edf.jpg" alt=""></a>
						<p><a href="">ochirly欧时力撞色条纹棉质修身套头衫</a></p>
						<price>￥369.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a97870N5972ed90.jpg" alt=""></a>
						<p><a href="">ochirly欧时力短款欧根纱刺绣镂空衬衫</a></p>
						<price>￥599.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a9781dN7e4cca1a.jpg" alt=""></a>
						<p><a href="">ochirly欧时力薄款修身字母毛巾绣套头衫</a></p>
						<price>￥369.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a977d5N9f1c5518.jpg" alt=""></a>
						<p><a href="">ochirly欧时力两件套条纹印花无袖连衣裙</a></p>
						<price>￥769.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a9778bNaa6c21a1.jpg" alt=""></a>
						<p><a href="">ochirly欧时力A字口袋刺绣花朵半身裙短裙</a></p>
						<price>￥499.00</price>
					</li>
					<li>
						<a href=""><img src="images/5745776dN2d66c751.jpg" alt=""></a>
						<p><a href="">ONLY纯棉宽松磨破设计亮钻装饰牛仔短裤</a></p>
						<price>￥199.50</price>
					</li>
					<li>
						<a href=""><img src="images/57aa912bN257571b4.jpg" alt=""></a>
						<p><a href="">ONLYV领露背百褶针织拼接连衣裙</a></p>
						<price>￥299.50</price>
					</li>
					<li><a href=""><img src="images/57af2becN8ab25828.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2c39Ne99dd55b.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2c4dN0f67c5b9.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2c60Nce914627.jpg" alt=""></a></li>
				</ul>
			</div>

			<div class="lf main_right_shoes" id="tabpage_1_3">鞋靴
			</div>

			<div class="lf main_right_luggage" id="tabpage_1_4">箱包
			</div>

			<div class="lf main_right_underwear" id="tabpage_1_5">内衣配饰
			</div>

			<div class="lf main_right_jewellery" id="tabpage_1_6">珠宝首饰
			</div>

			<div class="lf main_right_luxury" id="tabpage_1_7">奢品礼品
			</div>

			<div class="lf main_right_watches" id="tabpage_1_8">奢华腕表
			</div>


			<div class="clearfix"></div>
			<ul class="brands">
				<li><a href=""><img src="images/57abe0d0N22503beb.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e541N6ec6c73d.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e555Ne455c67b.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e567N9d0460df.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e57cNb8797b99.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e58eN2dd2816f.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57ac1c56Nab40380d.png" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/5747b251N818750c2.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/5795b807N8d1ea1cc.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/5732ec02N847c5d0f.jpg" alt=""></a></li>
			</ul>
		</div>	
	</div>

	<!-- 第三楼层 -->
	<div class="third_floor" style="margin-top:10px;">
		<div class="container">
			<div class="top">
				<p><span>3F</span>服装鞋包</p>
				<ul class="tabExchange">
					<li><a href="">大牌</a></li>
					<li><a href="">男装</a></li>
					<li><a href="">女装</a></li>
					<li><a href="">鞋靴</a></li>
					<li><a href="">箱包</a></li>
					<li><a href="">内衣配饰</a></li>
					<li><a href="">珠宝首饰</a></li>
					<li><a href="">奢品礼品</a></li>
					<li><a href="">奢华腕表</a></li>
				</ul>
			</div>
			<div class="lf main_left">
				<a href=""><img src="images/57abe7deN6a981fe3.jpg" alt="" style="border-bottom: 1px solid #EDEDED;"></a>
				<a href=""><img src="images/57ab4467Na5249097.jpg" alt="" style="border-width:0 1px 1px 1px;border-style:solid;border-color:#EDEDED;"></a>
				<div style="width:330px;height:92px;">
					<ul>
						<li><span></span><a href="">男装</a></li>
						<li><span></span><a href="">女装</a></li>
						<li><span></span><a href="">内衣</a></li>
						<li><span></span><a href="">鞋靴</a></li>
						<li><span></span><a href="">箱包</a></li>
						<li><span></span><a href="">奢侈品</a></li>
					</ul>
				</div>
				<div style="width:330px;height:129px;">
					<ul>
						<li><a href="" class="current">潮流女装</a></li>
						<li><a href="">丝巾</a></li>
						<li><a href="">服装城</a></li>
						<li><a href="">品质男鞋</a></li>
						<li><a href="">时尚女鞋</a></li>
						<li><a href="" class="current">精品男装</a></li>
						<li><a href="">纯棉内裤</a></li>
						<li><a href="">奢侈品</a></li>
					</ul>
					<ul>
						<li><a href="">菩提手串</a></li>
						<li><a href="" class="current">水晶手链</a></li>
						<li><a href="">时尚女包</a></li>
						<li><a href="">精品男包</a></li>
						<li><a href="">维氏手表</a></li>
						<li><a href="" class="current">奢品名表</a></li>
						<li><a href="">国表经典</a></li>
						<li><a href="">腕表七夕</a></li>
					</ul>
				</div>
			</div>
			<div class="lf main_right" id="tabpage_2_0">
				<ul>
					<li><a href=""><img src="images/57ab36eeN606c8f85.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab40f6N5bbae5fb.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab4142Nb5d50ec9.jpg" alt=""></a></li>
					<li id="autoScroll_3F">
						<span id="arrowToLeft_3F">&lt;</span>
						<ul id="scrollPic_3F">
							<li><a href=""><img src="images/57aca738N08746115.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3b7aN752faf62.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3b92Nc398139e.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3ba7Ne8aa38d6.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57aca738N08746115.jpg" alt=""></a></li>
							<li><a href=""><img src="images/57ab3b7aN752faf62.jpg" alt=""></a></li>
						</ul>
						<span id="arrowToRight_3F">&gt;</span>
						<p><i class="current"></i><i></i><i></i><i></i></p>
					</li>
					<li><a href=""><img src="images/57ab40ffN9149205a.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57abd0e3N30d508c4.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57aca799N1aea7c6a.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab375aN9c8c3b0c.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab412bN234da59f.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57adb16dNa786cc78.jpg" alt=""></a></li>
				</ul>

			</div>

			<div class="lf main_right_malecloth" id="tabpage_2_1">
				<ul>
					<li>
						<a href=""><img src="images/5796d67eNd964ea91.jpg" alt=""></a>
						<p><a href="">DickiesLOGO字母印花圆领t恤</a></p>
						<price>￥179.00</price>
					</li>
					<li>
						<a href=""><img src="images/56a18373N6375b55f.jpg" alt=""></a>
						<p><a href="">红豆纯色经典商务正装长袖衬衣</a></p>
						<price>￥129.00</price>
					</li>
					<li>
						<a href=""><img src="images/5795c359Ndbc6c150.jpg" alt=""></a><p>
						<a href="">森马 男士时尚V领撞色拼接套头毛衫</a></p>
						<price>￥99.90</price>
					</li>
					<li>
						<a href=""><img src="images/57aa9b75Ne74b9eea.jpg" alt=""></a>
						<p><a href="">海澜之家拼接休闲短袖T恤</a></p>
						<price>￥128.00</price>
					</li>
					<li>
						<a href=""><img src="images/5799ad83N7809c49e.jpg" alt=""></a>
						<p><a href="">LEE修身直脚弹力牛仔裤男</a></p>
						<price>￥690.00</price>
					</li>
					<li>
						<a href=""><img src="images/56551775Naa32394e.jpg" alt=""></a>
						<p><a href="">威可多商务正装舒适西裤 纯羊毛挺括有型西裤</a></p>
						<price>￥432.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a2a45bN28212d6d.jpg" alt=""></a>
						<p><a href="">真维斯弹性雨纹修身牛仔裤男</a></p>
						<price>￥126.00</price>
					</li>
					<li>
						<a href=""><img src="images/57aadfa4Neab3f382.jpg" alt=""></a>
						<p><a href="">GXG时尚黑色帅性修身时尚休闲裤子</a></p>
						<price>￥199.00</price>
					</li>
					<li><a href=""><img src="images/57af2a45N94024ec0.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2a5aN0c2f58eb.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57ab385cNf59693ca.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2a9bN08d95b13.jpg" alt=""></a></li>
				</ul>

			</div>

			<div class="lf main_right_femalecloth" id="tabpage_2_2">
				<ul>
					<li>
						<a href=""><img src="images/57a976b7N85a78386.jpg" alt=""></a>
						<p><a href="">ochirly欧时力短款钉珠图案棉质短袖T恤</a></p>
						<price>￥339.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a97904N2fe89edf.jpg" alt=""></a>
						<p><a href="">ochirly欧时力撞色条纹棉质修身套头衫</a></p>
						<price>￥369.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a97870N5972ed90.jpg" alt=""></a>
						<p><a href="">ochirly欧时力短款欧根纱刺绣镂空衬衫</a></p>
						<price>￥599.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a9781dN7e4cca1a.jpg" alt=""></a>
						<p><a href="">ochirly欧时力薄款修身字母毛巾绣套头衫</a></p>
						<price>￥369.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a977d5N9f1c5518.jpg" alt=""></a>
						<p><a href="">ochirly欧时力两件套条纹印花无袖连衣裙</a></p>
						<price>￥769.00</price>
					</li>
					<li>
						<a href=""><img src="images/57a9778bNaa6c21a1.jpg" alt=""></a>
						<p><a href="">ochirly欧时力A字口袋刺绣花朵半身裙短裙</a></p>
						<price>￥499.00</price>
					</li>
					<li>
						<a href=""><img src="images/5745776dN2d66c751.jpg" alt=""></a>
						<p><a href="">ONLY纯棉宽松磨破设计亮钻装饰牛仔短裤</a></p>
						<price>￥199.50</price>
					</li>
					<li>
						<a href=""><img src="images/57aa912bN257571b4.jpg" alt=""></a>
						<p><a href="">ONLYV领露背百褶针织拼接连衣裙</a></p>
						<price>￥299.50</price>
					</li>
					<li><a href=""><img src="images/57af2becN8ab25828.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2c39Ne99dd55b.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2c4dN0f67c5b9.jpg" alt=""></a></li>
					<li><a href=""><img src="images/57af2c60Nce914627.jpg" alt=""></a></li>
				</ul>
			</div>

			<div class="lf main_right_shoes" id="tabpage_2_3">鞋靴
			</div>

			<div class="lf main_right_luggage" id="tabpage_2_4">箱包
			</div>

			<div class="lf main_right_underwear" id="tabpage_2_5">内衣配饰
			</div>

			<div class="lf main_right_jewellery" id="tabpage_2_6">珠宝首饰
			</div>

			<div class="lf main_right_luxury" id="tabpage_2_7">奢品礼品
			</div>

			<div class="lf main_right_watches" id="tabpage_2_8">奢华腕表
			</div>


			<div class="clearfix"></div>
			<ul class="brands">
				<li><a href=""><img src="images/57abe0d0N22503beb.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e541N6ec6c73d.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e555Ne455c67b.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e567N9d0460df.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e57cNb8797b99.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57a7e58eN2dd2816f.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/57ac1c56Nab40380d.png" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/5747b251N818750c2.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/5795b807N8d1ea1cc.jpg" alt=""></a></li>
				<li></li>
				<li><a href=""><img src="images/5732ec02N847c5d0f.jpg" alt=""></a></li>
			</ul>
		</div>	
	</div>
	<div class="clearfix"></div>
	<div class="diJiaShaiDan">
		<div class="container">
			<div class="tianTianDiJia">
				<p>天天低价</p>
				<ul>
					<li>
						<a href=""><img src="images/579b8341Ne1acc0d2.jpg" alt=""></a>
						<a href="" title="【买一得三】芊姿国色新款尼龙三件套子母包双肩包斜挎包手拿包零钱包 薰衣草紫色">【买一得三】芊姿国色新款尼龙三件套子母包双肩包斜挎包手拿包零钱包 薰衣草紫色</a>
						<price>￥39.00</price>
					</li>
					<li>
						<a href=""><img src="images/54b63bd7Nce1a9737.jpg" alt=""></a>
						<a href="" title="羽博 7800毫安 Z3 移动电源/充电宝 白色 通用手机平板">羽博 7800毫安 Z3 移动电源/充电宝 白色 通用手机平板</a>
						<price>￥139.00</price>
					</li>
					<li>
						<a href=""><img src="images/573af131N526a6b0f.jpg" alt=""></a>
						<a href="" title="飞利浦（PHILIPS）SPS3650D/93 六位5米插座 总控开关 插排插线板/接线板/拖线板">飞利浦（PHILIPS）SPS3650D/93 六位5米插座 总控开关 插排插线板/接线板/拖线板</a>
						<price>￥49.00</price>
					</li>
					<li>
						<a href=""><img src="images/54a24d82N57b340ce.jpg" alt=""></a>
						<a href="" title="heisou 650ml耐热玻璃透明过滤带盖居家用办公男女三件式可加热泡茶壶茶具KC156">heisou 650ml耐热玻璃透明过滤带盖居家用办公男女三件式可加热泡茶壶茶具KC156</a>
						<price>￥49.00</price>
					</li>
					<li>
						<a href=""><img src="images/57b2f7b4N3218ff2a.jpg" alt=""></a>
						<a href="" title="爱斯丽纱 2016秋季新品韩版优雅气质条纹长袖修身显瘦职业OL通勤连衣裙女A字裙晚礼服 卡其色 XL">爱斯丽纱 2016秋季新品韩版优雅气质条纹长袖修身显瘦职业OL通勤连衣裙女A字裙晚礼服 卡其色 XL</a>
						<price>￥98.00</price>
					</li>
					<li>
						<a href=""><img src="images/53fbeacdNdc6933bd.jpg" alt=""></a>
						<a href="" title="罗技（Logitech）M558蓝牙鼠标">罗技（Logitech）M558蓝牙鼠标</a>
						<price>￥149.00</price>
					</li>
					<li>
						<a href=""><img src="images/570cd587N9edbc02a.jpg" alt=""></a>
						<a href="" title="范思哲(VERSACE)星夜水晶女士香水5ml（又名：范思哲(VERSACE)星夜水晶女士淡香水5ml）">范思哲(VERSACE)星夜水晶女士香水5ml（又名：范思哲(VERSACE)星夜水晶女士淡香水5ml）</a>
						<price>￥65.00</price>
					</li>

				</ul>
			</div>
			<div class="hotShaiDan">
				<p>热门晒单</p>
				<div id="hotShaiDan_1">
					<div>
						<ul id="hotShaiDan_carousel">
							<li>
								<a href=""><img src="images/5566826bN8ec67498.jpg" alt=""></a>
								<p><img src="images/57b15e50N9a7e0ed3.jpg" alt=""><span>jd_13468***</span></p>
								<p><a href="" title="杯子很棒，本身很厚，倒开水和冷水也不会坏，很喜欢，价钱也很划算">“杯子很棒，本身很厚，倒开水和冷……”</a></p>
								
							</li>
							<li>
								<a href=""><img src="images/5566826bN8ec67498.jpg" alt=""></a>
								<p><img src="images/57b15e50N9a7e0ed3.jpg" alt="">55555555***</p>
								<p><a href="" title="杯子很棒，本身很厚，倒开水和冷水也不会坏，很喜欢，价钱也很划算">“5555555555555555555555 55555555……”</a></p>
								
							</li>
							<li>
								<a href=""><img src="images/5566826bN8ec67498.jpg" alt=""></a>
								<p><img src="images/57b15e50N9a7e0ed3.jpg" alt="">jd_13468***</p>
								<p><a href="" title="杯子很棒，本身很厚，倒开水和冷水也不会坏，很喜欢，价钱也很划算">“杯子很棒，本身很厚，倒开水和冷……”</a></p>
								
							</li>
							<li>
								<a href=""><img src="images/5566826bN8ec67498.jpg" alt=""></a>
								<p><img src="images/57b15e50N9a7e0ed3.jpg" alt="">55555555***</p>
								<p><a href="" title="杯子很棒，本身很厚，倒开水和冷水也不会坏，很喜欢，价钱也很划算">“5555555555555555555555 55555555……”</a></p>
								
							</li>
							<li>
								<a href=""><img src="images/5566826bN8ec67498.jpg" alt=""></a>
								<p><img src="images/57b15e50N9a7e0ed3.jpg" alt="">jd_13468***</p>
								<p><a href="" title="杯子很棒，本身很厚，倒开水和冷水也不会坏，很喜欢，价钱也很划算">“杯子很棒，本身很厚，倒开水和冷……”</a></p>
								
							</li>
							<li>
								<a href=""><img src="images/5566826bN8ec67498.jpg" alt=""></a>
								<p><img src="images/57b15e50N9a7e0ed3.jpg" alt="">55555555***</p>
								<p><a href="" title="杯子很棒，本身很厚，倒开水和冷水也不会坏，很喜欢，价钱也很划算">“5555555555555555555555 55555555……”</a></p>
								
							</li>
						</ul>
					</div>	
				</div>	
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="dkhs">
		<div class="container">
			<img src="images/service_items_1.png" alt="">
			<img src="images/service_items_2.png" alt="">
			<img src="images/service_items_3.png" alt="">
			<img src="images/service_items_4.png" alt="">
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
				<li><a href=""><img src="images/56a0a994Nf1b662dc.png" alt="">京公网安备 11000002000088号</a></li>
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
				<li><a href=""><img src="images/54b8871eNa9a7067e.png" alt=""></a></li>
				<li><a href=""><img src="images/54b8872dNe37a9860.png" alt=""></a></li>
				<li><a href=""><img src="images/56a89b8fNfbaade9a.jpg" alt=""></a></li>
				<li><a href=""><img src="images/54b8875fNad1e0c4c.png" alt=""></a></li>
				<li><a href=""><img src="images/5698dc03N23f2e3b8.jpg" alt=""></a></li>
				<li><a href=""><img src="images/5698dc16Nb2ab99df.jpg" alt=""></a></li>
			</ul>
		</div>
	</div>

	<script src="js/jquery-1.4.3.js"></script>
	<script src="js/HeaderFooter.js"></script>
	<script src="js/jd.js"></script>
</body>
</html>