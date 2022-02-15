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


    <div class="mainPage gridContainer">
        <div class="item1">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        </div>
        <div id="carouselControls" class="carousel slide gallery" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="image/kranj.jpg" class="d-block w-100">
                <div class="carousel-content">Test</div>
              </div>
              <div class="carousel-item">
                <img src="image/kranj.jpg" class="d-block w-100">
                <div class="carousel-content">Test</div>
              </div>
              <div class="carousel-item">
                <img src="image/kranj.jpg" class="d-block w-100">
                <div class="carousel-content">Test</div>
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
    </div>
</div>
</body>
</html>