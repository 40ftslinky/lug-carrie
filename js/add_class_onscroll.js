// add_class_onscroll .js

// $.noConflict();
jQuery(document).ready(function( $ ) {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 50){
          $("#header").addClass("onscroll");
      }
      else{
          $("#header").removeClass("onscroll");
      }
      if ($(this).scrollTop() > 200){
        $("#header").addClass("shrink");
      }
      else{
          $("#header").removeClass("shrink");
      }
    });
  });