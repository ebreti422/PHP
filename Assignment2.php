<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Functions Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">

    <?php
    echo "<div class='alert alert-warning'>";
    echo "<h1 class='text-center mb-4'>Assignment 2 <br> PHP Function Showcase <br> Evan Breti</h1>";
    // 2. Declare and Use Functions
    function calculateSum($a, $b) {
        return $a + $b;
    }
    $sum = calculateSum(15, 25);
    echo "<div class='alert alert-primary'>";
    echo "<h4 class='alert-heading'>Declare and Use Functions</h4>";
    echo "Sum of 15 and 25 is: <strong>$sum</strong></div>";

    // 3. Conditionals
    echo "<div class='alert alert-info'>";
    echo "<h4 class='alert-heading'>Conditionals</h4>";
    function checkEvenOdd($number) {
        $result = ($number % 2 == 0) ? "even" : "odd";
        echo "<p>$number is <strong>$result</strong></p>";
    }
    checkEvenOdd(10);
    checkEvenOdd(7);
    echo "</div>";

    // 4. Arrays
    $fruits = ["Apple", "Banana", "Cherry", "Blueberry", "Strawberry"];
    function printArray($array) {
        echo "<div class='alert alert-success'>";
        echo "<h4 class='alert-heading'>Arrays</h4>";
        echo "<ul class='mb-0'>";
        foreach ($array as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
    printArray($fruits);

    // 5. Associative Arrays
    $student = [
        "name" => "Evan Breti",
        "age" => 30,
        "grade" => "Year 1 Post-Secondary",
        "school" => "ABM College"
    ];
    function printStudentInfo($student) {
        echo "<div class='alert alert-info'>";
        echo "<h4 class='alert-heading'>Associative Arrays</h4>";
        echo "<p><strong>Name:</strong> {$student['name']}</p>";
        echo "<p><strong>Age:</strong> {$student['age']}</p>";
        echo "<p><strong>Grade:</strong> {$student['grade']}</p>";
        echo "<p><strong>School:</strong> {$student['school']}</p>";
        echo "</div>";
    }
    printStudentInfo($student);

    // 6. Using Built-in Functions
    function stringOperations($text) {
        $uppercase = strtoupper($text);
        $length = strlen($text);
        $hyphenated = str_replace(" ", "-", $text);

        echo "<div class='alert alert-primary'>";
        echo "<h4 class='alert-heading'>Using Built-in Functions</h4>";
        echo "<p><strong>Original:</strong> $text</p>";
        echo "<p><strong>Uppercase:</strong> $uppercase</p>";
        echo "<p><strong>Length:</strong> $length</p>";
        echo "<p><strong>Hyphenated:</strong> $hyphenated</p>";
        echo "</div>";
    }
    stringOperations("This is a sample string, demonstrating PHP functions.");
    ?>
    </div>
</div>
</body>
</html>