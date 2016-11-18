var user=getCookie('user');
var allCost=0;	//商品总金额
var selectedGoods=0;	//已选商品数量
function deleteCheckedProduct() {			//从购物车删除复选框勾选的商品
	if (user=='') {
		alert("请先登录！");
		return;
	}
	if (!window.confirm("你确定要删除这些商品？")) {
		return;
	};
	$(".detail:checkbox").each(function(){
		if ($(this).is(":checked")) {
			obj=$(this).parent().parent();
			$(obj).hide();
			$(obj).find(".detail:checkbox").attr("checked",false);
			$(obj).find(".detail:checkbox").change();		//调用change函数，还可以这样调用，cool！
			// obj=$(obj).parent().parent();
			var pId=$(obj).find("td:eq(6)").text();
			$.get("deleteFromCart", { 
				'user': user, 
				'pId': pId, 
			},
			function(data){
				alert("Data Loaded: " + data);
			});
		};
	});
}

function deleteCart(obj) {			//从购物车删除商品
	if (user=='') {
		alert("请先登录！");
		return;
	}
	if (!window.confirm("你确定要从购物车删除此商品？")) {
		return;
	};
	obj=$(obj).parent().parent();
	$(obj).hide();
	// return;
	$.ajaxSetup({
		async:false
	})

	if ($(obj).find(".detail:checkbox").is(":checked")) {
		$(obj).find(".detail:checkbox").attr("checked",false);
		$(obj).find(".detail:checkbox").change();		//调用change函数，还可以这样调用，cool！
	};

	var pId=$(obj).find("td:eq(6)").text();
	$.get("deleteFromCart", { 
		'user': user, 
		'pId': pId, 
	},
	function(data){
		// alert("Data Loaded: " + data);
	});
}

function closeAnAccount() {			//结算购物车
	if (user=='') {
		alert("请先登录！");
		return;
	}
	// $.ajaxSetup({
	// 	async:false
	// })
	$(".product").each(function(){
		if ($(this).find(".detail:checkbox").is(":checked")) {
			// obj=$(obj).parent().parent();
			var pId=$(this).find("td:eq(6)").text();
			var pNum=$(this).find("input[type='number']").val();
			var pPrice=$(this).find("td:eq(2)").text();
			pPrice=pPrice.replace(',','');
			pPrice=pPrice.slice(1);
			if (pNum<1 || pNum>100000000) {
				alert("你输入的购物数量超出库存范围！")
				return;
			};
			$.ajaxSetup({	//要同步执行，避免ajax执行完
				async:false
			});
			$.get("settleAccounts", { 
				'user': user, 
				'pId': pId, 
				'pNum': pNum,
				'pPrice': pPrice
			},
			function(data){
				console.log(data);
				// alert("Data Loaded: " + data);
			});
		};
	});

	location.reload(true);	//刷新页面
}
$(document).ready(function(){
	$(".detail:checkbox").attr("checked",false);
	$(".allCheck:checkbox").attr("checked",false);
	// console.log($("#vo"));
	$("[type='number']").change(function() {	//更改金额
		var quan=$(this).val();		//数量
		var price=$(this).parent().prev().text();	//单价
		price=price.slice(1);
		price=price.replace(',','');
		// alert(price);
		var cost=parseFloat(price)*parseFloat(quan);
		cost=cost.toFixed(2);

	// 计算商品总花费
		if ($(this).parent().prevAll("td").find(".detail:checkbox").is(":checked")) {
			var str=$(this).parent().next().html();
			var pos=str.indexOf('</script>');
			if (pos==-1) {
				str=str.slice(1);
			} else{
				str=str.slice(pos+9);
			};
			var costDifference=cost-parseFloat(str);
			allCost+=costDifference;
			if (allCost==0) {
				$("#totalCost").html(allCost.toFixed(2));
			} else{
				$("#totalCost").html('￥'+allCost.toFixed(2));
			};
		};

		cost='￥'+cost;
		// alert(cost);
		$(this).parent().next().text(cost);
	});

	$(".allCheck:checkbox").click(function(){
		// $(".product").each(function(){
		// 	alert($(this).find("td:eq(4)").text());
		// })
		// $(".product td:nth-child(5)").each(function(){
		// 	alert($(this).text());
		// })
		// console.log($(".product"));

		if($(this).is(':checked')){						//全选中
			$(".detail:checkbox").attr("checked",true);
			$(".allCheck:checkbox").attr("checked",true);
			allCost=0;
			selectedGoods=0;
			
			$(".detail:checkbox").change();			//调用change()函数

		}else{											//全不选中
			$(".detail:checkbox").attr("checked",false);
			$(".allCheck:checkbox").attr("checked",false);
			$("#selectedCommodity").text("0");
			allCost=0;
			selectedGoods=0;
			$("#totalCost").text("0.00");
		};
	});
	// $(".detail:checkbox").click(function(){
	// 	// alert("BBB");
	// 	// if($(this).is(':checked'));
	// });
	$(".detail:checkbox").change(function(){
		// alert("ddd");
		if($(this).is(':checked')){

		// 计算商品总花费
			var str=$(this).parent().parent().find("td:eq(4)").html();
			// alert(str);
			var pos=str.indexOf('</script>');
			if (pos==-1) {
				str=str.slice(1);
			} else{
				str=str.slice(pos+9);
			};
			allCost+=parseFloat(str);
			$("#totalCost").html('￥'+allCost.toFixed(2));

		//当所有商品的复选框是都选中时，全选的复选框选中
			var len=$(".detail:checkbox").length;
			for (var i = 0; i < len; i++) {
				if (!$(".detail:checkbox").eq(i).is(':checked')) break;
			};
			if (i==len) {		
				$(".allCheck:checkbox").attr("checked",true);
			};
			
		// 已选商品数量
			$("#selectedCommodity").text(++selectedGoods);

		}else{

		// 计算商品总花费
			var str=$(this).parent().parent().find("td:eq(4)").html();
			var pos=str.indexOf('</script>');
			if (pos==-1) {
				str=str.slice(1);
			} else{
				str=str.slice(pos+9);
			};
			allCost-=parseFloat(str);
			if (allCost==0) {
				$("#totalCost").html(allCost.toFixed(2));
			} else{
				$("#totalCost").html('￥'+allCost.toFixed(2));
			};
			
		//当有一个商品的复选框是取消的时候，全选的复选框取消
			$(".allCheck:checkbox").attr("checked",false);	

		// 已选商品数量
			$("#selectedCommodity").text(--selectedGoods);
		};
	});
});