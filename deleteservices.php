<?php 
    include_once 'db.php';

    if(isset($_GET['serviceid'])){  
        $serviceid = $_GET['serviceid'];

        $sql = "DELETE FROM services WHERE id=?";
        try {
            if ($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $serviceid);
                mysqli_stmt_execute($stmt);
        
                // Close the statement and the database connection
                mysqli_stmt_close($stmt);
                header("Location:viewservices.php");
                exit;
            } else {
                throw new Exception(mysqli_error($conn));
            }
        } catch (Exception $e) {
            header("Location:admin.php");
            exit;
        }
        

    } else{
        echo "None";
    }
?>