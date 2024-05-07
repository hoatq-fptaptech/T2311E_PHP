<?php 
session_start(); 
require_once("database.php");
function update_cart($product_id,$new_qty){

}

function get_cart(){
    $cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
    if(count($cart) > 0){
        $product_ids = [];
        foreach($cart as $id=>$qty){
            $product_ids[] = $id;
        }
        $product_ids = implode(",",$product_ids); // biến array thành string
        $sql = "select * from products where id in ($product_ids)";
        $result = query($sql);
        $list = [];
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        return $list;
    }
    return [];
}