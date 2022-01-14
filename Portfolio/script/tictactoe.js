$(document).ready(function(){
    var choice = "X";
    var win = { item1: "none",item2: "none",item3:"none",win: false,tie:false}
    $(".tile").on("click",function(){
        $(this).off("click");
        $(this).text(choice);
        $(this).removeClass("clickable");
        $(this).addClass("choosen" + choice);       
        if(choice == "X"){
            choice = "O";
        }
        else{
            choice = "X";
        }
        $("#turn").text("Its " + choice + " turn.");
        win = checkWin(win);
        if(win.tie){
            $("#turn").text("ITS A TIE");
            $("#turn").addClass("victoryFont");
            $(".tile").off("click");
        }
        else if(win.win){
            $("#turn").text("THE VICTOR IS: " + $(win.item1).text());
            $("#turn").addClass("victoryFont");
            $(win.item1).addClass("victoryTile");
            $(win.item2).addClass("victoryTile");
            $(win.item3).addClass("victoryTile");
            $(".tile").off("click");
        }
    });

    function checkWin(win){
        var TL = $("#TL").text(),   TM = $("#TM").text(),   TR = $("#TR").text(),
            ML = $("#ML").text(),   MM = $("#MM").text(),   MR = $("#MR").text(),
            BL = $("#BL").text(),   BM = $("#BM").text(),   BR = $("#BR").text();

        if((TL == "X" && TM == "X" && TR == "X") || (TL == "O" && TM == "O" && TR == "O")){
            win.item1 = "#TL";
            win.item2 = "#TM";
            win.item3 = "#TR";
            win.win = true;
        }
        else if((TL == "X" && ML == "X" && BL == "X") || (TL == "O" && ML == "O" && BL == "O")){
            win.item1 = "#TL";
            win.item2 = "#ML";
            win.item3 = "#BL";
            win.win = true;
        }
        else if((TL == "X" && MM == "X" && BR == "X") || (TL == "O" && MM == "O" && BR == "O")){
            win.item1 = "#TL";
            win.item2 = "#MM";
            win.item3 = "#BR";
            win.win = true;
        }
        else if((ML == "X" && MM == "X" && MR == "X") || (ML == "O" && MM == "O" && MR == "O")){
            win.item1 = "#ML";
            win.item2 = "#MM";
            win.item3 = "#MR";
            win.win = true;
        }
        else if((BL == "X" && BM == "X" && BR == "X") || (BL == "O" && BM == "O" && BR == "O")){
            win.item1 = "#BL";
            win.item2 = "#BM";
            win.item3 = "#BR";
            win.win = true;
        }
        else if((BL == "X" && MM == "X" && TR == "X") || (BL == "O" && MM == "O" && TR == "O")){
            win.item1 = "#BL";
            win.item2 = "#MM";
            win.item3 = "#TR";
            win.win = true;
        }
        else if((TM == "X" && MM == "X" && BM == "X") || (TM == "O" && MM == "O" && BM == "O")){
            win.item1 = "#TM";
            win.item2 = "#MM";
            win.item3 = "#BM";
            win.win = true;
        }
        else if((TR == "X" && MR == "X" && BR == "X") || (TR == "O" && MR == "O" && BR == "O")){
            win.item1 = "#TR";
            win.item2 = "#MR";
            win.item3 = "#BR";
            win.win = true;
        }
        else if(TR!=""&&TM!=""&&TR!=""&&ML!=""&&MM!=""&&MR!=""&&BL!=""&&BM!=""&&BR!=""){
            win.tie = true;
        }
        return win;
    }
});
