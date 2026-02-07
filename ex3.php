
<?php
$title = "USER FORM";
include "header.php";
?>

<main>
    <h2><?php echo $title; ?></h2>

    
    <form action="" method="post">
        Firstname: <input type="text" name="firstname"><br><br>
        Lastname: <input type="text" name="lastname"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
   
    if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);

       
        echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";
    }
    ?>
</main>



<?php
$string1 = "Hello";
$string2 = "World";

$combined = $string1 . " " . $string2;


echo $combined . "<br>";

echo "Length: " . strlen($combined);
?><br>


<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;

$sum = $num1 + $num2 + $num3;

echo "The total sum is: " . $sum;
?>


