<?php
      $link = mysqli_connect("localhost","root","");
      mysqli_select_db($link, "websiteshop");

      $product_laptop = mysqli_query($link,"SELECT * FROM products WHERE category='Laptop' LIMIT 8");
      $product_pc = mysqli_query($link,"SELECT * FROM products WHERE category='PC Gaming' LIMIT 8");



?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Computer shop </title>
    <link rel="stylesheet" href="../user/CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./font/fontawesome-free-5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <header>      
        <nav class="rows">
            <ul>
                <li>
                    <div class="logo">
                        <img src="../user/img/horizontal_on_white_by_logaster-removebg-preview.png" alt="horizontal_on_white_by_logaster">
                    </div>
                </li>
                <li>
                    <div class="search-bar">
                        <form action="search.php" method="get"> 
                            <input type="search" name="keyword" placeholder="Tìm kiếm">
                            <button type="submit"> <i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </li>
                <li><a href="index.php">HOME</a></li>
                <li><a href="">INTRODUCE</a></li>
                <li><a href="product.php">PRODUCT</a></li>
                <li><a href="">NEW</a></li>
                <li><a href="">ORDER</a></li>
                <li><a href="">CONTACT</a></li>
            </ul>
        </nav>
        
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="img/img5.jpg" width="100%" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="img/img2.png" width="100%"  alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="img/img5.jpg" width="100%" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Phần Nội Dung -->
    <section class="container content">
        <article class="lap-top1">
            <h2 class="mt-5">COMPUTER - LAPTOP</h2>
        </article>
        <article class="lap-top1">
            <?php foreach ($product_laptop as $key => $value) { ?>
                <div class="lap-top">
                    <a href="product_detail.php?id=<?php echo $value["id"] ?>"><img src="../uploads/<?php echo $value['image'] ?>" alt="Acer"></a>
                    <p><a href="product_detail.php?id=<?php echo $value["id"] ?>"><?php echo $value['name'] ?></a></p>
                    <p><span><?php echo $value['price'] ?> $</span></p>
                    <span class="order">
                        <a href="" class="btn btn-info">Add Cart</a>
                    </span>
                    <span class="detai">
                        <a href="product_detail.php?id=<?php echo $value["id"] ?>" class="btn btn-success">Detail</a>
                    </span>
                </div>
          <?php } ?>
        </article>
        <div class="clear-fix"></div>
        <article class="computer1">
            <h2 class="mt-5">COMPUTER - PC</h2>
        </article>
        <article class="computer1">
            <?php foreach ($product_pc as $key => $value) { ?>
                <div class="computer">
                    <a href="product_detail.php?id=<?php echo $value["id"] ?>"><img src="../uploads/<?php echo $value['image'] ?>" alt="pc FALCON"></a>
                    <p><a href="product_detail.php?id=<?php echo $value["id"] ?>"><?php echo $value["name"] ?></a></p>
                    <p><span><?php echo $value["price"] ?> $</span></p>
                    <span class="order">
                        <a href="" class="btn btn-info">Add Cart</a>
                    </span>
                    <span class="detai">
                        <a href="product_detail.php?id=<?php echo $value["id"] ?>" class="btn btn-success">Detail</a>
                    </span>
                </div>
           <?php }  ?>
        </article>

        
    </section>
    <div class="clear-fix"></div>
    <!-- Phần Footer -->
    <footer >
        <section>
            <h3>ABOUT</h3>
            <hr>
            <ul>
                <li><a href="">Purchase Policy</a></li>
                <li><a href="">Warranty Policy</a></li>
                <li><a href="">Return Policy</a></li>
                <li><a href="">Sales policy</a></li>
            </ul>
        </section>
        <section>
            <h3>INFOMATION</h3>
            <hr>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Introduce</a></li>
                <li><a href="">Product</a></li>
                <li><a href="">New</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </section>
        <section>
            <h3>CONTACT</h3>
            <hr>
            <div>
                <ul>
                    <li>
                        <i class="fas fa-home"></i>
                        Hanoi City
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        nguyenvanthanghn44@gmail.com
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        0337513433
                    </li>
                </ul>
            </div>
            <div id="widget-social" class="social-icons">
                <ul class="list-inline">
                    <li class="li-social facebook-social">
                        <a target="_blank" href="#" class="social-wrapper facebook">
                            <span class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </span>
                        </a>
                    </li>
                    <li class="li-social message-social">
                        <a target="_blank"  href="#" class="social-wrapper message">
                            <span class="social-icon">
                                <i class="fab fa-facebook-messenger"></i>
                            </span>
                        </a>
                    </li>
                    <li class="li-social youtube-social">
                        <a target="_blank" href="#" class="social-wrapper youtube">
                            <span class="social-icon">
                                <i class="fab fa-youtube"></i>
                            </span>
                        </a>
                    </li>
                    <li class="li-social google-social">
                        <a target="_blank" href="#" class="social-wrapper google-plus">
                            <span class="social-icon">
                                <i class="fab fa-google-plus-g"></i>
                            </span>
                        </a>
                    </li>
                    <li class="li-social twitter-social">
                        <a target="_blank"  href="#" class="social-wrapper twitter">
                            <span class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </footer>
</body>
</html>