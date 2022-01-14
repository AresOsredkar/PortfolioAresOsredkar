$(document).ready(function(){
    var activeWindow = false;
    $("#start").on("click",function(){
        $("#start").off("click");
        Food();
        activeWindow = true;
        $("#start").on("click");
        //setup
        $("#minigame").attr("active","true");
        $("#start").attr("id","restart");
        $(".blob").css({"visibility":"visible"});
        $(".blob").css({"transition":"all 7s linear"});
        
        $("#restart").text("Restart");
        
        var Pos = { x: $("#minigame").width()/2 - 40 , y:$("#minigame").height() / 2 - 40}
        $(".blob").css({"top":Pos.y + "px","left":Pos.x + "px"});
        return false;
    });
    
    $("#minigame").on("mousemove",function(event){
        var mPos = { x: event.pageX,y:event.pageY }

        return false;
    });
    $("#restart").click(function(){
        if(activeWindow){
            Restart()}});

    function Food(){
        console.log("yes");
        var sSpan = "span class='food' id='span";
        var eSpan = "";
        var widt = $("#minigame").width()-40;
        var heigh = $("#minigame").height()-40;
        for(let i = 0; i<10;i++){     
            eSpan = i + "' style=' top:" + Math.floor(Math.random() * heigh) + "px; left:" + Math.floor(Math.random() * widt) + "px'>OO</span";
            var span = "<" + sSpan + eSpan + ">";
            $("#minigame").append(span);
            console.log(i + " " + span);
        }
        return false; 
    }
    function Restart(){
        window.location.href = "JSMinigame.html";
    }
});



