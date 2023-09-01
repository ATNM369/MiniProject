<?php
// Include the database connection file
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $fullName = $_POST['fullName'];
    $organization = $_POST['organization'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $serviceType = $_POST['serviceType'];
    $serviceDescription = $_POST['serviceDescription'];
    $timeline = $_POST['timeline'];
    $budget = $_POST['budget'];

    // SQL query to insert data into the 'services' table
    $sql = "INSERT INTO services (fullName,organization,address,email,phoneNumber,typeOfServices,servicesDescription,timeLine,budget)
            VALUES ('$fullName', '$organization', '$address', '$email', '$phone', '$serviceType', '$serviceDescription', '$timeline', '$budget')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1>Form Submission Result</h1>";
        echo "<p>Form data has been successfully added to the database.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    // If the page is accessed directly without a POST request, display an error message
    echo "<h1>Error: Form submission only allowed through the form</h1>";
}
?>
