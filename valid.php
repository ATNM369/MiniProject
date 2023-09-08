<?php
session_start();
include_once 'db.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    // Prepare a SQL statement to fetch the user with the provided username
    $stmt = $conn->prepare("SELECT * FROM admin WHERE userName = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Verify the provided password with the hashed password in the database
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, redirect to the admin page

            $_SESSION["userName"] = $username;
            $_SESSION["role"] = "admin";


            header("location: adminpage.php");
            exit;
        } else {
            // Password is incorrect, show an alert
            echo "<script language='javascript'>";
            echo "alert('Wrong password');";
            echo "window.location.href = 'index_admin.php';"; // Redirect to index_admin.php
            echo "</script>";
            exit;
        }
    } else {
        // User with the provided username doesn't exist, show an alert
        echo "<script language='javascript'>";
        echo "alert('User not found');";
        echo "window.location.href = 'index_admin.php';"; // Redirect to index_admin.php
        echo "</script>";
        exit;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
