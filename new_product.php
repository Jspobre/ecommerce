<?php
include_once "db_conn.php";

if(isset($_POST['new_item'])){
    $n_itemname=$_POST['new_item'];
    $n_itemprice=$_POST['new_itemprice'];
   
    
    $table = "products";
    $fields = array('item_name' => $n_itemname, 'item_price' => $n_itemprice);
    
    if(insert($conn, $table, $fields) ){
        header("location: index.php?new_product=added");
        exit();
    }  
    else{
        header("location: index.php?new_product=failed");
        exit();
    }
}
?>