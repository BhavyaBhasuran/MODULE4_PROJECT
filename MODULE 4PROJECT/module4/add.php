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
            <h1 id="add1">Add Item</h1>
            <br><br>
            <form action="data.php" method="POST" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>Item Id</td>
                    <td><input type="text" name="id"></td>
                </tr>
            <tr>
                <td>Item Name</td>
                <td><input type="text" name="itemname"></td>
            </tr>
            <tr>
                <td>Veg/Nonveg</td>
                <td>
                <input type="radio" name="veg/nonveg" value="vegetarian">
                <label for="vegitarian">Vegetarian</label>
                <input type="radio" name="veg/nonveg" value="non_vegetarian">
                <label for="non_vegitarian">Non-vegetarian</label>
                </td>
            </tr>
            <tr>
                <td>Combopack</td>
                <td>
                <input type="radio" name="combo" value="yes">
                <label for="yescombo">Yes</label>
                <input type="radio" name="combo" value="no">
                <label for="nocombo">No</label>
                </td>
            </tr>


            
            <tr>
                <td>Available time</td>
                <td>
                <input type="checkbox"  name="availabletime[]" value="breakfast">
                <label for="breakfast">Breakfast</label>
                <input type="checkbox" name="availabletime[]" value="lunch">
                <label for="lunch">Lunch</label>
                <input type="checkbox" name="availabletime[]" value="dinner">
                <label for="dinner">Dinner</label>
                </td>
            </tr>
            
            <tr>
                <td>Add choice</td>
                <td>
                <input type="checkbox" name="addchoice[]" value="chicken">
                <label for="chicken">Extra chicken</label>
                <input type="checkbox" name="addchoice[]" value="cheese">
                <label for="cheese">Extra cheese</label>
                <input type="checkbox" name="addchoice[]" value="myonnaise">
                <label for="myonnaise">Myonnaise</label>
                </td>
            </tr>

            <tr>
                <td>Picture</td>
                <td><input type="file" name="pic"></td>
               
            </tr>
            <tr>
                <td>Rate</td>
                <td><input type="number" name="rate"></td>
            </tr>
           </table><br><br>
           <input type="submit" name="submit" id="submit" class="submit">
         </form>
         </div>
        </div>
        
</body>
</html>

