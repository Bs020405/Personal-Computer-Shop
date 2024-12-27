<?php
session_start();
$product_name = "PCS SHOP";
$name = $_POST["firstname"];
$phone = $_POST["contact"];
$address = $_POST["address"];
$email = $_SESSION['email'];
$userid = $_SESSION['userid'];
$data = json_decode($_POST['data'], true);
if(!isset($data['1']['quantity'])) $data['1']['quantity'] = 1;
$product_name = array();
$total_price = 0;
// echo count($data);

for ($i = 1; $i <= count($data); $i++) {
    $total_price += $data[$i]['price'] * $data[$i]['quantity'];
    $product_name[$i]['pid'] = $data[$i]['pid'];
    $product_name[$i]['name'] = $data[$i]['name'];
    $product_name[$i]['price'] = $data[$i]['price'];
    $product_name[$i]['quantity'] = $data[$i]['quantity'];
}
$product_name['order_date'] = date('Y-m-d');
$product_name['delivery_date'] = date('Y-m-d',strtotime('+7 days'));
$product_name['email'] = $email;
$product_name['phone'] = $phone;
$product_name['address'] = $address;
$product_name['userid'] = $userid;
// echo "<pre>";
// print_r($product_name);
// echo "</pre>";
// echo $total_price;
// die;
$_SESSION['product_data'] = json_encode($product_name);
// echo "<pre>";
// print_r($purpose);
// echo "</pre>";
// exit;
include 'src/instamojo.php';

$api = new Instamojo\Instamojo('test_4fb7effa6c7df474582e50e0620', 'test_73a0328869f3693948bff2fda42', 'https://bhavyasoni-245.stores.instamojo.com/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => 'PCS',
        "amount" => $total_price,
        "buyer_name" => $name,
        "phone" => $phone,
        "send_email" => true,
        "send_sms" => true,
        "email" => $email,
        'allow_repeated_payments' => false,
        "redirect_url" => "https://demo.techknowgraphy.com/thankyou.php",
        "webhook" => "http://riserss.tech/webhook.php"
    ));
    // $response['payment'][0]['custom_fields'] = $product_name;
    // echo "<pre>";
    // print_r($response);
    // echo "</pre>";
    // die;
    $pay_url = $response['longurl'];
    // echo $pay_url;
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_url");
    exit();
} catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
