$(document).ready(function(){
    $("#start").on("click",function(){
        Food();
        $("#start").on("click");
        //setup
        $("#minigame").attr("active","true");
        $("#start").attr("id","restart");
        $(".blob").css({"visibility":"visible"});
        $(".blob").css({"transition":"all 7s linear"});
        $("#restart").attr("onClick","Restart()");
        $("#restart").text("Restart");
        var Pos = { x: $("#minigame").width()/2 - 40 , y:$("#minigame").height() / 2 - 40}
    
        $(".blob").css({"top":Pos.y + "px","left":Pos.x + "px"});
    
        var keyP = "none";
    
        var active = $("#minigame").attr("active");
    
        var y = "y";
        $("#minigame").click(function(){
            $("#minigame").attr("active","true");
        });
        $("#minigame").mouseleave(function(){
            $("#minigame").attr("active","false");
        });

        var i = 0;
    });


    function Food(){
        console.log("yes");
        var sSpan = "span class='food' id='span";
        var eSpan = "";
        var widt = $("#minigame").width()-40;
        var heigh = $("#minigame").height()-40;
        for(let i = 0; i<10;i++){     
            eSpan = i + "' style='top:" + Math.floor(Math.random() * heigh) + "; left:" + Math.floor(Math.random() * widt) + "></span";
            $("#minigame").appendTo("<" + sSpan+eSpan + ">");
            console.log(i + " " + sSpan + eSpan);
        }
        return false; 
    }
});



