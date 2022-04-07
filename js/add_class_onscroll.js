// add_class_onscroll .js

// $.noConflict();
jQuery(document).ready(function( $ ) {
  $("#header").addClass("reverse");
    $(window).scroll(function() {
      if ($(this).scrollTop() > 50){
          $("#header").addClass("onscroll");
          $("#header").removeClass("reverse");
      }
      else{
          $("#header").removeClass("onscroll");
          $("#header").addClass("reverse");
      }
      if ($(this).scrollTop() > 200){
        $("#header").addClass("shrink");
      }
      else{
          $("#header").removeClass("shrink");
      }
    });
  });