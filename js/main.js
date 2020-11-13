$(function () {
	jQuery("a.gallery").colorbox({
		maxWidth: "100%",
		maxHeight: "90%",
	});

	function getLocation() {
		if (navigator.geolocation) {
			var x = navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			alert("Geolocation is not supported by this browser.");
		}
	}

	//showPosition(x);

	function showPosition(position) {
		alert(position.coords.latitude + "," + position.coords.longitude);
	}

	$(".counter").countUp({
		time: 2000,

		delay: 10,
	});

	$(".floating-wpp").floatingWhatsApp({
		phone: "+923218888961",

		popupMessage: "Send us a message",

		showPopup: true,

		showOnIE: true,

		autoOpenTimer: 0,

		message: "Write your message",

		headerTitle: "Welcome to Mitbyte",

		zIndex: 1,
	});

	$("header .active").css("color", "#fcb321");

	$(".nav-tabs").css("cursor", "pointer");

  $("#btn1").addClass("active");
  
  $('.iso').isotope({
    // options
    itemSelector: '.iso-item',
    layoutMode: 'fitRows'
  });
  
  $('#btn1').click(function(){
	  $('.nav-tabs a').removeClass("active");
	  $(this).addClass("active");
	$(".iso").isotope({
		filter: "*"
	});
  });
  
  $('#btn2').click(function(){
	$('.nav-tabs a').removeClass("active");
	$(this).addClass("active");
	$(".iso").isotope({
		filter: ".app"
	});
  });

  $('#btn3').click(function(){
	$('.nav-tabs a').removeClass("active");
	$(this).addClass("active");
	$(".iso").isotope({
		filter: ".app"
	});
  });
  $('#btn4').click(function(){
	$('.nav-tabs a').removeClass("active");
	$(this).addClass("active");
	$(".iso").isotope({
		filter: ".web"
	});
  });
  $('#btn5').click(function(){
	$('.nav-tabs a').removeClass("active");
	$(this).addClass("active");
	$(".iso").isotope({
		filter: ".web"
	});
  });
  $('#btn6').click(function(){
	$('.nav-tabs a').removeClass("active");
	$(this).addClass("active");
	$(".iso").isotope({
		filter: ".game"
	});
  });

//   $('#accordone').click(function(){

// 		$('#collapseOne').toggleClass("show");
//   });
	
  // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

});
