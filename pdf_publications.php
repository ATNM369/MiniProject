<!DOCTYPE html>
<html>
<head>
    <title>Display PDF</title>
    <style>

    *{
        margin: 0;
        padding: 0;
        box-sizing : border-box;
    }

        main {
            height: 100vh;
            width: 100%;
            margin: 0; /* Remove default margin on the body element */
            overflow: hidden; /* Hide any scrollbars that may appear */
        }

        /* Style the embedded PDF to fill the entire viewport */
        embed {
            width: 100%;
            height: 100%;
            display: block; /* Remove any extra spacing around the embed element */
        }
    </style>

</head>
<body>
    <main>
        <?php
            include 'db.php';

            // Check if the 'id' parameter is provided in the URL
            if (isset($_GET['id'])) {
                // Sanitize and validate the 'id' parameter to prevent SQL injection
                $id = intval($_GET['id']);

                if ($id <= 0) {
                    die("Invalid 'id' parameter.");
                }

                // Prepare a SELECT statement with a placeholder for security
                $sql = "SELECT pdfFile FROM publications WHERE id = ?";

                // Use prepared statements to avoid SQL injection
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    // Bind the 'id' parameter to the prepared statement
                    $stmt->bind_param("i", $id);

                    // Execute the prepared statement
                    if ($stmt->execute()) {
                        // Bind the result variable
                        $stmt->bind_result($pdfFile);

                        // Fetch the result
                        if ($stmt->fetch()) {
                            // Output the PDF file using an embed tag with width and height set to 100% to make it full screen
                            echo '<embed type="application/pdf" src="' . $pdfFile . '">';
                        } else {
                            echo "PDF file not found.";
                        }
                    } else {
                        echo "Error executing the SQL statement: " . $stmt->error;
                    }

                    // Close the prepared statement
                    $stmt->close();
                } else {
                    echo "Error preparing the SQL statement: " . $conn->error;
                }
            } else {
                echo "Invalid request.";
            }

            // Close the database connection
            $conn->close();
        ?>
    </main>
</body>
</html>
