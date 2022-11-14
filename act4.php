<?php
include "vendor/autoload.php";
use Fpdf\Fpdf;

//Parse
$csv_file = 'countries2022.csv';
$handle = fopen($csv_file, 'r');
$row_index = 0; // initialize
$headers = [];
$data = [];

while (($row_data = fgetcsv($handle, 1000, ',')) !== FALSE)
{
	if ($row_index++ < 1)
	{
		foreach ($row_data as $col)
		{
			array_push($headers, $col);
		}
		continue;
	}

	$tmp = [];
	for ($index = 0; $index < count($headers); $index++)
	{
		$tmp[$headers[$index]] = $row_data[$index];
	}
	array_push($data, $tmp);
}

fclose($handle);
//End of Parse

class PDF extends Fpdf
{
    // Simple table
    function BasicTable($header, $data)
    {
        // Header
        foreach($header as $col)
            $this->Cell(60,15,$col,1);
        $this->Ln();
        // Data
        foreach($data as $row)
        {
            foreach($row as $col)
                $this->Cell(60,15,$col,1);
            $this->Ln();
        }
    }
}

$pdf = new PDF();
// Column headings
$header = array('#', 'Country (or dependency)', 'Population (2022)',);
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$pdf->BasicTable($header, $data);
$pdf->Output();
?>