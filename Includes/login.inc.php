<?php
require_once '../db.php';

if (isset($_POST["login"])) {
    $userName = $_POST["username"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM myguests WHERE UserName = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userName);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if ($row) {
        $storedPassword = $row["Password"];

        // Verify the hashed password
        if (password_verify($pass, $storedPassword)) {

            header ('Location: ../index1.php');

            //echo "Successfully Login";
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Username not found";
    }

    $stmt->close();
    $conn->close();
} else {
    header('Location: ../login.php');
    exit;
}
?>
