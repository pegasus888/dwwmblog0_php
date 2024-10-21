<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title><?=APP_NAME?></title>

    <link rel="stylesheet" href="../../css/custom.css">

</head>

<body>

<!--Header-->
<iframe src="http://localhost/myfilrouge/pages/includes/header.html" title="header"  width="100%"  height="200"></iframe>
<!--/Header-->

<div class="mx-auto col-md-10">
    <h1 class="text-primary text-center mb-5 mt-4">Latest Posts</h1>

    <!--Posts Card-->
    <div class="row mb-2 justify-content-center">
        Posts Card
    </div>
    <!--/Posts Card-->

    <!--    Pagination-->
    <div class="col-md-12 mb-5">
        <a href="<?=$PAGE['first_link']?>" class="">
            <button class="btn btn-outline-primary">First Page</button>
        </a>
        <a href="<?=$PAGE['prev_link']?>" class="">
            <button class="btn btn-outline-primary">Prev Page</button>
        </a>
        <a href="<?=$PAGE['next_link']?>" class="">
            <button class="btn btn-primary py-2 text-altmydarkblue float-end">Next Page</button>
        </a>
    </div>
    <!--    /Pagination-->

</div>

<!--Footer-->
<iframe src="http://localhost/myfilrouge/pages/includes/footer.html" title="footer"  width="100%"  height="500"></iframe>
<!--/Footer-->


<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>