<?php

include('config.php');

if(isset($_POST['upload'])){
    $NAME  = $_POST['name'];
    $LINK = $_POST['link'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'. $image_name);
    $image_up = "images/".$image_name;
    $insert = "INSERT INTO  products (name, link ,image) VALUES ('$NAME','$LINK','$image_up')";
    mysqli_query($con, $insert);
    header('location: index.php');
}
?>