<?php

use fpdf\FPDF;
use TaskGenerators\PlusMinus;

require_once './bootstrap.php';

$generator = new PlusMinus();

if (empty($_POST) === false) {
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial', '', 14);
	for ($i = 0; $i < $_POST['taskCount']; $i++) {
		$generator->generate();
		$pdf->Cell(10, 10, '');
		$pdf->Cell(150, 10, $generator->getTask() . ' = ');
		$pdf->Cell(20, 10, $generator->getResult());
		$pdf->Line(145, $pdf->GetY() + 1, 145, $pdf->GetY() + 3);
		$pdf->Line(145, $pdf->GetY() + 4, 145, $pdf->GetY() + 6);
		$pdf->Line(145, $pdf->GetY() + 7, 145, $pdf->GetY() + 9);
		$pdf->Ln();
		$pdf->Line(20, $pdf->GetY(), 190, $pdf->GetY());
	}
	echo $pdf->Output();
}

require_once './menu.php';

?>

<form action="" method="post">
	<label> Zahl der Aufgaben
	<input type="text" name="taskCount" value="104" />
	</label>
	<input type="submit" value="Erstellen" />
</form>