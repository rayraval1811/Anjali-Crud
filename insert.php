<?php 

include('connection.php');

// echo "Insert File";

if(isset($_POST['reg_btn'])){
    // echo "Btn Set";

   $insert_fname = $_POST['reg_fname'];
   $insert_email = $_POST['reg_email'];
   $insert_password = $_POST['reg_password'];
   $insert_cpassword = $_POST['reg_cpassword'];
   $gender   = $_POST['reg_gender']; 

    $insert_img = $_FILES['reg_img']['name'];
    $temp_img = $_FILES['reg_img']['tmp_name'];
    $location = "upload/$insert_img";

//    echo $insert_fname;

    if($insert_password==$insert_cpassword){
        $insert= "INSERT INTO `anjali_table`( `table_fname`, `table_email`, `table_password`, `table_gender`, `table_img`) 
                            VALUES ('$insert_fname', '$insert_email', '$insert_password', '$gender', '$location')";
        $query = mysqli_query($conn, $insert);

        if($query){
            move_uploaded_file($temp_img,$location);
            echo "Data Insert Success";
        }

        else{
            echo "Failed";
        }
    }else{
        echo "Enter Same Password";
    }
    
    
    
}

?>
