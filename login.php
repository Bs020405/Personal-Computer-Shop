<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PCS ~ Login</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon" href="/pcs/images/logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<script>
  function noti() {
    swal({
      type: 'error',
      title: "Login Failed!",
      text: "Invalid Username or Password.",
      timer: 2000
    });
  };
</script>

<style>
  .body-bg {
    background-image: radial-gradient(circle, #2d3956, #455372);
    background-attachment: fixed;
  }

  .login-form {
    max-width: 450px;
    padding: 3% 5%;
    margin: auto;
    margin-top: 5%;
    border-radius: 10px;
    background-color: #e0e9e9;
    /* color: white; */
  }

  .form-input {
    border: 1px solid #e2efef;
    border-radius: 5px;
    width: 100%;
  }



  /* .btn {
    border: none;
    border-radius: 3px;
    font-size: 1.1em;
    cursor: pointer;
    color: white;
  } */

  /* .submit {
    background-color: #4CAF50;
  } */
</style>

<body class="body-bg">

  <?php
  include "connection.php";
  session_start();
  if (isset($_SESSION['email'])) {
    header('Location:index.php');
  }
  if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($connect_db, $_POST['email']);
    $password = mysqli_real_escape_string($connect_db, $_POST['password']);
    $sql_query = "select count(*) as num,userid from user_details where userEmail='" . $email . "' and userPassword='" . md5($password) . "'";
    $result = $connect_db->query($sql_query);
    $row = mysqli_fetch_array($result);
    // print_r($row);
    // exit();
    $count = $row['num'];
    // echo $count = $row['num'];
    // exit();
    if ($count > 0) {
      $_SESSION['userid'] = $row['userid'];
      $_SESSION['email'] = $email;
      // header('Location: dashboard.php');
      header('Location: /pcs/index.php');
      // echo '<script>alert("Welcome, Login Successful")'.$_SESSION['userid'].'</script>';

    } else {
      //echo '<script>alert("Incorrect Username or Password")</script>';
      echo "<script> noti(); </script>";
    }
  }
  ?>
  <div class="login-form shadow">
    <h1 style="text-align: center;">LOGIN</h1>
    <form action="" method="post" name="login">
      <div>
        <div class="row mt-5">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">Email:</div>
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><input type="email" class="form-input shadow" name="email" required /></div>
        </div>

        <div class="row mt-2">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">Password:</div>
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><input type="password" class="form-input shadow" name="password" required /></div>

        </div>
        <p class="text-right"><a href='resetpassword.php'>Need Help ?</a></p>
        <div>
          <div class="p-5 text-center"><input class="btn btn-success" name="submit" type="submit" value="LOGIN" /></div>
        </div>



      </div>
    </form>
    <p class="text-center">Not registered yet? <a href='registration.php'>Register Here</a></p>
  </div>



</body>


</html>