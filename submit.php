<?php
include_once "db_conn.php";


if(isset($_POST['u_itemid'])){
    $table = "products";
    
    $p_item_id  = $_POST['u_itemid'];
    $p_itemname = $_POST['u_itemname'];
    $p_itemprice = $_POST['u_itemprice'];
   
    
    $fields = array( 'item_name' => $p_itemname, 'item_price' => $p_itemprice);
    $filter = array( 'item_id' => $p_item_id );
    
   
   if( update($conn, $table, $fields, $filter )){
       header("location: index.php?update_status=success");
       exit();
   }
    else{
        header("location: index.php?update_status=failed");
        exit();
    }
 }
?>