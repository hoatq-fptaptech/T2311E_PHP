<?php session_start();
    $cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
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
                    <?php foreach($cart as $id=>$qty):?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $qty ?></td>
                        </tr>
                    <?php endforeach;?>    
                </tbody>
            </table>
        </div>
    </main>
    
</body>
</html>