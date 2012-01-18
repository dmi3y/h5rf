jQuery(document).ready(function($){
	//Placeholder html5 better replacements
	(function(){
		$('input[placeholder]').each(function(){
			$(this).data('placeHolder', $(this).attr('placeholder')).removeAttr('placeholder').focus(function(){
				if( $(this).hasClass('placeholder') ){
					$(this).removeClass('placeholder').val('');
				}
			}).blur(function(){
				if( !$(this).val() ){
					$(this).addClass('placeholder').val($(this).data('placeHolder'));
				}
			}).blur();
			
			if( !$(this).val() ){
				$(this).val($(this).data('placeHolder'));
			}
		});
		//clean placeholders on submit
		$('form').submit(function(){
			$('input.placeholder', $(this)).val('');
		});
	});
	//request form load and to do
	(function(){
            $('.request-button').click(function(){
                if(!$('#contactme')[0]){
                    $(this).addClass('loading');
                    var u = window.location.href+'?tmpl=ajax';
                    $.ajax({
                        url: u,
                        success: function(r){
                            if ($(r).is('div#we-ajax')){
                                //do more!
                                $('#contactme', r).appendTo('body').delay(500).queue(function(){
                                    $(this).addClass('showoff');
                                    $(this).bind('transitionend webkitTransitionEnd oTransitionEnd', function(){$('#contactme').addClass('shadow')});
                                    $('.cm-close').click(function(){
                                        $('#contactme').removeClass('shadow showoff');
                                    });
                                    $('.request-button').removeClass('loading');
                                });
                            }
                            else{
                                //failed, give an error
                            }
                        }
                    });
                }
                else{
                    $('#contactme').removeClass('shadow').addClass('showoff');
                    $('#contactme').bind('transitionend webkitTransitionEnd oTransitionEnd', function(){$('#contactme').addClass('shadow')});
                }
            });
	});
});