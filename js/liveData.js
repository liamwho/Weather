$(document).ready(function() {
	setInterval(function () {
	$('#show').load('liveDataGet.php')
	}, 5000);
});