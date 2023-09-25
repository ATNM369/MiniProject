<?php

// Include the database connection file
include 'db.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Retrieve data from the form
    $fullName = $_POST['fullName'];
    $Address = $_POST['Address'];
    $EmailAddress = $_POST['EmailAddress'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $dob = $_POST['dob'];
    $HEL = $_POST['HEL'];
    $AcademicBackground = $_POST['AcademicBackground'];
    $PreviousWorkExperience = $_POST['PreviousWorkExperience'];
    $JobResponsibilities = $_POST['JobResponsibilities'];
    $SkillsAndCompetencies = $_POST['SkillsAndCompetencies'];

    // Insert data into the "projects" table
    $sql = "INSERT INTO projects (fullName, Address, EmailAddress, PhoneNumber, dob, HEL, AcademicBackground, PreviousWorkExperience, JobResponsibilities, SkillsAndCompetencies)
            VALUES ('$fullName', '$Address', '$EmailAddress', '$PhoneNumber', '$dob', '$HEL', '$AcademicBackground', '$PreviousWorkExperience', '$JobResponsibilities', '$SkillsAndCompetencies')";

    if ($conn->query($sql) === TRUE) {
        echo "Project application submitted successfully.<br><br>";
        echo '<a href="index1.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px;">Go to Home Page</a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Error: Invalid form submission.";
}
?>
