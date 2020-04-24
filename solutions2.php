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

    $replacement = ($insertionCost + $deletionCost < $replacementCost);
    $insertionCount = 0;
    $deletionCount = 0;
    $replacementCount = 0;

    $aSplit = str_split($a);
    $bSplit = str_split($b);

    $aLength = strlen($a);
    $bLength = strlen($b);

    $bothLength = (max($aLength, $bLength));


    if ($aLength === $bLength) {
        for ($i = 0; $i < $bothLength; $i++) {
            if ($aSplit[$i] !== $bSplit[$i]) {
                $aSplit[$i] = $bSplit[$i];
                $replacementCount++;
            }
        }
    }

    if ($aLength < $bLength) {
        for ($i = 0; $i < $bothLength - 1; $i++) {
            if ($aSplit[$i] !== $bSplit[$i]) {
                $aSplit[$i] = $bSplit[$i];
                $replacementCount++;
            }
            $length = $bLength - $aLength;
            $deletionCount = $length;
        }
    }
    if ($aLength > $bLength) {
        for ($i = 0; $i < $bothLength; $i++) {
            if ($aSplit[$i] !== $bSplit[$i]) {
                $aSplit[$i] = $bSplit[$i];
                $replacementCount++;
            }
            $length = $aLength - $bLength;
            $insertionCount = $length;

        }

    }

    $insert = $insertionCount * $insertionCost;
    $delete = $deletionCount * $deletionCost;
    $replace = $replacementCount * $replacementCost;

    return $insert + $delete + $replace;
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




