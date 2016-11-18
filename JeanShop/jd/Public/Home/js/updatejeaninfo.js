var fashionOrigin=$('.fashion:eq(0)');
var sizeOrigin=$('.size')[0];
var flag=0;
// console.log(fashionOrigin);
// console.log(sizeOrigin);
//上传表单信息
function updateJeanInfo() {
	// 上传图片文件
	var formData=new FormData($("#jeaninfo")[0]);
	$.ajax({
		url:'updateJeanInfo',
		type:'POST',
		data:formData,
		async:false,
		cache:false,
		contentType:false,
		processData:false,
		success:function(data){
			flag+=data;
			// console.log(flag);
			if(!isNaN(data)){
			   	$('input[name=jean_id]').val(data);
			   	$('form.fashion:gt(0)').submit();
			}else{
			   	alert("服务器繁忙，请稍后再试！");
			}
		},
		error:function(data){
			alert("11");
		}
	});
	console.log(flag);
	if (!isNaN(flag)) {
		alert("数据更新成功！");
		$('input:not(.btn)').val('');
		$('input:checkbox').attr('checked',false);
		$('select').val('');
		location.reload();
	}
	return false;
}
function updateFashionInfo (obj) {
	var formData=new FormData($(obj)[0]);
	$.ajax({
		url:'updateJeanInfo',
		type:'POST',
		data:formData,
		async:false,
		cache:false,
		contentType:false,
		processData:false,
		success:function(data){
			flag+=data;
			console.log(data);
		},
		error:function(data){
			alert("11");
		}
	});
	return false;
}
function addDom(obj,str){
	if (str=="size") {		//添加尺码
		str='.'+str;
		// console.log(str);
		// console.log($(".size:nth-child(1)"));
		var len=$(obj).parent().find(str).size()-1;
		// console.log(len);
		$(sizeOrigin).clone().insertAfter($(obj).parent().find(str+':eq('+len+')'));
		// $(obj).parent().find(str+':eq(0)').clone().insertAfter($(obj).parent().find(str+':eq('+len+')'));
		// $(obj).parent().filter(str+':eq(0)').clone().insertAfter(str+':eq('+len+')');
	} else{
		str='.'+str;		//添加款式
		// console.log(str);
		// console.log($(".size:nth-child(1)"));
		var len=$(str).size()-1;
		console.log($('input[name=jean_id]').length);
		$(fashionOrigin).clone().insertAfter(str+':eq('+len+')');
		$('.fashion').show().filter(':eq(0)').hide();
	};
	
}
//删除款式
function deleteDom(obj){
	if (window.confirm("你确定要删除此款式？")) {
		$(obj).parent().remove();
	};
}
$(function() {
	$('.fashion:eq(0)').hide();
})