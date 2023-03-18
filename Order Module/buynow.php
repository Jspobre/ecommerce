<?php

    include_once '../db_conn.php';


    if (isset($_POST['buy_now'])) {
    $quantity = $_POST['quantity'];
    $item_id = $_POST['item_id'];

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./CSS/styles.css">
</head>
<body>
    <div class="container py-5">
        <h3 class="section-title text-center my-5 text-uppercase">Checkout</h3>
        <div class="row">
            <div class="col-md-6 mx-auto">

                <form method="post" action="process_order.php">
                    <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
                    <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
            
            
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Enter a username" name="username" required>
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingName" placeholder="Enter Full Name" name="fullname" required>
                        <label for="floatingName">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingNumber" placeholder="Enter Contact Number" name="contact_number" required>
                        <label for="floatingNumber">Contact Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Enter Address" id="floatingTextarea" name="address" required></textarea>
                        <label for="floatingTextarea">Address</label>
                    </div>
                    <div class="d-flex justify-content-center">

                        <a href="shop.php" class="btn btn-secondary me-3">Cancel Order</a>
                        <button type="submit" name="submit_order" class="btn btn-primary">Submit Order</button>
                    </div>
            
                <!-- <div class="form-floating">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>
                <div class="form-floating">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="form-floating">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" required>
                </div>
                <div class="form-floating">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" class="form-control" name="contact_number" id="contact_number" required>
                </div>
                <div class="form-floating">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" id="address" required></textarea>
                </div>
                <button type="submit" name="submit_order" class="btn btn-primary">Submit Order</button> -->
                </form>
            </div>
        </div>
    </div>
    

</body>
</html>