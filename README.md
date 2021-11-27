# mb-gb-converter

It enables you easy calculations and converts Megabyte and Gigabyte in all other Types.

## **Usage**
```
<?php
//index.php
require './src/dataconverter.php';
use Agandler\MbGbConverter\DataConverter;


$calc1 = new DataConverter();
$mb=50;

$calc2 = new DataConverter();
$gb=10;

$resmb=$calc1->convertMB($mb,"Byte");
echo 'MB:'.' '. $resmb;
echo "<br>";
$resgb=$calc2->convertGB($gb,"Kilobyte");
echo 'GB:'.' '. $resgb;
```