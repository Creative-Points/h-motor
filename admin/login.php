<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location: index.php");
}

$user = "admin@gmail.com";
$pass = "cbfdac6008f9cab4083784cbd1874f76618d2a97";

include_once('../config.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $hash = sha1($password);
// if(isset($_POST['email']) && !empty($_POST['email'])){
//     echo 'set ';
// }
//     if($email == $user){
//         if($pass == $hash){
//             echo 'login';
//         }else{
//             echo 'pass';
//         }
//     }else{
//         echo 'email';
    // }
    // if($email == $user && $pass == $hash)
    // {
    //     $_SESSION['id'] = $emp['id'];
    //     header("Location: ../index.php");
    //     exit();
    // }else{
    //     // redirect('not login', 'back', 3000);
    // }

    $stmt = $conn->prepare("SELECT * FROM users WHERE `email` = :email AND `password` = :pass");
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':pass', $hash);
    $stmt->execute();
    $emp = $stmt->fetch();
    // var_dump($emp);
    $count = $stmt->rowCount();
    if($count > 0){
        // echo $emp['id'];
        $_SESSION['id'] = $emp['id'];
        echo "login success";
        header("Location: index.php");
        exit();
        
    }else{
        echo "Not Found This Username And Password";
    }
}