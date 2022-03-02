<?php include('php/meta.php'); ?>

<body>

<div class="body">

    <?php include('php/navbar.php'); ?>


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