$(document).ready(function(){
    var activeWindow = false;
    var score = 0;
    console.log( $(window).innerHeight() + " "+ $(window).innerWidth());
    Food(15);
    Trap(5);
    Death(5);
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
        
        $(".blob").css({"top":actualPos.y + "px","left":actualPos.x + "px"});
        CheckOverLap();
        $(".score").text(score);
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
        $(".death").each(function(){
            var death = $(this);
            if(!(blob.offset().top > death.offset().top + death.height() ||
                blob.offset().left + blob.width() < death.offset().left ||
                blob.offset().top + blob.height() < death.offset().top ||
                blob.offset().left > death.offset().left + death.width()))
            {
                EndGame();
            }
        });
        return false;
    }

    function PickUp(){
        var size = { w: $(".blob").width(), h: $(".blob").height()};
        if(size.w < 500){
            score = score + 5;
        }
        else{
            EndGame();
        }
        return false;
    }
    
    function PickUpT(){
        if(score>0){
            score = score + -7;
        }
        else{
            EndGame();
        }
        return false;
    }

    function EndGame(){
        $(".blob").css("display","none");
        $(".food").css("display","none");
        $(".trap").css("display","none");
        $(".death").css("display","none");
        $(".gameEnd").css("display","block");
        $(document).off("mousemove");
    }

    function Food(cnt){
        var sSpan = "span class='food'";
        var eSpan = "";
        var widt = $(document).innerWidth() - 100 ;
        var heigh = $(document).innerHeight() - 100;
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
        for(let i = 0; i<cnt;i++)
        {     
            eSpan = i + "' style=' top:" + Math.floor(Math.random() * heigh) + "px; left:" + Math.floor(Math.random() * widt) + "px'></span";
            var span = "<" + sSpan + eSpan + ">";
            $(".game").append(span);
        }
        return false; 
    }

    function Death(cnt){
        var sSpan = "span class='death'";
        var eSpan = "";
        var widt = $(document).innerWidth() - 100 ;
        var heigh = $(document).innerHeight() - 100;
        for(let i = 0; i<cnt;i++)
        {     
            eSpan = i + "' style=' top:" + Math.floor(Math.random() * heigh) + "px; left:" + Math.floor(Math.random() * widt) + "px'></span";
            var span = "<" + sSpan + eSpan + ">";
            $(".game").append(span);
        }
        return false; 
    }
});
