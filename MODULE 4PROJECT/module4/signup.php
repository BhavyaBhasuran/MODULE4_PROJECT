<?php 

session_start();

	include("connection.php");
	include("function.php");



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username ))
		{

			
			$user_id = random_num(20);
			$sql = "insert into login (user_id,username,password) values ('$user_id','$username','$password')";

			mysqli_query($conn, $sql);

			header("Location: login.php");
			die;
		}else
		{
			echo"<script> 
    alert('Wrong credentials!') 
    </script>";
		}
	}
    
?>

<html>
    <head>
        <link rel="stylesheet" href="CSS/login.css">
        <title>Sign Up</title>
    </head>
<body class="bg">
    <center>
        <h2>Sign Up</h2>
        <form method="POST">
            <fieldset id="feild">
                <div id="div">
                <label>Usernmae : </label><br><br>
                <input type="text" class="input" name="username" required><br><br><br>
                <label>Password : </label><br><br>
                <input type="password" class="input" name="password" required><br><br><br>
                <input type="submit" id="submit" name="signup" value="Sign Up"><br><br><br>
				<a href="login.php" id="a">Click here to Login</a>
                </div>
            </fieldset>
        </form>
    </center> 


</body>
</html>