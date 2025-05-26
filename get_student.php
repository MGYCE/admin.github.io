<?php
// Example data (you can replace this with a database query)
$students = [
    "101" => ["name" => "Alice", "class" => "10A", "marks" => 88],
    "102" => ["name" => "Bob", "class" => "10B", "marks" => 76],
    "103" => ["name" => "Charlie", "class" => "10A", "marks" => 92],
];

$roll = $_POST['roll'] ?? '';

if (isset($students[$roll])) {
    $student = $students[$roll];
    echo "<h2>Student Details</h2>";
    echo "Name: " . $student['name'] . "<br>";
    echo "Class: " . $student['class'] . "<br>";
    echo "Marks: " . $student['marks'] . "<br>";
} else {
    echo "<h2>No student found with Roll Number: $roll</h2>";
}
?>
