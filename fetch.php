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
    
    <?php
    while($row = $query->fetch_assoc()){
       ?>
            <tr>
                <td><?php echo $row['table_id']; ?></td>
                <td><?php echo $row['table_fname']; ?></td>
            </tr>
       <?php
        
    }
}
?>
</table>