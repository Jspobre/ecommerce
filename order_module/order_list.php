<?php
   include_once '../db_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./CSS/styles.css">
</head>
<body>
    <section class="container py-5">
        <a href="shop.php" class="btn btn-dark">Back</a>
        <h1 class="title text-center mb-3 text-uppercase">Order List</h1>

        <!-- Display -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Username</th>
                <th scope="col">Item Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Date Ordered</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $orderlist = query($conn, "select users.username, products.item_name, orders.item_qty, orders.date_ordered, orders.order_status from orders join users on users.user_id = orders.user_id join products on products.item_id = orders.item_id");
              
                foreach($orderlist as $orders => $row){
    
                  echo '<tr>';
                  echo    '<th scope="row">'.$row['username'].'</th>';
                  echo   '<td>'.$row['item_name'].'</td>';
                  echo '<td>'.$row['item_qty'].'</td>';
                  echo '<td>'.$row['date_ordered'].'</td>';
                  echo '<td>'.$row['order_status'].'</td>';
    
                   echo    '</tr>';
                }
    
    
              ?>
    
              
            </tbody>
          </table>
    </section>

</body>
</html>