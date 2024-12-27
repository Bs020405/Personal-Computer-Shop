<html>

<head>
  <title>Reset Password ~ PCS</title>

</head>
<style>
  .container {
    position: absolute;
    top: 4%;
    left: 35%;
    padding: 3% 5%;
    border: 1px solid #e2efef;
    border-radius: 10px;
    background-color: #e0e9e9;
    /* color: white; */
  }

  input {
    border: 2px solid #e2efef;
    border-radius: 3px;
  }

  .btn {
    border: none;
    border-radius: 3px;
    font-size: 1.1em;
    cursor: pointer;
    color: white;
  }

  .submit {
    background-color: #4CAF50;
  }
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

<body bgcolor="#2d3956">
  <div class="container">

    <h2>Reset Password</h2>

    <?php
    include('connection.php');
    if (
      isset($_GET["key"]) && isset($_GET["email"])
      && isset($_GET["action"]) && ($_GET["action"] == "reset")
      && !isset($_POST["action"])
    ) {
      $key = $_GET["key"];
      $email = $_GET["email"];
      $curDate = date("Y-m-d H:i:s");
      $error = "";
      $query = mysqli_query($connect_db, "SELECT * FROM token WHERE `keytoken`='" . $key . "' and `email`='" . $email . "';");
      $row = mysqli_num_rows($query);
      // print_r($row);
      if ($row == "") {
        $error .= '<h2>Invalid Link</h2> <p>The link is invalid/expired.</p>';
      } else {
        $row = mysqli_fetch_assoc($query);
        $expDate = $row['expDate'];
        if ($expDate >= $curDate) {
    ?>
          <br />
          <form method="post" action="" name="update">
            <input type="hidden" name="action" value="update" />
            <br /><br />
            <label><strong>Enter New Password:</strong></label><br />
            <input type="password" name="pass1" id="pass1" maxlength="15" required />
            <br /><br />
            <label><strong>Re-Enter New Password:</strong></label><br />
            <input type="password" name="pass2" id="pass2" maxlength="15" required />
            <br /><br />
            <input type="hidden" name="email" value="<?php echo $email; ?>" />
            <input type="submit" id="reset" value="Reset Password" />
          </form>
    <?php
        } else {
          $error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which as valid only for 24 hours.<br/><br/></p>";
        }
      }
      if ($error != "") {
        echo "<div class='error'>" . $error . "</div><br />";
      }
    }


    if (isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"] == "update")) {
      $error = "";
      $pass1 = mysqli_real_escape_string($connect_db, $_POST["pass1"]);
      $pass2 = mysqli_real_escape_string($connect_db, $_POST["pass2"]);
      $email = $_POST["email"];
      $curDate = date("Y-m-d H:i:s");
      if ($pass1 != $pass2) {
        $error .= "<p>Password do not match, both password should be same.<br/><br/></p>";
        echo "
		<br /><a href='javascript:history.go(-1)'>Go Back</a>";
      }
      if ($error != "") {
        echo "<div class='error'>" . $error . "</div><br />";
      } else {
        mysqli_query($connect_db, "UPDATE user_details SET userPassword='" . md5($pass1) . "' WHERE userEmail='" . $email . "';");
        mysqli_query($connect_db, "DELETE FROM token WHERE `email`='" . $email . "';");
        echo '<div class="error"><p>Your password has been updated successfully.</p>
<p><a href="login.php">Click here</a> to Login.</p></div><br />';
      }
    }
    ?>
  </div>
</body>
</html>