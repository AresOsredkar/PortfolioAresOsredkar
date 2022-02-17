<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Testing Site</title>
        <?php include('php/meta.php'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>

<div class="body">

       <!--navigation bar-->
       <div id="navPlaceholder">

    </div>
    <?php include('php/navbar.php'); ?>

    <div class="mainPage thank you">
        <div class="thankyou textSub">
                Thank you for sending me a message, <br>
                I will try to respond as quickly as possible.
            <button name="back" onClick="window.location.href = 'index.html';">RETURN HOME</button>
        </div>
        <div class="contactsGeneral">
            <ul class="con">
                <li class="contactItem" id="facebook">Facebook</li>
                <li class="contactItem" id="twitter">Twitter</li>
                <li class="contactItem" id="youtube">Youtube</li>
                <li class="contactItem" id="twitch">Twitch</li>
            </ul>
        </div>
    </div>

</div>
</body>
</html>