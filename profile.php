<?php
include('navbar.php');
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>My Profile ~ PCS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
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

<body>
  <div class="container light-style flex-grow-1 container-p-y">


    <h4 class="font-weight-bold py-3 mb-4">
      My Profile
    </h4>
    <?php
    $userid = $_SESSION['userid'];
    $userEmail = $_SESSION['email'];
    $sql = "select * from user_details where userEmail= " . "'$userEmail'";
    $result = $connect_db->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <div class="card overflow-hidden">
          <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 pt-0">
              <div class="list-group list-group-flush account-settings-links">

                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> General</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change password</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#my-orders"><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Orders</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#shipping-address"><i class="fa fa-map-marker" aria-hidden="true"></i> Shipping Address</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#complaints"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Complaints</a>
                <a class="list-group-item list-group-item-action" data-toggle="modal" href="#logout" data-target="#exampleModal"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>

              </div>
            </div>
            <div class="col-md-9">
              <div class="tab-content">
                <div class="tab-pane fade active show" id="account-general">

                  <hr class="border-light m-0">
                  <form action="" method="post">
                    <div class="card-body">
                      <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control mb-1" name="fname" value="<?php echo $username = $row['userFirstName']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control mb-1" name="lname" value="<?php echo $row['userLastName']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Contact</label>
                        <input type="tel" class="form-control" name="contact" value="<?php echo $row['userContact']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control mb-1" value="<?php echo $row['userEmail']; ?>" disabled>

                      </div>

                      <div class="form-group">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="date" value="<?php echo $row['userDOB']; ?>">
                      </div>

                      <div class="text-right mt-3">
                        <input class="btn btn-success" name="general" type="submit" value="Update" />
                      </div>


                    </div>
                  </form>


                </div>
                <div class="tab-pane fade" id="account-change-password">
                  <div class="card-body pb-2">
                    <form action="" method="post">
                      <div class="form-group">
                        <label class="form-label">New password</label>
                        <input type="password" class="form-control" id="pass" required>
                      </div>

                      <div class="form-group">
                        <label class="form-label">Confirm password</label>
                        <input type="password" class="form-control" name="cpassword" id="cpass" required>
                      </div>

                      <div class="text-right mt-3">
                        <input class="btn btn-success" name="changepassword" type="submit" value="Change Password" />
                      </div>
                    </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="shipping-address">
                  <div class="card-body pb-2">
                    <form action="" method="post">
                      <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" rows="5" name="userAddress" required><?php echo $row['userAddress']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="userCity" value="<?php echo $row['userCity']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control" name="userState" value="<?php echo $row['userState']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" name="userCountry" value="<?php echo $row['userCountry']; ?>" required>
                      </div>

                      <div class="text-right mt-3">
                        <input class="btn btn-success" name="address" type="submit" value="Update" />
                      </div>
                    </form>

                  </div>
                  <hr class="border-light m-0">

                </div>

                <div class="tab-pane fade" id="complaints">


                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="current-tab" data-toggle="tab" href="#complaint" role="tab" aria-controls="complaint" aria-selected="true"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> My Complaints</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="add-tab" data-toggle="tab" href="#new" role="tab" aria-controls="new" aria-selected="false"><i class="fa fa-plus" aria-hidden="true"></i> New Complaint</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="complaint" role="tabpanel" aria-labelledby="current-tab">



                      <?php

                      $mail = $_SESSION['email'];
                      $records = mysqli_query($connect_db, "select * from complaints where CustomerEmail = '$mail' ");

                      while ($data = mysqli_fetch_array($records)) {
                      ?>

                        <div class="card">
                          <div class="card-header">Complaint ID : <?php echo $data['ID']; ?></div>
                          <div class="card-body">
                            <blockquote class="blockquote mb-0">
                              <p><?php echo $data['ComplaintDesc']; ?></p>
                              <footer class="blockquote-footer">Status : <mark><?php echo $data['ComplaintStatus']; ?></mark></footer>
                            </blockquote>

                            <div class="text-right mt-3">
                              <form action="" method="post">
                                <input type="text" name="cid" value="<?php echo $data['ID']; ?>" hidden>
                                <input class="btn btn-outline-danger" name="delete" type="submit" value="Delete" />
                              </form>
                            </div>
                          </div>
                        </div>


                      <?php
                      }
                      ?>










                    </div>
                    <div class="tab-pane fade" id="new" role="tabpanel" aria-labelledby="add-tab">
                      <div class="card-body pb-2">
                        <div class="form-group">
                          <form action="" method="post">
                            <label class="form-label">New Complaint</label>
                            <textarea class="form-control" name="complaint" rows="5" placeholder="Please describe your issue in detail." required></textarea>

                            <div class="text-right mt-3">
                              <input class="btn btn-success" name="addcomplaint" type="submit" value="Submit" />
                            </div>
                          </form>
                        </div>
                      </div>

                    </div>
                  </div>



                </div>
                <div class="tab-pane fade" id="my-orders">

                  <div class="col-sm-12">
                    <div class="row">

                      <?php

                      $mail = $_SESSION['email'];
                      $records = mysqli_query($connect_db, "select * from order_details where userEmail = '$mail' ");


                      while ($data = mysqli_fetch_array($records)) {
                      ?>
                        <?php
                        if ($data['orderStatus'] === 'Completed') {
                          $date = 'Successfully Delivered on ' . $data['delivery_date'];
                        } else {
                          $date =  $data['order_date'];
                        }
                        ?>
                        <div class="card col-sm-12">
                          <div class="card-header" style="color: cornflowerblue;">
                            <i class="fa fa-calendar-check-o" style="color:darkgreen;" aria-hidden="true"></i>
                            Ordered on : <?php echo $data['order_date']; ?>
                          </div>
                          <div class="card-body">
                            <p class="card-text" style="font-size: smaller;"><i class="fa fa-shopping-bag"></i> Order ID : <?php echo $data['orderid']; ?></p>
                            <h6 class="card-title"> <?php echo $data['product_name']; ?></h6>

                            <p class="card-text font-weight-light">Total Amount(Rs.) : <?php echo $data['price']; ?> | Quantity : <?php echo $data['quantity']; ?> </p>

                            <p class="card-text">
                              <i class="fa fa-truck" aria-hidden="true"></i>
                              Delivery : <?php echo $date ?></p>
                            <p class="badge badge-primary text-wrap">Status : <?php echo $data['orderStatus']; ?></p>
                          </div>








                        </div>
                        <hr>



                      <?php

                      } ?>

                      <!-- <div class=" card border-primary mb-3 col-sm-4" style="max-width: 18rem;">
                              <div class="card-header">Ordered : 01-01-2020 </div>
                              <div class="card-body text-primary">
                                <h5 class="card-title">ASUS TUF GAMING A15 LAPTOP 15.6"</h5>
                                <p class="card-text">Amount : 99999</p>
                                <p>Estimated Delivery Date : <mark>01-01-2020</mark></p>
                              </div>
                          </div> -->



                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
      <?php }
    } ?>



        </div>

        <?php
        if (!empty($_POST['general'])) {

          $ufname = $_POST['fname'];
          $ulname = $_POST['lname'];
          $ucontact = $_POST['contact'];
          $udate = $_POST['date'];


          $sql = "UPDATE user_details SET userFirstName = '$ufname', userLastName= '$ulname' , userContact = $ucontact, userDOB = '$udate' WHERE userEmail= '$userEmail' ";

          if ($connect_db->query($sql) === TRUE) {
            echo "<script type='text/javascript'>noti('success','Details Updated Successfully');</script>";
            echo "<meta http-equiv='refresh' content='2'>";
          } else {
            echo "<script type='text/javascript'>noti('error','Error Updating Record...Please Try Again');</script>";
            //echo "Error updating record: " . $connect_db->error;
          }
        }

        if (!empty($_POST['changepassword'])) {

          $cpass = $_POST['cpassword'];

          $sql = "UPDATE user_details SET userPassword = md5($cpass)  WHERE userEmail= '$userEmail' ";

          if ($connect_db->query($sql) === TRUE) {
            echo "<script type='text/javascript'>noti('success','Password Changed Successfully');</script>";
            echo "<meta http-equiv='refresh' content='2'>";
          } else {
            echo "<script type='text/javascript'>noti('error','Error Updating Record...Please Try Again');</script>";
            //echo "Error updating record: " . $connect_db->error;
          }
        }


        if (!empty($_POST['address'])) {

          $uAddress = $_POST['userAddress'];
          $uCity = $_POST['userCity'];
          $uState = $_POST['userState'];
          $uCountry = $_POST['userCountry'];


          $sql = "UPDATE user_details SET userAddress = '$uAddress', userCity= '$uCity' , userState = '$uState', userCountry = '$uCountry' WHERE userEmail= '$userEmail' ";

          if ($connect_db->query($sql) === TRUE) {
            echo "<script type='text/javascript'>noti('success','Address Updated Successfully');</script>";
            echo "<meta http-equiv='refresh' content='2'>";
          } else {
            echo "<script type='text/javascript'>noti('error','Error Updating Record...Please Try Again');</script>";
            //echo "Error updating record: " . $connect_db->error;
          }
        }


        if (!empty($_POST['addcomplaint'])) {

          $newcomplaint = $_POST['complaint'];


          $query = "INSERT into complaints (CustomerID,CustomerName,CustomerEmail,ComplaintStatus,ComplaintDesc) VALUES ($userid,'$username','$userEmail', 'Pending','$newcomplaint')";
          $result = mysqli_query($connect_db, $query);
          if ($result) {

            echo "<meta http-equiv='refresh' content='2'>";
            echo "<script> noti('success','Complaint Added Successfully'); </script>";
          }
        }




        if (!empty($_POST['delete'])) {

          $id = $_POST['cid'];

          $sql = "DELETE FROM complaints WHERE ID = $id ";

          if ($connect_db->query($sql) === TRUE) {
            echo "<script type='text/javascript'>noti('sucess','Complaint Deleted Successfully');</script>";
            echo "<meta http-equiv='refresh' content='2'>";
          } else {
            echo "<script type='text/javascript'>noti('error','Error Updating Record...Please Try Again');</script>";
            // echo "Error Deleting Record: " . $connect_db->error;
          }
        }

        ?>




        <script>
          var password = document.getElementById("pass"),
            confirm_password = document.getElementById("cpass");

          function validatePassword() {
            if (password.value != confirm_password.value) {
              confirm_password.setCustomValidity("Both Passwords Don't Match");
            } else {
              confirm_password.setCustomValidity('');
            }
          }

          password.onchange = validatePassword;
          confirm_password.onkeyup = validatePassword;
        </script>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Logout</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure you want to log out ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='logout.php'">Logout</button>
              </div>
            </div>
          </div>
        </div>
  </div>
  <?php include('footer.php'); ?>
</body>


</html>