// add_class_onscroll .js

// $.noConflict();
jQuery(document).ready(function( $ ) {

	var do_not_reverse = Array('configure','signup','accessory','operational','operational-zone','about','review','book-a-consultation','book-a-test-ride', 'manage-subscription', 'email-design');
	
	var body_id = jQuery("body").attr("id");

	if(jQuery.inArray(body_id, do_not_reverse) == -1) {
		// only do when top of page 
		$("#header").addClass("reverse");		
	} else {
		$("body").addClass("no_header");
	}

    $(window).scroll(function() {
      if ($(this).scrollTop() > 20){
          $("#header").addClass("onscroll");
		  if(jQuery.inArray(body_id, do_not_reverse) == -1) {
			$("#header").removeClass("reverse");
		  }
          $("#header").addClass("shrink");

      }
      else{
          $("#header").removeClass("onscroll");
		  if(jQuery.inArray(body_id, do_not_reverse) == -1) {
			$("#header").addClass("reverse");
		  }
          $("#header").removeClass("shrink");
      }
      if ($(this).scrollTop() > 200){
        // $("#header").addClass("shrink");
      }
      else{
          // $("#header").removeClass("shrink");
      }
    });
  });