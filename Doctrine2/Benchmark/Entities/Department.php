<?php

namespace Benchmark\Entities;

use Doctrine\ORM\Mapping as ORM;
use Nette\Object;

/**
 * @ORM\Entity
 * @ORM\Table(name="departments")
 * @author Michael Moravec
 */
class Department extends Object
{
	/**
	 * @ORM\Column(name="dept_no")
	 * @ORM\Id
	 * @var string
	 */
	protected $number;

	/**
	 * @ORM\Column(name="dept_name")
	 * @var string
	 */
	protected $name;

	/**
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
}
