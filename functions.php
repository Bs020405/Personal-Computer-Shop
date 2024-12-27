<?php
session_start();
require_once 'connection.php';
if (isset($_POST['update'])) {
    $quantity = $_POST['quantity'];
    $pid = $_POST['pid'];
    $userid = $_SESSION['userid'];
    $sql = "UPDATE cart_details SET quantity= $quantity WHERE productid = '$pid' AND userid = $userid";

    if ($connect_db->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location:cart.php");
    } else {
        echo "Error updating record: " . $connect_db->error;
    }
}
if (isset($_POST['remove'])) {
    $quantity = $_POST['quantity'];
    $pid = $_POST['pid'];
    $userid = $_SESSION['userid'];
    $sql = "DELETE FROM cart_details WHERE productid = '$pid' AND userid = $userid";

    if ($connect_db->query($sql) === TRUE) {
        echo "Record Deleted successfully";
        header("Location:cart.php");
    } else {
        echo "Error updating record: " . $connect_db->error;
    }
}
if (isset($_SESSION['product_data'])) {
    $product_data = json_decode($_SESSION['product_data'], true);
    $userid = $product_data['userid'];
    $email = $product_data['email'];
    $phone = $product_data['phone'];
    $address = $product_data['address'];
    $order_date = $product_data['order_date'];
    $delivery_date = $product_data['delivery_date'];
    for ($i = 1; $i <= count($product_data) - 6; $i++) {
        $pid = $product_data[$i]['pid'];
        $name = $product_data[$i]['name'];
        $quantity = $product_data[$i]['quantity'];
        $price = $product_data[$i]['price'];
        $sql = $sql = "INSERT INTO order_details (userid, productid, product_name, quantity, order_date, delivery_date, userEmail, userContact, userAddress, price, orderStatus) VALUES ($userid, '$pid', '$name', '$quantity', '$order_date', '$delivery_date', '$email', '$phone', '$address', '$price','pending')";
        if ($connect_db->query($sql) === TRUE) {
            echo "Record Deleted successfully";
        } else {
            echo "Error updating record: " . $connect_db->error;
        }
        if ($i >= 1) {
            $sql = "DELETE FROM cart_details WHERE productid = '$pid' AND userid = $userid";
            if ($connect_db->query($sql) === TRUE) {
                echo "Record Deleted successfully";
            } else {
                echo "Error updating record: " . $connect_db->error;
            }
        }
    }
    unset($_SESSION['product_data']);
    header("Location:/pcs/");
    exit();
}
