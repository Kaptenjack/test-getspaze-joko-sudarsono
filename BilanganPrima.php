<?php

function prima($total) {
    for ($i = 1; $i <= $total; $i++) {
        $a = 0;
        for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
                $a++;
            }
        }
        
        if ($a == 2) {
            echo $i . "\n";
        }
    }
}

prima(20);