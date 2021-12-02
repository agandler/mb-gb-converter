# DataConverter

It enables you easy calculations and converts between data entities.

## Entities (use the Abbreviation)

<div align="center">
  
| Abbreviation | Description |
|:------------:|:-----------:|
| B            | Byte        |
| kB           | Kilobyte    |
| MB           | Megabyte    |
| GB           | Gigabyte    |
| TB           | Terabyte    |
| PB           | Petabyte    |
| EB           | Exabyte     |
| ZB           | Zettabyte   |
| YB           | Yottabyte   |
  
</div>


## **Usage**
```php
/// index.php

require 'vendor/autoload.php';
use Agandler\MbGbConverter\DataConverter;

$result = 0;

// Converts 10 Bytes to Megabytes
$byte = new DataConverter('B', 10);

$result = $byte->convertToMegabyte(); 
echo '10 Bytes:'.' '. $byte->output($result,5,',') . " Megabyte";

echo "<br>";

// Converts 1 Terabyte to Gigabytes
$terabyte = new DataConverter('TB', 1);

$result = $terabyte->convertToGigabyte();
echo '1 TB:'.' '. $byte->output($result,0) . " GB";
```
