<?php
$title = "Exercise 1";
include "header.php";
?>

<main>

<?php
echo "<h3>Hello world! My name is David</h3>";
echo "<h4>PHP is interesting!</h4>";

$g1 = 5;
$g2 = 4;
$g3 = 5;
?>

<table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
        <th>S.N.</th>
        <th>Name</th>
        <th>Grade</th>
    </tr>
    <tr>
        <td>1</td>
        <td>John</td>
        <td><?php echo $g1; ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Alice</td>
        <td><?php echo $g2; ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Bob</td>
        <td><?php echo $g3; ?></td>
    </tr>
</table>

<h3>Screenshot</h3>
<img src="screenshot.png" alt="My screenshot" width="300">

</main>

<?php include "footer.php"; ?>
