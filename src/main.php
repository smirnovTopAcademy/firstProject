<?php

use FirstProject\App\Request\Request;
use FirstProject\App\Response\Response;

class Main
{
	/**
		* @var Request
		*/
	private $request;

	/**
		* @var Route
		*/
	private $route;

	public function __construct()
	{
		$this->request = new Request($_REQUEST);
		$this->route = new Route();
	}

	/**
		* @return Response
		*/
	public function index(): Response
	{
		if (is_dir(__DIR__ . '/' . $this->route->getFolder()))
		{
			$path = __DIR__ . '/' . $this->route->getFolder()
				. '/' . $this->route->getClass() . '.php';

				if (is_file($path)) {
					require_once($path);

					$className = $this->route->getClass();

					$function = $this->route->getFunction();

					return (new $className)->{$function}($this->request);
				}
		}

	}
}


class Route
{
	/**
	  * @var string
		*/
	private $url;

	public function __construct()
	{
		$this->url = substr(
			$_SERVER['REQUEST_URI'],
			0,
			strpos($_SERVER['REQUEST_URI'], '?') === false
			? strlen($_SERVER['REQUEST_URI'])
			: strpos($_SERVER['REQUEST_URI'], '?')
		);
	}

	/**
	 * @return string
	 */
	public function getUrl(): string
	{
		return $this->url;
	}

	public function getFolder()
	{
		$list = $this->getUrlParts();

		return $list[0] ?? '';
	}

	public function getClass()
	{
		$list = $this->getUrlParts();

		return $list[1] ?? '';
	}

	public function getFunction()
	{
		$list = $this->getUrlParts();

		return $list[2] ?? 'index';
	}

	private function getUrlParts(): array
	{
		$list = explode('/', $this->url);

		return array_values(array_filter($list));
	}
}



$main = new Main();
echo $main->index()->getRestonse();
