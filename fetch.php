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
        <th>Action</th>
    
    <?php
    while($row = $query->fetch_assoc()){
       ?>
            <tr>
                <td><?php echo $row['table_id']; ?></td>
                <td><?php echo $row['table_fname']; ?></td>
                <td>
                    <form action="update.php" method='POST'>
                        <input type="hidden" name="fetch_id" value="<?php echo $row['table_id']; ?>">
                        <input type="submit" name= "Update_btn" value ="Update">
                    </form>
                    <input type="submit" value ="Delete">
                </td>
            </tr>
       <?php
        
    }
}
?>
</table>