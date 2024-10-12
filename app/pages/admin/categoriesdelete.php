<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Categories delete</title>

    <link rel="stylesheet" href="../../../css/custom.css">

</head>

<body>

<!--These sections are not needed: just delete them after all (here to seperate create | edit | delete-->
<div class="container-fluid">

    <!-- DELETE  category-->
    <div class="col-md-6 mx-auto">
        <form method="post">

            <h1 class="mb-3 text-primary text-center">Delete Category</h1>

            <div class="form-floating">
                <div class="form-control mb-2">Category</div>


                <div class="form-floating">
                    <div class="form-control mb-2">Slug</div>
                </div>

                <a href="#">
                    <button class="mt-4 mb-5 btn btn-primary py-2 text-altmydarkblue" type="button">Back</button>
                </a>
                <button class="mt-4 mb-5 btn btn-danger py-2 text-altlight float-end" type="submit">Delete</button>
        </form>
    </div>
    <!-- /DELETE  category-->

</div>

<script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>