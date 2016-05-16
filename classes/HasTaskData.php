<?php

namespace TaskGenerators;

/**
 * Interface to be implemented by all task generators in order to have them easily printable.
 */
interface HasTaskData
{
	/**
	 * Gets the task as a string.
	 *
	 * @return string
	 */
	public function getTask();

	/**
	 * Gets the result.
	 *
	 * @return string|int
	 */
	public function getResult();
}