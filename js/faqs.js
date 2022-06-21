// add class faqs .js

jQuery(document).ready(function( $ ) {
    // 
    //  desktop accordian
    // 
    $(".faqs_item").click(function(){
        // 
        $(this).find(".faqs_item_title").toggleClass("faqs_item_title_active");
        $(this).find(".faqs_item_content").slideToggle();
    });
});