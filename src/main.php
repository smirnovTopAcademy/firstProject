<?php

/*if ($_SERVER['REQUEST_URI'] === '/') {
	echo "Main page<br>" . PHP_EOL . "\n";
} elseif (
	substr(
		$_SERVER['REQUEST_URI'],
		0,
		strpos($_SERVER['REQUEST_URI'], '?')
	) === '/string') {
	require('string/index.php');
}
*/

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

	public function index()
	{
		if(is_file(__DIR__ . $this->route->getUrl())){
			require_once(__DIR__ . $this->route->getUrl());
		}
	}
}

class Request
{
	private $data;

	public function __construct(array $data)
	{
		$this->data = $data;
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
}

$main = new Main();
$main->index();
