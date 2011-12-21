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
	})();
	
	//main gallery
	(function(){
		$('.newsflash-hsliders').each(function(){
			var g = $(this);
			var active = $('li.active', g);
			var current = $('span.current', g);
			(function autoplay(){
				var autoid = window.setInterval(function(){
					if(g.hasClass('paused')) return;
					if(current.next().get(0)){
						current.next().click();
					}
					else{
						$($('.hcontrolbox>span', g).get(0)).click();
					}
				}, 5000);
				g.bind({
					mouseenter: function(){
						g.addClass('paused');
					},
					mouseleave: function(){
						g.removeClass('paused');
					}
				});
			})();
			$('.hcontrolbox>span', g).each(function(){
				var c = $(this);
				c.click(function(){
					if(c.hasClass('current')) return;
					active.fadeOut();
					current.removeClass('current');
					c.addClass('current');
					current = c;
					active = $('li.slide' + c.text(), g);
					active.fadeIn();
				});
			});
		});
	})();
	
	//helper slider near the postcard
	(function(){
		$('.newsflash-sliders').each(function(){
			var s = $(this);
			var sl = $('.slider', s);
			var h = sl.width();
			var step = ('.slider>li', s).width();
			if (step == h) return;
			var p = 1;
			(function autoplay(){
				var autoid = window.setInterval(function(){
					if (s.hasClass('paused')) return;
					var n;
					if((p * step) >= h){
						n = 0;
						p = 0;
					}
					else{
						n = '-=' + step;
					}
					sl.animate({'margin-left': n}, function(){
						p++;
					});
				}, 7000);
				s.bind({
					mouseenter: function(){
						s.addClass('paused');
					},
					mouseleave: function(){
						s.removeClass('paused');
					}
				});
			})();
		});
	})();
	//helper subslider
	(function(){
		$('.subslide-holder').each(function(){
			var s = $(this);
			var sl = $('ul', s);
			var h = sl.width();
			var step = ('ul>li', s).width();
			if (step == h) return;
			var p = 1;
			(function autoplay(){
				var autoid = window.setInterval(function(){
					if (s.hasClass('paused')) return;
					var n;
					if((p * step) >= h){
						n = 0;
						p = 0;
					}
					else{
						n = '-=' + step;
					}
					sl.animate({'margin-left': n}, function(){
						p++;
					});
				}, 3000);
				s.bind({
					mouseenter: function(){
						s.addClass('paused');
					},
					mouseleave: function(){
						s.removeClass('paused');
					}
				});
			})();
		});
	})();
	//menu
	(function(){
		$('.mainmenu ul').each(
			function(){
				$(this).children('li:last').addClass('menu-last-item');
				$(this).children('li:first').addClass('menu-first-item');
			}
		);
		var numberOpen = 0;
		$('.mainmenu li.parent').each(
			function(){
				var tm;
				var li = $(this);
				li.data('numberOpen', 0);
				var ul = li.children('ul');
				li.mouseenter(
					function(){//in
						ul.css('zIndex', 1000);
						numberOpen++;
						tm? clearTimeout(tm):null;
						ul.show();
					}
				).mouseleave(
					function(){//out
						ul.css('zIndex', 500);
						numberOpen--;
						numberOpen>1? ul.hide():
						tm = setTimeout(
							function(){
								ul.hide();
							},
							500
						);
					}
				);
			}
		);
	})();
	//alt to imagenote on testimony
	(function(){
		$('.testimony .rollover img').each(function(){
			var note = $(this).attr('alt');
			if (note){
				$(this).parent().wrap('<div class="hasnote" />').after('<span class="note">' + note + '</span>');
			}
		});
	})();
	//message on send phone
	(function(){
		$('.cmresult').appendTo('.topbox').css({'display':'block','opacity':0 }).delay(1000).animate({'top':30,'opacity':1}).delay(3000).animate({'top':-120,'opacity':0});
	})();
});