<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-light" style="height: 115px;border: 1px solid gray;">

            </div>
        </div>
    </div>
</section>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">Logo</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="action.php?pages=all-products" class="nav-link">সর্বশেষ</a></li>
            <?php foreach ($categories as $category) { ?>
                <li class="nav-item"><a href="action.php?pages=categroy-products&&category_id=<?php echo $category['id'] ?>" class="nav-link"><?php echo $category['name'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
</nav>