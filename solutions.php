<?php

function findOddEvenPair(array $numbers): int
{
    $sum = 0;
    $evenArray = [];
    $oddArray = [];

    $last = array_key_last($numbers);

    if ($numbers[0] % 2 === 0 && $numbers[$last] % 2 === 0) {
        $numbers[$last] += 1;
    }

    if ($numbers[0] % 2 !== 0 && $numbers[$last] % 2 !== 0) {
        $numbers[$last] += 1;
    }

    for ($i = 0; $i < count($numbers); $i++) {
        if ($i % 2 === 0) {
            $evenArray [] = $numbers[$i];
        }

        if ($i % 2 !== 0) {
            $oddArray [] = $numbers[$i];
        }
    }

    for ($j = 0; $j < count($oddArray); $j++) {

        if ($evenArray[$j] % 2 === 0 && $oddArray[$j] % 2 === 0) {
            $sum += 1;
        }
        if ($evenArray[$j] % 2 !== 0 && $oddArray[$j] % 2 !== 0) {
            $sum += 1;
        }
    }

    return $sum;
}


class SummationService
{
    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function sum(int $a, int $b): int
    {
        return array_sum(array_slice($this->data, $a, $b - $a + 1));
    }
}


function longestSubstr(string $text): string
{
    $count = 1;

    $char = str_split($text);
    $string = [];

    for ($i = 0; $i < count($char) - 1; $i++) {

        if (array_search($char[$i] . $char[$i + 1], $string) === false) {
            $string [] = $char[$i] . $char[$i + 1];
            $count++;
        }

    }
    return implode(array_splice($char, 0, $count));

}
