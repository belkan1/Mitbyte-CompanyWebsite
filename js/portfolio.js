$(function () {
	jQuery("a.gallery").colorbox({
		maxWidth: "830px",
		maxHeight: "810px",
	});

	$(".active").css("color", "#fcb321");

	$(".nav-tabs").css("cursor", "pointer");

	$("#btn1").addClass("active");

	$(".iso").isotope({
		// options
		itemSelector: ".iso-item",
		layoutMode: "fitRows",
	});

	$("#btn1").click(function () {
		$(".nav-tabs a").removeClass("active");
		$(this).addClass("active");
		$(".iso").isotope({
			filter: "*",
		});
	});

	$("#btn2").click(function () {
		$(".nav-tabs a").removeClass("active");
		$(this).addClass("active");
		$(".iso").isotope({
			filter: ".app",
		});
	});

	$("#btn3").click(function () {
		$(".nav-tabs a").removeClass("active");
		$(this).addClass("active");
		$(".iso").isotope({
			filter: ".app",
		});
	});
	$("#btn4").click(function () {
		$(".nav-tabs a").removeClass("active");
		$(this).addClass("active");
		$(".iso").isotope({
			filter: ".web",
		});
	});
	$("#btn5").click(function () {
		$(".nav-tabs a").removeClass("active");
		$(this).addClass("active");
		$(".iso").isotope({
			filter: ".web",
		});
	});
	$("#btn6").click(function () {
		$(".nav-tabs a").removeClass("active");
		$(this).addClass("active");
		$(".iso").isotope({
			filter: ".game",
		});
	});

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
