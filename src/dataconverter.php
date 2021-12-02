<?php
namespace Agandler\MbGbConverter;

class DataConverter
{
    // Einheit
    private $type = "";

    // Eingabe
    private $value = 0;

    public function __construct($type, $value)
    {
        $this->type = $type;
        $this->value = $value;
    }

    // Convert Funktionen: Eingabe * 10^(object-type - convert-type)
    public function convertToBit()
    {
        return $this->convertToByte()*8;
    }
    public function convertToByte()
    {
        return $this->value * pow(10, $this->getTypeValue($this->type) - $this->getTypeValue("B"));
    }
    public function convertToKilobyte()
    {
        return $this->value * pow(10, $this->getTypeValue($this->type) - $this->getTypeValue("kB"));
    }
    public function convertToMegabyte()
    {
        return $this->value * pow(10, $this->getTypeValue($this->type) - $this->getTypeValue("MB"));
    }
    public function convertToGigabyte()
    {
        return $this->value * pow(10, $this->getTypeValue($this->type) - $this->getTypeValue("GB"));
    }
    public function convertToTerabyte()
    {
        return $this->value * pow(10, $this->getTypeValue($this->type) - $this->getTypeValue("TB"));
    }
    public function convertToPetabyte()
    {
        return $this->value * pow(10, $this->getTypeValue($this->type) - $this->getTypeValue("PB"));
    }
    public function convertToExabyte()
    {
        return $this->value * pow(10, $this->getTypeValue($this->type) - $this->getTypeValue("EB"));
    }
    public function convertToZettabyte()
    {
        return $this->value * pow(10, $this->getTypeValue($this->type) - $this->getTypeValue("ZB"));
    }
    public function convertToYottabyte()
    {
        return $this->value * pow(10, $this->getTypeValue($this->type) - $this->getTypeValue("YB"));
    }


    // Findet die Hochzahl für die Berechnung heraus
    private function getTypeValue($type)
    {
        if($type=="B")
        {
            return 0;
        }
        elseif ($type=="kB") 
        {
            return 3;
        }
        elseif ($type=="MB") 
        {
            return 6;
        }
        elseif ($type=="GB") 
        {
            return 9;
        }
        elseif ($type=="TB") 
        {
            return 12;
        }
        elseif ($type=="PB") 
        {
            return 15;
        }
        elseif ($type=="EB") 
        {
            return 18;
        }
        elseif ($type=="ZB") 
        {
            return 21;
        }
        elseif ($type=="YB") 
        {
            return 24;
        }


    }

    public function output($value,$decimal,$comma = '.')
    {
        return number_format($value,$decimal,$comma," ");
    }

}