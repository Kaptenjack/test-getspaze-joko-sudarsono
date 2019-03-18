<?php

require 'Lingkaran.php';
require 'Bola.php';

$lingkaran = new Lingkaran('diameter', 14);
$luas = $lingkaran->luas();
echo $luas;

$bola = new Bola('jari', 22);
$volume = $bola->volume();
echo $volume;