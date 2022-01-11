$(document).ready(function(){

    $(".main").addClass('mainOpacity');

    $(".galleryItem").css("opacity","0");
    $(".galleryItem").animate({opacity:1});
   
    $(".galleryItem").hover(function(){
        $(this).css("z-index","9");
        $(this).css("width","200%");
    });
    $(".galleryItem").mouseleave(function(){
        $(this).css("z-index","auto");
        $(this).css("width","100%");
    });
});