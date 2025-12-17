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
    <form action="update_procces.php" method="POST" enctype="multipart/form-data">

        <label for="">ID</label>
        <input type="text" name="update_id" value="<?php echo $update_id; ?>"><br><br>

        <label for="">First Name</label>
        <input type="text" name="update_fname" value="<?php echo $row['table_fname'];?>"><br><br>

        <label for="">Email</label>
        <input type="text" name="update_email" value="<?php echo $row['table_email'];?>"><br><br>

        <label for="">Password</label>
        <input type="password" name="update_password" value="<?php echo $row['table_password'];?>"><br><br>

        <label>Gender</label><br>
        <input type="radio" name="update_gender" value="Male"
            <?php if($row['table_gender']=="Male"){ echo "checked"; } ?>> Male

        <input type="radio" name="update_gender" value="Female"
            <?php if($row['table_gender']=="Female"){ echo "checked"; } ?>> Female

        <input type="radio" name="update_gender" value="Other"
            <?php if($row['table_gender']=="Other"){ echo "checked"; } ?>> Other
        <br><br>

        <label>Current Photo</label><br>
        <img src="<?php echo $row['table_img']; ?>" width="100" height="100"><br><br>

        <label>Change Photo</label>
        <input type="file" name="update_img"><br><br>

        <input type="hidden" name="old_img" value="<?php echo $row['table_img']; ?>">



        <input type="submit" name="update_btn" value="Update">
    </form>
</body>

</html>

<?php

}


?>
