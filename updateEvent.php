<?php
session_start();
if (!isset($_SESSION["userName"]) && $_SESSION["role"] !== "admin") {
    header("Location: index.php");
    exit();
}

include 'db.php';

if (isset($_POST['eventUpdate']) && isset($_GET['eventId'])) {
    // Retrieve projectId from the URL using $_GET
    $id = $_GET['eventId'];
    
    // Retrieve projectTitle and projectDesc from the form using $_POST
    $title = $_POST['eventTitle'];
    $desc = $_POST['eventDesc'];

    try {
        $sql = "UPDATE events SET eventTitle=?, eventDesc=? WHERE id=?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssi", $title, $desc, $id); // Use "ssi" for integer parameter
            mysqli_stmt_execute($stmt);
    
            // Close the statement and the database connection
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
    
            // Redirect to a success page or display a success message
            header("Location:event.php?status=success&message=project updated successfully");
            exit();
        } else {
            throw new Exception(mysqli_error($conn));
        }
    } catch (Exception $e) {
        header("Location:event.php?status=unsuccess&message=project updated unsuccessfully " . $e->getMessage());
        exit();
    }

} else {
    header("Location: event.php?status=unsuccess&message=project updated unsuccessfully");
    exit();
}
?>
