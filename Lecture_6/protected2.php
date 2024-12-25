<?php
session_start();

if(isset($_SESSION["member_id"])){
	echo $_SESSION["member_id"] . " " . $_SESSION["fullname"];
}
else {
	echo "session not set";
}


?>