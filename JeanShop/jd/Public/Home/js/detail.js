var jean_id=$('#jeanId').attr('jeanId'); //record jean id
var fashion_name=''; //record jean fashion name
var size=''; //record jean size
// console.log(jean_id);
$(function(){
	$.ajaxSetup({
		async:false	
	})
	$('.fashion').click(function(){		//根据款式查库存量
		if (1!=window.getComputedStyle(this,null)['opacity']) {
			return false;
		};
		// console.log(window.getComputedStyle($('.size')[0],null).color);
		$(this).toggleClass('select');
		$('.fashion').not(this).removeClass('select');
		$('#show').attr('src',$(this).attr('src'));	//set left showing picture
		if ('rgb(0, 0, 0)'==window.getComputedStyle(this,null)['border-bottom-color']) {	//aquire fashion name
			fashion_name=$(this).attr('title');
		} else{
			fashion_name='';
		};
		console.log(fashion_name);
		

		//show the latest quantity of storage of different fashion and size
		$.get('/jd/index.php/Home/Jean/getstorage',
			{
				'jean_id':jean_id,
				'fashion_name':fashion_name,
				'size':size,
				'flag':'size'
			},
			function(data){
				data=JSON.parse(data);
				console.log(data);
				var num=data.pop();
				console.log(data);
				$('.size').each(function(){
					if (-1==data.indexOf($(this).html())) {
						$(this).css('color','#ccc');
					} else{
						$(this).css('color','#000');
					};
				})
				$('#totalStorage').html(num);
			}
		);	//根据款式查库存量
		storageCompare();
	})

	$('.size').click(function(){		//根据尺码查库存量
		// console.log(window.getComputedStyle(this,null)['color']);
		if ('rgb(0, 0, 0)'!=window.getComputedStyle(this,null)['color']) {
			return false;
		};

		$(this).toggleClass('select');
		$('.size').not(this).removeClass('select');
		if ('rgb(0, 0, 0)'==window.getComputedStyle(this,null)['border-bottom-color']) {	//aquire size name
			size=$(this).html();
		} else{
			size='';
		};
		// console.log(size);

		//show the latest quantity of storage of different fashion and size
		$.get('/jd/index.php/Home/Jean/getstorage',
			{
				'jean_id':jean_id,
				'fashion_name':fashion_name,
				'size':size,
				'flag':'fashion_name'
			},
			function(data){
				data=JSON.parse(data);
				console.log(data);
				var num=data.pop();
				$('#totalStorage').html(num);
				storageCompare();
				console.log(data);
				$('.fashion').each(function(){
					if (-1==data.indexOf($(this).attr('title'))) {
						$(this).css('opacity','0.2');
					} else{
						$(this).css('opacity','1');
					};
				})

			}
		);	//根据尺码查库存量
	})

	$('#minus').click(function(){	//减小数据
		if (!isNaN($('.buynum').val())&&($('.buynum').val()>1)) {
			$('.buynum').val($('.buynum').val()-1);
			if (parseInt($('.buynum').val())<=parseInt($('#totalStorage').html())) {
				$('.reminder').html('');
			};
		} else{
			$('.buynum').val(1);
		};
	})
	$('#plus').click(function(){	//增加数据
		if (!isNaN($('.buynum').val())&&($('.buynum').val()>0)) {
			$('.buynum').val(parseInt($('.buynum').val())+1);
			storageCompare();
		} else{
			$('.buynum').val(1);
		};
	})
	$('.buynum').blur(function(){
		if (parseInt($('.buynum').val())!=$('.buynum').val()) {
			console.log('111');
			$('.reminder').html('请填写正确的商品数量！');
		}else{
			storageCompare();
		}
	})
	function storageCompare(){
		if (parseInt($('.buynum').val())>parseInt($('#totalStorage').html())) {
			$('.reminder').html('您所填写的商品数量超过库存！');
		}else {
			$('.reminder').html('');
		};
	}
})

function addCart() {
	if (user=='') {
		alert("请先登录！");
		return;
	}
	if (!$('.fashion.select').length) {
		alert("请选择款式！");
		return;
	};
	if (!$('.size.select').length) {
		alert("请选择尺码！");
		return;
	};
	if (''!=$('.reminder').html()) {
		alert("请输入正确的商品数量！");
		return;
	}else{
		pNum=parseInt($('.buynum').val());
	}

	var str="商品加入购物车成功。";
	$("#reminder").html(str).slideDown(500).slideUp(1500);

	$.get("/jd/index.php/Home/Cart/addToCart", { //如果用相对路径，分页后这里会出现问题
		'username': user, 
		'fashion_name': fashion_name, 
		'size': size, 
		'cart_product_number': pNum 
	},
	function(data){
		console.log(data);
		// alert("Data Loaded: " + data);
	});
}
function buynow() {
	if (user=='') {
		alert("请先登录！");
		return;
	}
	if (!$('.fashion.select').length) {
		alert("请选择款式！");
		return;
	};
	if (!$('.size.select').length) {
		alert("请选择尺码！");
		return;
	};
	if (''!=$('.reminder').html()) {
		alert("请输入正确的商品数量！");
		return;
	}else{
		pNum=parseInt($('.buynum').val());
	}

	var jeanName=$('#jeanId').html();
	var fashion_img=$('.fashion.select').attr('src');
	var price=$('.dc_price').html();
	var totalStorage=$('#totalStorage').html();

	window.location.href="/jd/index.php/Home/User/buynow.html?jeanName="+jeanName+"&jean_id="+jean_id+"&fashion_img="+fashion_img+"&price="+price+"&fashion_name="+fashion_name+"&size="+size+"&number="+pNum+"&totalStorage="+totalStorage;


						

}
