<!DOCTYPE html>
<html>
<head>
    <title>Print Numbers from 1 to n</title>
</head>
<body>
    <h2>Print Numbers from 1 to n</h2>

    
    <form method="post" action="">
        Enter a number: 
        <input type="number" name="number" required>
        <input type="submit" value="Print Numbers">
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['number'];
    $i = 1; 

    echo "<h3>Numbers from 1 to $n:</h3>";

   
    while ($i <= $n) {
        echo $i . "<br>";
        $i++; 
    }
}
?>
</body>
</html>
