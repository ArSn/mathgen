<?php

namespace TaskGenerators;

class PlusMinus
{
	private $task;
	private $result;

	public function generate()
	{
		do {
			$first = mt_rand(0, 100);
			$second = mt_rand(0, 100);
			$operator = mt_rand(0, 1) ? '+' : '-';
		} while ($this->isValid($first, $second, $operator) === false);

		$this->task = $first . ' ' . $operator . ' ' . $second;
		$this->result = $this->calculateResult($first, $second, $operator);
		return true;
	}

	public function getTask()
	{
		return $this->task;
	}

	public function getResult()
	{
		return $this->result;
	}

	private function isValid($first, $second, $operator)
	{
		$result = $this->calculateResult($first, $second, $operator);
		return (0 <= $result && $result <= 100);
	}

	private function calculateResult($first, $second, $operator)
	{
		if ($operator == '+') {
			return ($first + $second);
		}
		return ($first - $second);
	}
}