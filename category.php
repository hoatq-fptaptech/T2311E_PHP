<?php
    require_once("functions/product.php");
    $category_id = $_GET["id"];
    $category = category_detail($category_id);
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
            <h2><?php echo $category["name"];?></h2>
            <div class="row">
            <div class="row">
                <?php foreach($category["products"] as $item):?>
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
        </div>
    
    </main>
</body>
</html>