// add_class_checked .js

// $.noConflict();
jQuery(document).ready(function( $ ) {
    // add classes on checkbox :checked
    $("#burger-check").change(function(){
        $("#header").toggleClass("reverse");
        if($(this).is(":checked")) {
            $(".nav_wrap").addClass("is-active");
            $(".pre-scrim").addClass("is-active");
            $("body").addClass("no_scroll");
        } else {
            $(".nav_wrap").removeClass("is-active");
            $("body").removeClass("no_scroll");
            $(".menu_dropdown").removeClass("is-active");
            $(".menu-link").removeClass("is-active");
        }
    }); 
});


    