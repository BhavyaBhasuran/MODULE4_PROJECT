<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restuarent";
$conn =  mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo"<script> 
    alert('connected successfully') 
    </script>";
}
else{
    echo"<script> 
    alert('failed to connect'.mysqli_connect_error()) 
    </script>";
    }
?>