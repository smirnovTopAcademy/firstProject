<?php

class Factorial
{
  public function __invoke($n)
  {
    return $n;
  }
}

$factorial = new Factorial();

echo $factorial(5);
