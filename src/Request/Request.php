<?php

namespace FirstProject\App\Request;

class Request
{
  /**
    * @var array
    */
	private $data;

  /**
    * @param array $data
    */
	public function __construct(array $data)
	{
		$this->data = $data;
	}
}
