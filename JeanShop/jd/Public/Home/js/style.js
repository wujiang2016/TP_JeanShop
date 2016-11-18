var province=['北京','上海','天津','重庆','河北','山西','河南','辽宁',"吉林","黑龙江","内蒙古","江苏","山东","安徽","浙江","福建","湖北","湖南","广东","广西","江西","四川","海南","贵州","云南","西藏","陕西","甘肃","青海","宁夏","新疆","台湾","香港","澳门","钓鱼岛","海外"];
var arrivalTo=document.getElementById('arrivalTo');
var ulNode;
	ulNode=document.createElement("ul");
	arrivalTo.appendChild(ulNode);
	ulNode.id="arrivalToUlNode";
	ulNode.setAttribute("style","width:315px;height:246px;border:1px solid #DDDDDD;border-top:0;margin-left:-10px;background:white;position:relative");
	for (var i = 0; i < province.length; i++) {
		var liNode=document.createElement("li");
		liNode.innerHTML='<a href="" name="province">'+province[i]+'</a>';
		liNode.getElementsByTagName("a")[0].setAttribute("style","color:#666666;");
		ulNode.appendChild(liNode);
		liNode.setAttribute("style","float:left;width:47px;height:25px;margin-left:16px;margin-top:5px;");
	};
	ulNode.style.display="none";
	// ulNode.style.overflow="hidden";
	// ulNode.setAttribute("style","overflow:hidden");

arrivalTo.onmouseover=function(){
	ulNode.style.display="block";
	ulNode.style.zIndex="4";
	// ulNode.setAttribute("style","z-index:999;");
	arrivalTo.setAttribute("style","background:white;");
	document.getElementById("arrows").setAttribute("style","transform:rotate(180deg);transition:all 0.3s ease");
};
arrivalTo.onmouseout=function(){
	ulNode.style.display="none";
	arrivalTo.setAttribute("style","background:#F1F1F1;");
	document.getElementById("arrows").setAttribute("style","transform:rotate(0);transition:all 0.3s ease");
};

var myJD=document.getElementById('myJD');
myJD.onmouseover=function(){
	document.getElementById("arrows1").setAttribute("style","transform:rotate(180deg);transition:all 0.3s ease");
};
myJD.onmouseout=function(){
	document.getElementById("arrows1").setAttribute("style","transform:rotate(0);transition:all 0.3s ease");
};
//搜索框两个字晃动效果
function shake(obj){
	// obj.style.borderLeftWidth="9px";
	// console.log(obj);
	obj.style.marginLeft="2px";
	obj.style.width="74px";
	// console.log(obj);
	var timer=setTimeout(function(){
		obj.style.marginLeft="0";
		obj.style.width="76px";
	},100);
}
//左侧导航栏显示
var leftNavNode=document.getElementById("leftNav");
// console.log(leftNavNode.childNodes[1].childNodes[3]);
for (var i = 1; i < leftNavNode.childNodes.length; i+=2) {
	(function() {
		var k=i;
		leftNavNode.childNodes[k].onmouseenter=function() {
			if(document.documentElement.scrollTop<180){
				leftNavNode.childNodes[k].childNodes[3].style.top="-1px";
				leftNavNode.childNodes[k].style.width="190px";
			}else{
				leftNavNode.childNodes[k].childNodes[3].style.top=document.documentElement.scrollTop-183+"px";
				leftNavNode.childNodes[k].style.width="190px";
			}
			leftNavNode.childNodes[k].childNodes[3].style.display="block";
		   };
		leftNavNode.childNodes[k].onmouseleave=function(){
			leftNavNode.childNodes[k].childNodes[3].style.display="none";
			leftNavNode.childNodes[k].style.width="189px";
		};
	})();
};
	// console.log(leftNavNode.childNodes[1]);

var timer;
var curIndex=0;
var slideNode=document.getElementsByClassName('slider');
var slidePicNode=slideNode[0].getElementsByTagName('li');
var slideNumNode=slideNode[1].getElementsByTagName('li');

// slider();
//banner轮播
timer=setInterval(function(){
	// console.log(timer+"**************banner轮播");
	// if (curIndex>=slideNumNode.length-1) {curIndex=0;
	// } 
		slideNode[0].style.left=-730*(curIndex)+"px";

	
	// if (curIndex>=slideNumNode.length) {
	// 	curIndex=0;
	// };
	for (var i = 0; i < slideNumNode.length; i++) {
		removeClassName(slideNumNode[i],"current");
	};
	addClassName(slideNumNode[curIndex],"current");
	if (curIndex!=6) {
		slideNode[0].style.transition="all .5s ease-in";
	};
	if (curIndex>=slideNumNode.length-1) {
		curIndex=-1;
		slideNode[0].style.left=0;
	} 
	curIndex++;
	slideNode[0].style.left=-730*(curIndex)+"px";
	
	
},2500);

//添加class名称
function addClassName(elem,cls){
	elem.className+=" "+cls;
}
//删除class名称
function removeClassName(elem,cls){
	var reg=/\s{2,}/g;
	if (hasClassName(elem,cls)) {
		elem.className=elem.className.replace(cls,"");
		elem.className=elem.className.replace(reg," ");
	};
}
//判断是否含有class名称
function hasClassName(elem,cls){
	if(elem.className.indexOf(cls)==-1){
		return false;
	}else{
		return true;
	}
}


//充值小图片定位
var rechargeNode=document.getElementsByClassName("recharge");
var rechargeImgNode=rechargeNode[0].getElementsByTagName("img");
for (var i = 0,len=rechargeImgNode.length; i < len; i++) {
	rechargeImgNode[i].style.left="-25px";
	rechargeImgNode[i].style.top=-25*i+"px";
};
// 充值电话费种类
var rechargeMoneyNumber=[
["10元","￥9.8-￥11.0"],
["20元","￥19.6-￥21.0"],
["30元","￥29.4-￥31.0"],
["50元","￥49.0-￥50.0"],
["100元","￥98.0-￥100.0"],
["200元","￥196.0-￥200.0"],
["300元","￥294.0-￥300.0"],
["500元","￥490.0-￥500.0"]
]
var rechargeMoneyNode=document.getElementById("rechargeMoney");
var rechargeMoneyNodeLength=rechargeMoneyNode.childNodes.length;
rechargeMoneyNode.onclick=function(){
	if (rechargeMoneyNode.childNodes.length>=rechargeMoneyNodeLength+rechargeMoneyNumber.length-1) {
		return false;
	};
	for (var i = 1; i < rechargeMoneyNumber.length; i++) {
		var optionNode=document.createElement("option");
		optionNode.value=parseInt(rechargeMoneyNumber[i][0]); 
		optionNode.innerHTML=rechargeMoneyNumber[i][0];
		rechargeMoneyNode.appendChild(optionNode);
	}
}
var rechargePriceNode=document.getElementById("rechargePrice");
rechargeMoneyNode.onchange=function(){
	for (var i = 0; i < rechargeMoneyNumber.length; i++) {
		if (parseInt(rechargeMoneyNumber[i][0])==rechargeMoneyNode.value) {
			rechargePriceNode.innerHTML=rechargeMoneyNumber[i][1];
		};
	};
}

// 充值具体种类上移效果展示
var rechargeNode=document.getElementsByClassName("recharge");
var rechargeLiNode=rechargeNode[0].getElementsByTagName("li");
var rechargeDetailNode=document.getElementsByClassName("recharge_detail");
rechargeLiNode[0].onmouseover=function(){
	rechargeDetailNode[0].style.visibility="visible";
	rechargeDetailNode[0].style.top="172px";
	rechargeDetailNode[0].style.transition="all .3s ease-in";
}


//爆品轮播
var littleScrollPicNode=document.getElementById("littleScrollPic");
 	littleScrollPicNode.style.left="-1000px";
var opener="closed";
// 点击向左箭头
document.getElementById("arrowToLeft").onclick=function(){
	if (opener=="opened") {
		return false;
	}else{
		opener="opened";
	}
	if (parseInt(littleScrollPicNode.style.left)==0) {
		littleScrollPicNode.style.left="-4000px";
	};
	var n=0;
	var timer=setInterval(function(){
	// console.log(timer+"**************爆品轮播，点击向左箭头");
		littleScrollPicNode.style.left=parseInt(littleScrollPicNode.style.left)+20+"px";
		n++;
		if (n>=50) {
			clearInterval(timer);
			opener="closed";
		};
	},1);
}
// 点击向右箭头
document.getElementById("arrowToRight").onclick=function(){
	if (opener=="opened") {
		return false;
	}else{
		opener="opened";
	}
	if (parseInt(littleScrollPicNode.style.left)==-5000) {
		littleScrollPicNode.style.left="-1000px";
	};
	var n=0;
	var timer=setInterval(function(){
	// console.log(timer+"**************爆品轮播，点击向右箭头");
		littleScrollPicNode.style.left=parseInt(littleScrollPicNode.style.left)-20+"px";
		n++;
		if (n>=50) {
			clearInterval(timer);
			opener="closed";
		};
	},1);
}

	changeFloorNavPosition();
var floorArr=[
	["1F","服饰"],
	["2F","美妆"],
	["3F","手机"]
];
//楼层导航标识
console.log(window.innerHeight);
console.log(document.documentElement.scrollTop);

$(window).ready(function(){
	$(window).scroll(function(){
		if (document.documentElement.scrollTop<980||document.documentElement.scrollTop>3820) {
			$("#floor_nav").css({
				"display":"none"
			});
		} else{
			$("#floor_nav").css({
				"display":"block"
			});

			// var floor;

			if (document.documentElement.scrollTop>980&&document.documentElement.scrollTop<2000) {
				// floor=1;
				for (var i = 0; i < floorArr.length; i++) {
					var t=i+1;
					if (t==1) {
						$("#floor_nav>li:nth-child("+t+")").html(floorArr[i][1]).css({
							"font-size":"12px",
							"color":"#C81623"
						}).hover(function(){
							$(this).css({
								"color":"white",
								"cursor":"pointer"
							});
						},function(){
							$(this).css({
								"color":"#C81623"
							});
						});
					} else{
						(function() {
							var m=i+1;
							$("#floor_nav>li:nth-child("+m+")").html(floorArr[m-1][0]).css({
								"font-size":"14px",
								"color":"#625351"
							}).hover(function(){
								console.log(m,t);
								$(this).html(floorArr[m-1][1]).css({
									"font-size":"12px",
									"color":"white",
									"cursor":"pointer"
								});
							},function(){
								if (document.documentElement.scrollTop>980&&document.documentElement.scrollTop<2000) {
									$(this).html(floorArr[m-1][0]).css({
										"font-size":"14px",
										"color":"#625351"
									});
								}
								
							});
						})();
						
					};
				};
			} else if (document.documentElement.scrollTop>2000&&document.documentElement.scrollTop<2780) {
				// floor=2;
				for (var i = 0; i < floorArr.length; i++) {
					var t=i+1;
					if (t==2) {
						$("#floor_nav>li:nth-child("+t+")").html(floorArr[i][1]).css({
							"font-size":"12px",
							"color":"#C81623"
						}).hover(function(){
							$(this).css({
								"color":"white",
								"cursor":"pointer"
							});
						},function(){
							$(this).css({
								"color":"#C81623"
							});
						});
					} else{
						(function() {
							var m=i+1;
							$("#floor_nav>li:nth-child("+m+")").html(floorArr[m-1][0]).css({
								"font-size":"14px",
								"color":"#625351"
							}).hover(function(){
								console.log(m,t);
								$(this).html(floorArr[m-1][1]).css({
									"font-size":"12px",
									"color":"white",
									"cursor":"pointer"
								});
							},function(){
								if (document.documentElement.scrollTop>2000&&document.documentElement.scrollTop<2780) {
									$(this).html(floorArr[m-1][0]).css({
										"font-size":"14px",
										"color":"#625351"
									});
								}
								
							});
						})();
						
					};
				};
			}else if (document.documentElement.scrollTop>2780) {
				// floor=3;
				for (var i = 0; i < floorArr.length; i++) {
					var t=i+1;
					if (t==3) {
						$("#floor_nav>li:nth-child("+t+")").html(floorArr[i][1]).css({
							"font-size":"12px",
							"color":"#C81623"
						}).hover(function(){
							$(this).css({
								"color":"white",
								"cursor":"pointer"
							});
						},function(){
							$(this).css({
								"color":"#C81623"
							});
						});
					} else{
						(function() {
							var m=i+1;
							$("#floor_nav>li:nth-child("+m+")").html(floorArr[m-1][0]).css({
								"font-size":"14px",
								"color":"#625351"
							}).hover(function(){
								console.log(m,t);
								$(this).html(floorArr[m-1][1]).css({
									"font-size":"12px",
									"color":"white",
									"cursor":"pointer"
								});
							},function(){
								if (document.documentElement.scrollTop>2780) {
									$(this).html(floorArr[m-1][0]).css({
										"font-size":"14px",
										"color":"#625351"
									});
								}
							});
						})();
						
					};
				};
			};
		};
	});

	for (var i = 0; i < floorArr.length; i++) {

		(function(){
			var k=i;
			var t=k+1;
			$("#floor_nav>li:nth-child("+t+")").css({
				"font-size":"14px",
			}).click(function(){
				var top_height;
				top_height=1595+780*k;

				$('html,body').animate({scrollTop: top_height}, 800);
				// $(document).animate({
				// 	scrollTop,top_height
				// });
			});
		})();

	};
});

//窗口改变事件
window.onresize=function(){
	changeFloorNavPosition();
};

//改变楼层导航标识在网页中的网址
function changeFloorNavPosition(){
	var fixed_top;
	if (window.innerHeight>57) {
		fixed_top=(window.innerHeight-57)/2+"px";
	} else{
		fixed_top=0+"px";
	};
	$("#floor_nav").css({
		"top":fixed_top
	});
};

//1F轮播
var scrollPic1FNode=document.getElementById("scrollPic_1F");
 	scrollPic1FNode.style.left="-439px";
// var timer1F;
var autoTimer1F;
var autoScroll1FNode=document.getElementById("autoScroll_1F");
var iBlackCircle=autoScroll1FNode.getElementsByTagName("p")[0].getElementsByTagName("i");

//小黑点的onmouseenter,onmouseleave事件
var flag1=false;
for (var i = 0; i < iBlackCircle.length; i++) {
	(function(){
		var j=i;
		var circleTimer;
		iBlackCircle[j].onmouseenter=function(){
			//当鼠标在小黑点上悬停0.3s才有反应
			circleTimer=setTimeout(function(){
				for (var m = 0; m < iBlackCircle.length; m++) {
					iBlackCircle[m].style.borderColor="#3E3E3E";
					removeClassName(iBlackCircle[m],"current");
				};
				addClassName(iBlackCircle[j],"current");
				iBlackCircle[j].style.borderColor="#B61B1F";
				speedScrollPic(scrollPic1FNode,439,j);
			},300);
			
		}
		iBlackCircle[j].onmouseleave=function(){
			clearTimeout(circleTimer);
		}
	})();
	
};

//2F轮播
// var scrollPic2FNode=document.getElementById("scrollPic_2F");
//  	scrollPic2FNode.style.left="-439px";
// var timer2F;
// var autoTimer2F;
// var autoScroll2FNode=document.getElementById("autoScroll_2F");
// var iBlackCircle=autoScroll1FNode.getElementsByTagName("p")[0].getElementsByTagName("i");
// for (var i = 0; i < iBlackCircle.length; i++) {
// 	(function(){
// 		var j=i;
// 		iBlackCircle[j].onmouseenter=function(){
// 			console.log(j);
// 			for (var m = 0; m < iBlackCircle.length; m++) {
// 				iBlackCircle[m].style.borderColor="#3E3E3E";
// 				removeClassName(iBlackCircle[m],"current");
// 			};
// 			addClassName(iBlackCircle[j],"current");
// 			iBlackCircle[j].style.borderColor="#B61B1F";
// 			speedScrollPic(scrollPic2FNode,439,j);
// 		}
// 	})();
	
// };

//快速移动图片
function speedScrollPic(node,width,i){
	
	var n=0;
	var scrollLong=-(i+1)*width-parseInt(node.style.left);
	var timer=setInterval(function(){
	// console.log(timer+"**************快速移动图片");
			scrollPic1FNode.style.left=parseFloat(scrollPic1FNode.style.left)+scrollLong/10+"px";
			n++;
			// console.log(n);
			if (n>=10) {
				clearInterval(timer);
				// opener="closed";
			};
		},1);
	flag1=false;
}

autoLunBo1F();

autoScroll1FNode.onmouseenter=function(){
 	clearInterval(autoTimer1F);
}
autoScroll1FNode.onmouseleave=function(){
 	autoLunBo1F();
}
//1F自动轮播
function autoLunBo1F(){
	autoTimer1F=setInterval(function(){
	// console.log(autoTimer1F+"**************1F自动轮播");
		if (parseInt(scrollPic1FNode.style.left)<=-2195) {
			scrollPic1FNode.style.left="-439px";
		};
	// 设置1F小圆点
			// console.log(scrollPic1FNode.style.left);
	var k=Math.abs(parseInt(scrollPic1FNode.style.left)/439)%4;
	// if (k) {};
		for (var m = 0; m < iBlackCircle.length; m++) {
				iBlackCircle[m].style.borderColor="#3E3E3E";
				removeClassName(iBlackCircle[m],"current");
			};
			k=parseInt(k);
		// console.log(k+"**********************");
			addClassName(iBlackCircle[k],"current");
			iBlackCircle[k].style.borderColor="#B61B1F";

		var n1=0;
		var timer1F=setInterval(function(){
			// console.log(timer1F+"**************1F自动轮播-单图移动");
			scrollPic1FNode.style.left=parseFloat(scrollPic1FNode.style.left)-43.9+"px";
			n1++;
			// console.log(n1+"***********"+timer1F);
			// console.log(n);
			if (n1>=10) {
				clearInterval(timer1F);
				// opener="closed";
				// console.log("^^^^^^^^^^^^^^^^");
			};
		},1);
	},2500);
}
	
// function autoLunBo()



//1F单击箭头向左移动
document.getElementById("arrowToLeft_1F").onclick=function(){
	if (opener=="opened") {
		return false;
	}else{
		opener="opened";
	}
	if (parseInt(scrollPic1FNode.style.left)==0) {
		scrollPic1FNode.style.left="-1756px";
	};

	var j=(Math.abs(parseInt(scrollPic1FNode.style.left)/439)+2)%4;
	for (var m = 0; m < iBlackCircle.length; m++) {
			iBlackCircle[m].style.borderColor="#3E3E3E";
			removeClassName(iBlackCircle[m],"current");
		};
	addClassName(iBlackCircle[j],"current");
	iBlackCircle[j].style.borderColor="#B61B1F";
	speedScrollPic(scrollPic1FNode,439,j);

	opener="closed";

}

//1F单击箭头向右移动
document.getElementById("arrowToRight_1F").onclick=function(){
	if (opener=="opened") {
		return false;
	}else{
		opener="opened";
	}
	if (parseInt(scrollPic1FNode.style.left)==-2195) {
		scrollPic1FNode.style.left="-439px";
	};

	var j=(Math.abs(parseInt(scrollPic1FNode.style.left)/439)+0)%4;
	for (var m = 0; m < iBlackCircle.length; m++) {
			iBlackCircle[m].style.borderColor="#3E3E3E";
			removeClassName(iBlackCircle[m],"current");
		};
	addClassName(iBlackCircle[j],"current");
	iBlackCircle[j].style.borderColor="#B61B1F";
	speedScrollPic(scrollPic1FNode,439,j);

	opener="closed";
}

//各楼层tab切换

var tabExchangeNode=document.getElementsByClassName("tabExchange");

tabpageDisplayBlock(0,0);

	for (var i = 0; i < tabExchangeNode.length; i++) {
		var tabLiExchangeNode=tabExchangeNode[i].getElementsByTagName("li");
		for (var k = 0; k < tabLiExchangeNode.length; k++) {
			(function(){
				var m=i;
				var n=k;
				tabLiExchangeNode[n].onmouseenter=function(){
					tabpageDisplayBlock(m,n);
				}

			})();
			// tabLiExchangeNode[k]
		};
	};

//显示tab页
function tabpageDisplayBlock(m,n){
	var tabLiExchangeNode=tabExchangeNode[m].getElementsByTagName("li");
		for (var k = 0; k < tabLiExchangeNode.length; k++) {
			var str;
			str="tabpage_"+m+"_"+k;
			var tabPage=document.getElementById(str);

			if (k==n) {
				tabPage.style.display="block";
				tabLiExchangeNode[k].style.borderWidth="2px 1px 0";
				tabLiExchangeNode[k].style.borderStyle="solid";
				tabLiExchangeNode[k].style.borderColor="#C81623";
				tabLiExchangeNode[k].style.height="31px";
				tabLiExchangeNode[k].style.background="white";
				tabLiExchangeNode[k].getElementsByTagName("a")[0].style.color="#C81623";
				tabLiExchangeNode[k].getElementsByTagName("a")[0].style.marginTop="9px";
				if (k==0) {
					tabLiExchangeNode[k].getElementsByTagName("a")[0].style.borderWidth="0";
				}else{
					tabLiExchangeNode[k-1].getElementsByTagName("a")[0].style.borderWidth="0";
					tabLiExchangeNode[k].getElementsByTagName("a")[0].style.borderWidth="0";
				}
			}else{
				tabPage.style.display="none";
				tabLiExchangeNode[k].style.borderWidth="0";
				tabLiExchangeNode[k].style.borderTop="1px solid #CCCCCC";
				tabLiExchangeNode[k].getElementsByTagName("a")[0].style.marginTop="10px";
				if (k==0) {
					tabLiExchangeNode[k].style.borderLeft="1px solid #CCCCCC";
				}
				if (k==tabLiExchangeNode.length-1) {
					tabLiExchangeNode[k].style.borderRight="1px solid #CCCCCC";
				}
				tabLiExchangeNode[k].getElementsByTagName("a")[0].style.color="#666666";
				if (k!=tabLiExchangeNode.length-1) {
					tabLiExchangeNode[k].getElementsByTagName("a")[0].style.borderRight="1px solid #CCCCCC";
				};
			}

		};

}


var tianTianDiJiaNode=document.getElementsByClassName("tianTianDiJia");
var tianTianDiJiaLiNode=tianTianDiJiaNode[0].getElementsByTagName("li");
var tianTianDiJiaImgNode=tianTianDiJiaNode[0].getElementsByTagName("img");


for (var i = 0; i < tianTianDiJiaLiNode.length; i++) {
	(function(){
		var k=i;
		tianTianDiJiaLiNode[k].onmouseenter=function(){
			tianTianDiJiaImgNode[k].style.transition="all 0.3s ease-in";
			tianTianDiJiaImgNode[k].style.left="-10px";
		};
		tianTianDiJiaLiNode[k].onmouseleave=function(){
			tianTianDiJiaImgNode[k].style.transition="all 0.3s ease-in";
			tianTianDiJiaImgNode[k].style.left="0";
		}
	})();
	
};

//热门晒单轮播
var hotShaiDanNode=document.getElementById("hotShaiDan_carousel");
var hotShaiDan_1Node=document.getElementById("hotShaiDan_1");
hotShaiDanNode.style.top="-500px";
var timer_ShaiDan;
// console.log(hotShaiDanNode.style.top);
	
shaiDanLunBo();

hotShaiDan_1Node.onmouseenter=function(){
	clearInterval(timer_ShaiDan);
	// clearInterval(timer_ShaiDan_1);
}
hotShaiDan_1Node.onmouseleave=function(){
	shaiDanLunBo();
}

function shaiDanLunBo(){
	timer_ShaiDan=setInterval(function(){
		// console.log(timer_ShaiDan+"**************热门晒单轮播");
		if (parseFloat(hotShaiDanNode.style.top)>=0) {
			hotShaiDanNode.style.top="-500px";
		};
		var n=0;
	
		var timer_ShaiDan_1=setInterval(function(){
		// console.log(timer_ShaiDan_1+"**************热门晒单轮播-单图轮播");
		 	if (parseFloat(hotShaiDanNode.style.top)>=0) {
				hotShaiDanNode.style.top="-125px";
			};
			hotShaiDanNode.style.top=parseFloat(hotShaiDanNode.style.top)+12.5+"px";
		 // console.log(hotShaiDanNode.style.top);
			n++;
			// console.log(n);
			if (n>=10) {
				clearInterval(timer_ShaiDan_1);
			};
			// console.log(hotShaiDanNode.style.top+"**********");
		},5);
		 // console.log(hotShaiDanNode.style.top+"**********");
	// console.log(hotShaiDanNode.style.top);
	},2500);
}







































































































































































































