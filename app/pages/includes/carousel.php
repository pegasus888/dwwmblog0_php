<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Carousel</title>

    <link rel="stylesheet" href="../../../css/custom.css">
    <link rel="stylesheet" href="../../../public/assets/bootstrap-5.3.3-examples/carousel/carousel.css">

</head>

<body>

<!--Carousel-->

<div id="carouselExampleCaptions" class="carousel slide bg-altlight rounded">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?=ROOT?>../../public/assets/images/no_image.jpg" class="d-block img-fluid vw-100 float-end" style="object-fit: contain; height: 100vh" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <!--<h5 class="float-end bg-primary">First slide label</h5>-->
                <div class="container-fluid float-start">
                    <p class="lead float-start bg-altmyblueblack text-altlight fst-italic m-1 p-1 rounded">
                        Some representative placeholder <br> content for the first slide. <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?=ROOT?>../../public/assets/images/no_image.jpg" class="d-block img-fluid w-100" style="object-fit: contain; height: 100vh" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="lead text-black text-center m-5 p-5 fw-bold"><strong class="fst-italic"> Caption2 </strong></h5>
                <!--<p>Some representative placeholder content for the second slide.</p>-->
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?=ROOT?>../../public/assets/images/no_image.jpg" class="d-block img-fluid w-100" style="object-fit: contain; height: 100vh" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="lead text-altmydarkfuschia"> Caption3 </h5>
                <!--<p>Some representative placeholder content for the third slide.</p>-->
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-primary rounded" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-primary rounded" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- /Carousel-->

<script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>