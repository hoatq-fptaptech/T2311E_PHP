<?php
require_once("database.php");
function order_create($order_info,$products,$cart)  {
    $customer_name = $order_info["customer_name"];
    $tel = $order_info["tel"];
    $address = $order_info["address"];
    $grand_total = $order_info["grand_total"];
    $status = $order_info["status"];
    $shipping_method = $order_info["shipping_method"];
    $payment_method = $order_info["payment_method"];
    $sql = "insert into orders(customer_name,tel,address,grand_total,status,shipping_method,payment_method) 
        values('$customer_name','$tel','$address',$grand_total,
        '$status','$shipping_method','$payment_method')";
    $order_id = insert_get_id($sql);    
    foreach($products as $item){
        // insert product to order_products 
        
        // update qty products table
    }
}