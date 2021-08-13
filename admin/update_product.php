<?php
        $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link, "websiteshop");

        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $product = mysqli_query($link, "SELECT * FROM products WHERE id = '$id'");
            $data = mysqli_fetch_assoc($product);
        }

        if (isset($_POST['cmd'])) {
            $name = $_POST['name'];
            $category = $_POST['category'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $origin = $_POST['origin'];
            if(isset($_FILES['image'])){
                $file = $_FILES['image'];
                $file_name = $file['name'];
                // Trường hợp dùng ko chọn ảnh
                if (empty($file_name)) {
                    $file_name = $data['image'];
                }else { // Trường hợp user chọn ảnh
                    if ($file['type'] == 'image/jpeg' || $file['type'] == 'image/jpg' || $file['type'] == 'image/png' ) {
                        move_uploaded_file($file['tmp_name'],'../uploads/'.$file_name);
                    }
                    else {
                        echo ('Không đúng định dạng');
                        $file_name = '';
                    }   
                }
    
                       
            }
            if ($name == "") {
                echo "Please insert name <br />";
            }
            
            if ($name != "") {
                $sql = "UPDATE products SET name = '$name', category = '$category', price = '$price',image = '$file_name', description = '$description', origin = '$origin' WHERE id = '$id'";
                $qr = mysqli_query($link, $sql);
                header('location: view_product.php');
            }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="dashboard">
            <div class="left">
                    <span class="left__icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <div class="left__content">
                        <div class="left__logo">LOGO</div>
                        <div class="left__profile">
                            <div class="left__image"><img src="../admin/images/anh.jpg" alt=""></div>
                            <p class="left__name">abc</p>
                        </div>
                        <ul class="left__menu">
                            <li class="left__menuItem">
                                <a href="index.html" class="left__title"><img src="assets/icon-dashboard.svg" alt="">Dashboard</a>
                            </li>
                            <li class="left__menuItem">
                                <div class="left__title"><img src="assets/icon-tag.svg" alt="">Product<img class="left__iconDown" src="assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="add_product.php">Add Product</a>
                                    <a class="left__link" href="view_product.php">List Product</a>
                                </div>
                            </li>
                            <li class="left__menuItem">
                                <a href="login.php" class="left__title"><img src="assets/icon-logout.svg" alt="">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="right__content">
                        <div class="right__title">Dashboard</div>
                        <p class="right__desc">Add Product</p>
                        <div class="right__formWrapper">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="right__inputWrapper">
                                    <label for="title">Name</label>
                                    <input type="text" placeholder="Name" name="name" value="<?php echo $data['name'] ?>">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Category</label>
                                    <input type="text" placeholder="Category" name="category" value="<?php echo $data['category'] ?>">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Description</label>
                                    <input type="text" placeholder="Description" name="description" value="<?php echo $data['description'] ?>">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="image">Image</label>
                                    <input type="file" name="image">
                                    <img src="../uploads/<?php echo $data['image'] ?>" width="200px" alt=""><br>
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="title">Price</label>
                                    <input type="number" placeholder="Price" name="price" value="<?php echo $data['price'] ?>">
                                </div>
                                <div class="right__inputWrapper">
                                    <label for="desc">Origin</label>
                                    <textarea id="" cols="30" rows="10" placeholder="Origin" name="origin"><?php echo $data['origin'] ?></textarea>
                                </div>
                                <button class="btn" type="submit" name="cmd">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>