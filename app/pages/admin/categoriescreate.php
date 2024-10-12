<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Categories create</title>

    <link rel="stylesheet" href="../../../css/custom.css">

</head>

<body>

<!--These sections  "container-fluid" are not needed: just delete them after all (here to seperate create | edit | delete-->
<div class="container-fluid">

    <!-- ADD A NEW category-->
    <div class="col-md-6 mx-auto">
        <form method="post" enctype="multipart/form-data">

            <h1 class="mb-3 text-primary text-center">Create Category</h1>

            <div class="form-floating">
                <input value="" name="category" class="form-control mb-2" id="floatingInput" placeholder="category">
                <label for="floatingInput">Category</label>
            </div>

            <div class="form-floating my-3">
                <select name="disabled" id="" class="form-select">
                    <option value="0">Yes</option>
                    <option value="1">No</option>
                </select>
                <label for="floatingInput" class="">Active</label>
            </div>

            <a href="#">
                <button class="mt-3 mb-5 btn btn-primary py-2 text-altmydarkblue" type="button">Back</button>
            </a>
            <button class="mt-3 mb-5 btn btn-altmywatergreen py-2 text-altmysaddlebrown float-end" type="submit">Create</button>

        </form>
    </div>
</div>

<script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>