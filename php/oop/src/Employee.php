<?php

namespace Parking;

class Employee
{
	protected $name = null;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

    public function __toString()
    {
        return '#'.$this->name;
    }
}
