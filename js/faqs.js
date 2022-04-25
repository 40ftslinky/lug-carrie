// add class faqs .js

jQuery(document).ready(function( $ ) {
    // 
    //  desktop accordian
    // 
    // $(".faqs_item_content").slideToggle();
    // 
    $("[class*='faqs_item']").click(function(){
        // 
        $(this).toggleClass("faqs_item_title_active");
        $(this).next(".faqs_item_content").slideToggle();
    });
});