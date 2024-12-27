<?php
session_start();
require_once 'connection.php';
// $_SESSION['email'] = 'username@gmail.com';
// $_SESSION['userid'] = '1';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <link rel="icon" href="/pcs/images/logo.png">
</head>

<!-- <link rel="icon" href="images/logo.png"> -->

<style>
    .cart {
        color: white;
    }

    .cart:hover {
        text-decoration: none;
        color: white;
    }

    .navbar-brand:hover {
        border-bottom: 1px solid #616a7f;
    }

    .subnav-text {
        color: white;
    }

    .subnav-text:hover {
        color: white;
    }

    .dropdown-toggle::after {
        content: none;
    }

    .dropdown-menu {
        width: 300px;
    }

    .cart-img {
        max-height: 125px;
        max-width: 100%;
    }

    .dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
        pointer-events: none;
    }

    .item-name {
        white-space: pre-line;
    }

    .result {
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }

    .search-box {
        width: 70%;
    }

    .search-box input[type="text"],
    .result {
        width: 100%;
        box-sizing: border-box;
    }

    /* Formatting result items */

    .result p {
        margin: 0;
        background-color: white;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }

    .result p:hover {
        background: #f2f2f2;
    }

    .search-text {
        display: none;
    }
</style>
<script>
    function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
        var iconMap = {
            info: "fa fa-info-circle",
            success: "fa fa-thumbs-up",
            warning: "fa fa-exclamation-triangle",
            danger: "fa ffa fa-exclamation-circle"
        };

        var iconAdded = false;

        var alertClasses = ["alert", "animated", "flipInX"];
        alertClasses.push("alert-" + severity.toLowerCase());

        if (dismissible) {
            alertClasses.push("alert-dismissible");
        }

        var msgIcon = $("<i />", {
            "class": iconMap[severity] // you need to quote "class" since it's a reserved keyword
        });

        var msg = $("<div />", {
            "class": alertClasses.join(" ") // you need to quote "class" since it's a reserved keyword
        });

        if (title) {
            var msgTitle = $("<h4 />", {
                html: title
            }).appendTo(msg);

            if (!iconAdded) {
                msgTitle.prepend(msgIcon);
                iconAdded = true;
            }
        }

        if (summary) {
            var msgSummary = $("<strong />", {
                html: summary
            }).appendTo(msg);

            if (!iconAdded) {
                msgSummary.prepend(msgIcon);
                iconAdded = true;
            }
        }

        if (details) {
            var msgDetails = $("<p />", {
                html: details
            }).appendTo(msg);

            if (!iconAdded) {
                msgDetails.prepend(msgIcon);
                iconAdded = true;
            }
        }


        if (dismissible) {
            var msgClose = $("<span />", {
                "class": "close", // you need to quote "class" since it's a reserved keyword
                "data-dismiss": "alert",
                html: "<i class='fa fa-times-circle'></i>"
            }).appendTo(msg);
        }

        $('#' + appendToId).prepend(msg);

        if (autoDismiss) {
            setTimeout(function() {
                msg.addClass("flipOutX");
                setTimeout(function() {
                    msg.remove();
                }, 1000);
            }, 5000);
        }
    }
    $(document).ready(function() {
        $('.search-box input[type="text"]').on("keyup input", function() {
            var inputVal = $(this).val();
            var category = $('.category').val();
            var resultDropdown = $(this).siblings(".result");
            // console.log(inputVal);
            if (inputVal.length) {
                $.post("/pcs/backend-search.php", {
                    term: inputVal,
                    cid: category
                    // alert( "success" );
                }).done(function(data) {
                    var pid = $('.search-text').val();
                    // console.log('test'+pid);
                    // console.log(data);
                    resultDropdown.html(data);
                    // window.location.href = ''
                });
            } else {
                resultDropdown.empty();
            }
        });

        $(document).on("click", ".result p", function() {
            // console.log($('.search-text').text());
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            console.log($(this).parents(".search-box").find('.search-text'));
            $(this).parents(".pid").val();
            $(this).parent(".result").empty();
        });
    });
</script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2d3956;">
        <a class="navbar-brand" href="/pcs/index.php">Personal Computer Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="form-inline col-lg-10 col-md-12 col-sm-12 mt-2">
                <div class="input-group col-12">
                    <div class="input-group-prepend">
                        <select name="category" id="category" class="btn category dropdown-toggle" style="background-color: #616a7f; color: white">
                            <option>Select Category</option>
                            <option value="cbt">Cabinet</option>
                            <option value="gc">Graphics Card</option>
                            <option value="mb">Motherboard</option>
                            <option value="cpu">Processor</option>
                            <option value="psu">PSU</option>
                            <option value="ram">RAM</option>
                            <option value="sd">Storage Drives</option>
                            <option value="ltp">Laptops</option>
                            <option value="hdp">Headphones</option>
                            <option value="kb">Keyboards</option>
                            <option value="mon">Monitor</option>
                            <option value="mse">Mouse</option>
                            <option value="cam">Webcam</option>
                        </select>
                    </div>
                    <div class="search-box">
                        <input type="text" class="form-control" placeholder="Select Category Then Type To Search">
                        <input type="hidden" class="form-control" class="pid">
                        <div class="result pl-3"></div>
                    </div>
                    <!-- <div class="input-group-append">
                        <button class="btn" style="background-color: #616a7f; color: white" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div> -->
                </div>
            </form>
            <div class="form-inline my-2 my-lg-0 col-lg-1 col-md-12 col-sm-12 mt-2">
                <?php
                if(isset($_SESSION['userid'])){
                    $userid = $_SESSION['userid'];
                }
                if ($_SERVER['REQUEST_URI'] != '/pcs/checkout.php' && $_SERVER['REQUEST_URI'] != '/pcs/cart.php') {
                    // echo $_SERVER['REQUEST_URI'];
                    if (isset($_SESSION['email'])) {
                ?>
                        <div class="dropdown mt-2 col-12 p-0" style="font-size: 1.1em;">

                            <a class="dropdown-toggle cart" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-shopping-cart" aria-hidden="true"></span> Cart
                                <span class="badge badge-pill badge-warning">
                                    <?php
                                    $product_query = "SELECT count(*) as no_of_products FROM cart_details WHERE userid = $userid";
                                    $result = $connect_db->query($product_query);
                                    if ($result->num_rows > 0) {
                                        while ($count = $result->fetch_assoc()) {
                                            echo $count['no_of_products'];
                                        }
                                    }
                                    ?>
                                </span>
                            </a>

                            <div class=" dropdown-menu dropdown-menu-right p-1" aria-labelledby="dropdownMenuLink">
                                <?php
                                $product_query = "SELECT * FROM cart_details WHERE userid = $userid";
                                $total_price = 0;
                                $result = $connect_db->query($product_query);
                                if ($result->num_rows > 0) {
                                    while ($cart_products = $result->fetch_assoc()) {
                                        // print_r($cart_products);
                                        // exit;
                                ?>
                                        <a class="dropdown-item" href="#">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img class="cart-img" src="/pcs/images/products<?php echo $cart_products['product_image']; ?>">
                                                </div>
                                                <div class="col-8">
                                                    <p class="item-name"><?php echo $cart_products['product_name']; ?></p>
                                                    <p class="text-black-50">Price: <span class="text-danger">₹ <span><?php echo $cart_products['price'] . ' (' . $cart_products['quantity'] . ')'; ?></span></span></p>
                                                </div>
                                            </div>
                                        </a>

                                    <?php
                                        $total_price += $cart_products['price'] * $cart_products['quantity'];
                                    } ?>
                                    <div class="dropdown-divider"></div>
                                    <div class="text-center">
                                        <p>Total: <span class="text-primary">₹ <span><?php echo $total_price; ?></span></span></p>
                                    </div>
                                <?php } else {
                                    echo "<div class=' text-center'><span class='fa fa-shopping-cart' style='font-size: 2.5em' aria-hidden='true'></div><h6 class='text-danger text-center'>There are no items in your cart currently!</h6>";
                                }
                                ?>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item btn text-center text-white" style="background-color: #2d3956;" href="/pcs/cart.php">
                                    <h6>View Cart</h6>
                                </a>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="form-inline my-2 my-lg-0  col-lg-1 col-md-12 col-sm-12 mt-2 ml-2">
                <?php if (isset($_SESSION['email'])) { ?>
                    <a class="btn mt-2" style="font-size: 1.5em;color: white;" href="/pcs/profile.php">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                <?php } else { ?>
                    <a href="/pcs/login.php" class="btn btn-success mt-2">Login</a>
            </div>
        <?php } ?>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark subnav" style="background-color: #616a7f;">
        <div class="container">

            <a class="subnav-text" href="/pcs/categories_page.php">View All Categories</a>
            <div class="dropdown">
                <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Components
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=cabinet">Cabinet</a>
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=graphics_card">Graphics Card</a>
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=motherboard">Motherboard</a>
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=processor">Processor</a>
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=psu">PSU</a>
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=ram">RAM</a>
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=storage_device">Storage Devices</a>
                </div>
            </div>
            <a class="subnav-text" href="/pcs/product_archive_page.php/?category=laptop">Laptop</a>
            <div class="dropdown">
                <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Peripherals & Accessories
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=headphone">Headphones</a>
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=keyboard">Keyboard</a>
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=monitor">Monitor</a>
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=mouse">Mouse</a>
                    <a class="dropdown-item" href="/pcs/product_archive_page.php/?category=webcam">Webcam</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function truncateText(selector, maxLength) {
            var element = document.getElementsByClassName(selector);
            var truncated;
            for (var i = 0; i < element.length; i++) {
                truncated = element[i].innerText;
                if (truncated.length > maxLength) {
                    truncated = truncated.substr(0, maxLength) + '...';
                }
                document.getElementsByClassName(selector)[i].innerText = truncated;
            }


        }
        truncateText('item-name', 25);
    </script>
</body>

</html>