$(document).ready(function(){
    var activeWindow = false;
    console.log( $(window).innerHeight() + " "+ $(window).innerWidth());
    Food();
    activeWindow = true;
    //setup
    $(".body").attr("active","true");      
    $(".blob").css({"visibility":"visible"});
    var Pos = { x: $(".body").width()/2 - 40 , y:$(".body").height() / 2 - 40}
    $(".blob").css({"top":Pos.y + "px","left":Pos.x + "px"});

    $(".body").on("mousemove",function(event){
        var mousePos = { 
            x: event.clientX,
            y: event.clientY 
        }
        var actualPos = {
            x: mousePos.x - $(".body").offset().left - ($(".blob").width()/2),
            y: mousePos.y - $(".body").offset().top - ($(".blob").height()/2)
        }
        $(".blob").css({"top":actualPos.y,"left":actualPos.x});
        $(".blob").css({"top":actualPos.y + "px","left":actualPos.x + "px"});
        
        CheckOverLap();
        
        return false;
    });
    $(document).on("keyup",function(event){
        if(event.key == "Escape"){
            window.location = "JSMinigame.html";
        }
    });

    function CheckOverLap(){
        
        return false;
    }
    function PickUp(){
        var size = { w: $(".blob").width(), h: $(".blob").height()};
        $(".blob").css({"height": size.h + 10 + "px", "width": size.h + 10 + "px"});
        return false;
    }

    function Food(){
        console.log("yes");
        var sSpan = "span class='food' id='span";
        var eSpan = "";
        var widt = $(window).innerWidth() - 100;
        var heigh = $(window).innerHeight() - 100
        for(let i = 0; i<10;i++)
        {     
            eSpan = i + "' style=' top:" + Math.floor(Math.random() * heigh) + "px; left:" + Math.floor(Math.random() * widt) + "px'></span";
            var span = "<" + sSpan + eSpan + ">";
            $(".body").append(span);
            console.log(i + " " + span);
        }
        return false; 
    }
});
