<?php
//index.php
require './src/tiny-converter.php';

use Agandler\MbGbConverter\TinyConverter;
use Agandler\Logger\FileLogger;

$calc1 = new TinyConverter();
$mb=500;

$calc2 = new TinyConverter();
$gb=50;

$resmb=$calc1->convertMB($mb);
echo "GB: $resmb";

$resgb=$calc2->convertGB($gb);
echo "MB: $resmb";