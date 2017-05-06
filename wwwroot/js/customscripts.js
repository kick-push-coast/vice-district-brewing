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
			$('body').css({
		      position:'fixed'
		   });
		}

		$('#form1_nfpcheck').removeAttr("checked");

		var maxLength = 300;
		function bindMoreEvent() {
		   $(".show-read-more").each(function(){
		       var myStr = $(this).text();
		       if($.trim(myStr).length > maxLength){
		           var newStr = myStr.substring(0, maxLength);
		           var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
		           $(this).empty().html(newStr);
		           $(this).append(' <a href="javascript:void(0);" class="read-more">More</a>');
		           $(this).append('<span class="more-text more-text-hide">' + removedStr + '</span>');
		           $(this).append(' <a href="javascript:void(0);" class="read-less more-text-hide">Less</a>');
		       }
		   });
		   $(".read-more").click(function(){
				$(this).siblings(".more-text").removeClass('more-text-hide');
				$(this).siblings(".read-less").removeClass('more-text-hide');
				$(this).addClass('more-text-hide');
			});
			$(".read-less").click(function(){
				$(this).siblings(".more-text").addClass('more-text-hide');
				$(this).siblings(".read-more").removeClass('more-text-hide');
				$(this).addClass('more-text-hide');
			});
		}
		bindMoreEvent();

		var currentPost = 4;
		var category;
      $(".loadMore").click(function(){

			if(getParameter('cat')) {
				category = getParameter('cat');
			}

      	$.ajax({
             type: 'POST',
             url: '../blog/load.php',
				 data: { currentPost : currentPost,
				 			category : category },
				 dataType: 'json',
             success: function(data) {
                 $(".bloglist").append(data.html);
					  $(".bloglist").append(data.hasNext);
					  bindMoreEvent();
					  currentPost += 3;
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



});
