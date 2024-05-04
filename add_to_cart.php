<?php 
session_start();// open session
// add product to cart
$cart  = isset($_SESSION["cart"]) ? $_SESSION["cart"] : [];

$id  = $_POST["product_id"];
$bought_qty = $_POST["bought_qty"];
// kiem tra sản phẩm đã có trong giỏ chưa
// nếu có rồi thì tăng số lượng mua
// còn chưa có thì thêm vào 
if(isset($cart[$id])){
    $cart[$id] = $cart[$id] + $bought_qty;
}else{
    $cart[$id]= $bought_qty;
}

// gán giá trị lại về session
$_SESSION["cart"] = $cart;
header("Location: /cart.php");