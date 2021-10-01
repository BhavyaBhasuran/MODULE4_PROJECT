<?php 

session_start();

	include("connection.php");
    include("function.php");

	

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			
			$sql = "select * from login where username= '$username' limit 1";
			$result = mysqli_query($conn, $sql);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo"<script> 
    alert('Invalid credentials!') 
    </script>";
		}else
		{
			echo"<script> 
    alert('Invalid credentials!') 
    </script>";
		}
	}

?>


<html>
    <head>
        <link rel="stylesheet" href="css/login.css">
        <title>Login</title>
    </head>
<body class="bg">
    <center>
        <h2>Login</h2>
        <form method="POST">
            <fieldset id="feild">
                <div id="div">
                <label>Username : </label><br><br>
                <input type="text" class="input" name="username"><br><br><br>
                <label>Password : </label><br><br>
                <input type="password" class="input" name="password"><br><br><br>
                <input type="submit" id="submit" name="login" value="Login"><br><br><br>
                <a href="signup.php" id="a">Click here to Sign Up</a>
                </div>
            </fieldset>
        </form>
    </center> 


</body>
</html>