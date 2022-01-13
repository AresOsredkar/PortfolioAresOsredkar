function Run(){
    //setup
    $("#minigame").attr("active","true");
    $("#start").attr("id","restart");
    $(".snake").css({"visibility":"visible"});
    $(".snake").css({"transition":"all 7s linear"});
    $("#restart").attr("onClick","Restart()");
    $("#restart").text("Restart");
    var Pos = { x: $("#minigame").width()/2 - 40 , y:$("#minigame").height() / 2 - 40}
    $(".snake").css({"top":Pos.y + "px","left":Pos.x + "px"});
    var keyP = "none";
    var active = $("#minigame").attr("active");
    var y = "y"
    $("#minigame").click(function(){
        $("#minigame").attr("active","true");
    });
    $("#minigame").mouseleave(function(){
        $("#minigame").attr("active","false");
    });
    Food();
    var direction = { top: 0, left: 0}
    $(document).keyup(function(event){
        keyP = event.key;
        console.log(keyP);
        switch(keyP){
            case "ArrowUp":
                direction.top = "-100px";
                direction.left = $(".snake").position().left
                break;
            case "ArrowDown":
                direction.top = $("#minigame").height() + 100 + "px";
                direction.left = $(".snake").position().left
                break;
            case "ArrowLeft":
                console.log(direction.top);
                direction.top = $(".snake").position().top-1;
                console.log($(".snake").position().top);
                direction.left = "-100px";
                break;
            case "ArrowRight":
                direction.top = $(".snake").position().top-1;
                direction.left = $("#minigame").width() + 100 + "px";
                break;
        }
        $(".snake").css({"top":direction.top, "left":direction.left});
    });
    var i = 0;
}

function Food(){
    var sSpan = "<span class='food' id='span";
    var eSpan;
    var widt = $("#minigame").width()-40;
    var heigh = $("#minigame").height()-40;
    for(let i = 0; i<10;i++){
        eSpan = i + "' style='top:" + Math.floor(Math.random() * heigh) + "; left:" + Math.floor(Math.random() * widt) + "></span>";
        $("#minigame").append(sSpan+eSpan);
    }
    return false;
    
}

$(document).ready(function(){



});



