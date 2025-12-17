<?php

include('connection.php');
session_start();
// echo "Profile";

if(isset($_POST['login_btn'])){
    // echo "btn set";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = "SELECT * FROM `anjali_table` WHERE `table_email`='$username' && `table_password`='$password'";
    $query = mysqli_query($conn, $login);

    $data = $query->fetch_assoc();

    if($data){
        $_SESSION['table_id'] = $data['table_id'];
       
        header('location:home_page.php');
        // echo "Login";
    }
    else{
        echo "failed";
    }



}

?>