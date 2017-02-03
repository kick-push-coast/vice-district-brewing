$(function() {

	var bannerheight = document.getElementById('banner').clientHeight - 5;
	var fixed = 0;
	var hidesignup = 0;

	$('<a href=#privateeventform><div>Private Events</div><div>Reservation Available</div></a>').insertAfter('.publiccalendar tr td:first-of-type .blankcell span');

	$(window).scroll(function(){
		if ($(window).scrollTop() > bannerheight) {
			if (!($('.fixedbanner').hasClass('fixed')) && fixed==0){
				fixed = 1;
				$('.fixedbanner').addClass('fixed');
				$('.fixedbanner').stop().animate({ opacity: '1'}, 300);
			}
		} else {
			if ($('.fixedbanner').hasClass('fixed') && fixed==1){
				$('.fixedbanner').stop().animate({ opacity: '0'}, 300);
				fixed = 0;
				setTimeout(function() {
					$('.fixedbanner').removeClass('fixed');
				},300);
			}
		}

		// if (($(window).scrollTop() > bannerheight) && hidesignup==0) {
		// 	$('#emailsignup').css('marginRight', '-34vmax');
		// }
		// else if (($(window).scrollTop() == 0) && hidesignup==0) {
		// 	$('#emailsignup').stop().animate({marginRight:'0'},800);
		// }
	});

	$(window).resize(function(){
		bannerheight = document.getElementById('banner').clientHeight - 5;
	});

	$('.cardcollapse, .panelcollapse').on('show.bs.collapse', function (){
		$(this).parent().find('img').attr('id', 'highlighted');
		$(this).parent().find('.glyphicon-chevron-down').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
	});

	$('.cardcollapse, .panelcollapse').on('hide.bs.collapse', function (){
		$(this).parent().find('img').attr('id', '');
		$(this).parent().find('.glyphicon-chevron-up').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	});

	$('.collapseanswer').on('show.bs.collapse', function (){
		$(this).parent().find('.glyphicon-triangle-bottom').removeClass().addClass('glyphicon glyphicon-triangle-top');
	});

	$('.collapseanswer').on('hide.bs.collapse', function (){
		$(this).parent().find('.glyphicon-triangle-top').removeClass().addClass('glyphicon glyphicon-triangle-bottom');
	});

	$('.bannerbottom a').each(function() {
		if ($(this).prop('href') == window.location.href.split('?')[0]) {
		  $('li', this).attr('style', 'border-bottom: 2px solid rgba(255, 255, 255, 1) !important;');
		}
	});

	$('.fixedlink a').each(function() {
		if ($(this).prop('href') == window.location.href.split('?')[0]) {
		  $('.fixedtext', this).attr('style', 'border-bottom: 2px solid rgba(255, 255, 255, 1) !important;');
		}
	});

	$('#closesignup').click(function() {
		$(this).hide();
		$('#emailsignup').stop().animate({marginRight:'-34vmax'},800);
		hidesignup = 1;
	});

	$(document).ready(function(){
		setTimeout(function() {
			$('#emailsignup').animate({marginRight:'0'},1100);
		},400);
	});



	var fixedCls = '.fixedbanner';
   var oldSSB = $.fn.modal.Constructor.prototype.setScrollbar;
	$.fn.modal.Constructor.prototype.setScrollbar = function () {
      oldSSB.apply(this);
   	if (this.bodyIsOverflowing && this.scrollbarWidth)
            $(fixedCls).css('padding-right', this.scrollbarWidth);
   }

   var oldRSB = $.fn.modal.Constructor.prototype.resetScrollbar;
   $.fn.modal.Constructor.prototype.resetScrollbar = function () {
     oldRSB.apply(this);
     $(fixedCls).css('padding-right', '');
   }

});
