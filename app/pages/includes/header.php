<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Header</title>

    <link rel="stylesheet" href="../../../css/custom.css">

</head>

<body>

<!--Header-->
<header class="p-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <!--Logo-->
            <a href="" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">

                <img class="bi me-2 rounded-circle shadow" src="../../../public/assets/images/no_image.jpg" width="60" height="52"
                     alt="logo" style="object-fit: cover;">
            </a>
            <!-- /Logo-->

            <!-- Navbar main menu-->
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="" class="nav-link px-2 'link-altmycolor':'link-info'?>">Home</a></li>

                <li><a href="" class="nav-link px-2 'link-altmycolor':'link-body-text-primary'?>">Xxxx<sub><i>Blog</i></sub></a></li>
                <li>
                            <span class="nav-link px-2 link-body-text-primary dropdown text-end">
                                <a href="" class="d-block text-decoration-none dropdown-toggle 'link-altmycolor':'link-body-text-primary'?>" data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu text-small">

                                    <li>
                                            <a class="dropdown-item" href="#">Category</a>
                                    </li>

                                </ul>
                            </span>
                </li>

            </ul>
            <!-- /Navbar main menu-->

            <!-- Search Button-->
            <form action="" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <div class="input-group">
                    <input value="" name="find" type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-altlight">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-secondary" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </div>
            </form>
            <!-- /Search Button-->

            <!-- Profile dropdown menu: display if logged in-->

            <div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../../../public/assets/images/no_image.jpg" alt="user picture" style="object-fit: cover;" width="32" height="32" class="rounded-circle">
                </a>

                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">Hi</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Profile</a></li>-->
                    <li><a class="dropdown-item" href="">Admin</a></li>
                    <!-- <li><a class="dropdown-item" href="#">Settings</a></li>-->
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>

            <!-- /Profile dropdown menu-->

        </div>
    </div>
</header>
<!--/Header-->

<script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>