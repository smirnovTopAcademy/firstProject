<?php

if ($_SERVER['REQUEST_URI'] === '/') { 
	echo "Main page<br>" . PHP_EOL . "\n";
} elseif (
	substr(
		$_SERVER['REQUEST_URI'], 
		0, 
		strpos($_SERVER['REQUEST_URI'], '?')
	) === '/string') {
	require('string/index.php');
}


