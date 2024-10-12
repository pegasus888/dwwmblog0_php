<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Post-card</title>

    <link rel="stylesheet" href="../../../css/custom.css">

</head>

<body>

<!--Card 1-->
<div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-altlight">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Category</strong>

            <a href="#" class="text-decoration-none">
                <h3 class="mb-0 text-info">Title</h3>
            </a>

            <div class="mb-1 text-body-tertiary"><small><em>Date</em></small></div>

            <div class="col-lg-auto col-12 d-lg-block">
                <a href="#" class="text-decoration-none">
                    <img class="bd-placeholder-img mb-3 w-100" width="200" height="250" style="object-fit: cover;"
                         src="../../../public/assets/images/no_image.jpg" alt="Post Picture">
                </a>
            </div>

            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                Continue reading ...
                <svg class="bi">
                    <use xlink:href="#chevron-right"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<!--/Card 1-->

<script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>