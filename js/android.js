$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
loop:false,
margin:10,
nav:true,
responsive:{
    0:{
        items:1
    },
    600:{
        items:3
    },
    1000:{
        items:5
    }
}
});


$(".active").css("color","#fcb321");

$(".dropdown .active").css("background-color","white");

jQuery('a.gallery').colorbox({
    maxWidth:'830px',
    minWidth:'810px',
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