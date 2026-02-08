<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Multiplication Table Generator</h2>

    <form method="post" action="">
        Enter a number: 
        <input type="number" name="number" required>
        <input type="submit" value="Generate Table">
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['number'];

    echo "<h3>Multiplication Table of $n</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n × $i = $result<br>";
    }
}
?>
</body>
</html>
