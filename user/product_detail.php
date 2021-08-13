<?php
        $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link, "websiteshop");

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $product = mysqli_query($link, "SELECT * FROM products WHERE id = '$id'");
            $data = mysqli_fetch_assoc($product);
        }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../user/CSS/product_detail.css">
    <link rel="stylesheet" href="../user/CSS/style.css">
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
                        <form action="search.php" method="get"> 
                            <input type="search" name="keyword" placeholder="Tìm kiếm">
                            <button type="submit"> <i class="fas fa-search"></i></button>
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
            <section class="main-laptop">
                <article><br>
                    <h4>
                        <a href="index.php">Home /</a>
                        <a href=""><?php echo $data['name'] ?> </a>
                    </h4>
                    <hr>
                </article>
                <article>
                    <div class="laptop">
                        <img src="../uploads/<?php echo $data['image'] ?>" alt="PC Asus ROG Huracan G21CN">
                        <p><b><span><?php echo $data['name'] ?></span></b></p><br>
                        <p><b>Category: </b><?php echo $data['category'] ?></p><br>
                        <p><b>Price:</b><?php echo $data['price'] ?> $</p><br>
                        <p><b>id: </b><?php echo $data['id'] ?></p><br>
                        <div class="ttsp" style="font-weight: 700; margin-bottom: 10px">Product Infomation</div>
                        <p>
                             <?php echo $data['description'] ?>
                        </p>
                        <p><b>Origin: </b><?php echo $data['origin'] ?> </p><br>
                        <a href="" class="btn btn-secondary">Đặt hàng</a>
                    </div>
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