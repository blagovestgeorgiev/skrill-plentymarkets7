$(document).ready(function () {
	var helloUrl = new URL(document.URL);
	var helloSettingType = helloUrl.searchParams.get('action');

	var url = '/skrill/settings/'+helloSettingType+'/';
	$.ajax({
		url : url
	}).done(function (r){
		$('hello-ui').html(r);
		saveSettings();
	}).fail(function() {

	});

	function saveSettings(){
		$('#saveSettings').submit(function(e) {
			e.preventDefault();
			var saveUrl = '/skrill/settings/save';
			$.ajax({
				url : saveUrl,
				type: 'post',
				data: $(this).serialize()
			}).done(function(r){
				if (r == 'success') {
					$('#successMessage').css('display', 'block');
				} else if (r == 'failed') {
					$('#errorMessage').css('display', 'block');
				}
			});
		});
	}
})