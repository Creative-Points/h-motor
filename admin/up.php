<?php

include('../config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name  = $_POST['name'];
    $desc = $_POST['description'];
    // $IMAGE = $_FILES['image'];
    // $image_location = $_FILES['image']['tmp_name'];
    // $image_name = $_FILES['image']['name'];
    // move_uploaded_file($image_location,'images/'.$image_name);
    // $image_up = "images/".$image_name;
    // $update = "UPDATE products SET name='$NAME' , link='$LINK', image='$image_up' WHERE id=$ID";
    // mysqli_query($con, $update);
    $stmt = $conn->prepare('UPDATE products SET name = ?, description=? WHERE id = ?');
    $stmt->execute([$name, $desc, $id]);

    redirect('', 'back', 0);
    // header('location: index.php');
    // exit();
}
?>