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
    

    <div class="mainPage contact">
        <div class="contactForm">
            <div id="formContainer"><form name="Contact" id="form" action="ThankYou.html">
                <p>Name: </p> 
                    <input id="nameInput" type="text" placeholder="John" required>
                    <br>
                <p>Email: </p>
                    <input type="email" id="email" placeholder="example@email.com" required>
                    <br>
                <p>Phone Number*: </p> 
                    <input type="tel" id="tel" placeholder="041234567" min="8" max="10">
                <p>Message:</p> 
                    <textarea name="message" rows="5" placeholder="Enter message here" required></textarea>
                    <br>
                    *not required
                    <br>
                <input type="submit" id="send" name="Send" value="SEND">
            </form></div>
        </div>
        <div class="contactsGeneral">
            <ul class="con">
                <a href="https://www.facebook.com/AresOsredkar"><li class="contactItem" id="facebook">Facebook</li></a>
                <a href="https://twitter.com/AresGMV"><li class="contactItem" id="twitter">Twitter</li></a>
                <a href="https://www.youtube.com/channel/UC7OIKKSnFckKXch_QRzG0mg"><li class="contactItem" id="youtube">Youtube</li></a>
                <a href="https://twitch.tv/aresgmv"><li class="contactItem" id="twitch">Twitch</li></a>
            </ul>
        </div>
    </div>

</div>
</body>
</html>