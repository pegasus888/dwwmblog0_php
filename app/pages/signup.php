<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Signup</title>

    <link rel="stylesheet" href="<?=ROOT?>../../css/custom.css">

    <!--    Custom styles for this template -->
    <link href="<?=ROOT?>../../public/assets/bootstrap-5.3.3-examples/sign-in/sign-in.css" rel="stylesheet">

</head>

<body class="text-center">

<main class="form-signin w-100 m-auto">
    <form method="post">
        <a href="<?=ROOT?>/home" class="">
            <img class="mb-4 rounded-circle shadow" src="<?=ROOT?>../../public/assets/images/no_image.jpg" alt="logo" width="92" height="92" style="object-fit: cover;">
        </a>
        <h1 class="h3 mb-3 fw-normal">Create Account</h1>

        <div class="form-floating">
            <input value="" name="username" class="form-control mb-2" id="floatingInput" placeholder="username">
            <label for="floatingInput">Username</label>
        </div>

        <div class="form-floating">
            <input value="" name="email" class="form-control mb-2" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email Address</label>
        </div>

        <div class="form-floating">
            <input value="" name="password" class="form-control mb-2" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-floating">
            <input value="" name="retype_password" class="form-control mb-2" id="floatingPassword" placeholder="Retype Password">
            <label for="floatingPassword">Retype Password</label>
        </div>

        <div class="my-2">
            Already have an Account?
            <a href="<?=ROOT?>/login" class="mx-2">Login Here</a>
        </div>

        <div class="form-check text-start my-3">

            <input  name="terms" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Accept terms and conditions
            </label>
        </div>

        <button class="btn btn-altmywatergreen text-altmysaddlebrown w-100 py-2" type="submit">Create</button>
        <p class="mt-5 mb-3 text-body-secondary"> Xxxx Blog, All rights reserved.</p>
    </form>
</main>

<script src="<?=ROOT?>../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>