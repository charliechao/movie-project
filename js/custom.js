$(document).ready(function(){

	$("iframe").hide();
	$("table").hide();

	$(".btn-info").click(function(){
	$("iframe, .nav, .btn-danger, footer").slideToggle();
	});


	$(".btn-danger").click(function(){
	$("table, .nav, footer, .btn-info").slideToggle();
	});

})