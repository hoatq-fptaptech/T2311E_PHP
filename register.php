<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php include_once("html/styles.php");?>
</head>
<body>
<?php include_once("html/nav.php");?>
    <section>
        <div class="container">
            <h1 class="text-center">Register</h1>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                <form action="/create_user.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail2" class="form-label">Full name</label>
                        <input name="full_name" type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
</body>
</html>