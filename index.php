<?php
    require_once("functions/product.php");
    $newest_products = newest_products();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("html/styles.php");?>
</head>
<body>
    <header>
    </header>
    <?php include_once("html/nav.php");?>
    <main class="main">
        <div class="container">
            <h2>Newest products</h2>
            <div class="row">
                <?php foreach($newest_products as $item):?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $item["thumbnail"] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item["name"] ?></h5>
                                <p class="card-text"><?php echo $item["description"] ?></p>
                                <p class="text-danger"><?php echo $item["price"] ?></p>
                                <a href="#" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>    
            </div>
        </div>
        <div class="container">
            <h2>Best sellers</h2>
            
        </div>
        <div class="container">
            <h2>Hot items</h2>
            
        </div>
    </main>
</body>
</html>