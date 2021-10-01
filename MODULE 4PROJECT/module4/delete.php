<?php 
include 'connection.php'; 

        $itemid = $_GET['Item_Id'];
        $sql = "DELETE FROM Bigbite WHERE Item_Id = $itemid";

        if (mysqli_query($conn,$sql)) 
        {
            echo"<script> 
    alert('item cancelled') 
    </script>";
        }
        else{
        echo"<script> 
    alert('failed to cancel item') 
    </script>";
        }
   
?>
