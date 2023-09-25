<?php
include_once "db.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["action"]) && $_GET["action"] === "verify" && isset($_GET["publicationid"])) {
        // Get the publication ID from the URL
        $publicationId = intval($_GET["publicationid"]);

        // Update the verified status in the database
        $updateSql = "UPDATE publications SET verified = 1 WHERE id = ?";
        $stmt = $conn->prepare($updateSql);

        if ($stmt) {
            $stmt->bind_param("i", $publicationId);

            if ($stmt->execute()) {
                // Verification successful, redirect back to viewpublications.php
                header("Location: viewpublications.php");
                exit();
            } else {
                echo "Error updating verification status: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error preparing update statement: " . $conn->error;
        }
    } else {
        echo "Invalid action or publication ID.";
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
