Question:
Write a PHP script using a for loop to print numbers from 1 to 50. However:

Skip numbers that are divisible by 3 using continue.
Stop the loop entirely if the number is greater than 40 using break.


<?php

for ($i = 1; $i <= 50; $i++) {

    if ($i %3== 0) {
        break;
    }

    if($i>40){
        continue;
    }

}

echo "$i" . "\n";