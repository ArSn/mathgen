<?php

namespace TaskGenerators;

class BasicMultiplicationTable implements HasTaskData
{
	private $task;
	private $result;

	public function generate($numbers)
	{
		$first = $numbers[array_rand($numbers)];
		$second = $numbers[array_rand($numbers)];

		$this->task = $first . ' ' . utf8_decode('·') . ' ' . $second;
		$this->result = $this->calculateResult($first, $second);
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

	private function calculateResult($first, $second)
	{
		return $first * $second;
	}
}