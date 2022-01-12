$(document).ready(function(){

    var headPos = { x: $(".minigame").width()/2 , y:$(".minigame").height() / 2}
    var windowSize = { x: $(".minigame").width(), y: $(".minigame").height() };
    var substraction = $(".minigame").position();
    $(".minigame").click(
        function(event){
            //setup
            $(".pause").css("visibility","hidden");
            var left = false;
            headPos.x = (event.pageX-substraction.left - 35) + "px";
            headPos.y = (event.pageY-substraction.top - 35) + "px";
            console.log("X: " + headPos.x + "; Y: " + headPos.y);
            $(".snake").css({"top":headPos.y,"left":headPos.x});
            
            //move listener
            $(".minigame").mousemove(function(event) {
                headPos.x = (event.pageX-substraction.left - 35) + "px";
                headPos.y = (event.pageY-substraction.top - 35) + "px";
                $(".snake").css({"top":headPos.y,"left":headPos.x});
                if (headPos.x < 0 || headPos.y < 0 || headPos.x > windowSize.x || windowSize.y){
                    $(".pause").css("visibility","visible");
                    left = true;
                    return false;
                }
            });
            if(left){
                return false;
            }
        }
    );
});