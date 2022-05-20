// add_class_onscroll .js

// $.noConflict();
// jQuery(document).ready(function( $ ) {
//   $("#header").addClass("reverse");
//     $(window).scroll(function() {
//       if ($(this).scrollTop() > 50){
//           $("#header").addClass("onscroll");
//           $("#header").removeClass("reverse");
//           $("#header").addClass("shrink");

//       }
//       else{
//           $("#header").removeClass("onscroll");
//           $("#header").addClass("reverse");
//           $("#header").removeClass("shrink");
//       }
      
//     });
//   });

// add_class_onscroll .js

// $.noConflict();
jQuery(document).ready(function( $ ) {

	var do_not_reverse = Array('configure','signup','accessory');
	var body_id = jQuery("body").attr("id");
	console.log(body_id);

	if(jQuery.inArray(body_id, do_not_reverse) == -1) {
		// only do when top of page 
		$("#header").addClass("reverse");		
	} else {
		console.log(body_id);
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