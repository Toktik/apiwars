<?php
namespace Apiwars\Map\Cell;

class Base
{
	private $position;

	public function getPosition()
	{
		return $this->position;
	}

	public function setPosition(Position $position)
	{
		$this->position = $position;
		return $this;
	}
}