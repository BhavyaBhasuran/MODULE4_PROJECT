<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bigbite</title>
    <link rel="stylesheet" href="CSS/view.css">
</head>
<body>
    <div id="body">
        <div id="header">
            <img src="images/logo.png" alt="logo" id="logo">
            <h1 id="first">BIGBITE</h1>
            <a id="logout" href="logout.php">Logout</a>
        </div>

    <div id="view">
        <h1 style="text-align:center;">MENU DETAILS</h1>
        <table class="table" border="1">
                <tr>
                    <th>Item Id</th>
                    <th>Item Name</th>
                    <th>Veg/Non-veg</th>
                    <th>Combopack</th>
                    <th>Available Time</th>
                    <th>Add choice</th>
                    <th>Picture</th>
                    <th>Rate</th>
                    <th colspan="2">action</th>
                </tr>
            
            
                <?php
        
                    $sql = "SELECT * FROM Bigbite";
                    $data = mysqli_query($conn,$sql);
                    $total = mysqli_num_rows($data);
                    if($total !=0)
                    {
                        while($result = mysqli_fetch_assoc($data))
                        {
                    ?>
             
                <tr>
                <td><?php echo $result['Item_Id']; ?></td>
                <td><?php echo $result['ItemName']; ?></td>
                <td><?php echo $result['Veg_Nonveg']; ?></td>
                <td><?php echo $result['Combopack']; ?></td>
                <td><?php echo $result['Available_time']; ?></td>
                <td><?php echo $result['Add_choice']; ?></td>
               <td> <img src="<?php echo base64_encode($result['Picture']); ?>" width="100" height="100"*/></td>
                <td><?php echo $result['Rate']; ?></td>
                <td><a href="delete.php?Item_Id= <?php echo $result['Item_Id'];?>">cancel item </a></td>
                <td><a href="update.php?Item_Id= <?php echo $result['Item_Id'];?>">Update item </a></td>  
                </tr>

            
            <?php 
                        }  
                    }
            mysqli_close($conn); 
            ?>
        </table>
        
   </div>
    
</body>

</html>
