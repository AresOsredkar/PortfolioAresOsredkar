$(document).ready(function(){

    $(".mainPage").addClass('mainOpacity');

    $(".galleryItem").css("opacity","0");
    $(".galleryItem").animate({opacity:1});
   
    $(".galleryItem").hover(function(){
        $(this).css("z-index","9");
        $(this).css("width","200%");
        $(this).css("transition","all 1s");
    });
    $(".galleryItem").mouseleave(function(){
        $(this).css("z-index","auto");
        $(this).css("width","100%");
        $(this).css("transition","all 1s");
    });
});