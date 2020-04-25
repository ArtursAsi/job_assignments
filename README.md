### Instructions:
Clone project

git clone https://github.com/ArtursAsi/job_assignments


### Description

#### solutions.php

##### Exercise 1: findOddEvenPair
```php
findOddEvenPair([1, 2, 4, 3, 7]);
```
Function checks if first and last elements have different parity,
i.e., if the first element is odd, the last one is going to be even, and vice versa.
This function returns integer on how many pairs are in an array with same parity.

##### Exercise 2: SummationService
```php
$service = new SummationService([-1, 0, 2, 7, -15]);
$service->sum(1,3);
```
Returns an integer
containing the sum of the array elements with indices from $a to $b (inclusive).

##### Exercise 3: longestSubstr
```php
longestSubstr('aZaZaZ');
```
Given a string of lower and upper-case Latin letters and digits as an input, the
function returns its longest substring that does not include any
two-character sequence more than once.
#### solutions2.php

##### Exercise 1: maxProfit
```php
$pricesAndPurchases = [
        0 => ['price' => 2, 'purchased' => 3],
        1 => ['price' => 3, 'purchased' => 0],
        2 => ['price' => 1, 'purchased' => 1],
        3 => ['price' => 5, 'purchased' => 4],
        4 => ['price' => 3, 'purchased' => 1],
        5 => ['price' => 2, 'purchased' => 2]
];
maxProfit($pricesAndPurchases);
```
Computes the maximum profit that could be made from selling purchased oil in the
given period, as if the seller had perfect information about future prices (as we
do).
##### Exercise 2: stringCost
```php
stringCost('bitten','meeting',1,1,1);
```
Given two strings $a and $b, and integer costs of various operations on strings
(inserting an arbitrary single character, removing an arbitrary single character
and replacing a single character with another single character), the function
computes and returns the minimum cost of transforming string $a into string $b
using these three operations.
##### Exercise 3: incrementalMedian
```php
incrementalMedian([1, 8, 4, 7, 13]);
```
The function returns the array with the same number of elements as the input,
where each element corresponds to the median.

### Commentary

Very interesting exercises , if more time would be given, I would shorten the code.

