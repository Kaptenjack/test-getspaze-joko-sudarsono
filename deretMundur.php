<?php

function deretMundur($limit) {
    for ($i = $limit; $i >= 1; $i--) {
        for ($j = $limit; $j >= $i; $j--) {
            echo $j . " ";
        }

        echo "\n";
    }
}

deretMundur(9);