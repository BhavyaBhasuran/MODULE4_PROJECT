<?php
include 'connection.php';
if(isset($_GET["Item_Id"]))
{
    $itemid = $_GET["Item_Id"];
    $query = "SELECT * FROM Bigbite WHERE Item_Id = $itemid";
    $result = mysqli_query($conn,$query);
    $row= mysqli_fetch_array($result);
    $a = $row["Available_time"];
    $b = explode(",",$a);
    $c = $row["Add_choice"];
    $d = explode(",",$c);
        
}

if(isset($_POST["update"])){
        $itemid = $_POST['id'];
        $itemname = $_POST['itemname'];
        $veg_nonveg = $_POST['veg/nonveg'];
        $combopack = $_POST['combo'];
        $rate = $_POST['rate'];
        $picture = $_FILES['pic']['name'];
        $tempname = $_FILES['pic']['tmp_name'];
        $folder = "images/".$picture;
        move_uploaded_file($tempname,$folder);
        $e= $_POST["availabletime"];
        $f = implode(",",$e);
        $g = $_POST["addchoice"];
        $h = implode(",",$g);
        $sql = "UPDATE Bigbite SET Item_Id ='$itemid',ItemName='$itemname',Veg_Nonveg='$veg_nonveg',Combopack='$combopack',Available_time='$f',Add_choice='$h',picture='$picture',Rate='$rate' WHERE Item_Id = $itemid";
    if (mysqli_query($conn,$sql)) {
      echo"<script> 
      alert('updated successfully') 
      </script>";

      } 
      else {
        echo"<script> 
    alert('failed to update.') 
    </script>";
      }
}
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigBite</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="body">
        <div id="header">
          <img src="images/logo.png" alt="logo" id="logo">
           <h1 id="first">BIGBITE</h1>
           <a id="logout" href="logout.php">Logout</a>
         </div>
        <div id="form">
            <h1 id="add1">update Item</h1>
            <br><br>
            <form action="" method="POST" enctype="multipart/form-data">
            <table class="table">
            <tr>
                <td>Item Id</td>
                <td><input type="text" name="id" value="<?php echo  $row['Item_Id']?>" required></td>
            </tr>
            <tr>
                <td>Item Name</td>
                <td><input type="text" name="itemname" value="<?php echo $row['ItemName']?>" required></td>
            </tr>
            <tr>
                <td>Veg/Nonveg</td>
                <td>
                <input type="radio" name="veg/nonveg" value="vegetarian"<?php if($row["Veg_Nonveg"]=='vegitarian'){echo "checked";}?>>
                <label for="vegitarian">Vegetarian</label>
                <input type="radio" name="veg/nonveg" value="non_vegetarian" <?php if($row["Veg_Nonveg"]=='non_vegitarian'){echo "checked";}?>>
                <label for="non_vegitarian">Non-vegetarian</label>
                </td>
            </tr>
            <tr>
                <td>Combopack</td>
                <td>
                <input type="radio" name="combo" value="yes"<?php if($row["Combopack"]=='yes'){echo "checked";}?>>
                <label for="yescombo">Yes</label>
                <input type="radio" name="combo" value="no"<?php if($row["Combopack"]=='no'){echo "checked";}?>>
                <label for="nocombo">No</label>
                </td>
            </tr>
            <tr>    
                <td>Available time</td>
                <td>
                <input type="checkbox" name="availabletime[]" value="breakfast"<?php if(in_array("breakfast",$b)) {echo "checked";}?>>
                <label for="breakfast">Breakfast</label>
                <input type="checkbox" name="availabletime[]" value="lunch"<?php if(in_array("lunch",$b)) {echo "checked";}?>>
                <label for="lunch">Lunch</label>
                <input type="checkbox" name="availabletime[]" value="dinner"<?php if(in_array("dinner",$b)) {echo "checked";}?>>
                <label for="dinner">Dinner</label>
                </td>
            </tr>
            <tr>
                <td>Add choice</td>
                <td>
                <input type="checkbox" name="addchoice[]" value="chicken"<?php if(in_array("chicken",$d)) {echo "checked";}?>>
                <label for="chicken">Extra chicken</label>
                <input type="checkbox" name="addchoice[]" value="cheese"<?php if(in_array("cheese",$d)) {echo "checked";}?>>
                <label for="cheese">Extra cheese</label>
                <input type="checkbox" name="addchoice[]" value="myonnaise"<?php if(in_array("myonnaise",$d)) {echo "checked";}?>>
                <label for="myonnaise">Myonnaise</label>
                </td>
            </tr>
            <tr>
                <td>Picture</td>
                <td><input type="file" name="pic" value="<?php echo $row['Picture']?>" required></td>
            </tr>
            <tr>
                <td>Rate</td>
                <td><input type="number" name="rate" value="<?php echo $row['Rate']?>" required></td>
            </tr>
           </table><br><br>
           <input class="submit" value="Update" type="submit" name="update">   
         </form>
         </div>
        </div>
        
</body>
</html>
