<?php
include('navbar.php');
require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Personal Computer Shop</title>

    <link rel="icon" href="images/logo.png">

    <style>
        img {
            max-height: 200px;
            max-width: 100%;
        }

        .card-img-top {
            height: 200px;
        }
    </style>
</head>

<body>
    <!-- carousel start -->
    <div class="container">
        <div>
            <h3 style="border-bottom: 1px solid #616a7f;" class="mt-2 pt-2"><?php echo "Categories"; ?></h3>
            <div class="row">
                <?php
                $product_query = "SELECT * FROM product_category";
                $result = $connect_db->query($product_query);
                if ($result->num_rows > 0) {
                    while ($product = $result->fetch_assoc()) {
                        $category = str_replace("_details", "", $product['cTableName']);
                ?>

                        <div class="col-6 col-md-6 col-lg-3 mb-3">
                            <div class="card h-100 border-0">
                                <div class="card-img-top p-1">
                                    <img class="img-fluid mx-auto d-block" src="/pcs/images/products/<?php echo $category; ?>/<?php echo $product['cid']; ?>1.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="card-title">
                                        <a href="/pcs/product_archive_page.php/?category=<?php echo $category; ?>" class="font-weight-bold text-dark text-uppercase small"><?php echo $product['cName']; ?></a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>