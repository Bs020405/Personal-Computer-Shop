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
    <style>
        .bxs {
            box-shadow: 4px 4px 4px grey;
        }

        .left-panel {
            /* background: #455372; */
            padding: 4%;
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }

        .contact-info {
            margin-top: 10%;
        }

        .contact-info img {
            margin-bottom: 15%;
        }

        .contact-info h2 {
            margin-bottom: 10%;
        }

        .clmd9 {
            background: #fff;
            padding: 3%;
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }

        .contact-form label {
            font-weight: 600;
        }

        .contact-form button {
            background: #2d3956;
            color: #fff;
            font-weight: 600;
            width: 25%;
        }

        .contact-form button:focus {
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container p-5">
        <div class="row mp bxs">
            <div class="col-md-3 left-panel bg-primary text-white text-center">
                <div class="contact-info">
                    <i style="font-size: 3.5em;" class="fa fa-envelope mb-3" aria-hidden="true"></i>
                    <h2>Contact Us</h2>
                    <h4>We would love to hear from you !</h4>
                </div>
            </div>
            <div class="col-md-9 clmd9">
                <div class="contact-form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="fname">First Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="lname">Last Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="comment">Comment:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>