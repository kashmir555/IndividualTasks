<?php
$title = "Voting Eligibility & Loops";
include "header.php";
?>

<main style="text-align: center; margin-top: 30px;">
    <h2><?php echo $title; ?></h2>

    <!-- VOTING FORM -->
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Age: <input type="number" name="age"><br><br>
        <input type="submit" name="vote_check" value="Check">
    </form>

    <?php
    if (isset($_POST['vote_check'])) {
        $name = htmlspecialchars($_POST['name']);
        $age = (int)$_POST['age'];

        if ($age >= 18) {
            echo "<h3>Hello $name, you are eligible to vote.</h3>";
        } else {
            echo "<h3>Hello $name, you are not eligible to vote.</h3>";
        }
    }
    ?>

    <hr>

    <!-- FOR LOOP : MULTIPLICATION TABLE -->
    <h3>Multiplication Table (For Loop)</h3>
    <form method="post">
        Enter number: <input type="number" name="table"><br><br>
        <input type="submit" name="show_table" value="Show Table">
    </form>

    <?php
    if (isset($_POST['show_table'])) {
        $n = (int)$_POST['table'];
        for ($i = 1; $i <= 10; $i++) {
            echo "$n × $i = " . ($n * $i) . "<br>";
        }
    }
    ?>

    <hr>

    <!-- WHILE LOOP : 1 TO N -->
    <h3>Print Numbers from 1 to n (While Loop)</h3>
    <form method="post">
        Enter n: <input type="number" name="limit"><br><br>
        <input type="submit" name="print_numbers" value="Print Numbers">
    </form>

    <?php
    if (isset($_POST['print_numbers'])) {
        $n = (int)$_POST['limit'];
        $i = 1;
        while ($i <= $n) {
            echo $i . " ";
            $i++;
        }
    }
    ?>

    <hr>

    <!-- FOREACH LOOP -->
    <h3>Subjects (Foreach Loop)</h3>
    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

    foreach ($myarray as $value) {
        echo $value . "<br>";
    }
    ?>

    <hr>

    <!-- SWITCH CASE -->
    <?php
    $currentMonth = date("F");
    switch ($currentMonth) {
        case "August":
            echo "<h3>It's August, so it's still holiday.</h3>";
            break;
        default:
            echo "<h3>Not August, this is $currentMonth so I don't have any holidays.</h3>";
            break;
    }
    ?>
</main>

</body>
</html>
