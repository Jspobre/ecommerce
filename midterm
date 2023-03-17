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
            <div class="col-1"></div>
        </div>
    </div>
</body>
<script src="js/bootstrap.js"></script>
</html>