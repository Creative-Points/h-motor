<?php

include('../config.php');
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM images WHERE product_id = ?");
$stmt->execute([$id]);
$imgs = $stmt->fetchAll();

foreach($imgs as $img)
{
    unlink('../'.$path . $img['img']);
}

$stmt2 = $conn->prepare("DELETE FROM products WHERE id = :id");
$stmt2->bindParam(":id", $_GET['id']);
$stmt2->execute();
$msg = ' Product Deleted Successfully';
redirect($msg, "back", 0, "success");

?>