<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Post | <?=APP_NAME?></title>

    <link rel="stylesheet" href="<?=ROOT?>../../css/custom.css">

</head>


<body>

<!--Header-->
<?php include '../app/pages/includes/header.php';?>
<!-- /Header-->

<div class="mx-auto col-md-10">
    <h1 class="display-4 text-primary text-center mb-5 mt-4">Latest Posts</h1>

    <!--Posts Card-->
    <div class="row mb-2 justify-content-center">

        <!--Card 1-->
        <div class="col-md-12">
            <div class="g-0 rounded overflow-hidden flex-md-row mb-4 position-relative">

                <div class="col-lg-auto col-12 d-lg-block text-center">

                    <img class="bd-placeholder-img img-fluid rounded mb-3" style="object-fit: cover;"
                         src="../../public/assets/images/no_image.jpg" alt="Post Picture">
                </div>

                <div class="col p-4 rounded d-flex flex-column position-static text-center">
                    <strong class="h4 d-inline-block mb-2 text-success">Category</strong>

                    <h2 class="mb-0 text-info">Title</h2>

                    <div class="mb-1 text-body-tertiary"><small><em>Date</em></small></div>

                    <p class="mb-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur, beatae est inventore iste laborum natus odio officia praesentium quos, recusandae tempore ullam voluptate. Aperiam, dolor, vero? Ad animi architecto commodi delectus deleniti dignissimos dolores earum est expedita id illum iusto, labore laboriosam laudantium magnam maxime minima molestiae mollitia obcaecati officiis perferendis quae quia quis ratione repellat repudiandae saepe sed tempore voluptatibus voluptatum. Aliquam aperiam blanditiis dolores ea earum fuga hic maiores minima necessitatibus neque non omnis optio perspiciatis quae qui quod, ut vero vitae! Dicta natus, tenetur. Accusamus atque debitis ducimus eum itaque maxime quia quos! In minus natus nesciunt provident, quam quidem veritatis. Adipisci animi aperiam, blanditiis consequuntur delectus deleniti eaque eos est eveniet natus obcaecati perspiciatis placeat porro, praesentium quidem quod recusandae temporibus voluptates. Animi eius, eligendi, esse hic inventore molestias necessitatibus nihil nisi possimus provident saepe sapiente suscipit voluptatibus? A ab, consectetur hic ipsum magnam optio? Culpa, in laborum odio officiis quos repudiandae vitae? Adipisci aliquam atque culpa, eligendi ex maxime nisi obcaecati quae totam vero. Consequatur corporis doloribus earum eum explicabo ipsum maiores nam nesciunt nostrum officiis quia quo sed sequi soluta vero, voluptas voluptatibus. Commodi dolorem ducimus eos fugiat impedit, magni quis vel vitae?</p>

                </div>
            </div>
        </div>
        <!--/Card 1-->

    </div>
    <!--/Posts Card-->

</div>

<!-- Footer-->

<script src="<?=ROOT?>../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" rel="stylesheet"></script>

</body>
</html>