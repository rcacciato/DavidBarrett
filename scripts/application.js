$(document).ready(function() {
			slideSwitch();
			downloadPop();
			addPhotoLink();
});

function addPhotoLink() {
	$('.photo-link').click(function(){
		var url = $(this).data('link');
		window.location.replace(url);
	});
}

function slideSwitch() {
	// slideshow images:
    var $active = $('#slideshow img.active');

    if ( $active.length == 0 ) $active = $('#slideshow img:last');

    var $next =  $active.next().length ? $active.next() : $('#slideshow img:first');

    $active.addClass('last-active').animate({opacity: 0.0}, 8000);

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });

}

$(function() {
    setInterval( "slideSwitch()", 3000 );
});


function downloadPop() {
	$download = $('.download');
	if ($download) {
		$download.hide();
		var $media = $(".headshots > li");

		$media.each(function() {
		    $(this).mouseover(function() {
				$(this).find('.download').show();
			})
			$(this).mouseleave(function() {
				$(this).find('.download').hide();
			})
		  });
	}
}
