$(document).ready(function() {
	$('.fancybox').fancybox();
	$(".various").fancybox({
		maxWidth	: 1100,
		maxHeight	: 670,
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		title:  null,
		padding:0
	});
	$(".various2").fancybox({
		fitToView	: false,
		width		: '100%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		title:  null,
		padding:0
	});
});