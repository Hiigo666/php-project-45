<?php

namespace Project\Games\Gcd;

use function Project\Engine\examination;

use const Project\Engine\COUNT;

const DESCRIBE = "Find the greatest common divisor of given numbers.";
const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function gcd()
{
    $gcd = [];
    for ($i = 0; $i < COUNT; $i++) {
        $number1 = mt_rand(MIN_NUMBER, MAX_NUMBER);
        $number2 = mt_rand(MIN_NUMBER, MAX_NUMBER);
        $question = "{$number1} {$number2}";
        $maxNumber = max($number1, $number2);
        $nod = 1;
        for ($j = 1; $j <= $maxNumber; $j++) {
            if ($number1 % $j === 0 && $number2 % $j === 0) {
                $nod = $j;
            }
        }
        $gcd[] = [$question, $nod];
    }
        return $gcd;
}

function run()
{
    examination(gcd(), DESCRIBE);
}
