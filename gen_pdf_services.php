<?php

if(isset($_GET["serviceId"])){
    $serviceId = $_GET["serviceId"];
}

require('fpdf/fpdf.php'); 

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Service Information', 0, 1, 'C');
        $this->Ln(10); // Add some space after the header
    }

    function Footer()
    {
        // Add a page border
        $this->SetDrawColor(0, 0, 0); // Black color for the border
        $this->Rect(5, 5, 200, 280); // Set the position and dimensions of the border rectangle

        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();

try {
    $connection = new mysqli("localhost", "root", "", "mini");
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    
    $query = "SELECT * FROM services WHERE id = $serviceId";

    $result_set = $connection->query($query);

    while ($row = $result_set->fetch_assoc()) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, "Full Name: " . $row["fullName"], 0, 1);
        $pdf->Cell(0, 10, "Organization: " . $row["organization"], 0, 1);
        $pdf->Cell(0, 10, "Address: " . $row["address"], 0, 1);
        $pdf->Cell(0, 10, "Email: " . $row["email"], 0, 1);
        $pdf->Cell(0, 10, "Mobile Number: " . $row["phoneNumber"], 0, 1);
        $pdf->Cell(0, 10, "Type of services: " . $row["typeOfServices"], 0, 1);
        $pdf->Cell(0, 10, "Services Description: " . $row["servicesDescription"], 0, 1);
        $pdf->Cell(0, 10, "Time Line: " . $row["timeLine"], 0, 1);
        $pdf->Cell(0, 10, "Budget: " . $row["budget"], 0, 1);
        $pdf->Ln(10); 
    }
    
    $connection->close();
} catch (mysqli_sql_exception $e) {
    // Handle the exception
    die("Error: " . $e->getMessage());
}

$pdf->Output('D', 'session_information.pdf'); // D: Download, F: Save to file, I: Display in browser
?>
