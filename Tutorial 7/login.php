<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h2>Login</h2>

    <form action="login.php" method="post">
        Username: <br>
        <input type="text" required name="username"> <br><br>

        Password: <br>
        <input type="text" required name="password"> <br><br>

        <input type="submit" value="Login"> 
        <input type="reset" value="Reset">
    </form>
        <p> Not a member? Register <a href="register.html">Here </a></p>


        <?php
            include("conn.php");

            session_start();
            
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
            // username and password sent from Form
            $username=mysqli_real_escape_string($con,$_POST['username']);
            $password=mysqli_real_escape_string($con,$_POST['password']);
            $sql="SELECT id FROM admin WHERE username='$username' and 
            password='$password'";

            if ($result = mysqli_query($con,$sql)) {
                // Return the number of rows in result set
                $rowcount = mysqli_num_rows($result);
            }
                if($rowcount == 1) {
                session_start();
                $_SESSION['mySession']=$username;
                header("location: view.php");
                }
                else {
                $error=printf("Your Login Name or Password is invalid. Please re login<br/><br/>");
                }
                mysqli_close($con);
                }
            
        ?>
</body>
</html>