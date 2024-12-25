<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>

    <h2>My Address Book</h2>

    <h3>Edit Profile</h3>

    <?php
        include("conn.php");
        $id = intval($_GET['id']); //intval — Get the integer value of a variable
        $result = mysqli_query($con,"SELECT * FROM contacts WHERE id=$id");
        while($row = mysqli_fetch_array($result))
        {
    ?>

    <form action="update.php" method="post">

        Id: &nbsp;<input type="hidden" name="id" value="<?php echo $row['id'] ?>"> <br> <br>

        Name: &nbsp; <input type="text" name="name" required="required" value="<?php echo $row['contact_name'] ?>"> <br> <br>

        Phone Number: &nbsp; <input type="tel" name="phone_num" required="required" value="<?php echo $row['contact_phone'] ?>"> <br> <br>

        Email Address: &nbsp; <input type="email" name="email_address" required="required" value="<?php echo $row['contact_email'] ?>"> <br> <br>

        Home Address: <br><textarea name="home_address" required="required" > <?php echo $row['contact_address'] ?> </textarea> <br> <br>

        Gender:&nbsp;
        <input type="radio" name="gender" value="Male" required="required" <?php if ($row['contact_gender'] == "Male") { ?> checked="checked" <?php } ?>> Male 
        <input type="radio" name="gender" value="Female" required="required" <?php if ($row['contact_gender'] == "Female") { ?> checked="checked" <?php } ?>> Female <br> <br>

        Relationship:&nbsp;
            <select name="relationship" required="required">
                <option value="">Please select</option>
                <option value="Family" <?php if ($row['contact_relationship'] == "Family") { ?> selected="selected" <?php } ?>>Family</option>
                <option value="Friend" <?php if ($row['contact_relationship'] == "Friend") { ?> selected="selected" <?php } ?>>Friend</option>
                <option value="Colleague" <?php if ($row['contact_relationship'] == "Colleague") { ?> selected="selected" <?php } ?>>Colleague</option>
                <option value="Other" <?php if ($row['contact_relationship'] == "Other") { ?> selected="selected" <?php } ?>>Other</option>
            </select> <br> <br>

        Date of Birth: &nbsp; <input type="date" name="dob" value="<?php echo $row['contact_dob'] ?>"> <br> <br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">

    </form>
    
    <?php
        }
        mysqli_close($con);
    ?>

</body>
</html>
