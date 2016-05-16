<?php

use TaskGenerators\PlusMinus;

require_once './bootstrap.php';

$generator = new PlusMinus();

if (empty($_POST) === false) {
	$pdf = new KazFPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial', '', 14);
	for ($i = 0; $i < $_POST['taskCount']; $i++) {
		$generator->generate();
		$pdf->printTask($generator);
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