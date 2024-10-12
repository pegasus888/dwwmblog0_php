<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Posts</title>

    <link rel="stylesheet" href="../../../css/custom.css">

</head>

<body>

<!--These sections are not needed: just delete them after all (here to have two displays of textarea for now-->
<div class="container-fluid">

    <!-- CREATE A POST-->

    <link rel="stylesheet" type="text/css" href="../../../public/assets/summernote/summernote-lite.min.css">

    <div class="col-md-12 mx-auto">
        <form method="post" enctype="multipart/form-data">

            <h1 class="mb-3 text-primary text-center">Create Post</h1>

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
    <!-- /CREATE A POST-->

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





<div class="container-fluid">

    <!-- EDIT  POST-->

    <link rel="stylesheet" type="text/css" href="../../../public/assets/summernote/summernote-lite.min.css">

    <div class="col-md-12 mx-auto">
        <form method="post" enctype="multipart/form-data">

            <h1 class="mb-3 text-primary text-center">Edit Post</h1>

            <!--   Image-->
            <div class="my-2">
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
            <button class="mt-3 mb-5 btn btn-altmywatergreen py-2 text-altmysaddlebrown float-end" type="submit">Save</button>
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




<div class="container-fluid">

    <!-- DELETE  POST-->

    <div class="col-md-6 mx-auto">
        <form method="post">
            <h1 class="mb-3 text-primary text-center">Delete Post</h1>

            <div class="form-floating">
                <div class="form-control mb-2"></div>
            </div>

            <div class="form-floating">
                <div class="form-control mb-2"></div>

                <a href="#">
                    <button class="mt-4 mb-5 btn btn-primary py-2 text-altmydarkblue" type="button">Back</button>
                </a>
                <button class="mt-4 mb-5 btn btn-danger py-2 text-altlight float-end" type="submit">Delete</button>
        </form>
    </div>

</div>


<div class="container-fluid">

    <!--Add new btn-->
    <h1 class="text-primary">
        Posts
        <a href="#">
            <button class="btn btn-primary text-altmydarkblue">Add new</button>
        </a>
    </h1>
    <!--/Add new btn-->

    <div class="table-responsive">
        <table class="table">

            <tr>
                <th >#</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Image</th>
                <th>Date</th>
                <th>Action</th>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <img src="../../../public/assets/images/no_image.jpg" style="width: 100px;height: 100px;object-fit: cover;">
                </td>
                <td></td>
                <td>
                    <a href="#">
                        <button class="btn btn-warning btn-sm text-altmydarkblue">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>
                                <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086z"/>
                            </svg>
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn btn-danger btn-sm text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </button>
                    </a>
                </td>
            </tr>

        </table>


        <section>

            <!--    Pagination-->
            <div class="col-md-12 mb-5">
                <a href="#" class="">
                    <button class="btn btn-outline-primary">First Page</button>
                </a>
                <a href="#" class="">
                    <button class="btn btn-outline-primary">Prev Page</button>
                </a>
                <a href="#" class="">
                    <button class="btn btn-altmywatergreen py-2 text-altmysaddlebrown float-end">Next Page</button>
                </a>
            </div>
            <!--    /Pagination-->
        </section>

    </div>
</div>

</body>
</html>