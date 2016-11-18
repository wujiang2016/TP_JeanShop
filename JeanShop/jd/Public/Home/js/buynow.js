
var cif=0;	//用费险
console.log(totalStorage);
$(function(){
	$.ajaxSetup({
		async:false	
	})
	$('.address1').click(function(){		//选择邮寄地址
		
		if (!$(this).hasClass('select')) {
			$('.address1').addClass('select').not(this).removeClass('select');
			var str=$(this).find('.address1_name').text();
			str=str.slice(str.lastIndexOf('（'));
			str=(str.split(' '))[0].slice(1);
			var str1=$(this).find('.address1_a').text();
			str+=' '+str1.slice(str1.lastIndexOf(')86-')+1);
			str1=str1.slice(0,str1.indexOf('document'));
			$('#addressTo').html(str1);
			$('#receiver').html(str);
		};
		
		
	})

	$('.minus').click(function(){	//减小数据
		if (!isNaN($('.add').val())&&($('.add').val()>1)) {
			$('.add').val($('.add').val()-1);
			storageCompare();
		} else{
			$('.add').val(1);
			$('.reminder').html('');
		};
		$('.add').change();
	})
	$('.plus').click(function(){	//增加数据
		if (!isNaN($('.add').val())&&($('.add').val()>0)) {
			$('.add').val(parseInt($('.add').val())+1);
			storageCompare();
		} else{
			$('.add').val(1);
			$('.reminder').html('');
		};
		$('.add').change();
	})
	if ($("[name='cif']").is(':checked')) {
		cif=4.4;
	};

	if (!isNaN($('.add').val())&&($('.add').val()>0)) {
		$('.subtotal').html((parseInt($('.add').val())*parseFloat($('.price').text().slice(1))).toFixed(2));
		$('#totalCost').html('￥'+(parseFloat($('.subtotal').html())+cif).toFixed(2));
		$('#realPay').html($('#totalCost').html());
	}
	$("[name='cif']").click(function(){
		if ($("[name='cif']").is(':checked')) {
			cif=4.4;
		}else{
			cif=0;
		}
		$('#totalCost').html('￥'+(parseFloat($('.subtotal').html())+cif).toFixed(2));
		$('#realPay').html($('#totalCost').html());
	})
	console.log(cif);
	$('.add').blur(function(){
		if (parseInt($('.add').val())!=$('.add').val()) {
			console.log('111');
			$('.reminder').html('请填写正确的商品数量！');
		}else{
			storageCompare();
		}
	})
	$('.add').change(function(){
		console.log($('.price').text());
		if (!isNaN($('.add').val())&&($('.add').val()>0)) {
			$('.subtotal').html((parseInt($('.add').val())*parseFloat($('.price').text().slice(1))).toFixed(2));
			$('#totalCost').html('￥'+(parseFloat($('.subtotal').html())+cif).toFixed(2));
			$('#realPay').html($('#totalCost').html());
		}
	})

	function storageCompare(){
		if (parseInt($('.add').val())>parseInt(totalStorage)) {
			$('.add').val(totalStorage);
			$('.reminder').html('您最多能买'+totalStorage+'件商品。');
		}else {
			$('.reminder').html('');
		};
	}

})

function placeOrder() {
	// if (user=='') {
	// 	alert("请先登录！");
	// 	return;
	// }
	// if (!$('.fashion.select').length) {
	// 	alert("请选择款式！");
	// 	return;
	// };
	// if (!$('.size.select').length) {
	// 	alert("请选择尺码！");
	// 	return;
	// };
	// if (''!=$('.reminder').html()) {
	// 	alert("请输入正确的商品数量！");
	// 	return;
	// }else{
	// 	pNum=parseInt($('.buynum').val());
	// }
	
	number=$('.add').val();
	price=$('.price').text().slice(1);
	var mailing_address=$('#addressTo').parent().text()+'<br>'+$('#receiver').parent().text();
	var other='';
	if (cif) {
		other='运费险：￥'+cif;
	};
	totalcost=$('#realPay').text().slice(1);

	window.location.href="/jd/index.php/Home/User/pay.html?jean_id="+jean_id+"&fashion_name="+fashion_name+"&size="+size+"&user_id="+user_id+"&number="+number+"&price="+price+"&mailing_address="+mailing_address+"&other="+other+"&totalcost="+totalcost;

}
