  $(window).load(function() {
        $('#slider').nivoSlider();
    });


	$(document).ready(function(){
		var len=0;
		$('.editorChoice ul li').each(function(){
			len = len + $(this).innerWidth();
		});
		$('.editorChoice ul').width(len);
	});

