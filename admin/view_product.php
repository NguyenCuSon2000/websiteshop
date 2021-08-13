<?php
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link, "websiteshop");
    $tt = 1;
  
    
    $orderCondition = "";
    $orderField =(isset($_GET['field']) ? $_GET['field'] : '');
    $orderSort =  (isset($_GET['sort']) ? $_GET['sort'] : '');
    if (!empty($orderField) && !empty($orderSort)) {
        $orderCondition = "ORDER BY `products`.`".$orderField."`". $orderSort;
    }

    $keyword = (isset($_GET['keyword']) ? $_GET['keyword'] : '');
    $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%'  ".$orderCondition."";
    $products = mysqli_query($link, $sql);

      // Tổng số bản ghi
    $total = mysqli_num_rows($products);
    //Số bản ghi trên 1 trang
    $limit = 3;
    //Số trang
    $page = ceil($total/$limit);
    // Lấy trang hiện tại
    $currency_page = (isset($_GET['page']) ? $_GET['page'] : 1);
    // Tính start
    $start = ($currency_page - 1)*$limit;
    //Query sử dụng limit
    $products = mysqli_query($link,"SELECT * FROM products ".$orderCondition." LIMIT $start, $limit"); 

    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%'  ".$orderCondition." LIMIT $start, $limit";
        $products = mysqli_query($link, $sql);
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                            <div class="left__image"><img src="../admin/images/anh.jpg" alt="" ></div>
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
                        <p class="right__desc">List Product</p>
                        <div class="right__search">
                            <form action="" method="get">
                                <input type="search" class="search" name="keyword"  placeholder="Tìm kiếm" >
                                <input type="submit" class="button" value="Search">
                            </form>
                        </div>    
                        <div class="form-group">
                            <label for="">Sắp xếp</label>
                            <select class="form-control form-control-sm"  
                                    onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                <option value="">-- Chọn --</option>
                                <option value="?field=price&sort=asc">Giá tăng dần</option>
                                <option value="?field=price&sort=desc">Giá giảm dần</option>
                                <option value="?field=id&sort=desc">Sản phẩm mới nhất</option>
                                <option value="?field=id&sort=asc" >Sản phẩm cũ nhất</option>
                            </select>
                        </div>                   
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>id</th>
                                            <th>ProductName</th>
                                            <th>category</th>
                                            <th>description</th>
                                            <th>image</th>
                                            <th>price</th>
                                            <th>origin</th>
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>
                            
                                    <tbody>
                                        <?php foreach ($products as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $tt++ ?></td>
                                                <td><?php echo $value['id'] ?></td>
                                                <td data-label="name"><?php echo $value['name'] ?></td>
                                                <td data-label="category"><?php echo $value['category'] ?></td>
                                                <td data-label="description"><?php echo $value['description'] ?></td>
                                                <td data-label="image"><img src="../uploads/<?php echo $value['image'] ?>" alt=""></td>
                                                <td data-label="price"><?php echo $value['price'] ?>$ </td>
                                                <td data-label="origin"><?php echo $value['origin'] ?></td>
                                                <td data-label="update" class="right__iconTable"><a href="update_product.php?id=<?php echo $value["id"] ?>"><img src="assets/icon-edit.svg" alt=""></a></td>
                                                <td data-label="delete" class="right__iconTable"><a href="delete_product.php?id=<?php echo $value["id"] ?>" onclick="return confim('Are you delete?')"><img src="assets/icon-trash-black.svg" alt=""></a></td>
                                            </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>

                                <nav aria-label="Page navigation">
                                    <ul class="pagination disable">
                                    <?php if ($currency_page - 1 > 0) { ?>
                                    <li class="page-item">
                                        <a class="page-link" href="view_product.php?page=<?php echo $currency_page - 1 ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <?php } ?>

                                    <?php for ($i=1; $i <= $page; $i++) { ?>
                                        <li class="page-item <?php echo (($currency_page == $i) ? 'active': '') ?>">
                                            <a class="page-link"
                                            href="view_product.php?page=<?php echo $i ?><?php echo ($keyword !='') ? "&keyword=$keyword":'' ?>"> 
                                                <?php echo $i ?>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php if ($currency_page + 1 <= $page) { ?>
                                    <li class="page-item">
                                        <a class="page-link" href="view_product.php?page=<?php echo $currency_page + 1 ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
