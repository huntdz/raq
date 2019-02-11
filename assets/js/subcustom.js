$(function(){
// check all
	$('#checkAll').click(function(){
		$("input[id^='Check-']").not(this).prop('checked', this.checked);
	});
});