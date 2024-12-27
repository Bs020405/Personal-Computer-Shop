<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Payment Successful</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
  <div class="container">

    <div class="page-header">
      <h2><a href="index.php">THANK YOU !!!</a></h2>
      <hr>
      <p class="lead">Payment Successful</p>
    </div>

    <h4><a onclick="javascript:location.href='http://localhost/pcs/';" id="countinue">Continue Shopping →</a></h4>


    <?php
    include 'src/instamojo.php';
    $api = new Instamojo\Instamojo('test_4fb7effa6c7df474582e50e0620', 'test_73a0328869f3693948bff2fda42', 'https://test.instamojo.com/api/1.1/');
    $payid = $_GET["payment_request_id"];
    try {
      $response = $api->paymentRequestStatus($payid);
      echo "<p>Payment ID : " . $response['payments'][0]['payment_id'] . "</p>";
      echo "<p>Payment Name : " . $response['payments'][0]['buyer_name'] . "</p>";
      echo "<p>Payment Email : " . $response['payments'][0]['buyer_email'] . "</p>";
      echo "<p>Payment Status : " . $response['status'] . "</p>";
      echo "<p>Amount Paid : " .  $response['amount'] . "</p>";
      // $_SESSION["id"] = $response['payments'][0]['payment_id'];
      // $_SESSION["name"] = $response['payments'][0]['buyer_name'];
      // $_SESSION["email"] = $response['payments'][0]['buyer_email'];
      // $_SESSION["status"] = $response['payments'][0]['status'];
      // $_SESSION["amount"] = $response['payments'][0]['amount'];
      // $_SESSION["mode"] = $response['payments'][0]['billing_instrument'];
      //echo $_SESSION[amount];
      echo "<hr>";
      echo "<details>";
      echo "<summary></summary>";
      echo "<p>";
      print_r($response);
      echo "</p>";
      echo "</details>";
      echo "<hr>";
      $servername = "remotemysql.com";
      $username = "8TUC1jSBnS";
      $password = "9A8J6YcKIb";
      $dbname = "8TUC1jSBnS";
      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $payment_id = $response['payments'][0]['payment_id'];
      $buyer_name = $response['payments'][0]['buyer_name'];
      $buyer_email = $response['payments'][0]['buyer_email'];
      $buyer_phone = $response['payments'][0]['buyer_phone'];
      $purpose =  $response['purpose'];
      $payment_status = $response['status'];
      $mode = $response['billing_instrument'];
      $payment_amount = $response['amount'];
      $datecreated = $response['payments'][0]['created_at'];
      $query = mysqli_query($conn, "INSERT INTO Payment (PaymentID,CustomerName,CustomerEmail,CustomerPhone,Amount,Purpose,Status,Mode,DateCreated)
                                                VALUES('$payment_id','$buyer_name','$buyer_email','$buyer_phone','$payment_amount','$purpose','$payment_status','$mode','$datecreated')");
      if ($query) {
        echo "✅";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);
    ?>
    <?php
    } catch (Exception $e) {
      print('Error: ' . $e->getMessage());
    }
    ?>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

</html>