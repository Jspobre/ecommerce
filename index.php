<html>
<?php include_once "db_conn.php"; ?>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
 <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
               <h2>New Product</h2>
                
              <?php
                    if(isset($_GET['new_product'])){
                            switch($_GET['new_product']){
                                case "added": echo "<div class='alert alert-success'>Product Added.</div>";
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>Product Not Added</div>";
                                      break;
                                        
                            }
                       }
                       
                ?>               
                <form action="new_product.php" method="post">
                    <div class="mb-3">
                        <label for="new_item" class="form-label">Item name</label>
                        <input type="text" id="new_item" required name="new_item" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="new_itemprice" class="form-label">Item price</label>
                        <input type="text" required id="new_itemprice" name="new_itemprice" class="form-control">
                    </div>               
                    <input type="submit" class="btn btn-info">                
                </form>
               
            </div>
      
            <div class="col-8">
               <h1>Update Record</h1>
      
                <?php
      
                  $productlist = (mysqli_query($conn, "select item_id, item_name, item_price from products where item_status='A'"));
                       if(isset($_GET['update_status'])){
                            switch($_GET['update_status']){
                                case "success": echo "<div class='alert alert-success'>Product Updated.</div>";
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>Product Failed to be updated.</div>";
                                      break;                                        
                            }
                       }                    
                  echo "<hr>";
         echo "<table class='table table-bordered'>";
         echo "<thead>";
         echo "<th>Item name</th>";
         echo "<th>Item price</th>";
         echo "<th>Action</th>";
         echo "</thead>";
         foreach($productlist as $key => $row){
         echo "<tr>";
         echo "<td>" . $row['item_name'] . "</td>";
         echo "<td>" . $row['item_price'] . "</td>";
         echo "<td> <a class='btn btn-success' href='update_item.php?item_name=" . $row['item_name'] . "&item_price=" .$row['item_price'] . "&item_id=". $row['item_id'] ."' > Update </a> </td>";
         echo "<td> <a class='btn btn-danger' href='delete_item.php?item_id=". $row['item_id'] ." ' > Delete </a> </td>";
         echo "</tr>";
         }
          echo "</table>";
          
                 ?>
                
            </div>
             <div class="col-1"></div> 
        </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>