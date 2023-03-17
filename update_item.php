
<?php
//error_reporting (0);

if(isset($_GET['item_id'])){
    $n_item_id= $_GET['item_id'];
    $n_itemname= $_GET['item_name'];
    $n_itemprice= $_GET['item_price'];
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    
 <div class="container">
    <div class="row">
        <div class="col-3"></div>
            <div class="col-6">
                <form action="submit.php" method="POST">
                <h1>Update Product</h1>
                <div class="mb-3">
                       <label for="">Item name</label>
                        <input type="text" hidden name="u_itemid" value="<?php echo $n_item_id; ?>" class="form-control">
                        <input type="text" name="u_itemname" value="<?php echo $n_itemname; ?>" class="form-control">
                </div>
                <div class="mb-3">
                       <label for="">Item price</label>
                        <input type="text" name="u_itemprice" value="<?php echo $n_itemprice; ?>" class="form-control">
                </div>
                <input type="submit" class="btn btn-info">
            </form>
                
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
    <script src="js/bootstrap.js"></script>
</html>