
jQuery(document).ready(function( $ ){
    // using UI
    // $(".tab-item a").click(function(){
    //   $(this).tab('show');
    // });

    $(".tabs > .tab-item").click(function (e) {
        e.preventDefault()
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        index = $(this).index();

        $(".tab-content .tab-pane").removeClass("active");
        $(".tab-content > .tab-pane:nth-child(" + (index + 1) + ")").addClass("active");
    });
    
});