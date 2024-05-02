<?php 
    // code lay data từ database cho vào form để update
    $id = $_GET["id"];
   
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "t2311e_php";

    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error){
      die("Connect database failed");
    }

    $sql = "SELECT * FROM products WHERE id= $id"; // trả về 1 sản phảm hoặc ko có
    $result = $conn->query($sql);
    $product = null;
    while($row = $result->fetch_assoc()){
        $product = $row;
    }
    if($product == null){
        header("Location: /notfound.php");
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Edit product</h1>
    <form action="/update_product.php?id=<?php echo $id;?>" method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input value="<?php echo $product["name"]; ?>" type="text" name="name" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input value="<?php echo $product["price"]; ?>"  type="number" name="price" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Qty</label>
            <input value="<?php echo $product["qty"]; ?>"  type="number" name="qty" class="form-control" >
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description"class="form-control">
                <?php echo $product["description"]; ?>
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>