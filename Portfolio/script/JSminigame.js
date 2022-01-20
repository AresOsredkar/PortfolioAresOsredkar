$(document).ready(function(){
    var activeWindow = false;
    $("#start").on("click",function(){
        Food();
        activeWindow = true;
        $("#start").on("click");
        //setup
        $("#minigame").attr("active","true");
        $("#start").attr("id","restart");
        $(".blob").css({"visibility":"visible"});
        $("#restart").attr("onClick","Restart()");
        $("#restart").text("Restart");
        var Pos = { x: $("#minigame").width()/2 - 40 , y:$("#minigame").height() / 2 - 40}
        $(".blob").css({"top":Pos.y + "px","left":Pos.x + "px"});
        return false;
    });

    $("#minigame").on("mousemove",function(event){
        var mousePos = { 
            x: event.clientX,
            y: event.clientY 
        }
        var actualPos = {
            x: mousePos.x - $("#minigame").offset().left - $(".blob").width(),
            y: mousePos.y - $("#minigame").offset().top - $(".blob").height()
        }
        $(".blob").css({"top":actualPos.y,"left":actualPos.x});
        
        CheckOverLap();
        
        return false;
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
        var widt = $("#minigame").width()-40;
        var heigh = $("#minigame").height()-40;
        for(let i = 0; i<10;i++)
        {     
            eSpan = i + "' style=' top:" + Math.floor(Math.random() * heigh) + "px; left:" + Math.floor(Math.random() * widt) + "px'></span";
            var span = "<" + sSpan + eSpan + ">";
            $("#minigame").append(span);
            console.log(i + " " + span);
        }
        return false; 
    }
});



