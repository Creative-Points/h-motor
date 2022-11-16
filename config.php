<?php

    $dsn = 'mysql:host=localhost;dbname=h_motor';
    $user = 'root';
    $pass = '';
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

    );

    try{
        $conn = new PDO($dsn, $user, $pass, $option);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'u r connected';
    }
    catch(PDOException $e){
        echo 'faile';
    }

    $path = 'uploads/';

    function redirect($Msg, $url = NULL, $sec = 3, $type = "error"){
        if($url === NULL){
            $url = "index.php";
        }else{
            $url = isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== "" ? $_SERVER['HTTP_REFERER'] : "index.php";
        }
        if($type == "error"){
            echo "<h5 class='text-center alert alert-danger'>$Msg</h5>";
        }elseif($type == "success"){
            echo "<h5 class='text-center alert alert-success'>$Msg</h5>";
        }
        
        echo "<h5 class='text-center alert alert-info'>You Will Be Redirected Automatecaly After $sec Seconds. <a href='$url' class='alert-link'>Click Here To Back</a></div>";
        header("refresh:$sec;url=$url");
        exit();
    }
    
    function uploadMultiImages($images, $maxFiles, $maxSize = 6, $allow_exts = array('jpeg', 'jpg', 'png', 'gif')){
        global $path;
        $path = '../'.$path;

        if(!file_exists($path)){
            mkdir($path);
        }
        $location = $path;
        
        $allImgs   = array();
        $allow_ext = $allow_exts;
        $count     = count($images['name']);
        $errors    = array();
        $maxSizeKB = 1048576 * $maxSize;
        $temps     = array();
        if($count <= $maxFiles){
            for($i = 0; $i < $count; $i++){
            $name = $images['name'][$i];
            $size = $images['size'][$i];
            $type = $images['type'][$i];
            $temp = $images['tmp_name'][$i];
            $erro = $images['error'][$i];
            if($erro == 0){
                $ext = explode("/", $type);
                $ext = strtolower(end($ext));
                $newName = uniqid('', true) . '.' . $ext;
                if(in_array($ext, $allow_ext)){
                    if($size <= $maxSizeKB){
                        $allImgs[] = $newName;
                        $temps[]   = $temp;
                    }else{
                        $errors[] = "File number ".($i+1)." cant be more than $maxSize MB";
                    }
                }else{
                    $errors[] = "File Number " . ($i+1) . " Not Allowed Extention";
                }
            }elseif($erro == 4){
                $msg = "Please Choose One Image Or More.";
                redirect($msg, "back", 4);
            }
            }
            if(count($allImgs) == $count){
                //print_r($allImgs);
                $successUploaded = 0;
                $success         = array();
                for($i = 0; $i < $count; $i++){
                    if(move_uploaded_file($temps[$i], $location . $allImgs[$i])){
                        $successUploaded = $i + 1;
                        $success[] = $allImgs[$i];
                    }else{
                        echo "<h5 class='text-center alert alert-danger'>File number ".($i+1)." has not uploaded</h5>";
                    }
                }
                if($successUploaded == $count){
                    echo "<h5 class='text-center alert alert-success'>Uploaded All Files Successfully.</h5>";
                    return $success;
                }
            }else{
                foreach($errors as $err){
                    echo "<h5 class='text-center alert alert-danger'>$err</h5>";
                }
                redirect("Please Try Again.", "back", 10);
            }
        }else{
            $msg = "You Are Selected $count Files. Please Select Files Less Than " . $maxFiles + 1 . ".";
            redirect($msg, "back", 6);
        }
    }