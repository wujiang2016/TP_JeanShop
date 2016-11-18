$(function() {
	$('#agree').click(function(){
		if ($('#agree').is(':checked')) {
			$('.reminder').html('');
		};
	})
})

function registerCheck(){
	if ($('#agree').is(':checked')) {
		return true;
	} else{
		$('.reminder').html('请勾选此框！');
		return false;
	};
}