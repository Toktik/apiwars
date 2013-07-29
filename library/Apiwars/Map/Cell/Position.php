<?php
namespace Apiwars\Map\Cell;

class Position
{
	public function getX()
	{
		return $this->x;
	}

	public function setX($x)
	{
		$this->x = $x;
		return $this;
	}

	public function getY()
	{
		return $this->y;
	}

	public function setY($y)
	{
		$this->y = $y;
		return $this;
	}

	public function getComponents()
	{
		
	}
}