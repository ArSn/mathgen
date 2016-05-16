<?php

use fpdf\FPDF;
use TaskGenerators\HasTaskData;

/**
 * Convenience wrapper to make printing one task easier.
 */
class KazFPDF extends FPDF
{
	/**
	 * @param HasTaskData $generator
	 */
	public function printTask(HasTaskData $generator)
	{
		$this->Cell(10, 10, '');
		$this->Cell(150, 10, $generator->getTask() . ' = ');
		$this->Cell(20, 10, $generator->getResult());
		$this->Line(145, $this->GetY() + 1, 145, $this->GetY() + 3);
		$this->Line(145, $this->GetY() + 4, 145, $this->GetY() + 6);
		$this->Line(145, $this->GetY() + 7, 145, $this->GetY() + 9);
		$this->Ln();
		$this->Line(20, $this->GetY(), 190, $this->GetY());
	}
}