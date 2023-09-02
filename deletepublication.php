<?php 
    include_once 'db.php';

    if(isset($_GET['publicationid'])){  
        $publicationid = $_GET['publicationid'];

        $sql = "DELETE FROM publications WHERE id=?";
        try {
            if ($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $publicationid);
                mysqli_stmt_execute($stmt);
        
                // Close the statement and the database connection
                mysqli_stmt_close($stmt);
                header("Location:viewpublications.php");
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