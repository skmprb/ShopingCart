<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKMPRB</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="style.css">

    <style>
        .image{
            max-width: 100%;
            margin-top: 80px;
        }
        .img1{
            margin-left: 200px;
            width: 1100px;
            height: auto;

        }
    </style>
</head>
<body>

<?php require_once ("php/header.php")?>

<div class="slide mt-5">
<?php require_once("slideshow.php")?>
</div>

<div class="ab mt-5 text-center">
    <h2>Trending</h2>
</div>
<hr/>

<div class="mt-5">
<div class="card" style="width: 18rem; margin-left: 15rem;">
  <img class="card-img-top" src="./images/img1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">The Most trending One in our store</p>
    <a href="index.php" class="btn btn-primary">Click to Check</a>
  </div>
</div>

<div class="card" style="width: 18rem; margin-left: 35rem; margin-top:-456px;">
  <img class="card-img-top" src="./images/img3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">The Most trending One in our store</p>
    <a href="index.php" class="btn btn-primary">Click to check</a>
  </div>
</div>

<div class="card" style="width: 18rem; margin-left:55rem; margin-top:-456px;">
  <img class="card-img-top" src="./images/img3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">The Most trending One in our store</p>
    <a href="index.php" class="btn btn-primary">Click to check</a>
  </div>
</div>
</div>

<div class="ab mt-5 text-center">
    <h2>About our System</h2>
</div>
<hr/>

<div class="image">
    <img class="img1" src="./images/home1.jpg" alt="">
</div>

<div class="foot mt-5">
<?php require_once("footer.php")?>
</div>

</body>
</html>