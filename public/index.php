<?php

$variable = "John";

echo $variable;

$n = 10;

echo PHP_EOL;
echo PHP_EOL;
echo "<br>";

echo $n + 10;

$greetings = 'Hello';

echo "<br>";

echo $greetings . $variable . $n;

echo "<br>";

echo '$greetings $variable $n';
echo "<br>";
echo "$greetings $variable $n";
echo "<br>";
echo "<pre>";
$array = array(
	'key' => 'value',
	'key1' => 'value1'
);




print_r($array);

$array = array(
        'value',
        'value1'
);

print_r($array);

echo "</pre>";


function func (int $n, int $l)
{
	return $n + $l;
}


echo func(10, 5);

//echo func('qwerty', 5);
/*
Comment
*/
echo "<br>";
foreach ($array as $key => $value) {
	echo "$key => $value <br>";
}

foreach ($array as $value) { 
        echo "$value <br>";
}


echo "<pre>";
print_r($_GET);
echo "</pre>";

$form = "
<form method='post'>
<input type='text' name='name'>
<input type='submit'>
</form>
";

echo $form;

echo "<pre>";
print_r($_POST);
echo "</pre>";



