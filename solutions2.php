<?php

function maxProfit(array $pricesAndPurchases): int
{

    $sum = 0;
    $expenses = 0;
    $profits = [];
    $prices = [];


    foreach ($pricesAndPurchases as $value) {
        $prices [] = $value['price'];

    }
    foreach ($pricesAndPurchases as $pricesAndPurchase) {
        $sum += $pricesAndPurchase['purchased'];
        if (max($prices) >= $pricesAndPurchase['price']) {
            $expenses += $pricesAndPurchase['price'] * $pricesAndPurchase['purchased'];

            if ($pricesAndPurchase['price'] === max($prices) || max($prices) - 1 === $pricesAndPurchase['price']) {
                $purchased = $sum * $pricesAndPurchase['price'];
                $profit = $purchased - $expenses;
                $profits [] = $profit;

                $sum = 0;
                $expenses = 0;

            }
        }
    }


    return array_sum($profits);
}

function stringCost(string $a, string $b, int $insertionCost, int $deletionCost, int $replacementCost): int
{
    $totalCost = 0;

    $insertionCount = 0;
    $deletionCount = 0;
    $replacementCount = 0;

    $expensive = $replacementCost > $insertionCost + $deletionCost;
    $cheap = $replacementCost <= $insertionCost + $deletionCost;

    $aChars = str_split($a);
    $bChars = str_split($b);

    $aLength = strlen($a);
    $bLength = strlen($b);

    $bothLength = (max($aLength, $bLength));

    if ($aLength === $bLength) {

        if ($cheap)
            for ($i = 0; $i < $bothLength - 1; $i++) {

                if ($aChars[$i] !== $bChars[$i]) {
                    $aChars[$i] = $bChars[$i];
                    $replacementCount++;
                }

            }
        $totalCost = $replacementCount * $replacementCost;

        if ($expensive) {
            for ($i = 0; $i < $bothLength; $i++) {

                if ($aChars[$i] !== $bChars[$i]) {
                    $aChars[$i] = $bChars[$i];
                    $deletionCount++;
                    $insertionCount++;
                }
            }
            $totalCost = ($insertionCount * $insertionCost) + ($deletionCount * $deletionCost);
        }

    }

    if ($aLength < $bLength) {

        $length = $bLength - $aLength;

        if ($replacementCost === 0) {
            $replacementCost += 1;
        }
        if ($cheap) {
            for ($i = 0; $i < $bothLength - 1; $i++) {

                if ($aChars[$i] !== $bChars[$i]) {
                    $aChars[$i] = $bChars[$i];
                    $replacementCount++;
                }

            }

            $totalCost = ($replacementCount + $length) * $replacementCost;
        }
        if ($expensive) {
            for ($i = 0; $i < $bothLength - 1; $i++) {

                if ($aChars[$i] !== $bChars[$i]) {
                    $aChars[$i] = $bChars[$i];
                    $deletionCount++;
                    $insertionCount++;
                }
            }

            $totalCost = (($insertionCount + $length) * $insertionCost) + ($deletionCount * $deletionCost);
        }
    }


    if ($aLength > $bLength) {
        if ($replacementCost === 0) {
            $replacementCost += 1;
        }
        $length = $aLength - $bLength;

        if ($cheap) {
            for ($i = 0; $i < $bothLength - 1; $i++) {

                if ($aChars[$i] !== $bChars[$i]) {
                    $aChars[$i] = $bChars[$i];
                    $replacementCount++;
                }
            }

            $totalCost = ($replacementCount + $length) * $replacementCost;
        }

        if ($expensive) {

            for ($i = 0; $i < $bothLength - 1; $i++) {

                if ($aChars[$i] !== $bChars[$i]) {
                    $aChars[$i] = $bChars[$i];
                    $deletionCount++;
                    $insertionCount++;
                }
            }

            $totalCost = (($deletionCount + $length) * $deletionCost) + ($insertionCount * $insertionCost);
        }
    }
    return $totalCost;
}


function incrementalMedian(array $values): array
{
    $medians = [];
    for ($i = 1; $i <= count($values); $i++) {
        sort($values);
        $array = array_slice($values, 0, $i);

        if (count($array) % 2 !== 0) {
            $mid = floor(count($array) / 2);
            array_push($medians, $array[$mid]);
        } else if (count($array) % 2 === 0) {
            $midPair = floor(count($array) / 2) - 1;
            array_push($medians, $array[$midPair]);
        }
    }
    return $medians;
}




