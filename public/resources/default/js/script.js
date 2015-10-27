$(document).ready(function(){
	
	$('.progress-animated').children('.progress-bar').each(function(){
		$(this).animate({
			'width':$(this).text(),
			Counter:$(this).text()
		}, {
			duration: 2700,
			easing: 'swing',
			step: function(now) {
				$(this).text(Math.ceil(now)+"%");
			}
		});
	});

	$('.progress').children('.progress-bar').each(function(){
		$(this).css({'width':$(this).text()});
	});

	$('button.close').click(function(){
		$(this).closest('.modal').fadeOut(250);
	});

	$('#modal').click(function(){
		$('.modal').fadeIn(250);
	});

});