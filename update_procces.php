<?php 
include('Connection.php');

// echo "Procces";

if(isset($_POST['update_btn'])){
    // echo "btn set";

    $update_id = $_POST['reg_id'];

    $update_name = $_POST['reg_fname'];

    // echo $update_name;


    $update = "UPDATE `anjali_table` SET `table_fname`='$update_name'
     WHERE `table_id`= '$update_id'";
    $query= mysqli_query($conn, $update);

    if($query){
        // echo "Data Update";
        header("location:fetch.php");
    }
}
?>