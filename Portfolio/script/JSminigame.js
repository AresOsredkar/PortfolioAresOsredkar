function Run(){
    //setup
    $(".minigame").attr("active","true");
    $("#start").attr("id","restart");
    $(".snake").css("visibility","visible");
    $("#restart").attr("onClick","Restart()");
    $("#restart").text("Restart");
    var Pos = { x: $(".minigame").width()/2 - 40 , y:$(".minigame").height() / 2 - 40}
    $(".snake").css({"top":Pos.y + "px","left":Pos.x + "px"});
    var keyP = "none";
    var active = $(".minigame").attr("active");;
    var y = "y"
    $(".minigame").click(function(){
        $(".minigame").attr("active","true");
    });
    $(".minigame").mouseleave(function(){
        $(".snake").css("background-color", "orange");
        $(".minigame").attr("active","false");
        active = "false";
    });
    $(document).keyup(function(event){
        keyP = event.key;
        if(keyP=="Escape"){
            $(".minigame").attr("active","false");
            $(".minigame").css("background-color","red");
        }
    });
    var i = 0;
    while(i < 4000 && active == "true"){
        console.log(keyP + " "+ active);
        i++;
        active = $(".minigame").attr("active");
    }
    console.log("brken");

}


$(document).ready(function(){



});



