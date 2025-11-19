<?php 

$servername = 'localhost';
$username   ='root';
$password   ='';
$dbname     ='anjali_db';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
    // echo "Connection Success";
}
else{
    echo "Failed";
}



?>