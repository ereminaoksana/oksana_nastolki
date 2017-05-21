$(document).ready(function () {
    
    $(".one_item").mouseenter(function () {
        var desc = $(this).find("#hide_desc");
        desc.show();
    });
    $(".one_item").mouseleave(function () {
        var desc = $(this).find("#hide_desc");
        desc.hide();
    });

});