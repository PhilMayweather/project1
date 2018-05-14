<?php
require "connect.php";

if(!empty($_POST['first_name']) && !empty($_POST['email'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];
    $about = $_POST['about'];

    $sql = "UPDATE porto SET  last_name = '$last_name', first_name = '$first_name', about = '$about', facebook = '$facebook', twitter = '$twitter', instagram = '$instagram' WHERE email = '$email'";

    $query = mysqli_query($conn, $sql);
    // var_dump($query);
    // exit();
    if($query === true){
        echo 'Portfolio Successfully Updated';
    }else{
        echo 'Update error!!!';
    }
}
?>