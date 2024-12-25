<?php
session_start();
if(isset($_POST["login"])) {
	
	$conn = mysqli_connect("localhost", "root", "", "lecture 6");
	
	$sql = "SELECT * FROM members WHERE member_name = '" . $_POST["member_name"] . "' AND member_password = '" . $_POST["member_password"] . "'";
    
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	if($row) {
			$_SESSION["member_id"] = $row["member_id"];
			
			if(isset($_POST["remember"])) {
				setcookie ("member_login",$_POST["member_name"],time() + (604800), "/"); 
			//604800 seconds = 7 days
			} else {
				unset($_COOKIE['member_login']); 
				setcookie('member_login', null, -1, '/');
			}
			
			echo "<script>window.location.href='protected.php';</script>";
			
			
	} else {
		$message = "Invalid Login";
	}
}
?>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
body {
	font-family: 'Montserrat', sans-serif;
}
</style>

</head>
<body>


<form action="" method="post">
	<div><?php if(isset($message)) { echo $message; } ?></div>	
	<div>
		<div><label for="login">Username</label></div>
		<div><input name="member_name" type="text" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" >
	</div>
	<div>
		<div><label for="password">Password</label></div>
		<div><input name="member_password" type="password" value="" > 
	</div>
	<div>
		<div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
		<label for="remember-me">Remember me</label>
	</div>
	<div>
		<div><input type="submit" name="login" value="Login"></span></div>
	</div>       
</form>
</body>
</html>