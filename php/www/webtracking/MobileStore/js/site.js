$(function() {
	var buffer = 100;
	var navTop = $('#unfixed').position().top ;
	

	$(document).scroll(function() {
		if ($(document).scrollTop() > $('#three').offset().top - buffer ) {
			$('li', '#nav').removeClass('active');
			$('li:eq(2)', '#nav').addClass('active');
		} else if ($(document).scrollTop() > $('#two').offset().top - buffer ) {
			$('li', '#nav').removeClass('active');
			$('li:eq(1)', '#nav').addClass('active');
		} else if ($(document).scrollTop() > $('#one').offset().top - buffer ) {
			$('li', '#nav').removeClass('active');
			$('li:eq(0)', '#nav').addClass('active');
		} else {
			$('li', '#nav').removeClass('active');
		}
	  if ($(document).scrollTop() >= navTop ) {
		$('#unfixed').addClass('fix');
	    }
	    else {
		$('#unfixed').removeClass('fix');
	    }
  	});
	$('.nav').click(function() {
		var block = $(this).attr('href').replace(/#/, ''),
			blockRoof = $('#' + block).position().top - 50;
			$('html, body').animate({scrollTop : blockRoof }, 600, 'swing');
    	return false;
  	});

	$(".Trigger").click(function () {
          $("#Slider").toggleClass("slidedown slideup");
	});

	$(".Trigger").mouseout(function(){
       		if ($("#Slider").hasClass("slidedown"))
             		$("#Slider").removeClass("slidedown").addClass("slideup");
	});

});




