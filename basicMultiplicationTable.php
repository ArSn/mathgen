<?php

use TaskGenerators\BasicMultiplicationTable;

require_once './bootstrap.php';

$generator = new BasicMultiplicationTable();

if (empty($_POST) === false) {
	$pdf = new KazFPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial', '', 14);
	for ($i = 0; $i < $_POST['taskCount']; $i++) {
		$generator->generate($_POST['numbers']);
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
	<p>Zu verwendende Zahlen</p>
	<label>0 <input type="checkbox" name="numbers[]" value="0" /></label><br />
	<label>1 <input type="checkbox" name="numbers[]" value="1" /></label><br />
	<label>2 <input type="checkbox" name="numbers[]" value="2" /></label><br />
	<label>3 <input type="checkbox" name="numbers[]" value="3" /></label><br />
	<label>4 <input type="checkbox" name="numbers[]" value="4" /></label><br />
	<label>5 <input type="checkbox" name="numbers[]" value="5" /></label><br />
	<label>6 <input type="checkbox" name="numbers[]" value="6" /></label><br />
	<label>7 <input type="checkbox" name="numbers[]" value="7" /></label><br />
	<label>8 <input type="checkbox" name="numbers[]" value="8" /></label><br />
	<label>9 <input type="checkbox" name="numbers[]" value="9" /></label><br />
	<label>10 <input type="checkbox" name="numbers[]" value="10" /></label>
	<p><input type="submit" value="Erstellen" /></p>
</form>