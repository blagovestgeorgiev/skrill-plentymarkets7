document.addEventListener("DOMContentLoaded", function(event) {
	setTimeout(removeMessage, 5000);
});
function removeMessage() {
	if (document.getElementById('successMessage')) {
		document.getElementById('successMessage').style.display = 'none';
	}
	if (document.getElementById('errorMessage')) {
		document.getElementById('errorMessage').style.display = 'none';
	}
}
function jsUcfirst(string)
{
	return string.charAt(0).toUpperCase() + string.slice(1);
}
function changeLanguage(language) {
	document.getElementById('skrillPaymentNameEn').style.display = 'none';
	document.getElementById('skrillPaymentNameDe').style.display = 'none';
	document.getElementById('skrillPaymentName'+jsUcfirst(language)).style.display = 'block';
}
