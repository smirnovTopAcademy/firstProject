<?php

namespace FirstProject\App\Response;

class JsonResponse implements Response
{
	private $array;

	public function __construct(array $array)
	{
		$this->array = $array;
	}

	public function getRestonse()
	{
		return json_encode($this->array);
	}
}
