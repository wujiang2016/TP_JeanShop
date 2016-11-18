var province=['北京','上海','天津','重庆','河北','山西','河南','辽宁',"吉林","黑龙江","内蒙古","江苏","山东","安徽","浙江","福建","湖北","湖南","广东","广西","江西","四川","海南","贵州","云南","西藏","陕西","甘肃","青海","宁夏","新疆","台湾","香港","澳门","钓鱼岛","海外"];
var arrivalTo=document.getElementById('arrivalTo');
var ulNode;
	
	
	// ulNode.style.overflow="hidden";
	// ulNode.setAttribute("style","overflow:hidden");

arrivalTo.onmouseenter=function(){
	ulNode=document.createElement("ul");
	arrivalTo.appendChild(ulNode);
	ulNode.id="arrivalToUlNode";
	ulNode.setAttribute("style","width:315px;height:246px;border:1px solid #DDDDDD;border-top:0;margin-left:-10px;");
	for (var i = 0; i < province.length; i++) {
		var liNode=document.createElement("li");
		liNode.innerHTML='<a href="" name="province">'+province[i]+'</a>';
		ulNode.appendChild(liNode);
		liNode.setAttribute("style","float:left;width:47px;height:25px;margin-left:16px;margin-top:5px;");
	};
	// ulNode.style.display="none";
	// ulNode.style.display="block";
	// ulNode.style.zIndex="999";
	// ulNode.setAttribute("style","z-index:999;");
	arrivalTo.setAttribute("style","background:white;");
	document.getElementById("arrows").setAttribute("style","transform:rotate(180deg);transition:all 0.3s ease");
};
arrivalTo.onmouseleave=function(){
	arrivalTo.removeChild(ulNode);
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

function shake(obj){
	// obj.style.borderLeftWidth="9px";
	console.log(obj);
	obj.style.marginLeft="2px";
	obj.style.width="74px";
	console.log(obj);
	var timer=setTimeout(function(){
		obj.style.marginLeft="0";
		obj.style.width="76px";
	},100);
	// setTimeout(wait(),500);
	// console.log(obj);
	// var t=0;
	// if (t==0) {
	// obj.setAttribute("style","transform:translate(10px,0);transition:all 0.5s ease");
	// t++;
	// };
	// if (t==1) {
	// obj.setAttribute("style","transform:translate(-10px,0);transition:all 0.3s ease");
	// t++;
	// };
	
	// clearTimeout(timer);
	
	// obj.style.borderLeftWidth="2px";
	// alert("成功");
}
// function wait(obj){
// 	console.log("1");
// 	// alert(obj);
// 	// obj=document.getElementsByName('search')[0];
// 	obj.style.marginLeft="0";
// 	obj.style.width="76px";
// 	console.log(obj);
// }

var timer;
var curIndex=0;
var slideNode=document.getElementsByClassName('slider');
var slidePicNode=slideNode[0].getElementsByTagName('li');
var slideNumNode=slideNode[1].getElementsByTagName('li');
	console.log(slideNumNode);

// slider();

timer=setInterval(function(){
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

//判断是否含有class名称
function addClassName(elem,cls){
	elem.className+=" "+cls;
}
function removeClassName(elem,cls){
	if (hasClassName(elem,cls)) {
		elem.className=elem.className.replace(cls,"");
	};
}
function hasClassName(elem,cls){
	if(elem.className.indexOf(cls)==-1){
		return false;
	}else{
		return true;
	}
}

// var myJdArr=[""];
// var myJdDivNode;
// myJD.onmouseover=function(){
	
// 	document.getElementById("arrows").setAttribute("style","transform:rotate(180deg);transition:all 0.3s ease");
// 	ulNode.setAttribute("style","width:315px;height:246px;border:1px solid #DDDDDD;border-top:0;margin-left:-10px;");
// 	for (var i = 0; i < province.length; i++) {
// 		var liNode=document.createElement("li");
// 		liNode.innerHTML='<a href="">'+province[i]+'</a>';
// 		ulNode.appendChild(liNode);
// 		liNode.setAttribute("style","float:left;width:47px;height:25px;margin-left:16px;margin-top:5px;");
// 	};
// 	console.log(myJD);
// };
// myJD.onmouseout=function(){
// 	myJD.removeChild(ulNode);
// 	myJD.setAttribute("style","background:#F1F1F1;");
// 	document.getElementById("arrows").setAttribute("style","transform:rotate(0);transition:all 0.3s ease");
// };
