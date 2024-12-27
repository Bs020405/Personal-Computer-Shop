<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
     <title>Registration</title>
     <link rel="stylesheet" href="css/style.css" />
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon" href="/pcs/images/logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<style>
     .body-bg {
          background-image: radial-gradient(circle, #2d3956, #455372);
          background-attachment: fixed;
     }

     .signup-form {
          max-width: 500px;
          padding: 3% 5%;
          margin: auto;
          margin-top: 2%;
          margin-bottom: 2%;
          border-radius: 10px;
          background-color: #e0e9e9;
          /* color: white; */
     }

     .form-input {
          border: 1px solid #e2efef;
          border-radius: 5px;
          width: 100%;
     }

     .form-textarea {
          border: 1px solid #e2efef;
          border-radius: 5px;
          width: 100%;
          height: 5em;
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
<script>
     function noti(typ, text) {
          swal({
               position: 'bottom-end',
               width: 300,
               height: 200,
               type: typ,
               title: "",
               text: text,
               timer: 2000,
               showConfirmButton: false

          });
     };
</script>

<body class="body-bg">
     <?php
     require_once 'connection.php';
     session_start();
     if (isset($_SESSION['email'])) {
          header('Location:index.php');
     }
     if (isset($_POST['submit'])) {

          $email = stripslashes($_REQUEST['email']);
          $email = mysqli_real_escape_string($connect_db, $email);
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($connect_db, $password);

          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $contact = $_POST['contact'];
          $address = $_POST['address'];
          $date = $_POST['date'];
          $city = $_POST['city'];
          $state = $_POST['state'];
          $country = $_POST['country'];


          $email_check = "SELECT * FROM user_details WHERE userEmail='$email'";
          $email_res = $connect_db->query($email_check);
          // print_r($email_res);
          // exit();   
          if ($email_res->num_rows > 0) {
               //$error = "Email already exist";
               echo "<script type='text/javascript'>noti('error','Email Alredy Exist');</script>";
          } else {

               $query = "INSERT into `user_details` (userFirstName,userLastName,userPassword,userEmail,userContact,userCity,userState,userCountry,userAddress,userDOB) VALUES ('$fname','$lname','" . md5($password) . "', '$email','$contact','$city','$state','$country','$address','$date')";
               $result = mysqli_query($connect_db, $query);
               if ($result) {

                    // echo '<script>alert("Registration Successful")</script>';
                    // header("Location:login.php");

                    echo "<script type='text/javascript'>noti('success','Registration Successful');</script>";
                    echo "<meta http-equiv=\"refresh\" content=\"2;url=login.php\">";
               }
          }
     }

     ?>
     <div class="signup-form shadow">
          <h1 style="text-align: center;">Register</h1>
          <form action="" method="post" name="signup">
               <div>
                    <div class="row mt-5">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">First Name:</div>
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="text" class="form-input shadow" name="fname" required /></div>
                    </div>

                    <div class="row mt-2">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Last Name:</div>
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="text" class="form-input shadow" name="lname" required /></div>
                    </div>

                    <div class="row mt-2">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Email:</div>
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="email" class="form-input shadow" name="email" required /></div>
                    </div>

                    <div class="row mt-2">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Password:</div>
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="password" class="form-input shadow" name="password" required /></div>
                    </div>

                    <div class="row mt-2">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">BirthDate:</div>
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="date" class="form-input shadow" name="date" required /></div>
                    </div>

                    <div class="row mt-2">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Address:</div>
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><textarea type="text" class="form-textarea shadow" rows="5" cols="27" name="address" required></textarea></div>
                    </div>

                    <div class="row mt-2">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Contact:</div>
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="tel" class="form-input shadow" name="contact" required /></div>
                    </div>

                    <div class="row mt-2">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">City:</div>
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="text" class="form-input shadow" name="city" required /></div>
                    </div>

                    <div class="row mt-2">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">State:</div>
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="text" class="form-input shadow" name="state" required /></div>
                    </div>

                    <div class="row mt-2">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">Country:</div>
                         <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><input type="text" class="form-input shadow" name="country" required /></div>
                    </div>

                    <div class="p-5 text-center"><input class="btn btn-success" name="submit" type="submit" value="SIGNUP" /></div>

               </div>
          </form>
          <p class="text-center">Already a User? <a href='login.php'>Login Here</a></p>
     </div>

</body>

</html>