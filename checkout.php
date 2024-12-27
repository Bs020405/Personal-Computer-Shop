<?php
require_once 'navbar.php';
require_once 'connection.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout ~ PCS</title>
    <style>
        .social-icon {
            display: inline-block;
            margin: 0 10px;
            height: 55px;
            width: 55px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <?php
        if(!isset($_SESSION['userid'])){
            echo "<script>window.location.href='/pcs/login.php';</script>";
        }
        $data = json_decode($_POST['data'], true);
        // echo count($data);
        if(!isset($data[1]['quantity'])){
            $data[1]['quantity'] = 1;
        }
        $total_price = 0;
        $userid = $_SESSION['userid'];
        $userEmail = $_SESSION['email'];
        ?>
        <div class="py-5">
            <h2>Order Summary</h2>
        </div>

        <div class="row">

            <div class="col-md-5 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill"><?php echo count($data); ?></span>
                </h4>
                <ul class="list-group mb-3">

                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Product Name</h6>
                        </div>
                        <span class="text-success">Price</span>
                    </li>

                    <?php
                    for ($i = 1; $i <= count($data); $i++) {
                        $total_price += $data[$i]['price'] * $data[$i]['quantity'];
                    ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-2"><?php echo $data[$i]['name']; ?></h6>
                                <small class="text-muted">All prices include taxes and fees**</small>
                            </div>
                            <span class="text-muted text-center"><?php echo $data[$i]['price'] . '<br>(' . $data[$i]['quantity'] . ')'; ?></span>
                        </li>
                    <?php
                    }
                    ?>


                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (₹)</span>
                        <strong>₹<?php echo $total_price; ?></strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-7 order-md-1">
                <h4 class="mb-3">Billing Information</h4>
                <form class="needs-validation" novalidate action="payment.php" method="POST">
                    <?php
                    $sql = "select * from user_details where userEmail= " . "'$userEmail'";
                    $result = $connect_db->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>
                                    <input type="text" class="form-control" name="firstname" id="firstName" placeholder="" value="<?php echo $username = $row['userFirstName']; ?>" required>
                                    <div class="invalid-feedback">
                                        Please Enter Valid First Name.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastName" placeholder="" value="<?php echo $username = $row['userLastName']; ?>"" required>
                                    <div class=" invalid-feedback">
                                    Please Enter Valid Last Name.
                                </div>
                            </div>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?php echo $row['userEmail']; ?>" disabled>
                    <div class=" invalid-feedback" style="width: 100%;">
                        Please Enter Valid Email.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="contact">Contact</label>
                <input type="tel" class="form-control" id="contact" name="contact" placeholder="" value="<?php echo $row['userContact']; ?>" required>
                <div class=" invalid-feedback">
                    Please enter a valid contact number.
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="" value="<?php echo $row['userAddress']; ?>" required>
                <div class=" invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="row">



                <div class="col-md-3 mb-3">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" placeholder="" value="<?php echo  $row['userCity']; ?>" required>
                    <div class=" invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" placeholder="" value="<?php echo  $row['userState']; ?>" required>
                    <div class=" invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>

                <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" placeholder="" value="<?php echo  $row['userCountry']; ?>" required>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>


                <div class="col">
                    <label for="address">Delivery Address</label>
                    <textarea class="form-control" id="deladdress" cols=150 placeholder="" value="" required><?php echo  $row['userAddress']; ?></textarea>
                    <div class=" invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h6 class="mb-3">Payment Options Available</h6>



            <div class="side-block">
                <img src="images/visa.png" class="social-icon" />
                <img src="images/maestro.png" class="social-icon" />
                <img src="images/mastercard.png" class="social-icon" />
                <img src="images/paytm.png" class="social-icon" />
                <img src="images/google.png" class="social-icon" />

                <hr class="mb-4">


            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Payment</button>
            <p class="font-weight-light text-center" style="font-size: 12px;"> *You'll be redirected to a secure payment gateway to complete your purchase securely. </p>
    <?php
                        }
                    }
                    // echo "<pre>";
                    // print_r(json_encode($data));
                    // echo "</pre>";
                    // die;
    ?>
    <input type="hidden" name="data" value='<?php echo json_encode($data); ?>'>
    </form>
    <hr class="mb-4">

        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.3/examples/checkout/form-validation.js"></script>

    <?php include('footer.php'); ?>

    <script>
        document.getElementById('same-address').onchange = function() {
            document.getElementById('deladdress').disabled = this.checked;
        };
    </script>

</body>

</html>