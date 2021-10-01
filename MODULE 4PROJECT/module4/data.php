<?php
include('connection.php');
?>
<?php
  if(isset($_POST['submit'])){
        $itemid = $_POST['id'];
        $itemname = $_POST['itemname'];
        $veg_nonveg = $_POST['veg/nonveg'];
        $combopack = $_POST['combo'];
        $rate = $_POST['rate'];
        $picture = $_FILES['pic']['name'];
        $tempname = $_FILES['pic']['tmp_name'];
        $folder = "images/".$picture;
        move_uploaded_file($tempname,$folder);
        $available_time = $_POST['availabletime'];
        $availability="";  
        foreach($available_time as $available)  
           {  
            $availability.= $available.",";  
          }  
           $addchoice = $_POST['addchoice'];
           $add="";
           foreach( $addchoice as $added)  
           {  
             
            $add.= $added.",";
           }  
        $sql = "INSERT INTO Bigbite(Item_Id,ItemName,Veg_Nonveg,Combopack,Available_time,Add_choice,picture,Rate) 
        VALUES('$itemid','$itemname','$veg_nonveg','$combopack','$availability','$add','$picture','$rate')";
         $data = mysqli_query($conn,$sql);
   
         if($data){
        echo"<script> 
    alert('data inserted successfully') 
    </script>";

         } 
         else {
           
            echo"<script> 
    alert('failed to insert') 
    </script>";
          }
        }
    
    
?>