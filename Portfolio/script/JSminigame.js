function Run(){
    //setup
    $(".minigame").attr("active","true");
    $("#start").attr("id","restart");
    $(".snake").css({"visibility":"visible"});
    $(".snake").css({"transition":"all 7s linear"});
    $("#restart").attr("onClick","Restart()");
    $("#restart").text("Restart");
    var Pos = { x: $(".minigame").width()/2 - 40 , y:$(".minigame").height() / 2 - 40}
    $(".snake").css({"top":Pos.y + "px","left":Pos.x + "px"});
    var keyP = "none";
    var active = $(".minigame").attr("active");
    var y = "y"
    $(".minigame").click(function(){
        $(".minigame").attr("active","true");
    });
    $(".minigame").mouseleave(function(){
        $(".minigame").attr("active","false");
    });
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
                direction.top = $(".minigame").height() + 100 + "px";
                direction.left = $(".snake").position().left
                break;
            case "ArrowLeft":
                console.log(direction.top);
                direction.top = $(".snake").position().top;
                console.log($(".snake").position().top);
                direction.left = "-100px";
                break;
            case "ArrowRight":
                direction.top = $(".snake").position().top;
                direction.left = $(".minigame").width() + 100 + "px";
                break;
        }
        $(".snake").css({"top":direction.top, "left":direction.left});
    });
    var i = 0;
}


$(document).ready(function(){



});



