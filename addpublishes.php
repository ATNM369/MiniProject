<?php
// Include the database connection file
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Handle file upload
    $uploadDirectory = 'uploads/'; // Specify your upload directory
    $maxFileSize = 25000000; // 25MB in bytes

    if (!empty($_FILES['pdfFile']) && $_FILES['pdfFile']['error'] === UPLOAD_ERR_OK) {
        // Check file size
        if ($_FILES['pdfFile']['size'] <= $maxFileSize) {
            // Generate a unique filename
            $fileName = uniqid() . '-' . $_FILES['pdfFile']['name'];
            $filePath = $uploadDirectory . $fileName;

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES['pdfFile']['tmp_name'], $filePath)) {
                // File uploaded successfully, continue with data insertion

                // Retrieve data from the form
                $fullName = $_POST['fullName'];
                $affiliation = $_POST['affiliation'];
                $emailAddress = $_POST['emailAddress'];
                $phoneNumber = $_POST['phoneNumber'];
                $titleOfResearch = $_POST['titleOfResearch'];
                $abstract = $_POST['abstract'];
                $keywords = $_POST['keywords'];
                $copyrightStatement = $_POST['copyrightStatement'];
                $permissionToPublish = $_POST['permissionToPublish'];
                $coAuthor = $_POST['coAuthor'];
                $authorBiography = $_POST['authorBiography'];
                $citationFormat = $_POST['citationFormat'];
                $attributionPreferences = $_POST['attributionPreferences'];
                $desiredPublicationDate = $_POST['desiredPublicationDate'];

                // Insert data into the database
                $sql = "INSERT INTO publications (fullName, affiliation, emailAddress, phoneNumber, titleOfResearch, abstract, keywords, pdfFile, copyrightStatement, permissionToPublish, coAuthor, authorBiography, citationFormat, attributionPreferences, desiredPublicationDate)
                        VALUES ('$fullName', '$affiliation', '$emailAddress', '$phoneNumber', '$titleOfResearch', '$abstract', '$keywords', '$filePath', '$copyrightStatement', '$permissionToPublish', '$coAuthor', '$authorBiography', '$citationFormat', '$attributionPreferences', '$desiredPublicationDate')";

                if ($conn->query($sql) === TRUE) {
                    echo "Publication added successfully.<br><br>";
                    echo '<a href="index1.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px;">Go to Home Page</a>';
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;

                    echo '<a href="publishes_apply.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px;">Go to the form</a>';
                }
            } else {
                echo "Error: File upload failed.<br><br>";
                echo '<a href="publishes_apply.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px;">Go to the form</a>';
            }
        } else {
            echo "Error: File size exceeds the limit (25MB).<br><br>";
            echo '<a href="publishes_apply.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px;">Back to form</a>';
        }
    } else {
        echo "Error: Invalid file upload or form submission.<br><br>";
        echo '<a href="publishes_apply.php" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px;">Back to form</a>';
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Error: Invalid form submission.";
}
?>
