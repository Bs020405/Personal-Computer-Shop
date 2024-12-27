<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    #pageMessages {
      position: fixed;
      bottom: 15px;
      right: 15px;
      width: 30%;
      z-index: 999;
    }

    .alert {
      position: relative;
    }

    .alert .close {
      position: absolute;
      top: 5px;
      right: 5px;
      font-size: 1em;
    }

    .alert .fa {
      margin-right: .3em;
    }
  </style>
  <script>
    function infomsg() {
      document.getElementById('info').innerHTML = '<h6>Product is already in your cart!</h6>';
      console.log('calling');
    }
  </script>
</head>

<body>
  <div id="pageMessages"></div>
  <div class="container">
    <?php
    // function addtocart($pid, $price)
    // {
    // print_r($_POST['addtocart']);
    // die;
    // global $connect_db;
    if (isset($_POST['addtocart'])) {
      $pid  = $_POST['pid'];
      $userid = $_SESSION['userid'];
      $price = $_POST['price'];
      $productName = $_POST['productName'];
      $productImg = $_POST['productImg'];
      $sql_query = "SELECT * FROM cart_details where userid='$userid' and productid='$pid'";
      $result = $connect_db->query($sql_query);
      if ($result->num_rows == 0) {
        $sql = "INSERT INTO cart_details (userid, productid, product_name, product_image, quantity, price) VALUES ($userid, '$pid', '$productName', '$productImg', '1', '$price')";
        if (mysqli_query($connect_db, $sql)) {
          echo "<script>createAlert('Successfully','Product Added In Cart!','You Can See Your Products In Cart!!!','success',true,true,'pageMessages');</script>";
          echo "<meta http-equiv='refresh' content='3'>";
        } else {
          echo "<script>createAlert('Opps!','Please Login','to add products to cart...','danger',true,false,'pageMessages');</script>";
          echo "<meta http-equiv='refresh' content='3'>";
        }
      } else {
        // echo "<script>createAlert('Opps!','Something went wrong','Please Try again after sometime','danger',true,false,'pageMessages');</script>";
        echo "<script>infomsg();</script>";
      }
    }
    // }
    ?>
  </div>
</body>
<script>
  function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
    var iconMap = {
      info: "fa fa-info-circle",
      success: "fa fa-thumbs-up",
      warning: "fa fa-exclamation-triangle",
      danger: "fa ffa fa-exclamation-circle"
    };

    var iconAdded = false;

    var alertClasses = ["alert", "animated", "flipInX"];
    alertClasses.push("alert-" + severity.toLowerCase());

    if (dismissible) {
      alertClasses.push("alert-dismissible");
    }

    var msgIcon = $("<i />", {
      "class": iconMap[severity] // you need to quote "class" since it's a reserved keyword
    });

    var msg = $("<div />", {
      "class": alertClasses.join(" ") // you need to quote "class" since it's a reserved keyword
    });

    if (title) {
      var msgTitle = $("<h4 />", {
        html: title
      }).appendTo(msg);

      if (!iconAdded) {
        msgTitle.prepend(msgIcon);
        iconAdded = true;
      }
    }

    if (summary) {
      var msgSummary = $("<strong />", {
        html: summary
      }).appendTo(msg);

      if (!iconAdded) {
        msgSummary.prepend(msgIcon);
        iconAdded = true;
      }
    }

    if (details) {
      var msgDetails = $("<p />", {
        html: details
      }).appendTo(msg);

      if (!iconAdded) {
        msgDetails.prepend(msgIcon);
        iconAdded = true;
      }
    }


    if (dismissible) {
      var msgClose = $("<span />", {
        "class": "close", // you need to quote "class" since it's a reserved keyword
        "data-dismiss": "alert",
        html: "<i class='fa fa-times-circle'></i>"
      }).appendTo(msg);
    }

    $('#' + appendToId).prepend(msg);

    if (autoDismiss) {
      setTimeout(function() {
        msg.addClass("flipOutX");
        setTimeout(function() {
          msg.remove();
        }, 1000);
      }, 5000);
    }
  }
</script>

</html>