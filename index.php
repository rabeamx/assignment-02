<?php

include_once "./developer.php";
include_once "./product.php";
include_once "./timeline.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Structure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="row">
        <h1 style = "text-align:center; padding-top:20px; font-weight:bold;">Profile</h1>

            <?php foreach($devs as $dev) : ?>
            <div class="col-md-3 my-5">
                <div class="card">
                    <img style ="height:270px;" src="<?php echo $dev['photo']; ?>" alt="" class="card-img">
                    <div class="card-body">
                        <h3 style = "font-weight:medium;"><?php echo $dev['name']; ?></h3>
                        <h4><?php echo $dev['skill']; ?></h4>
                        <p><?php echo $dev['disc']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>

    <div class="container">
        <div class="row">
        <h1 style = "text-align:center; font-weight:bold;">Shop</h1>

            <?php foreach($product as $item) : ?>
            <div class="col-md-3 my-5">
                <div class="card">
                    <img style = "height:270px;" src="<?php echo $item['photo']; ?>" alt="" class="card-img">
                    <div class="card-body">
                        <h3 style = "font-weight:bold;"><?php echo $item['product_name']; ?></h3>
                        <h4><?php echo $item['regular_price']; ?></h4>
                        <p><?php echo $item['Sale_price']; ?></p>
                        <p><?php echo $item['disc']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>


        </div>
    </div>

    
    
</body>
</html>
