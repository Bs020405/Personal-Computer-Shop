<?php
include('navbar.php');
include('connection.php');
//session_start();
if (session_destroy()) {
    //header("refresh:5;url=index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <script type="text/javascript">
        var count = 5;
        var redirect = "index.php";

        function countDown() {
            var timer = document.getElementById("timer");
            if (count > 0) {
                count--;
                timer.innerHTML = "This page will redirect in " + count + " seconds.";
                setTimeout("countDown()", 1000);
            } else {
                window.location.href = redirect;
            }
        }
    </script>
</head>

<body>
    <div class="card text-center ">
        <div class="card-header">
            Leaving too soon ?
        </div>
        <div class="card-body">
            <h5 class="card-title">You're now logged out.</h5>
            <p class="card-text" id="timer">
                <script type="text/javascript">
                    countDown();
                </script>
            </p>


            <p>A bit more to buy? <a href="login.php">Login</a></p>
        </div>
        <div class="card-footer text-muted">
            Come back Soon !
        </div>
    </div>

    <?php include('footer.php'); ?>


</body>

</html>