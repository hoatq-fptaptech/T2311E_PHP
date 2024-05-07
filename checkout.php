<?php session_start();
    require_once("functions/cart.php");
    $cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
    $products = get_cart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <?php include_once("html/styles.php");?>
</head>
<body>
    <?php include_once("html/nav.php");?>
    <main class="main">
        <div class="container">
            <h1>Checkout</h1>
            <form action="#" method="Post">
            <div class="row">
                <div class="col-8">

                </div>
                <div class="col">
                    <h5>Order items</h5>
                    <ul class="list-group">
                    <?php foreach($products as $item):?>
                        <li class="list-group-item">
                            <?php echo $item["name"] ?>(<?php echo $cart[$item["id"]] ?> x $<?php echo $item["price"] ?>)   $<?php echo $item["price"] * $cart[$item["id"]] ?>
                        </li>
                    <?php endforeach;?>    
                    </ul>
                    <h5>Payment method</h5>
                    <div class="form-check">
                        <input name="payment_method" class="form-check-input" type="radio" value="COD" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            COD
                        </label>
                        </div>
                        <div class="form-check">
                        <input name="payment_method" class="form-check-input" type="radio" value="PAYPAL" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Paypal
                        </label>
                    </div>
                    <hr/>
                    <button type="submit" class="btn btn-danger">Place Order</button>
                </div>
            </div>
            </form>
        </div>
    </main>
</body>
</html>