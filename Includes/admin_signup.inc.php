<?php
require_once '../db.php';
require_once 'function.inc.php';

if (isset($_POST["adminsignup"])) {
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["re-password"];

    $invalidUid = invalidUid($username);
    $pwdMatch = pwdMatch($pwd, $pwdRepeat);
    $isStrongPassword = isStrongPassword($pwd);

    try {
        // Check if the username is invalid
        if ($invalidUid !== false) {
            throw new Exception("Invalid username");
        }

        // Check if the password is too weak
        if ($isStrongPassword === false) {
            throw new Exception("Password is too weak");
        }

        // Check if the passwords don't match
        if ($pwdMatch !== false) {
            throw new Exception("Passwords don't match");
        }

        // Hash the password
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        // Insert the user into the database
        $sql = "INSERT INTO admin (`userName`, `password`) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $hashedPwd);

        if ($stmt->execute()) {
            echo "<script language='javascript'>";
            echo "alert('Admin added successfully');";
            echo "window.location.href = '../index_admin.php';"; 
            echo "</script>";
            exit;
        } else {
            throw new Exception("Error executing SQL statement: " . $stmt->error);
        }

        $stmt->close();
    } catch (Exception $e) {
        // Handle the exception (e.g., display an error message)
        echo "<script language='javascript'>";
        echo "alert('Error: " . $e->getMessage() . "');";
        echo "window.location.href = 'admin_signup.php';"; 
        echo "</script>";
    } finally {
        $conn->close();
    }
} else {
    header('Location:../index_admin.php');
    exit();
}
?>



