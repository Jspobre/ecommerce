<?php

include_once '../db_conn.php';

if(isset($_POST['submit_order'])) {
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];

    // handle user first
    
    $user_result = query($conn, "select * from users where username = '$username'");

    if ($user_result){
        $user_id = $user_result['user_id'];
        $table = "users";
        $fields = array('password' => $password,
                                'fullname' => $fullname,
                                'contact_number' => $contact_number,
                                'address' => $address
                                );
        $filter = array('user_id' => $user_id);

        // Update user information
        update ($conn, $table, $fields, $filter);
    } else {
        $table = "users";
        $fields = $arrayName = array('username' => $username, 
                                'password' => $password,
                                'fullname' => $fullname,
                                'contact_number' => $contact_number,
                                'address' => $address
                                );

        // insert user information
        insert($conn, $table, $fields);
        $user_id = mysqli_insert_id($conn);
    }

    // Insert Order
    $table = "orders";
    $fields = array('user_id' => $user_id
                    ,'item_id' => $item_id
                    , 'item_qty' => $quantity
                );
    if(insert($conn, $table, $fields) ){
        header("location: shop.php?order=added");
        exit();
    } else {
        header("location: shop.php?order=failed");
        exit();
    }
}
