<?php
$title = "Voting Eligibility";
include "header.php";
?>

<main>
    <h2><?php echo $title; ?></h2>

    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Age: <input type="number" name="age"><br><br>
        <input type="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);

        if ($age >= 18) {
            echo "<h3>Hello $name, you are eligible to vote.</h3>";
        } else {
            echo "<h3>Hello $name, you are not eligible to vote.</h3>";
        }
    }
    ?>
   
</main>

</body>
</html>


<?php

$currentMonth = date("F");

switch ($currentMonth) {
    case "August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $currentMonth so I don't have any holidays.";
        break;
}
?>
