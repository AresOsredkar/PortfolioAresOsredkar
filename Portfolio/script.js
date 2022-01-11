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



    //navigation
    $("#home").click(function(){
        window.location.href = "Home.html";
    });
    $("#bio").click(function(){
        window.location.href = "Biography.html";
    });
    $("#school").click(function(){
        window.location.href = "School.html";
    });
    $("#work").click(function(){
        window.location.href = "Employment.html";
    });
    $("#contact").click(function(){
        window.location.href = "Contact.html";
    });

    //clicable Contacts
    $("#facebook").click(function(){
        window.location.href = "https://facebook.com/ares_dregon";
    });
    $("#twitter").click(function(){
        window.location.href = "https://twitter.com/aresgmv";
    });
    $("#youtube").click(function(){
        window.location.href = "https://youtube.com/c/aresgmv";
    });
    $("#twitch").click(function(){
        window.location.href = "https://twitch.tv/aresgmv";
    });

});