<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home | <?=APP_NAME?></title>

    <link rel="stylesheet" href="<?=ROOT?>../../css/custom.css">

</head>

<body>

<!--Header-->
<?php include '../app/pages/includes/header.php';?>
<!-- /Header-->

<!--Slider-->
<?php include '../app/pages/includes/carousel.php';?>
<!-- /Slider-->

<h1 class="display-4 mx-4 text-primary text-center">Featured</h1>

<!--post-card -->
<div class="row mb-2 justify-content-center">

    <?php include '../app/pages/includes/post-card.php';?>
</div>
<!--/post-card-->

<!--Footer-->
<?php include '../app/pages/includes/footer.php';?>
<!-- /Footer-->

<script src="<?=ROOT?>../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>