<?php

// Load the XML file
$xml = simplexml_load_file("students.xml");

// Check if XML file was loaded successfully
if ($xml === false) {
    die("Error: Unable to load students.xml");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information System</title>
</head>
<body>

    <h1>Student Information System</h1>

    <?php

    // Loop through all students
    foreach ($xml->student as $student) {

        // Display student name
        echo "<h2>";
        echo $student->firstName . " " . $student->lastName;
        echo "</h2>";

        // Display programme
        echo "<p><strong>Programme:</strong> ";
        echo $student->programme;
        echo "</p>";

        // Display registration number
        echo "<p><strong>Registration Number:</strong> ";
        echo $student['regNumber'];
        echo "</p>";

        // Display registered courses
        echo "<strong>Registered Courses:</strong>";

        echo "<ul>";

        foreach ($student->courses->course as $course) {

            echo "<li>";

            echo $course['code'] . " - " . $course;

            echo "</li>";
        }

        echo "</ul>";

        echo "<hr>";

    }

    ?>

</body>
</html>
