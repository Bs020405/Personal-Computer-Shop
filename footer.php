<html>

<head>
    <style>
        .list-group {
            list-style-type: none;
        }

        .prod-cat {
            color: #e0e9e9;
            font-size: 0.9em;
            text-decoration: none;
        }

        .mainc {
            color: white;
        }

        .prod-cat:hover,
        .mainc:hover {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
        }
    </style>
</head>

<body>
    <footer class="text-white" style="background-color: #455372">
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <h5><strong>Components</strong></h5>
                    <ul class="list-group">
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=cabinet">Cabinet</a></li>
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=graphics_card">Graphics Card</a></li>
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=motherboard">Motherboard</a></li>
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=processor">Processor</a></li>
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=psu">PSU</a></li>
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=ram">RAM</a></li>
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=storage_device">Storage Drives</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5><a href="/pcs/product_archive_page.php/?category=laptop" class="mainc"><strong>Laptops</strong></a></h5>
                </div>
                <div class="col-md-3">
                    <h5><strong>Peripherals & Accessories</strong></h5>
                    <ul class="list-group">
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=headphone">Headphones</a></li>
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=keyboard">Keyboard</a></li>
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=monitor">Monitor</a></li>
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=mouse">Mouse</a></li>
                        <li><a class="prod-cat" href="/pcs/product_archive_page.php/?category=webcam">Webcam</a></li>
                    </ul>
                </div>
                <div class="md-2">
                    <ul class="list-group pl-3" style="border-left: 1px solid #616a7f;">
                        <li>
                            <h6><a href="/pcs/about_us.php" class="mainc">About Us</a></h6>
                        </li>
                        <li>
                            <h6><a href="/pcs/contact_us.php" class="mainc">Contact Us</a></h6>
                        </li>
                        <li>
                            <h6><a href="/pcs/faq.php" class="mainc">FAQs</a></h6>
                        </li>
                        <li>
                            <h6><a href="/pcs/privacy-policy.php" class="mainc">Privacy Policy</a></h6>
                        </li>
                    </ul>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="text-center p-1" style="border-top: 1px solid #616a7f">
                <small>Copyright © Personal Computer Shop - 2020</small>
            </div>
        </div>
    </footer>
    <script>
        function createAlert(title, summary, details, severity, dismissible, autoDismiss, appendToId) {
            console.log(summary);
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
    <!-- <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a> -->
</body>

</html>