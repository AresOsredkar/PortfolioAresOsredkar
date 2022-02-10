<!DOCTYPE html>
<html>
    <head>
        <title>Testing Site</title>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <script src="script/script.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>

<div class="body">

       <!--navigation bar-->
       <div id="navPlaceholder">

    </div>
    <script>
        $("#navPlaceholder").load("navbar.html");       
    </script>

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