// add_active .js

// $.noConflict();
jQuery(document).ready(function( $ ) {
    // $("#getstarted").removeClass("active");
    // $(".fullscreen").removeClass("active");
    // $(".fullscreen").hide();
    $( ".getstarted" ).click(function(e){
        e.preventDefault()
        //
        $(this).toggleClass( "active" );
        $( ".fullscreen" ).toggleClass( "active" );
        $( "body" ).toggleClass( "no_scroll" );
        // $("#header").toggleClass("reverse");
        //
        if ($( this ).hasClass( "active") ) {
          $( this ).html("Close");
          // $("#header").addClass("reverse");
        } 
        else if ($( "#header" ).hasClass( "reverse") ) {    
          $("#header").removeClass("reverse");
        } 
        else {
          $( this ).html("Get Started");
          $("#header").removeClass("reverse");
        }
    });
});