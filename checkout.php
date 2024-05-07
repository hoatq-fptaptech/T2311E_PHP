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
            <form action="/place_order.php" method="post">
            <div class="row">
                <div class="col-8">
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Customer name</label>
                    <input required name="customer_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name..">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Telephone</label>
                    <input required name="tel" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Telephone..">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <textarea required name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <h6>Shipping method</h6>
                    <div class="form-check">
                        <input checked name="shipping_method" class="form-check-input" type="radio" value="FREE" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">
                            Free Shipping
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="shipping_method" class="form-check-input" type="radio" value="STANDARD" id="flexCheckChecked2">
                        <label class="form-check-label" for="flexCheckChecked2">
                            Standard (+$10)
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="shipping_method" class="form-check-input" type="radio" value="EXPRESS" id="flexCheckChecked3">
                        <label class="form-check-label" for="flexCheckChecked3">
                            Express (+$20)
                        </label>
                    </div>
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
                        <input checked name="payment_method" class="form-check-input" type="radio" value="COD" id="flexCheckDefault">
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