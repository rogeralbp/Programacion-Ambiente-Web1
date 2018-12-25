function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}

$(document).ready(function() {

    $('form fieldset:first').fadeIn('slow');
    
    $('form input[type="text"], form input[type="password"], form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });

    $('form .btn-next').on('click', function() {

        var parent_fieldset = $(this).parents('fieldset');
        var next_step=true;
        
        parent_fieldset.find('form input[type=text]').each(function() {
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			next_step = false;
    		}
    		else {
                $(this).removeClass('input-error');
                
    		}
        });

        if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
    			current_active_step.removeClass('active').addClass('activated').next().addClass('active');
	    		$(this).next().fadeIn();
    			scroll_to_class( $('form'), 20 );
	    	});
    	}
        
    });

});