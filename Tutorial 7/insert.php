<?php
    include ("conn.php");
    include("session.php");

    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES["contact_pic"]["name"]);

    if (move_uploaded_file($_FILES["contact_pic"]["tmp_name"], $target_file))
    {

        $sql="INSERT INTO contacts (contact_name, contact_phone, contact_email, contact_address, 
        contact_gender, contact_relationship, contact_dob, contact_pic)
        VALUES
        ('$_POST[name]','$_POST[phone_num]','$_POST[email_address]','$_POST[home_address]','$_POST[gender]',
        '$_POST[relationship]','$_POST[dob]','$_POST[contact_pic])";

        if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
        }
        else {
            echo '<script> alert("1 record added!"); window.location.href = "view.php"; </script>';
        }

        mysqli_close($con);
    }

    else{
        echo "Sorry, file cannot be uploaded";
    }
?>