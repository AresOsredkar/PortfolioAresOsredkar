$(document).ready(function(){

    $(".img").hover(function(){
        $(".img").addClass("imgAnimation");
    });
    $(".img").mouseleave(function(){
        $(".img").removeClass("imgAnimation");
    })
});