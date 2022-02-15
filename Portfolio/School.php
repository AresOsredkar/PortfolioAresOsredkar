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
    <?php include('navbar.php'); ?>


    <div class="mainPage school">
        <div id="carouselControls" class="carousel slide gallery" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/ostrzic.jpg" class="d-block w-100" alt="Osnovna Šola Tržič">
                <div class="carousel-content">Osnovna šola Tržič</div>
              </div>
              <div class="carousel-item">
                <img src="image/SCKR.jpg" class="d-block w-100" alt="Šolski center Kranj">
                <div class="carousel-content">Šolski center Kranj</div>
              </div>
              <div class="carousel-item">
                <img src="image/fri.jpg" class="d-block w-100" alt="Fakulteta za računalništvo in informatiko">
                <div class="carousel-content">Fakulteta za računalništvo in informatiko</div>
              </div>
            </div>
            <button class="carousel-control-prev carousel-control" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next carousel-control" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="textSub" id="schoolText">
            After 9 years of primary school my attention was focused mostly into computers. 
            <br><br>Due to my good grades everyone wanted
            me to go to a higher level school but I choose a computer school lovingly called "Iskra" in Kranj. There I completed a 4 year
            computer technician course. There I learned basics of programing in C#, HTML, CSS and some JS. 
            <br><br>After the completed program I
            continued in the direction of programing so I applied to the "FRI" university in Ljubljana, where I enjoyed my short stay. 
            <br><br>Sadly due to personal loss and everything that comes with it I couldnt complete the first year as I just lost motivation.
            I did however learn small ammounts of Java and some Python to go with it aswell as basic Assembly. 
            <br><br>Later I applied back to my
            highschool to start attending their college program where I am now.
        </div>
    </div>

</div>
</body>
</html>