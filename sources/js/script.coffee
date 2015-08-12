spinOptions =
	lines     : 13
	length    : 21
	width     : 2
	radius    : 24
	corners   : 0
	rotate    : 0
	direction : 1
	color     : '#870b24'
	speed     : 1
	trail     : 68
	shadow    : false
	hwaccel   : false
	className : 'spinner'
	zIndex    : 2e9
	top       : '50%'
	left      : '50%'

delay = (ms, func) -> setTimeout func, ms

end = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd'

calculateGalleryHeight = ->
	$('.gallery, .gallery .slick-list, .gallery__item').each ->
		height = $(this).width()/2
		$(this).css
			'height': height
			'minHeight': height
calculateLayout = ->

	$('body').removeClass 'open'

	$blockPromo = $('.page').elem('block').byMod('promo')
	heightPromo = $(window).height() - parseInt($blockPromo.css('padding-top')) - parseInt($blockPromo.css('padding-bottom'))
	if $blockPromo.height < heightPromo
		$blockPromo.height heightPromo

	if !Modernizr.csscalc
		$('.page').width $('body').width() - 240

	$('.article').elem('image').css
		height: ->
			$(this).width() * 0.80677966101

	$('.video').css
		width: $('#video').outerHeight()*(16/9)
		minHeight: $('#video').outerHeight()

	calculateGalleryHeight()

	if !Modernizr.csstransforms
		$pageContent = $('.page').elem('block').byMod('promo').find('.page__content')
		$pageContent.css
			'margin-top': -$pageContent.height()/2
			'min-height', $(window).height() - parseInt($pageContent.css('padding-top')) - parseInt($pageContent.css('padding-bottom'))
		$('.video').css
			'marginTop': -$('.video').height()/2
			'marginLeft': -$('.video').width()/2
		$('.toolbar').hide()
		$('.promo').find('img').each ->
			$(this).css
				'margin-left' : - $(this).width()/2 - 60



	delay 1000, ->
		$('.quotes, .gallery').each ->
			$(this).slick('setPosition')

	if $(window).width() >= 1024
		$('.promos, .promo').height $(window).height()
	else
		$('.promos').removeAttr 'style'
		$('.promo').each ->
			image = $(this).css 'background-image'
			$(this)
				.removeAttr 'style'
				.css 'background-image', image



	$blockScroll = $('.sidebar')
	if $(window).width() >= 980
		if $blockScroll.data('perfect-scrollbar')
			$blockScroll.perfectScrollbar 'update'
		else
			$blockScroll.perfectScrollbar({suppressScrollX: true, includePadding: true})
	else
		$blockScroll.perfectScrollbar 'destroy'

setBG = ($el)->
	$('#reviews').css 'background-color', $el.data 'bg'
	$('.quote__frame').css 'border-color', $el.data 'border'
	$('.quote__arrow').find('path#bg').attr 'fill', $el.data 'bg'
	$('.quote__arrow').find('path#arrow').attr 'fill', $el.data 'border'

$(document).ready ->
	$('#Modal').on('show.bs.modal', (e)->
		url = $(e.relatedTarget).data 'url'
		if $('#Modal').data('url') != url
			$('#Modal').data('url', url)
				.find('.text').html('').spin spinOptions
			$.get url, (data)->
				$('#Modal .text')
					.html $(data).find('.main .articles .item').html()
					.find('span.date, div.meta').remove()
	).find('.text').spin spinOptions

	$('.sidebar .close').click (e)->
		$('body').toggleClass 'open'
	$('.author').click (e)->
		$(".author").removeClass 'author--active'
		$(this).addClass 'author--active'
		$('.quotes').slick 'slickGoTo', $(this).index()
		e.preventDefault()

	$('.article a[href="#"]').click (e)->
		e.preventDefault()

	slickSettings =
		infinite      : true
		adaptiveHeight: true
		slidesToShow  : 1
		slidesToScroll: 1
		prevArrow     : '<button type="button" class="slick-prev"><img src="/layout/images/left.png"></button>'
		nextArrow     : '<button type="button" class="slick-next"><img src="/layout/images/right.png"></button>'

	$('.quotes')
		.on('init', (e)->
			id = $(e.target).find('.slick-current').data('id')
			$(".author").removeClass 'author--active'
			$(".author[data-id='#{id}']").addClass 'author--active'
			setBG $(e.target).find('.slick-current')
		)
		.on('afterChange', (e)->
			id = $(e.target).find('.slick-current').data('id')
			$(".author").removeClass 'author--active'
			$(".author[data-id='#{id}']").addClass 'author--active'
			setBG $(e.target).find('.slick-current')
		).slick slickSettings

	$('.gallery')
		.on('init', calculateGalleryHeight)
		.slick _.assign slickSettings, {
			autoplay     : true
			autoplaySpeed: 4000
		}


	$('.nav-trigger').click (e)->
		$('body').toggleClass 'open'
		delay 300, ->
			if $('body').hasClass 'open'
				$(document).one 'click tap touchstart touchmove', (e)->
					if $('body').hasClass('open') && $(e.target).parents('.sidebar').length == 0
						$('body').removeClass 'open'
						e.preventDefault()

		e.preventDefault()

	$(window).on 'resize', _.debounce(calculateLayout, 300)
	$(window).on 'mousewheel', (e)->
		if $('body').hasClass('open') && $(e.target).parents('.sidebar').length == 0
			e.preventDefault()
			e.stopPropagation()
			return false

	$('iframe').on 'ready', _.debounce(calculateLayout, 300)

	$('a')
		.on( 'mouseover', ->
			href = $(this).attr('href')
			if href != "#"
				if !$(this).hasClass 'promo'
					$(this).parent().find("a[href='#{href}']").addClass "hover"
		)
		.on( 'mouseleave', ->
			href = $(this).attr('href')
			if href != "#"
				$(this).parent().find("a[href^='#{href}']").removeClass "hover"
		)

	$('a.button').click (e)->
		$el = $($(this).attr('href'))
		if $el.length > 0
			top = $el.offset().top
			if $(window).width() < 1024
				top -= $('.toolbar').height()
			$("html, body").animate { scrollTop: top }, 300
			e.preventDefault()

	$('.promo').hoverIntent
		sensitivity: 1
		interval: 10
		over:->
			$(this).parents('.promos').mod 'hover', true
			$(this).mod 'hover', true
		out:->
			$(this).mod 'hover', false
			$(this).parents('.promos').mod 'hover', false

	delay 300, ->
	  calculateLayout()
