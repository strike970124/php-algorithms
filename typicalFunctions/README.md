# Typical Functions

- [Get super array](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#1-get-super-array)
    - [Sample Input Array](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#sample-input-array)
    - [Sample Output Array](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#sample-output-array)
- [Capitalize the first letters of string](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#2-capitalize-the-first-letters-of-string)
    - [Sample Input String](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#sample-input-string)
    - [Sample Output String](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#sample-output-string)
- [Get shortest and longest values](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#3-get-shortest-and-longest-values)
    - [Sample Input Array](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#sample-input-array-1)
    - [Sample Output String](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#sample-output-string-1)
- [Get capital cities from countries](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#4-get-capital-cities-from-countries)
    - [Sample Input Array](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#sample-input-array-2)
    - [Sample Output String](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#sample-output-string-2)
- [Get sum of a quantity of prime numbers](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#5-get-sum-of-a-quantity-of-prime-numbers)
    - [Sample Input Number](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#sample-input-number)
    - [Sample Output String](https://github.com/msarboleda/php-algorithms/tree/master/typicalFunctions#sample-output-string-3)

In the **```typicalFunctions/typicalFunctions.php```** file you will see some functions that are waiting to be resolved. When you have finished dealing with these functions, the **```typicalFunctions/runHere.php```** file will be waiting for you, so that you can enjoy executing your code.

## 1. Get super array

Here your job will be to execute a callback for each value, where a new array is created with the original values multiplied by two and identifying whether the value is even or odd.

### Sample Input Array

```php
Array
(
    [0] => 5
    [1] => 43
    [2] => 56
    [3] => 37
)
```

### Sample Output Array

```php
Array
(
    [0] => Array
        (
            ['original'] => 5
            ['calculated'] => 10
            ['type'] => Odd
        )
    [1] => Array
        (
            ['original'] => 43
            ['calculated'] => 86
            ['type'] => Odd
        )
    [2] => Array
        (
            ['original'] => 56
            ['calculated'] => 102
            ['type'] => Even
        )
    [3] => Array
        (
            ['original'] => 37
            ['calculated'] => 74
            ['type'] => Odd
        )
)
```

## 2. Capitalize the first letters of string

Here your job will be to capitalize the first letter of every word in a text string.

### Sample Input String

```
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
```

### Sample Output String

```
Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.
```

## 3. Get shortest and longest values

Here your job will be to get the values with the shortest and longest array length.

### Sample Input Array

```php
Array
(
    [0] => Locomotive
    [1] => Ant
    [2] => Toucan
    [3] => Dolphin
    [4] => Stadium
    [5] => Tree
)
```

### Sample Output String

The value with the shortest array length is **Ant** and the value with the longest array length is **Locomotive**.

## 4. Get capital cities from countries

Here your job will be to displays the capital and country name. Sort the list by the capital of the country.

### Sample Input Array

```php
Array
(
    [Italy] => Rome
    [Belgium] => Brussels
    [Ireland] => Dublin
    [Greece] => Athens
)
```

### Sample Output String

- The capital of **Greece** is **Athens**.
- The capital of **Belgium** is **Brussels**.
- The capital of **Ireland** is **Dublin**.
- The capital of **Italy** is **Rome**.

## 5. Get sum of a quantity of prime numbers

Here your job will be to compute the sum of first n given prime numbers.

### Sample Input Number

```
25
```

### Sample Output String

Sum of first **25** prime numbers: **1060**
