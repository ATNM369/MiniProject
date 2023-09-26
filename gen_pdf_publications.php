<?php

if(isset($_GET["publicationId"])){
    $publicationId = $_GET["publicationId"];
}

require('fpdf/fpdf.php'); // Make sure to provide the correct path to the fpdf library

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, 'Publications Information', 0, 1, 'C');
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
    
    $query = "SELECT * FROM publications WHERE id = $publicationId";

    $result_set = $connection->query($query);

    while ($row = $result_set->fetch_assoc()) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, "Full Name: " . $row["fullName"], 0, 1);
        $pdf->Cell(0, 10, "affiliation: " . $row["affiliation"], 0, 1);
        $pdf->Cell(0, 10, "emailAddress: " . $row["emailAddress"], 0, 1);
        $pdf->Cell(0, 10, "phoneNumber: " . $row["phoneNumber"], 0, 1);
        $pdf->Cell(0, 10, "titleOfResearch: " . $row["titleOfResearch"], 0, 1);
        $pdf->Cell(0, 10, "abstract: " . $row["abstract"], 0, 1);
        $pdf->Cell(0, 10, "copyrightStatement: " . $row["copyrightStatement"], 0, 1);
        $pdf->Cell(0, 10, "permissionToPublish: " . $row["permissionToPublish"], 0, 1);
        $pdf->Cell(0, 10, "authorBiography: " . $row["authorBiography"], 0, 1);
        $pdf->Cell(0, 10, "citationFormat: " . $row["citationFormat"], 0, 1);
        $pdf->Cell(0, 10, "desiredPublicationDate: " . $row["attributionPreferences"], 0, 1);
        $pdf->Cell(0, 10, "desiredPublicationDate: " . $row["desiredPublicationDate"], 0, 1);
        $pdf->Ln(10); 
    }
    
    $connection->close();
} catch (mysqli_sql_exception $e) {
    // Handle the exception
    die("Error: " . $e->getMessage());
}

$pdf->Output('D', 'publication_information.pdf'); // D: Download, F: Save to file, I: Display in browser
?>
