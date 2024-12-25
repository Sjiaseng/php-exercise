<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
</head>
<body>
    <form action="T6Q2.5.php" method=post>
        <label for="number">Type a number: </label>
            <input type=integer id="in" name="input"><br><br>

        <label for="Temperature">Choose a Unit:</label> 
            <select id="temperature" name="temp" size="1"> 
                <option value="Fahrenheit">Fahrenheit</option>
                <option value="Celcius">Celcius</option> 
        
        <input type=submit name=submit value="Convert">
    </form>

</body>
</html>