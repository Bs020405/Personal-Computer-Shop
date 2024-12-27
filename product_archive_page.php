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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <title>Personal Computer Shop</title>

    <link rel="icon" href="images/logo.png">

    <style>
        .bodybg {
            background-color: #e0e9e9;
        }

        img {
            max-height: 200px;
            max-width: 100%;
        }

        .card-img-top {
            height: 200px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#sortby').on("change", function() {
                var inputVal = $(this).val();
                var category = $('input[type="hidden"].category').val();
                var cid = $('input[type="hidden"].cid').val();
                if (inputVal.length) {
                    $.getJSON("/pcs/backend-search.php", {
                        sortby: inputVal,
                        category: category,
                        cid: cid
                    }, function(data) {
                        // console.log(data.sortby);
                        if (data.redirect) {
                            $('.sortby').val(data.sortby);
                            window.location.href = data.redirect_url;
                        }
                    })
                } else {
                    resultDropdown.empty();
                }
            });
        });
    </script>
</head>

<body class="bodybg">
    <?php
    if (isset($_GET['category'])) {
        $category = $_GET['category'];
    }
    $count = 0;
    if (!isset($category)) {
        $category = $_POST['category'];
    }
    if(isset($_GET['sortby'])){
        $sortby = str_replace('_', ' ', $_GET['sortby']);
        $url = $_SERVER['PHP_SELF'] . '?category='.$category.'&sortby='.$_GET['sortby'];
    }
    if(isset($_POST['sortby'])){
        $sortby = str_replace('_', ' ', $_POST['sortby']);
        $url = $_SERVER['PHP_SELF'] . '?category='.$category.'&sortby='.$_POST['sortby'];
    }
    ?>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 order-md-2 col-lg-9">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="col-12">
                            <div class="dropdown text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                                <label class="mr-2">Sort by:</label>
                                <select name="sortby" id="sortby" class="btn dropdown-toggle" style="background-color: #616a7f; color: white">
                                    <option value="ftr">Featured</option>
                                    <option value="pdesc">Price Descending</option>
                                    <option value="pasc">Price Ascending</option>
                                    <option value="cdesc">Company Descending</option>
                                    <option value="casc">Company Ascending</option>
                                </select>
                                <form action="" method="post">
                                    <input type="hidden" class="sortby" name="sortby-text">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        if (isset($_POST['min'])) {
                            $min = $_POST['min'];
                        }
                        if (isset($_POST['max'])) {
                            $max = $_POST['max'];
                        }
                        if (isset($_POST['cid'])) {
                            $cid = $_POST['cid'];
                        }
                        $no_of_company = 0;
                        $product_query = "SELECT * FROM $category" . '_details';
                        if (isset($_POST['company'])) {
                            $companies_name = $_POST['company'];
                            $product_query = $product_query . " where " . $cid . "Company in (";
                            foreach ($companies_name as $name) {
                                $no_of_company++;
                                if ($no_of_company == '1') {
                                    $product_query .= "'$name'";
                                } else {
                                    $product_query .= ',' . "'$name'";
                                }
                            }
                            $product_query .= ')';
                        }
                        if (isset($min) && isset($max) && $max != 0) {
                            if ($no_of_company > 0) {
                                $product_query = $product_query . ' AND ' . $cid . 'Price BETWEEN ' . "$min and $max";
                            } else {
                                $product_query = $product_query . ' WHERE ' . $cid . 'Price BETWEEN ' . "$min and $max";
                            }
                        }
                        if (!empty($sortby)) {
                            $product_query .= ' order by '.$sortby;
                        }
                        // echo $product_query;
                        // exit();
                        $result = $connect_db->query($product_query);
                        if ($result->num_rows > 0) {
                            while ($product = $result->fetch_assoc()) {
                                // echo "<pre>";
                                // print_r($product);
                                // echo "</pre>";
                                // exit();
                                $count++;
                                $cid = $product['cid'];
                                $pid = $product[$cid . 'id'];
                        ?>
                                <div class="col-6 col-md-6 col-lg-4 mb-3">
                                    <div class="card h-100 border-0">
                                        <div class="card-img-top p-1">
                                            <img src="/pcs/images/products/<?php echo $category; ?>/<?php echo $pid; ?>/<?php echo $cid; ?>1.jpg" class="img-fluid mx-auto d-block" alt="Card image cap">
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="card-title">
                                                <a href="/pcs/<?php echo $_GET['category']; ?>_page.php?pid=<?php echo $pid; ?>" class=" font-weight-bold text-dark text-uppercase small"><?php echo $product[$cid . 'Name']; ?></a>
                                            </h5>
                                            <h5 class="card-price text-danger">
                                                <i>
                                                    ₹ <?php echo $product[$cid . 'Price']; ?></i>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
            <div class="col-md-4 order-md-1 col-lg-3 pb-5 pt-2 sidebar-filter bg-light" style="height: fit-content;">
                <h3 class="mt-0 mb-5">Showing <span class="text-primary"><?php echo $count; ?></span> Products</h3>

                <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">Filter</h6>
                <h6 class="text-uppercase font-weight-bold pt-5 mb-3" style="border-top:1px solid #616a7f">Company</h6>
                <form action="<?php echo $url; ?>" method="POST" name="filter">
                    <?php
                    $companies = $cid . 'Company';
                    $product_query = "SELECT * FROM $category" . "_details group by $companies";
                    $result = $connect_db->query($product_query);
                    if ($result->num_rows > 0) {
                        while ($product = $result->fetch_assoc()) {
                            $company = $product[$cid . 'Company'];
                            // echo "<pre>";
                            // print_r($product);
                            // echo "</pre>";
                            $pid = $product[$cid . 'id'];
                            // exit();
                    ?>
                            <div class="mt-2 mb-2 pl-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="company[]" id="<?php echo $company; ?>" value="<?php echo $company; ?>">
                                    <label class="custom-control-label" for="<?php echo $company; ?>"><?php echo $company; ?></label>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <h6 class="text-uppercase pt-5 mb-3 font-weight-bold" style="border-top:1px solid #616a7f">Price</h6>
                    <div class="price-filter-control">
                        <input type="number" class="form-control w-50 pull-left mb-2" name="min" value="0" id="price-min-control" placeholder="Min">
                        <input type="number" class="form-control w-50 pull-right" name="max" value="0" id="price-max-control" placeholder="Max">
                    </div>
                    <input id="ex2" type="text" class="slider " value="50,150" data-slider-min="10" data-slider-max="200" data-slider-step="5" data-slider-value="[50,150]" data-value="50,150" style="display: none;">
                    <input type="hidden" name="cid" class="cid" value="<?php echo $cid; ?>">
                    <input type="hidden" name="category" class="category" value="<?php echo $category; ?>">
                    <input type="hidden" name="sortby" class="sortby" value="<?php echo $sortby; ?>">
                    <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                    <button name="ApplyFilter" type="submit" class="btn btn-lg btn-block btn-primary mt-5">Apply Filer</button>
                </form>
            </div>

        </div>
    </div>
    <?php
    include('footer.php');
    ?>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</body>

</html>