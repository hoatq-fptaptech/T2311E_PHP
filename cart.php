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
    <title><?php echo $product["name"];?></title>
    <?php include_once("html/styles.php");?>
</head>
<body>
<header>
    </header>
    <?php include_once("html/nav.php");?>
    <main class="main">
        <div class="container">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Thumbnail</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </thead>
                <tbody>
                    <?php foreach($products as $item):?>
                        <tr>
                            <td><?php echo $item["id"] ?></td>
                            <td><img src="<?php echo $item["thumbnail"] ?>" class="thumbnail" width="80"/></td>
                            <td><?php echo $item["name"] ?></td>
                            <td><?php echo $item["price"] ?></td>
                            <td><?php echo $cart[$item["id"]] ?></td>
                            <td><?php echo $item["price"] * $cart[$item["id"]] ?></td>
                        </tr>
                    <?php endforeach;?>    
                </tbody>
            </table>
        </div>
    </main>
    
</body>
</html>