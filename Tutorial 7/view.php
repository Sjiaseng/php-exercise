<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <?php include("conn.php");
    include("session.php");
    //mysqli_query($con,"query") -1st
    //$sql= "SELECT * FROM Contacts"; -2nd
    //$result = mysqli_query($con,$sql) -2nd
    $result = mysqli_query($con,"SELECT * FROM contacts");
    ?>

    <!-- static row/table header -->

    <table width="90%">
        <tr bgcolor="#CC99FF">
            <td>Name</td>
            <td>Phone Number</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Relationship</td>
            <td>DOB</td>
            <td>Profile Picture </td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    <!-- end -->

    <!-- dynamic row -->
    <?php
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";

                echo "<td>" .$row["contact_name"]. "</td>";
            
                echo "<td>" .$row["contact_phone"]. "</td>";
                
                echo '<td><a href= " mailto: '. $row["contact_email"].'">' .$row["contact_email"]. "</a> </td>";
            
                echo "<td>" .$row["contact_address"]. "</td>";
                
                echo "<td>" .$row["contact_gender"]. "</td>";
            
                echo "<td>" .$row["contact_relationship"]. "</td>";
            
                echo "<td>" .$row["contact_dob"]. "</td>";

                echo "<td> <img src='/uploads".$row["contact_pic"]."'> </td>";

                echo "<td><a href=\"edit.php?id=".$row["id"]; 
                echo $row['id'];
                echo "\">Edit</a></td>";

                echo "<td><a href=\"delete.php?id=".$row["id"];
                echo $row['id'];
                echo "\" onClick=\"return confirm('Delete "; 
                echo $row['contact_name'];
                echo " details?');\">Delete</a></td></tr>";

            echo "</tr>";

        }
        
        mysqli_close($con); 
    ?>

    </table> 

    <a href="default.html">To Add Contacts</a>
    <a href="logout.php">To Logout </a>
    
</body>
</html>
