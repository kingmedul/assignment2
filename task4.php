<?php

function fibonacci($number)
{
    $fibo = array(0, 1);

    for ($i = 2; $i < $number; $i++) {
        $fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];

    }
    print_r($fibo);
}

fibonacci(15);

?>