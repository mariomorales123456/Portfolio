<?php include('../../../../includes/head.php'); ?>

<body class="bg-info text-center">
<div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="img-fluid" src="phone.jpg" alt="image1 slide">
        </div>
        <div class="carousel-item">
        <img class="img-fluid" src="tablet-and-desktop-care.jpg" alt="image2 slide">
        </div>
        <div class="carousel-item">
        <img class="img-fluid" src="tablet-and-desktop-fit-guide.jpg" alt="image3 slide">
        </div>
            <div class="carousel-item">
        <img class="img-fluid" src="tablet-and-desktop-materials.jpg" alt="image4 slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>

<?php include('../../../../includes/javascript.php'); ?>

</body>
