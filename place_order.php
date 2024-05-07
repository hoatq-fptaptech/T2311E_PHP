<?php
session_start();
require_once("functions/cart.php");
require_once("functions/checkout.php");

$customer_name = $_POST['customer_name'];
$tel = $_POST["tel"];
$address = $_POST["address"];
$shipping_method = $_POST["shipping_method"];
$payment_method = $_POST["payment_method"];

$cart = $_SESSION["cart"];
if(count($cart)== 0){
    header("Location: cart.php");
}
$products = get_cart();
$grand_total = 0;
foreach($products as $item){
    $grand_total += $item["price"] * $cart[$item["id"]];
}
switch($shipping_method){
    case "FREE": break;
    case "STANDARD": $grand_total+=10;break;
    case "EXPRESS": $grand_total+=20;break;
}
$status = "PENDING";
$order_info = [
    "customer_name" =>$customer_name,
    "tel" =>$tel,
    "address" =>$address,
    "grand_total" =>$grand_total,
    "status" =>$status,
    "shipping_method" =>$shipping_method,
    "payment_method" =>$payment_method,
];
order_create($order_info,$products,$cart);
