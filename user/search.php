<?php
        $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link, "websiteshop");
    
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%'";
            $products = mysqli_query($link, $sql);
        }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../user/CSS/products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./font/fontawesome-free-5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
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
                            <form action="/search"> 
                                <input type="search" placeholder="Tìm kiếm">
                                <i class="fas fa-search"></i>
                            </form>
                        </div>
                    </li>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="product.php">INTRODUCE</a></li>
                    <li><a href="">PRODUCT</a></li>
                    <li><a href="">NEW</a></li>
                    <li><a href="">ORDER</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
            </nav>
        </header>
        
        <div class="container">
            <section class="content">
                <article class="laptop">
                    <h2 style="text-align: center; padding: 20px;">Search Product</h2>
                </article>
                <article class="lap-top1">
                    <?php foreach ($products as $key => $value) { ?>
                    <div class="lap-top">
                        <a href="product_detail.php?id=<?php echo $value["id"] ?>"><img src="../uploads/<?php echo $value['image'] ?>" alt="Acer"></a>
                        <p><a href="product_detail.php?id=<?php echo $value["id"] ?>"><?php echo $value['name'] ?></a></p>
                        <p><span><?php echo $value['price'] ?>$</span></p>
                        <span class="order">
                            <a href="" class="btn btn-info">Add Cart</a>
                        </span>
                        <span class="detai">
                           <a href="product_detail.php?id=<?php echo $value["id"] ?>" class="btn btn-success">Detail</a>
                        </span>
                    </div>
                 <?php } ?>
               
                </article>
            </section>
        </div>
       
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>