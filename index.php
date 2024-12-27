<?php
include('navbar.php');
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Personal Computer Shop</title>
  <style>
    .csimg {
      filter: brightness(40%);
    }

    .card-img-div {
      height: 210px;
      padding: auto;
      background-color: white;
    }

    .cimg {
      max-height: 200px;
      max-width: 100%;
    }

    .carousel-item {
      max-height: 450px;
      max-width: 100%;
    }

    .prod-card {
      max-height: 350px;
    }
  </style>
</head>

<body>
  <!-- carousel start -->
  <div id="hpCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#hpCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#hpCarousel" data-slide-to="1"></li>
      <li data-target="#hpCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100 csimg" src="images/img_8.jpg" alt="First slide">
        <div class="carousel-caption">
          <h1>Laptop</h1>
          <h5>Improve productivity on the go</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100 csimg" src="images/gc_img_2.jpg" alt="Second slide">
        <div class="carousel-caption">
          <h1>Graphics Card</h1>
          <h5>Experience the fastest gaming performance and breathtaking graphics</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img class="w-100 csimg" src="images/trident_z_rgb_2.jpg" alt="Third slide">
        <div class="carousel-caption">
          <h1>RAM</h1>
          <h5>Experience Lightning fast speeds</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#hpCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#hpCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- carousel end -->
  <img class="mt-3" style="width: 100%;" src="images/banner7.png" alt="Card image cap">
  <img class="mt-3 shadow" style="width: 100%;" src="images/banner6.jpg" alt="Card image cap">


  <div class="p-4 mt-3">
    <h3>Computer Components</h3>
    <div class="card-deck text-white text-center">
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div p-1">
          <img class="cimg" src="images/products/processor/cpu0000005/cpu1.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Processor</h5>
          <a href="/pcs/product_archive_page.php/?category=processor" class="btn btn-warning">View more</a>
        </div>
      </div>
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/graphics_card/gc00000001/gc1.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Graphics Card</h5>
          <a href="/pcs/product_archive_page.php/?category=graphics_card" class="btn btn-warning">View more</a>
        </div>
      </div>
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/ram/ram0000004/ram1.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">RAM</h5>
          <a href="/pcs/product_archive_page.php/?category=ram" class="btn btn-warning">View more</a>
        </div>
      </div>
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/motherboard/mb00000005/mb1.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Motherboard</h5>
          <a href="/pcs/product_archive_page.php/?category=motherboard" class="btn btn-warning">View more</a>
        </div>
      </div>
    </div>
    <div class="card-deck text-white text-center mt-2">
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/cabinet/cbt0000001/cbt1.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Cabinet</h5>
          <a href="/pcs/product_archive_page.php/?category=cabinet" class="btn btn-warning">View more</a>
        </div>
      </div>
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/storage_device/sd00000009/sd2.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Storage Device</h5>
          <a href="/pcs/product_archive_page.php/?category=storage_device" class="btn btn-warning">View more</a>
        </div>
      </div>

      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/psu/psu0000001/psu1.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Power Supply Unit</h5>
          <a href="/pcs/product_archive_page.php/?category=psu" class="btn btn-warning">View more</a>
        </div>
      </div>
    </div>
  </div>

  <!-- <img style="width: 100%;" src="images/banner4.jpg" alt="Card image cap"> -->
  <img class="mt-3" style="width: 100%;" src="images/banner8.jpg" alt="Card image cap">

  <div class="p-4 mt-3" style="background-color: #2d3956;">
    <h3 style="color: white;">Featured Laptops</h3>
    <div class="card-deck text-center">
      <?php
      $sql = "SELECT * FROM laptop_details limit 4";
      $result = $connect_db->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $cid = $row['cid'];
          $pid = $row[$cid . 'id'];
      ?>
          <div class="card border-0 prod-card">
            <div class="card-img-div">
              <img class="cimg" src="/pcs/images/products/laptop/<?php echo $row['ltpid']; ?>/ltp1.jpg" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="card-title item-name"><?php echo $row['ltpName']; ?></h5>
              <a href="laptop_page.php/?pid=<?php echo $pid; ?>" class="btn btn-warning">View more</a>
            </div>
          </div>
          <!-- <div class="card border-0 prod-card">
        <img class="cimg" src="images/gc_img_2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Laptop 2</h5>          
          <a href="#" class="btn btn-warning">View more</a>
        </div>
      </div>
      <div class="card border-0 prod-card">
        <img class="cimg" src="images/trident_z_rgb_2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Laptop 3</h5>          
          <a href="#" class="btn btn-warning">View more</a>
        </div>
      </div>
      <div class="card border-0 prod-card">
        <img class="cimg" src="images/img_8.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Laptop 4</h5>          
          <a href="#" class="btn btn-warning">View more</a>
        </div>
      </div> -->
      <?php }
      } ?>
    </div>
  </div>
  <img class="mt-3" style="width: 100%;" src="images/banner9.jpg" alt="Card image cap">
  <!-- <img style="width: 100%;" src="images/banner8.jpg" alt="Card image cap"> -->

  <div class="p-4 mt-3">
    <h3>Computer Peripherals and Accessories</h3>
    <div class="card-deck text-white text-center">
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/monitor/mon0000006/mon1.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Monitor</h5>
          <a href="/pcs/product_archive_page.php/?category=monitor" class="btn btn-warning">View more</a>
        </div>
      </div>
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/keyboard/kb00000005/kb1.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Keyboard</h5>
          <a href="/pcs/product_archive_page.php/?category=keyboard" class="btn btn-warning">View more</a>
        </div>
      </div>
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/mouse/mse0000003/mse2.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Mouse</h5>
          <a href="/pcs/product_archive_page.php/?category=mouse" class="btn btn-warning">View more</a>
        </div>
      </div>
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/headphone/hdp0000005/hdp1.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Headphone</h5>
          <a href="/pcs/product_archive_page.php/?category=headphone" class="btn btn-warning">View more</a>
        </div>
      </div>
      <div class="card border-0 prod-card" style="background-color: #2d3956;">
        <div class="card-img-div">
          <img class="cimg" src="images/products/webcam/cam0000005/cam2.jpg" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title">Webcam</h5>
          <a href="/pcs/product_archive_page.php/?category=webcam" class="btn btn-warning">View more</a>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>
  <script>
    function truncateText(selector, maxLength) {
      var element = document.getElementsByClassName(selector);
      var truncated;
      for (var i = 0; i < element.length; i++) {
        truncated = element[i].innerText;
        if (truncated.length > maxLength) {
          truncated = truncated.substr(0, maxLength) + '...';
        }
        document.getElementsByClassName(selector)[i].innerText = truncated;
      }


    }
    truncateText('item-name', 35);
  </script>
</body>

</html>