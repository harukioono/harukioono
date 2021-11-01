<?php

foreach (range(1,100) as $a) {
   
    if ($a%3==0 and $a%5==0)
    echo "FizzBuzz",PHP_EOL;
    elseif ($a%5==0)
    echo "Buzz",PHP_EOL;
    elseif ($a%3==0)
    echo "Fizz",PHP_EOL;
    else
     echo $a,PHP_EOL;
}
?>