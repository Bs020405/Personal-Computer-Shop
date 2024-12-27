<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FAQ ~ PCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y shadow mt-2 mb-2 p-4">
        <h4 class="font-weight-bold py-3 mb-4">Frequently Asked Questions</h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">

                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#general">General Questions</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#purchase">Purchase Related Queries</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#return">Return/Refund Related Queries</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#replace"> Replace/Exchange Related Queries</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#seller">Seller Related Queries</a>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="general">
                            <h3 class="card-header border-bottom-0">General Questions</h3>
                            <div class="accordion accordion-type-2 accordion-flush" id="accordion_1">

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between activestate">
                                        <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Is account registration required?</a>
                                    </div>
                                    <div id="collapse_1i" class="collapse show" data-parent="#accordion_1" role="tabpanel">
                                        <div class="card-body pa-15">We do not require our customer to register to browser our products online. Account registration is only required for purchase.</div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">What payment methods do you accept?</a>
                                    </div>
                                    <div id="collapse_2i" class="collapse" data-parent="#accordion_2" role="tabpanel">
                                        <div class="card-body pa-15">We accept all kinds of major payment methods such as Debit & Credit Card, Net Banking, Wallets Etc.</div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">What is the status of my order?</a>
                                    </div>
                                    <div id="collapse_3i" class="collapse" data-parent="#accordion_1" role="tabpanel">
                                        <div class="card-body pa-15">You can check your order status in your profile under my orders section.</div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">How long will it take for my order to arrive?</a>
                                    </div>
                                    <div id="collapse_4i" class="collapse" data-parent="#accordion_1" role="tabpanel">
                                        <div class="card-body pa-15">We usually ship orders in 1-2 working days. It will depend on your location. Usually the orders are delivered in 5-6 days. If you experience delays in receiving your order, please contact us</div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">How can I change my shipping address?</a>
                                    </div>
                                    <div id="collapse_5i" class="collapse" data-parent="#accordion_1" role="tabpanel">
                                        <div class="card-body pa-15">You can update your address and other account details in your profile section.</div>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="tab-pane fade" id="purchase">
                            <h3 class="card-header border-bottom-0">
                                Purchase
                            </h3>
                            <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between activestate">
                                        <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">How do you ship orders ?</a>
                                    </div>
                                    <div id="collapse_1i" class="collapse show" data-parent="#accordion_2" role="tabpanel">
                                        <div class="card-body pa-15">ABC Couries are our shipping partners. We use ABC Couriers to deliver all your Orders.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Do you offer loyalty points or reward points, gift certificates, etc.?</a>
                                    </div>
                                    <div id="collapse_2i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">Not Yet. We do not offer any loyalty points or reward point programs.</div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">What is the warranty period of my period ?</a>
                                    </div>
                                    <div id="collapse_3i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">Warranty period depends on the product, it varies from product to product. The standard Warranty period is approx. 1 Year*.</div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">My order was declined</a>
                                    </div>
                                    <div id="collapse_4i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">Usually this happens because of payment failure. Check if payment is made successfully. If the payment is successful, Please wait for some time. You will receive refund in your account automatically. </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">How do I view my invoice ?</a>
                                    </div>
                                    <div id="collapse_5i" class="collapse" data-parent="#accordion_2">
                                        <div class="card-body pa-15">Once the payment is successful, You will receive invoice on your registered Email.</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="return">
                            <h3 class="card-header border-bottom-0">
                                Return/Refund
                            </h3>
                            <div class="accordion accordion-type-2 accordion-flush" id="accordion_3">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between activestate">
                                        <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Do you accept returns?</a>
                                    </div>
                                    <div id="collapse_1i" class="collapse show" data-parent="#accordion_3" role="tabpanel">
                                        <div class="card-body pa-15">Yes, We provide hassle-free returns for our customer. You're only entitled to an automatic refund if you return the product within 5 days,</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Are product returns free?</a>
                                    </div>
                                    <div id="collapse_2i" class="collapse" data-parent="#accordion_3">
                                        <div class="card-body pa-15">Yes, Returns are absolutely free. You can just contact our customer support for easy return.</div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">I have not received my refund.</a>
                                    </div>
                                    <div id="collapse_3i" class="collapse" data-parent="#accordion_3">
                                        <div class="card-body pa-15">It takes around 6-7 days for product return. If the period is above week. You can contact us.</div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">Which products can be returned?</a>
                                    </div>
                                    <div id="collapse_4i" class="collapse" data-parent="#accordion_3">
                                        <div class="card-body pa-15">Products are returnable within the applicable return window if you’ve received them in a condition that is physically damaged, has missing parts or accessories, defective or different from their description on the product detail page on PCS</div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">How long does it take to process a return?</a>
                                    </div>
                                    <div id="collapse_5i" class="collapse" data-parent="#accordion_3">
                                        <div class="card-body pa-15">Once the return process is initiated. We usually complete returns in 6-7 working days.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="replace">
                            <h3 class="card-header border-bottom-0">
                                Replace/Exchange
                            </h3>
                            <div class="accordion accordion-type-2 accordion-flush" id="accordion_4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between activestate">
                                        <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Do you provide exchange offers?</a>
                                    </div>
                                    <div id="collapse_1i" class="collapse show" data-parent="#accordion_4" role="tabpanel">
                                        <div class="card-body pa-15">No, We currently do not provide any kind of exchange offers.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Can I replace my product ?</a>
                                    </div>
                                    <div id="collapse_2i" class="collapse" data-parent="#accordion_4">
                                        <div class="card-body pa-15">Products are replaceable within the applicable return window if you’ve received them in a condition that is physically damaged, has missing parts or accessories, defective or different from their description on the product detail page on PCS</div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">How do you replace my product?</a>
                                    </div>
                                    <div id="collapse_3i" class="collapse" data-parent="#accordion_4">
                                        <div class="card-body pa-15">Once your replacement is approved. You just have to return the old product at the time of delivery of new product.</div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">How can I claim my warranty ?</a>
                                    </div>
                                    <div id="collapse_4i" class="collapse" data-parent="#accordion_4">
                                        <div class="card-body pa-15">You just have to contact our customer support with necessary warranty details and we will do the rest.</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="seller">
                            <h3 class="card-header border-bottom-0">
                                Seller
                            </h3>
                            <div class="accordion accordion-type-2 accordion-flush" id="accordion_5">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between activestate">
                                        <a role="button" data-toggle="collapse" href="#collapse_1i" aria-expanded="true">Who can sell products on PCS.</a>
                                    </div>
                                    <div id="collapse_1i" class="collapse show" data-parent="#accordion_5" role="tabpanel">
                                        <div class="card-body pa-15">Anyone selling new and genuine products is welcome. In order to start selling contact our customer support.</div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_2i" aria-expanded="false">Who decides the price of the products?</a>
                                    </div>
                                    <div id="collapse_2i" class="collapse" data-parent="#accordion_5">
                                        <div class="card-body pa-15">As a seller, you have the full rights to set the price of your product.</div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_3i" aria-expanded="false">When do I get paid?</a>
                                    </div>
                                    <div id="collapse_3i" class="collapse" data-parent="#accordion_5">
                                        <div class="card-body pa-15">Our standard payment plan provides for monthly payments. At the end of each month, all accumulated funds are transfered to your account.</div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_4i" aria-expanded="false">What are the fees charged?</a>
                                    </div>
                                    <div id="collapse_4i" class="collapse" data-parent="#accordion_5">
                                        <div class="card-body pa-15">Commission fee is a certain percentage of the order item value of your product. It differs across categories and vertical/sub-categories.</div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse_5i" aria-expanded="false">Can I cancel my account?</a>
                                    </div>
                                    <div id="collapse_5i" class="collapse" data-parent="#accordion_5">
                                        <div class="card-body pa-15">You can stop selling at any time. Contact seller support to cancel your seller account anytime.</div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>



        </div>
    </div>



    <?php include('footer.php'); ?>
</body>


</html>