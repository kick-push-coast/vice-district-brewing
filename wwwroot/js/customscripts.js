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
		if ($(this).prop('href') == [location.protocol, '//', location.host, location.pathname].join('')) {
		  $('li', this).attr('style', 'border-bottom: 2px solid rgba(255, 255, 255, 1) !important;');
		}
	});

	$('.fixedlink a').each(function() {
		if ($(this).prop('href') == [location.protocol, '//', location.host, location.pathname].join('')) {
		  $('.fixedtext', this).attr('style', 'border-bottom: 2px solid rgba(255, 255, 255, 1) !important;');
		}
	});

	$('#closesignup').click(function() {
		$(this).hide();
		$('#emailsignup').stop().animate({marginRight:'-34vmax'},800);
		hidesignup = 1;
	});

	$('#form1_nfpcheck').change(function() {
		if($('.nfpproofgroup').css('display') == 'none') {
			$('.nfpproofgroup').css("display", "flex");
			document.getElementById("form1_nfpproof").required = true;
		}
		else {
			$('.nfpproofgroup').hide();
			document.getElementById("form1_nfpproof").required = false;
		}
	});

	function getCookie(name) {
		var dc = document.cookie;
		var prefix = name + "=";
		var begin = dc.indexOf("; " + prefix);
		if (begin == -1) {
			begin = dc.indexOf(prefix);
			if (begin != 0) return null;
		}
		else
		{
			begin += 2;
			var end = document.cookie.indexOf(";", begin);
			if (end == -1) {
				end = dc.length;
			}
		}
		return decodeURI(dc.substring(begin + prefix.length, end));
	}

	function createCookie(name,value,days) {
		var expires = "";
		if (days) {
			var date = new Date();
			date.setTime(date.getTime() + (days*24*60*60*1000));
			expires = "; expires=" + date.toUTCString();
		}
		document.cookie = name + "=" + value + expires + "; path=/";
	}

	document.getElementById("ageVerified").addEventListener("click", function(){
		createCookie('verifiedAgeVDB','true',10);
		$("#ageModal").modal('hide');
	});

	document.getElementById("ageNotVerified").addEventListener("click", function(){
		document.getElementById("ageVerified").style.display = "none";
		document.getElementById("ageNotVerified").style.display = "none";
		document.getElementById("ageVerifyMessage").innerHTML = "You must be 21+ to enter the site.";
	});



	$(document).ready(function(){
		setTimeout(function() {
			$('#emailsignup').animate({marginRight:'0'},1100);
		},400);

		var ageCookie = getCookie("verifiedAgeVDB");

		if (ageCookie == null) {
			$('#ageModal').modal({
				backdrop: 'static',
				keyboard: false
			});
			$("#ageModal").modal('show');
		}

		$('#form1_nfpcheck').removeAttr("checked");

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
