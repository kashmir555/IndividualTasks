<?php
$title = "Exercise 3";
include "header.php";
?>

<main class="container mt-4">

    <!-- 1️⃣ BOOTSTRAP FORM -->
    <h4>1. Bootstrap Styled Form</h4>

   <form method="post" action="" class="row g-3">
            <div class="col-md-5">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter first name" required>
            </div>
            <div class="col-md-5">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter last name" required>
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button type="submit" name="submit_form" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>
    <?php
    if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
        echo "<h3>Hello " .
             htmlspecialchars($_POST['firstname']) . " " .
             htmlspecialchars($_POST['lastname']) .
             ", You are welcome to my site.</h3>";
    }
    ?>

    <hr>

    <!-- 2️⃣ BOOTSTRAP TABLE -->
    <h4>2. Bootstrap Styled Table</h4>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>John</td><td>5</td></tr>
            <tr><td>2</td><td>Alice</td><td>4</td></tr>
            <tr><td>3</td><td>Bob</td><td>5</td></tr>
        </tbody>
    </table>

    <hr>

    <!-- 3️⃣ STRING VARIABLES -->
    <h4>3. String Variables</h4>

    <?php
    $str1 = "Hello";
    $str2 = "World";
    $combined = $str1 . " " . $str2;

    echo $combined . "<br>";
    echo "Length: " . strlen($combined);
    ?>

    <hr>

    <!-- 4️⃣ NUMBER ADDITION -->
    <h4>4. Number Addition</h4>

    <?php
    $n1 = 298;
    $n2 = 234;
    $n3 = 46;

    echo "Total sum: " . ($n1 + $n2 + $n3);
    ?>

    <hr>

    <!-- 5️⃣ BROWSER DETECTION -->
    <h4>5. Browser Detection</h4>

    <?php
    echo "Browser info: " . $_SERVER['HTTP_USER_AGENT'];
    ?>

</main>

<?php include "footer.php"; ?>

