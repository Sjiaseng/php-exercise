<?php
    include ("conn.php");

    $sql="INSERT INTO contacts (user_name, user_password, user_email)
    VALUES
    ('$_POST[username], $_POST[password], $_POST[email]')";

    if (!mysqli_query($con,$sql)) {
        die('Error: ' . mysqli_error($con));
    }
    else {
        echo '<script> alert("Successfully registered!"); window.location.href = "default.html"; </script>';
    }

    mysqli_close($con);
?>