<?php 
include('Connection.php');

// echo "Procces";

if(isset($_POST['update_btn'])){
    // echo "btn set";

    $update_id = $_POST['update_id'];
    $update_name = $_POST['update_fname'];
    $update_email = $_POST['update_email'];
    $update_password = $_POST['update_password'];
    $update_gender = $_POST['update_gender'];




    $new_img = $_FILES['update_img']['name'];
    $tmp_img = $_FILES['update_img']['tmp_name'];
    $path = "upload/".$new_img;

    move_uploaded_file($tmp_img, $path);

    // echo $update_name;


    $update = "UPDATE `anjali_table` SET 
        `table_fname`    = '$update_name',
        `table_email`    = '$update_email',
        `table_password` = '$update_password',
        `table_gender`   = '$update_gender',
        `table_img`      = '$path'
        WHERE `table_id` = '$update_id'";
    $query= mysqli_query($conn, $update);

    if($query){
        // echo "Data Update";
        header("location:fetch.php");
    }
}
?>
