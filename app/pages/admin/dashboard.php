<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Dashboard</title>

    <link rel="stylesheet" href="<?=ROOT?>../../../css/custom.css">

    <!--    Custom styles for this template -->
    <link href="<?=ROOT?>../../../public/assets/bootstrap-5.3.3-examples/dashboard/dashboard.css" rel="stylesheet">

</head>

<!-- Dashboard will show only on admin page as it is a part of it-->

<body>

<div class="row m-5 justify-content-around align-items-center">

    <div class="m-1 mb-3 col-md-4 bg-altlight rounded shadow text-center justify-content-center">
        <a href="<?= ROOT?>/admin/users" class="text-decoration-none text-info">
            <h3 class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                </svg>
            </h3>
            <div class="">
                Users
            </div>

            <p class="lead text-info">X</p>
        </a>
    </div>


    <div class="m-1 mb-3 col-md-4 rounded shadow text-center border border-primary bg-altmylightbeige justify-content-center">
        <a href="" class="text-decoration-none text-success">
            <h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer text-altmylightbeige" viewBox="0 0 16 16">
                    <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2M3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.39.39 0 0 0-.029-.518z"/>
                    <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.95 11.95 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0"/>
                </svg>
            </h3>

            <div class="text-uppercase">
                admin
            </div>

            <p class="lead text-altmylightbeige">X></p>
        </a>
    </div>


    <div class="m-1 mb-3 col-md-4 bg-altlight rounded shadow text-center justify-content-center">
        <a href="<?=ROOT?>/admin/categories" class="text-decoration-none text-info">
            <h3 class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                </svg>
            </h3>
            <div class="">
                Categories
            </div>

            <p class="lead text-info">X</p>
        </a>
    </div>

    <div class="m-1 mb-3 col-md-4 bg-altlight rounded shadow text-center justify-content-center">
        <a href="<?=ROOT?>/admin/posts" class="text-decoration-none text-info">
            <h3 class="text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-postage" viewBox="0 0 16 16">
                    <path d="M4.75 3a.75.75 0 0 0-.75.75v8.5c0 .414.336.75.75.75h6.5a.75.75 0 0 0 .75-.75v-8.5a.75.75 0 0 0-.75-.75zM11 12H5V4h6z"/>
                    <path d="M3.5 1a1 1 0 0 0 1-1h1a1 1 0 0 0 2 0h1a1 1 0 0 0 2 0h1a1 1 0 1 0 2 0H15v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1a1 1 0 1 0 0 2v1h-1.5a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0h-1a1 1 0 1 0-2 0H1v-1a1 1 0 1 0 0-2v-1a1 1 0 1 0 0-2V9a1 1 0 1 0 0-2V6a1 1 0 0 0 0-2V3a1 1 0 0 0 0-2V0h1.5a1 1 0 0 0 1 1M3 3v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1"/>
                </svg>
            </h3>
            <div class="">
                Posts
            </div>

            <p class="lead text-info">X</p>
        </a>
    </div>
</div>

<script src="<?=ROOT?>../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>