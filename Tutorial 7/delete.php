<?php
    include("conn.php");
    include("session.php");

    $id = intval($_GET["id"]);

    $sql="DELETE FROM contacts WHERE  id=$id";
    $result = mysqli_query($con, $sql);
    
    mysqli_close($con); 
    header("location:view.php");
    echo "<script>alert('Record deleted'); window.location.href='view.php'></script>";
?>
