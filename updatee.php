<?php
include('Connection.php');


if(isset($_POST['update_btn'])){
    // echo "btn set";

    $update_id = $_POST['fetch_id'];

    // echo $update_id;

    $update = "SELECT * FROM `anjali_table` WHERE `table_id`= $update_id";
    $query = mysqli_query($conn,$update);

    $row = $query->fetch_assoc();

    // echo $row['table_id'];
    // echo $row['table_fname'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Update Form</h1>
    <form action="update_procces.php" method="POST">

        <label for="">ID</label>
        <input type="text" name="reg_id" value="<?php echo $row['table_id']; ?>"><br><br>

        <label for="">First Name</label>
        <input type="text" name="reg_fname" value="<?php echo $row['table_fname']; ?>"><br><br>

        <label for="">Email</label>
        <input type="text" name="reg_email"><br><br>


        <input type="submit" name="update_btn" value="Update">
    </form>
</body>

</html>

<?php

}


?>