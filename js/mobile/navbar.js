$(document).ready(function(){
    $("nav .navbar-toggle.open").click(function(){
        $('nav').animate({
            height: "180px"
          }, 100, function() {
            $(".navbar-toggle.open").hide();
            $(".navbar-toggle.close").show();
            $("nav").addClass('card');
  
          });
    });
  
    $("nav .navbar-toggle.close").click(function(){
        $('nav').animate({
            height: "72px"
          }, 100, function() {
            $(".navbar-toggle.open").show();
            $(".navbar-toggle.close").hide();
            $("nav").removeClass('card');
          });
    });
  });
  