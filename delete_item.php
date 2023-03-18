<?php

//this query will also delete the item_id in the 'products' as well from its foreign key 'orders'.
// get the item_id from the query string
$item_id = $_GET["item_id"];


$dbname = "midterms";
$dbusername = "root";
$dbpassword = "";
$pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbusername, $dbpassword);


$pdo->beginTransaction();

try {

  $sql = "DELETE FROM orders WHERE item_id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$item_id]);
  $sql = "DELETE FROM products WHERE item_id = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$item_id]);

  $pdo->commit();


 header ("location: index.php");
} catch (PDOException $e) {
  $pdo->rollBack();

  echo "Error deleting product: " . $e->getMessage();
}

$stmt = null;
$pdo = null;

?>
