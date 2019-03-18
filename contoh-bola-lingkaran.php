<?php

require 'Lingkaran.php';
require 'Bola.php';

$lingkaran = new Lingkaran('diameter', 20);
$luas = $lingkaran->luas();
echo "Luas Lingkaran " . $luas;

echo "\n";

$bola = new Bola('jari', 22);
$volume = $bola->volume();
echo "Volume Bola" . $volume;

echo "\n";