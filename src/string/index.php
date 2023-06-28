<?php 
/*
$text = $_GET["text"] ?? '';

echo htmlspecialchars($text) . '<br>';
echo ($text) . '<br>';
echo "text";
*/

$text = $_GET["text"] ?? '';


function printOdd(string $text) {
	$odd = $event = '';
	for($i = 0, $c = strlen($text); $i < $c; $i++) {
		if ($i % 2) {
			$odd .= $text[$i];
		} else {
			$event .= $text[$i];
		}
	}
	
	return [$odd, $event];
}

list($odd, $event) = printOdd($text);

echo "odd => $odd";
echo "<br>";
echo "event => $event";

