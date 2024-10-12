<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Login</title>

    <link rel="stylesheet" href="../../css/custom.css">

    <!--    Custom styles for this template -->
    <link href="../../public/assets/bootstrap-5.3.3-examples/sign-in/sign-in.css" rel="stylesheet">

</head>

<body class="text-center">

<main class="form-signin w-100 m-auto">

    <form method="post">

        <a href="#" class="">
            <img class="mb-4 rounded-circle shadow" src="../../public/assets/images/no_image.jpg" alt="logo" width="92" height="92" style="object-fit: cover;">
        </a>

        <h1 class="h3 mb-3 fw-normal">Please Sign in</h1>

        <div class="form-floating">
            <input value="" name="email" class="form-control mb-2" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input value="" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="my-2">
            No Account?
            <a href="signup.php" class="mx-3">Signup Here</a>
        </div>

        <div class="form-check text-start my-3">
            <input name="remember" type="checkbox" value="1" id="flexCheckDefault">
            <!--Add bg primary to the checked box, because still in blue!-->

            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>

        <button class="btn btn-altmywatergreen text-altmysaddlebrown w-100 py-2" type="submit">Sign in</button>

        <p class="mt-5 mb-3 text-body-secondary"> Xxxx Blog, All rights reserved.</p>
    </form>

</main>


<script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>