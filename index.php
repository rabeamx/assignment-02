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
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.css">
	<link rel="stylesheet" href="assets/fonts/themufy/themify-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
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

    <section class="profile-mein-content">
		<div class="container">
			<div class="row">
            <h1 style = "text-align:center; padding-bottom:20px; font-weight:bold;">Timeline</h1>
                
            <div class="col-md-7">

					<br>

					<div class="all-post-area">
						
                        <?php foreach($posts as $post) : ?>

						<div class="user-post-panel">
							<div class="card shadow-sm">
								<div class="card-body">
									<div class="post-header clearfix">
										<img src=" <?php echo $post['photo']; ?> " alt="">
										<div class="post-user-info">
											<h4><a href="#"> <?php echo $post['name']; ?> </a></h4>
											<p> <?php echo $post['time']; ?> <i class="fas fa-globe-americas"></i></p>
										</div>
										<a class="float-right" href="#"><i class="fas fa-ellipsis-h"></i></a>
									</div>
									<div class="post-content mt-2">
										<p> <?php echo $post['desc']; ?></p>
										<img src=" <?php echo $post['image']; ?> " alt="">
									</div>
									<hr>
									<div class="post-likes clearfix">
										<div class="like float-left">
											<img src="https://pngimg.com/uploads/like/like_PNG14.png" alt=""> <?php echo $post['like']; ?>
										</div>
										<div class="comment float-right">
                                        <img src="https://www.iconpacks.net/icons/1/free-mail-icon-142-thumb.png" alt=""> <?php echo $post['comment']; ?>
										</div>
									</div>
									<hr>
									<div class="post-like-comment-share">
										<ul>
											<li><a href="#"><i class="far fa-thumbs-up"></i> Like</a></li>
											<li><a href="#"><i class="far fa-comment-alt"></i> Comment</a></li>
											<li><a href="#"><i class="fas fa-share"></i> Share</a></li>
										</ul>
									</div>
									<hr>

									
									
									

								</div>
							</div>
						</div>
                        
                        <?php endforeach ; ?>

					</div>

			</div>
            
			</div>
             
		</div>
	</section>



</body>
</html>