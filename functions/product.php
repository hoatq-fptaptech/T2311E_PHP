<?php 
require_once("database.php");
function newest_products(){
    $sql = "select * from products order by id desc limit 4";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}
function best_sellers(){
    $sql = "select * from products order by qty desc limit 4";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function hot_items(){
    $sql = "select * from products order by price desc limit 4";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function categories_all(){
    $sql = "select * from categories";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    return $list;
}

function category_detail($category_id){
    $sql_cat = "select * from categories where id = $category_id";
    $result = query($sql_cat);
    if($result->num_rows > 0){
        $category = $result->fetch_assoc();
        $sql_product = "select * from products where category_id = $category_id";
        $result = query($sql_product);
        $list = [];
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        $category["products"] = $list;
        return $category;
    }
    return null;
    
}

function product_detail($product_id)  {
    $sql = "select * from products where id = $product_id";
    $result = query($sql);
    if($result->num_rows > 0){
        return $result->fetch_assoc();// 1 product
    }
    return null;
}