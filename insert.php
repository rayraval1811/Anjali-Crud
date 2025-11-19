<?php 

include('connection.php');

// echo "Insert File";

if(isset($_POST['reg_btn'])){
    // echo "Btn Set";

   $insert_fname = $_POST['reg_fname'];

//    echo $insert_fname;

    $insert= "INSERT INTO `anjali_table`( `table_fname`) 
                        VALUES ('$insert_fname')";
    $query = mysqli_query($conn, $insert);

    if($query){
        echo "Data Isnert Success";
    }

    else{
        echo "Failed";
    }
    
}

?>