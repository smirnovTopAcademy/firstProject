<?php

echo '<pre>';
print_r($_GET);
echo '</pre>';


$var3 = $_GET['var3'] ?? '';
$var3 = isset($_GET['var3']) ? $_GET['var3'] : '';

echo $var3;

$strlen = $_GET['strlen'] ?? '';

if ($strlen) {
	echo 'strlen => ' . strlen($strlen) . '<br>';
}


$substr = $_GET['substr'] ?? '';

if ($substr) {
	echo 'substr => ' . substr($substr, -3) . '<br>';
}


$stripos = $_GET['stripos'] ?? '';

if ($stripos) {
	echo 'stripos => ' ;
	var_dump(stripos($stripos, 'a'));
	echo '<br>';
}



$strtolower = $_GET['strtolower'] ?? '';

if ($strtolower) {
	echo 'strtolower => ' ;
	echo strtolower($strtolower);
	echo '<br>';
}



$key = $_GET['explode'] ?? '';

if ($key) {
	echo 'explode => ' ;
	echo '<pre>';
	print_r(explode('|', $key));
	echo '</pre>';
	echo '<br>';
}

$countries = [
	'Russia',
	'Belorus',
	'Kazahstan',
];

$countryList = implode(', ', $countries);
echo $countryList;
echo '<br>';

$letter = 'Hello, %name%! Nice to meet you ';

$name = 'John';

echo strtr(
	$letter, [
		'%name%' => $name
	]
);
echo '<br>';

require 'function.php';

$list = scanFolder('.');


echo '<pre>';
print_r($list);
echo '</pre>';


echo '<pre>';
print_r(array_merge(
[
	1,
	2,
	3,
], [
	10,
	20,
	30,
], [
	100,
	200,
	300,
]

));
echo '</pre>';


echo getcwd() . '<br>';










