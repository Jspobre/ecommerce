<?php
include_once "db_conn.php";


$sql = "DELETE FROM products WHERE item_id='" . $_GET["item_id"] . "'";
if (mysqli_query($conn, $sql)) {

    header ("location: index.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>