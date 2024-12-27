<?php
include('navbar.php');
require_once 'connection.php';
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
        .bod {
            padding: 0% 7%;
        }

        .comp {
            color: #455372;
        }


        .btd {
            border-top: 1px solid gray;
            border-bottom: 1px solid gray;
        }

        .dsh {
            color: #f05454;
        }

        .carousel-item {
            text-align: center;
            /* margin: auto; */
            height: 350px;
        }

        .img-fluid {
            max-height: 350px;
            max-width: 100%;
            transition: 0.8s all ease-in-out;
        }

        .img-fluid:hover {
            transform: scale(1.75);
        }

        nav>.nav.nav-tabs {

            border: none;
            color: #fff;
            background: #2d3956;
            border-radius: 0;

        }

        nav>div a.nav-item.nav-link,
        nav>div a.nav-item.nav-link.active {
            border: none;
            padding: 18px 25px;
            color: #fff;
            background: #2d3956;
            border-radius: 0;
        }

        nav>div a.nav-item.nav-link.active {

            background: #616a7f;
        }

        nav>div a.nav-item.nav-link.active:after {
            content: "";
            position: relative;
            bottom: -60px;
            left: -10%;
            border: 15px solid transparent;
            border-top-color: #616a7f;
        }

        .tab-content {
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top: 5px solid #616a7f;
            border-bottom: 5px solid #616a7f;
            padding: 30px 25px;
        }

        nav>div a.nav-item.nav-link:hover,
        nav>div a.nav-item.nav-link:focus {
            border: none;
            background: #616a7f;
            color: #fff;
            border-radius: 0;
            transition: background 0.20s linear;
        }
    </style>
</head>

<body>
    <?php
    $pid = $_GET['pid'];
    // $pid = 'kb00000001';
    // echo $pid;
    // exit();
    $product_query = "SELECT * FROM keyboard_details where kbid='$pid'";
    $result = $connect_db->query($product_query);
    if ($result->num_rows > 0) {
        while ($product = $result->fetch_assoc()) {
            $data[1]['pid'] = $pid;
            $data[1]['name'] = $product['kbName'];
            $data[1]['price'] = $product['kbPrice'];
    ?>

            <div class="bod">
                <div id="product-section" class="pt-2">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div id="hpCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner p-1">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="images/products/Keyboard/<?php echo $pid; ?>/kb1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="images/products/Keyboard/<?php echo $pid; ?>/kb2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="images/products/Keyboard/<?php echo $pid; ?>/kb3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <div id="myModal" class="modal">

                                    <!-- The Close Button -->
                                    <span class="close">&times;</span>

                                    <!-- Modal Content (The Image) -->
                                    <img class="modal-content" id="img01">

                                    <!-- Modal Caption (Image Text) -->
                                    <div id="caption"></div>
                                </div>
                                <a class="carousel-control-prev" href="#hpCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#hpCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <ol class="breadcrumb" style="background-color: white;">
                                <li class="breadcrumb-item">
                                    <a href="/pcs/product_archive_page.php/?category=keyboard" style="color: #616a7f;">Keyboard</a>
                                </li>
                                <li class="breadcrumb-item active" style="color: #2d3956;"><?php echo $product['kbCompany']; ?></li>
                            </ol>
                            <div class="col-md-12">
                                <h6 class="comp"><?php echo $product['kbCompany']; ?></h6>
                                <h2><?php echo $productName = $product['kbName']; ?></h2>
                                <div>
                                    <span class="badge badge-success p-2">
                                        <i class="fa fa-star"></i>
                                        4.5 Star
                                    </span>
                                    <span>35 Ratings</span>
                                </div>
                                <h1 class="text-danger">₹ <span><?php echo $price = $product['kbPrice']; ?></span></h1>
                                <div class="row">
                                    <div class="col-md-6 p-1">
                                        <form action="" method="post">
                                            <button type="submit" class="btn btn-info btn-block" name="addtocart" style="font-size: large;">
                                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                Add To Cart</button>
                                            <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                                            <input type="hidden" name="price" value="<?php echo $price; ?>">
                                            <input type="hidden" name="productName" value="<?php echo $productName; ?>">
                                            <input type="hidden" name="productImg" value="/keyboard/<?php echo $pid; ?>/kb1.jpg">
                                        </form>
                                    </div>

                                    <div class="col-md-6 p-1">
                                        <form action="checkout.php" method="post">
                                            <input type="hidden" name="data" value='<?php echo json_encode($data); ?>'>
                                            <button type="submit" class="btn btn-success btn-block" name="buynow" style="font-size: large;">
                                                <i class="fa fa-money" aria-hidden="true"></i>
                                                Buy Now</button>
                                        </form>
                                    </div>
                                </div>
                                <div id="info" class="text-secondary"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Description</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Product Specifications</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active p-2" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <p class="description p-1"> <?php echo $product['kbDescription']; ?></p>
                        </div>
                        <div class="tab-pane fade p-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <table class="table table-striped table-dark">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td><?php echo $product['kbName']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Company</td>
                                        <td><?php echo $product['kbCompany']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>₹ <span><?php echo $product['kbPrice']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td>Switch Type</td>
                                        <td><?php echo $product['kbSwitchType']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Layout</td>
                                        <td><?php echo $product['kbLayout']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Connectivity</td>
                                        <td><?php echo $product['kbInterface']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    require_once 'add_to_cart.php';
    include('footer.php');
    ?>
</body>

</html>