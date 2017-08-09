$(function() {

	var bannerheight = document.getElementById('banner').clientHeight - 5;
	var fixed = 0;
	var hidesignup = 0;
	var loadMosaic = 0;
	var loadHeader = 0;
	var loadBG = 0;
	var loaded = false;


	$('<a href=#privateeventform><div>Private Events</div><div>Reservation Available</div></a>').insertAfter('.publiccalendar tr td:first-of-type .blankcell span');

	$(window).scroll(function(){
		if ($(window).scrollTop() > bannerheight) {
			if (!($('.fixedbanner').hasClass('fixed')) && fixed==0){
				fixed = 1;
				$('.fixedbanner').addClass('fixed');
				$('.fixedbanner').stop().animate({marginTop:'0'}, 200);
			}
		} else {
			if ($('.fixedbanner').hasClass('fixed') && fixed==1){
				$('.fixedbanner').stop().animate({marginTop: '-4.8vw'}, 200);
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

	$('.collapsemobile').on('show.bs.collapse', function (){
		$(this).parent().find('.glyphicon-menu-hamburger').removeClass('glyphicon-menu-hamburger').addClass('glyphicon-remove-circle');
	});

	$('.collapsemobile').on('hide.bs.collapse', function (){
		$(this).parent().find('.glyphicon-remove-circle').removeClass('glyphicon-remove-circle').addClass('glyphicon-menu-hamburger');
	});

	$('.bannerbottom a').each(function() {
		var url = [location.protocol, '//', location.host, location.pathname].join('');
		url = url.substring(0, url.lastIndexOf("/") + 1);
		if ($(this).prop('href') == url) {
		  $('li', this).attr('style', 'border-bottom: 2px solid rgba(255, 255, 255, 1) !important;');
		}
	});

	$('.fixedlink a').each(function() {
		var url = [location.protocol, '//', location.host, location.pathname].join('');
		url = url.substring(0, url.lastIndexOf("/") + 1);
		if ($(this).prop('href') == url) {
		  $('.fixedtext', this).attr('style', 'border-bottom: 2px solid rgba(255, 255, 255, 1) !important;');
		}
	});

	$('#closesignup').click(function() {
		$(this).hide();
		$('#emailsignup').stop().animate({marginRight:'-34vmax'},700);
		hidesignup = 1;
	});

	// $('#form1_nfpcheck').change(function() {
	// 	if($('.nfpproofgroup').css('display') == 'none') {
	// 		$('.nfpproofgroup').css("display", "flex");
	// 		document.getElementById("form1_nfpproof").required = true;
	// 	}
	// 	else {
	// 		$('.nfpproofgroup').hide();
	// 		document.getElementById("form1_nfpproof").required = false;
	// 	}
	// });

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
		$('body').css({
			position:'relative'
		});
	});

	document.getElementById("ageNotVerified").addEventListener("click", function(){
		document.getElementById("ageVerified").style.display = "none";
		document.getElementById("ageNotVerified").style.display = "none";
		document.getElementById("ageVerifyMessage").innerHTML = "You must be 21+ to enter the site.";
	});



	$(document).ready(function(){

		var ageCookie = getCookie("verifiedAgeVDB");

		if (ageCookie == null) {
			$('#ageModal').modal({
				backdrop: 'static',
				keyboard: false
			});
			$("#ageModal").modal('show');
			$('body').css({
		      position:'fixed'
		   });
		}

		$('#form1_nfpcheck').removeAttr("checked");


		var currentPost = 6;
		var category;

		if(getParameter('cat')) {
			category = getParameter('cat');
		}

		$(".catLink").each(function(){
			if (this.id == category) {
				$(this).addClass('linkunderline');
			}
			else if (window.location.pathname == '/blog/') {
				$(".catLinkAll").addClass('linkunderline');
			}
		});

		$.ajax({
			 type: 'POST',
			 url: '../blog/check.php',
			 data: { category : category },
			 dataType: 'json',
			 success: function(data) {
				  if(data.hasNext!="") {
					  $(".loadMore").show();
				  }
			 }
		});

      $(".loadMore").click(function(){

      	$.ajax({
             type: 'POST',
             url: '../blog/load.php',
				 data: { currentPost : currentPost,
				 			category : category },
				 dataType: 'json',
             success: function(data) {
                 $(".bloglist").append(data.html);
					//   bindMoreEvent();
					  currentPost += 5;
					  if(data.hasNext=="") {
						  $(".loadMore").hide();
					  }
             }
         });
	   });

	});

	function getParameter(name, url) {
	    if (!url) url = window.location.href;
	    name = name.replace(/[\[\]]/g, "\\$&");
	    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
	        results = regex.exec(url);
	    if (!results) return null;
	    if (!results[2]) return '';
	    return decodeURIComponent(results[2].replace(/\+/g, " "));
	}

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

	$(window).on("load", function() {
		$('html').show();
		$('.container').animate({opacity:1}, {queue:false, duration:700});
		$('.container').removeClass('loadfloat');
		$('.taproomright').removeClass('loadfloat');
		$('.taproombottom').removeClass('loadfloat');
		$('.beersintroright').removeClass('loadfloat');
		$('.contactinforight').removeClass('loadfloat');
		$('.blogsidebarsection').removeClass('loadfloat');
		$('#emailsignup').animate({marginRight:'0'},900);
		bannerheight = document.getElementById('banner').clientHeight - 5;
	});

});
