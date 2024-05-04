<?php
    require_once("functions/product.php");
    $id = $_GET["id"];
    // tim san pham trong db
    $product = product_detail($id);
    if($product == null)
        die("404 not found!");
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
            <img src="<?php echo $product["thumbnail"];?>"/>
            <h2><?php echo $product["name"];?></h2>
            <form action="/add_to_cart.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $product["id"] ?>"/>
                <input value="1" type="number" name="bought_qty"/>
                <button <?php if($product["qty"] == 0) echo "disabled";?> class="btn btn-primary" type="submit">Add to cart</button>
                <?php if($product["qty"] == 0):?>
                    <p class="text-danger">Out of stock</p>
                <?php endif;?>
            </form>
        </div>
    
    </main>
</body>
</html>