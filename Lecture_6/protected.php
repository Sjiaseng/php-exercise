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
<?php
session_start();

if(isset($_SESSION["member_id"])){
	$conn = mysqli_connect("localhost", "root", "", "demo_db");
	$sql = "SELECT * FROM members WHERE member_id = " . $_SESSION["member_id"] . "";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	
	echo "Hello ".$row["member_full_name"]."!<br>";
	echo '<br>Session value: '.$_SESSION["member_id"].'<br>';
	$_SESSION["fullname"] = $row["member_full_name"];
	
	if (isset($_COOKIE['member_login'])) {
	echo '<br>Cookie value: '.$_COOKIE['member_login'].'<br>';
	}
	

}
else {
	echo "<script>alert('Please Login!');window.location.href='login.php';</script>";
}

if(isset($_POST["logout"])){
	//session_start();
	header("location: login.php");
	session_destroy();
}

?>
<a href="protected2.php">Another Page</a>
<form method="post">
<button name="logout">Logout</button>
</form>
</body>
</html>