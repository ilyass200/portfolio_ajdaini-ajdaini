$(window).ready(function()
{
	window.scrolled = false
	window.headerScrolled = false

	$(window).scroll(function(event)
	{
		backgroundAnimation()
	})

	$('.more-button').click(function()
	{
		toggleMoreContent($(this))
	})

	$('nav ul li a').click(function(e)
	{
		let href = $(this).attr('href')
		$('html, body').animate({
			scrollTop: $(href).offset().top
		})

	})


})

/* functions */

function toggleMoreContent(button)
{
	if (button.hasClass('active'))
	{
		button.removeClass('active')
		button.text('MOINS')
	}
	else
	{
		button.addClass('active')
		button.text('PLUS')		
	}

	button.parent().parent().children('.more-container').toggle(400)
	
}

function backgroundAnimation()
{
		let scrollTop = $(window).scrollTop()
		let headerContentOffset = $('.header-content').offset()


		if (Math.round(scrollTop) >= Math.round(headerContentOffset.top)) 
		{	
			if (!scrolled)
			{
				scrolled = true

				$('html, body').animate({ scrollTop: $('#about-me').offset().top }, 1000, function()
				{
					headerScrolled = true
					$('header div').css({opacity: 1})
				});  
			}
			if (!headerScrolled)
			{
				$('header div').css({opacity: "-=0.05"})		
			}
		}
		else
		{
			headerScrolled = false
			scrolled = false
		}
		let aboutMeOffset = $('.header-content').offset()
		let mouseContainerOffset = $('#mouse-container').offset()


		if (Math.round(scrollTop) <= Math.round(headerContentOffset.top))
		{
				$('body').css({"animation-name":"body-animation"})
		}

		if (Math.round(scrollTop) >= headerContentOffset.top)
		{
				$('body').css({"animation-name":"body-animation-reverse"})

		}

}


function scrollToContent(btn_class)
{
	$(btn_class).on('click',function()
	{
		href_id = $(this).attr('href');
	})
	$('html, body').animate({ scrollTop: $(href_id).offset().top }, 1000)
}
