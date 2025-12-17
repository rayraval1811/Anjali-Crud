<?php 
include('Connection.php');
// echo "Fetch ";
$select ="SELECT * FROM `anjali_table`";
$query = mysqli_query($conn, $select);

if($query->num_rows > 0){
    ?>
<table border>
    <th>ID</th>
    <th>First Name</th>
    <th>E Mail</th>
    <th>Password</th>
    <th>Gender</th>
    <th>Photo</th>
    <th colspan="2">Action</th>


    <?php
    while($row = $query->fetch_assoc()){
       ?>
    <tr>
        <td><?php echo $row['table_id']; ?></td>
        <td><?php echo $row['table_fname']; ?></td>
        <td><?php echo $row['table_email']; ?></td>
        <td><?php echo $row['table_password']; ?></td>
        <td><?php echo $row['table_gender']; ?></td>
        <td>
            <img src="<?php echo $row['table_img']; ?>" width="80" height="80" style="border-radius:10px;">
        </td>

        <td>
            <form action="updatee.php" method="POST">

                <input type="hidden" name="fetch_id" value="<?php echo $row['table_id']; ?>">

                <!-- <input type="submit" value="Update" name ="update_btn"> -->

                <button type="submit" value="Update" name="update_btn">Update</button>
            </form>
        </td>

        <td>
            <form action="delete.php" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this record?');">

                <input type="hidden" name="fetch_id" value="<?php echo $row['table_id']; ?>">

                <!-- <input type="submit" name= "delete_btn" value="Delete"> -->

                <button type="submit" value="Update" name="delete_btn">Delete</button>

            </form>
        </td>
    </tr>
    <?php
        
    }
}
?>
</table>












<!-- <form action="update.php" method='POST'>
                        <input type="hidden" name="fetch_id" value="<?php echo $row['table_id']; ?>">
                        <input type="submit" name= "Update_btn" value ="Update">
                    </form>
                    <input type="submit" value ="Delete"> -->
