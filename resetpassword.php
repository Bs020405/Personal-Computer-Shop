<html>

<head>
  <title>Reset Password</title>
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

<body bgcolor="#2d3956">

  <div class="container">
    <h2>Reset Password</h2>

    <?php
    include('connection.php');
    if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
      $email = $_POST["email"];
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      $email = filter_var($email, FILTER_VALIDATE_EMAIL);
      $error = "";
      if (!$email) {
        $error .= "<p>Invalid email address please type a valid email address!</p>";
      } else {
        $sel_query = "SELECT * FROM user_details WHERE userEmail='" . $email . "'";
        $results = mysqli_query($connect_db, $sel_query);
        $row = mysqli_num_rows($results);
        if ($row == "") {
          $error .= "<p>No user is registered with this email address!</p>";
        }
      }
      if ($error != "") {
        echo "<div class='error'>" . $error . "</div>
	<br /><a href='javascript:history.go(-1)'>Go Back</a>";
      } else {
        $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
        $expDate = date("Y-m-d H:i:s", $expFormat);

        //$key = md5($hash);

        //$key = md5(2418*2+$email);
        $key = md5($email);
        $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
        $key = $key . $addKey;

        mysqli_query(
          $connect_db,
          "INSERT INTO token (`email`, `keytoken`, `expDate`)
VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');"
        );

        $output = '<p>Dear Customer,</p>';
        $output .= '<p>Please click on the following link to reset your password.</p>';
        $output .= '<p>-------------------------------------------------------------</p>';
        $output .= '<p><a href="localhost/pcs/passwordchange.php?key=' . $key . '&email=' . $email . '&action=reset" target="_blank" style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;">RESET PASSWORD</a></p>';
        $output .= '<p>-------------------------------------------------------------</p>';
        $output .= '<p>You are receiving this email because you have requested to reset your password.</p>';
        $output .= '<p>If you did not request to reset your password, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';
        $output .= '<p>Thank You</p>';
        $output .= '<p>Team PCS</p>';
        $body = $output;
        $subject = "PCS Password Recovery";

        $email_to = $email;
        $fromserver = "hotelorbitbaroda@gmail.com";
        require("PHPMailer/PHPMailerAutoload.php");
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "hotelorbitbaroda@gmail.com";
        $mail->Password = "hotelorbitrocks";
        $mail->Port = 587;
        $mail->IsHTML(true);
        $mail->From = "hotelorbitbaroda@gmail.com";
        $mail->FromName = "PCS";
        $mail->Sender = $fromserver;
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($email_to);
        if (!$mail->Send()) {
          echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
          echo "<div class='error'>
<p>An email has been sent to you with instructions on how to reset your password.</p>
</div><br/><br/><br/>";
        }
      }
    } else {
    ?>

      <form action="" method="post" name="reset">
        <table>
          <tr>
            <td>Email:</td>
            <td><input type="text" name="email" required /></td>
          </tr>
          <tr>
            <td style="padding: 10%;"><input class="btn submit" name="submit" type="submit" value="RESET PASSWORD" /></td>
          </tr>



        </table>
      </form>

    <?php } ?>
  </div>
</body>

</html>