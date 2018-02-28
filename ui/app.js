$(document).ready(function () {
	var helloUrl = new URL(document.URL);
	var helloSettingType = helloUrl.searchParams.get('action');

	var url = '/skrill/settings/'+helloSettingType+'/';
	$.ajax({
		url : url
	}).done(function (r){
		$('hello-ui').html(r);
	}).fail(function() {

	});
})