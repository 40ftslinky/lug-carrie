// add_active .js

// $.noConflict();
jQuery(document).ready(function( $ ) {
    // $("#getstarted").removeClass("active");
    // $(".fullscreen").removeClass("active");
    // $(".fullscreen").hide();
    $( "#getstarted" ).click(function(e){
        e.preventDefault()
        //
        $(this).toggleClass( "active" );
        $( ".fullscreen" ).toggleClass( "active" );
        $( "body" ).toggleClass( "no_scroll" );
        // $("#header").toggleClass("reverse");
        
        //
        if ($( this ).hasClass( "active ") ) {
          $( this ).innerHTML = "Close";
          // $("#header").addClass("reverse");
        } 
        else if ($(this).scrollTop() > 200){
          // $("#header").removeClass("reverse");
        } 
        else if ($( "#header" ).hasClass( "reverse ") ) {    
          $("#header").removeClass("reverse");
        } 
        else {
          $( this ).innerHTML = "Get Started";
          $("#header").removeClass("reverse");
        }
    });
});