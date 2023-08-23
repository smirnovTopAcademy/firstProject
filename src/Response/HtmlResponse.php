<?php

namespace FirstProject\App\Response;

class HtmlResponse implements Response
{
	private $html;

	public function __construct(string $html)
	{
		$this->html = $html;
	}

	public function getRestonse()
	{
		return $this->html;
	}
}
