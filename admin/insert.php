<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: loginForm.php");
}
include('../config.php');

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if(isset($_FILES['files']))
    {
        $links = uploadMultiImages($_FILES['files'], 10);
    }
    $name = $_POST['name'];
    $desc = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO products (`name`, `description`) VALUES (:name, :desc)");
    $stmt->execute([
        'name' => $name,
        'desc' => $desc
    ]);
    $last_id = $conn->lastInsertId();
    for($r = 0; $r < count($links); $r++){
        if($r == 0){
            $stmt2 = $conn->prepare("INSERT INTO images(product_id, img, flag) VALUES (:id, :path, :flag)");
            $stmt2->execute(array(
                "id" => $last_id,
                "path" => $links[$r],
                "flag" => 1
            ));
        }else{
            $stmt2 = $conn->prepare("INSERT INTO images(product_id, img) VALUES (:id, :path)");
            $stmt2->execute(array(
                "id" => $last_id,
                "path" => $links[$r]
            ));
        }
    }
    redirect("Inserted Product Successfully.", "back", 0, "success");
}


// if(isset($_POST['upload'])){
//     $NAME  = $_POST['name'];
//     $LINK = $_POST['link'];
//     $IMAGE = $_FILES['image'];
//     $image_location = $_FILES['image']['tmp_name'];
//     $image_name = $_FILES['image']['name'];
//     move_uploaded_file($image_location,'images/'. $image_name);
//     $image_up = "images/".$image_name;
//     $insert = "INSERT INTO  products (name, link ,image) VALUES ('$NAME','$LINK','$image_up')";
//     mysqli_query($con, $insert);
//     header('location: index.php');
// }
?>