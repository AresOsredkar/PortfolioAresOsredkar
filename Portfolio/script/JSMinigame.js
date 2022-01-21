$(document).ready(function(){
    var activeWindow = false;
    console.log( $(window).innerHeight() + " "+ $(window).innerWidth());
    Food(15);
    Trap(5);
    activeWindow = true;
    //setup
    $(".game").attr("active","true");      
    $(".blob").css({"visibility":"visible"});
    var Pos = { x: $(document).width()/2 - 40 , y:$(document).height() / 2 - 40}
    $(".blob").css({"top":Pos.y + "px","left":Pos.x + "px"});

    $(document).on("mousemove",function(event){
        var mousePos = { 
            x: event.clientX,
            y: event.clientY 
        }
        var actualPos = {
            x: mousePos.x - ($(".blob").width()/2),
            y: mousePos.y - ($(".blob").height()/2)
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
        var blob = $(".blob");
        $(".food").each(function(){
            var food = $(this);
            if(!(blob.offset().top > food.offset().top + food.height() ||
                blob.offset().left + blob.width() < food.offset().left ||
                blob.offset().top + blob.height() < food.offset().top ||
                blob.offset().left > food.offset().left + food.width()))
            {
                PickUp();
                Food(1);
                food.remove();
            }
        });
        $(".trap").each(function(){
            var trap = $(this);
            if(!(blob.offset().top > trap.offset().top + trap.height() ||
                blob.offset().left + blob.width() < trap.offset().left ||
                blob.offset().top + blob.height() < trap.offset().top ||
                blob.offset().left > trap.offset().left + trap.width()))
            {
                PickUpT();
                Trap(1);
                trap.remove();
            }
        });
        return false;
    }

    function PickUp(){
        var size = { w: $(".blob").width(), h: $(".blob").height()};
        $(".blob").css({"height": size.h + 13 + "px", "width": size.h + 13 + "px"});
        return false;
    }
    function PickUpT(){
        var size = { w: $(".blob").width(), h: $(".blob").height()};
        if(size.w > 20){
            $(".blob").css({"height": size.h - 15 + "px", "width": size.h - 15 + "px"});
        }
        
        return false;
    }

    function Food(cnt){
        var sSpan = "span class='food'";
        var eSpan = "";
        var widt = $(document).innerWidth() - 100 ;
        var heigh = $(document).innerHeight() - 100;
        var maxH = widt - $(".game").height();
        var maxW = heigh - $(".game").width();
        for(let i = 0; i<cnt;i++)
        {     
            eSpan = i + "' style=' top:" + Math.floor(Math.random() * heigh) + "px; left:" + Math.floor(Math.random() * widt) + "px'></span";
            var span = "<" + sSpan + eSpan + ">";
            $(".game").append(span);
        }
        return false; 
    }
    function Trap(cnt){
        var sSpan = "span class='trap'";
        var eSpan = "";
        var widt = $(document).innerWidth() - 100 ;
        var heigh = $(document).innerHeight() - 100;
        var maxH = widt - $(".game").height();
        var maxW = heigh - $(".game").width();
        for(let i = 0; i<cnt;i++)
        {     
            eSpan = i + "' style=' top:" + Math.floor(Math.random() * heigh) + "px; left:" + Math.floor(Math.random() * widt) + "px'></span";
            var span = "<" + sSpan + eSpan + ">";
            $(".game").append(span);
        }
        return false; 
    }
});
