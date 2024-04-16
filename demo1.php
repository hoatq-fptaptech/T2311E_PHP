<?php
$arr = []; // array
$arr[] = 5;
$arr[] = "XYZ";
$arr[] = 18;
$arr[] = 22;

for($i=0;$i<count($arr);$i++){
    echo $i."=".$arr[$i]."<br/>";
}

foreach($arr as $item){ // $item <=> $arr[$i]
    echo $item."<br/>";
}
foreach($arr as $key=>$item){ // $item <=> $arr[$i]
    echo $key."=".$item."<br/>";
}
$student = [];
$student["name"]= "Nguyen Van An";
$student["age"]= 19;
$student["tel"]="0987654321";
echo "<br/>Thong tin sinh vien: <br/>";
foreach($student as $data){
    echo $data."<br/>";
}
// echo $student["name"];

foreach($student as $key=>$data){
    echo $key.":".$data."<br/>";
}

$product = [
    "name"=>"Iphone 15",
    "price"=>1000,
    "qty"=>5,
    "description"=>"San pham dang hot"
];

echo "<br/>Thông tin sản phẩm:<br/>";
echo $product["name"]."-".$product["price"];

$list = [];
$list[] = [
    "name"=>"Iphone 15",
    "price"=>1000,
    "qty"=>5,
    "description"=>"San pham dang hot"
];
$list[]= [
    "name"=>"Iphone 14",
    "price"=>800,
    "qty"=>2,
    "description"=>"San pham dang hot"
];
echo "<ul>";
foreach($list as $p){
    echo "<li>Thông tin sản phẩm:</li>";
    echo "<li>".$p["name"]."-".$p["price"]."</li>";
}
