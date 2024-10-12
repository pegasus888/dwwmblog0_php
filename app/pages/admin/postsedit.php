<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Posts Edit</title>

    <link rel="stylesheet" href="../../../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../../../public/assets/summernote/summernote-lite.min.css">

</head>

<body>

<!--These sections are not needed: just delete them after all (here to have two displays of textarea for now-->
<div class="container-fluid">

    <!-- EDIT POST-->

    <div class="col-md-12 mx-auto">
        <form method="post" enctype="multipart/form-data">

            <h1 class="mb-3 text-primary text-center">Edit Post</h1>

            <!--   Image-->
            <div class="my-2 text-body-tertiary">
                Featured Image<br>
                <label class="d-block">
                    <img class="mx-auto d-block image-preview-edit" src="../../../public/assets/images/no_image.jpg" style="cursor: pointer;width: 150px;height: 150px;object-fit: cover;">
                    <input onchange="" type="file" name="image" class="d-none">
                </label>
            </div>
            <!--   /Image-->

            <!--   Title-->
            <div class="form-floating">
                <input value="" name="title" class="form-control mb-2" id="floatingInput" placeholder="title">
                <label for="floatingInput">Title</label>
            </div>
            <!--   /Title-->

            <!-- Post Content -->
            <div class="">
                <textarea id="summernote" rows="8" name="content" type="content" class="form-control mb-2" id="floatingInput" placeholder="Post Content">Post Content</textarea>
            </div>
            <!-- /Post Content -->

            <!--   Select Categories-->
            <div class="form-floating my-3">
                <select name="category_id" class="form-select">
                    <option value="">-- Select --</option>
                </select>
                <label for="floatingInput" class="">Category</label>
            </div>
            <!--   /Select Categories-->

            <a href="#">
                <button class="mt-3 mb-5 btn btn-primary py-2 text-altmydarkblue" type="button">Back</button>
            </a>
            <button class="mt-3 mb-5 btn btn-altmywatergreen py-2 text-altmysaddlebrown float-end" type="submit">Create</button>

        </form>
    </div>

</div>

<script src="../../../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../../../public/assets/summernote/summernote-lite.min.js"></script>

<script>
    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 400
    });
</script>

</body>
</html>