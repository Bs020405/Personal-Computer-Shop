<?php
include('navbar.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <style>
        .cart-body {
            background-color: white;
            margin: auto;
            border-radius: 5px;
            overflow-x: auto;
        }
    </style>
</head>

<body style="background-color: #e0e9e9;">
    <div class="cart-body shadow col-lg-11 col-md-11 col-sm-11 col-xs-12 mt-5 mb-5">
        <div class="p-4">
            <div class="row w-100">
                <div>
                    <h4 class="mb-5 text-center">
                        <span class="text-warning font-weight-bold">
                            <?php
                            $product_query = "SELECT count(*) as no_of_products FROM cart_details WHERE userid = $userid";
                            $result = $connect_db->query($product_query);
                            if ($result->num_rows > 0) {
                                while ($count = $result->fetch_assoc()) {
                                    echo $count['no_of_products'];
                                }
                            }
                            ?>
                        </span> items in your cart
                    </h4>
                    <?php
                    $data = array();
                    $product = array();
                    $product_query = "SELECT * FROM cart_details WHERE userid = $userid";
                    $total_price = 0;
                    $counter = 0;
                    $result = $connect_db->query($product_query);
                    if ($result->num_rows > 0) {
                    ?>
                        <table id="shoppingCart" class="table table-condensed " style="border-bottom: 1px solid #e0e9e9;">
                            <thead>
                                <tr>
                                    <th style="width:60%">Product</th>
                                    <th style="width:12%">Price</th>
                                    <th style="width:10%">Quantity</th>
                                    <th style="width:16%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($cart_products = $result->fetch_assoc()) {
                                    $counter++;
                                    $data[$counter]['pid'] = $cart_products['productid'];
                                    $data[$counter]['name'] = $cart_products['product_name'];
                                    $data[$counter]['quantity'] = $cart_products['quantity'];
                                    $data[$counter]['price'] = $cart_products['price'];
                                ?>
                                    <tr>
                                        <form action="functions.php" method="post">
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <img src="/pcs/images/products/<?php echo $cart_products['product_image']; ?>" alt="" class="img-fluid rounded mb-2 shadow ">
                                                    </div>
                                                    <div class="col-9">
                                                        <h5><?php echo $cart_products['product_name']; ?></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Price">
                                                <h5 class="text-danger">₹ <span><?php echo $cart_products['price']; ?></span></h5>
                                            </td>
                                            <td data-th="Quantity">
                                                <input type="number" name="quantity" class="form-control form-control-lg text-center" value="<?php echo $cart_products['quantity']; ?>">
                                                <input type="hidden" name="pid" value="<?php echo $cart_products['productid']; ?>">
                                            </td>
                                            <td class="actions" data-th="">
                                                <div class="text-right">
                                                    <button type="submit" name="update" class="btn btn-success btn-md mb-2">
                                                        Update
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="actions" data-th="">
                                                <div class="text-right">
                                                    <button type="submit" name="remove" class="btn btn-danger btn-md mb-2">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                <?php
                                    $total_price += $cart_products['price'] * $cart_products['quantity'];
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="float-right">
                            <h4>Subtotal:</h4>
                            <h1 class="text-danger">₹ <span><?php echo $total_price; ?></span></h1>
                        </div>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center pt-5" style="border-top: 1px solid #e0e9e9;">
                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="/pcs/">
                        <i class="fa fa-arrow-left mr-2"></i> Continue Shopping</a>
                </div>
                <div class="col-sm-6 order-md-2 text-right">
                    <form action="checkout.php" method="post">
                        <input type="hidden" name="data" value='<?php echo json_encode($data); ?>'>
                        <button type="submit" class="btn btn-success mb-4 btn-lg pl-5 pr-5">
                            Proceed to Checkout <i class="fa fa-arrow-right mr-2"></i></button>
                    </form>
                </div>
            </div>
        <?php
            } else {
                echo "<h5 class='text-danger text-center'>There are no items in your cart currently!</h5> 
                </div>
            </div><div class='row mt-4 d-flex align-items-center pt-5' style='border-top: 1px solid #e0e9e9;'>
                <div class='col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left'>
                    <a href='/pcs/'>
                        <i class='fa fa-arrow-left mr-2'></i> Continue Shopping</a>
                </div>
            </div>";
            }
        ?>

        </div>
    </div>

    <?php
    // echo '<pre>';
    // // print_r($cart_products);
    // print_r(json_encode($data));
    // echo '</pre>';
    include('footer.php');
    ?>
</body>

</html>