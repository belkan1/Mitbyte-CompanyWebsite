$(function(){

  $(".active").css("color","#fcb321");

   $(".nav-link").css("cursor","pointer");

   $(".aboutustext").hide();

   $("#vision").fadeIn();

   $("#tab1").addClass("active");

   $("#tab1").click(function(){
    $(".nav-link").removeClass("active");
     hideall();
    $("#vision").fadeIn();
    $(this).addClass("active");
   });

   $("#tab2").click(function(){
    $(".nav-link").removeClass("active");
    hideall();
   $("#mission").fadeIn();
   $(this).addClass("active");
  });

  $("#tab3").click(function(){

    $(".nav-link").removeClass("active");
    hideall();
   $("#values").fadeIn();
   $(this).addClass("active");
  });

  $("#tab4").click(function(){
   
    $(".nav-link").removeClass("active");
    hideall();
   $("#achieve").fadeIn();
   $(this).addClass("active");
  });

  $("#tab5").click(function(){

    $(".nav-link").removeClass("active");
    hideall();
   $("#success").fadeIn();
   $(this).addClass("active");
  });

   function hideall(){
       $(".aboutustext").hide();
   }

   $(".counter").countUp({
		time: 2000,

		delay: 10,
	});

});