<?php
require_once("functions/checkout.php");
$order_id = $_GET["order_id"];
updateStatusUnPaid($order_id);
// redirect to thank you
header("Location: /thank_you.php?order_id=$order_id");
