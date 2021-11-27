<?php
namespace Agandler\MbGbConverter;

class DataConverter
{
    public function convertMB($value, $type)
    {
        if($type=="Byte")
        {
            return $value / 1000000;
        }
        elseif ($type="Kilobyte") 
        {
            return $value / 1000;
        }
        elseif ($type="Megabyte") 
        {
            return $value;
        }
        elseif ($type="Gigabyte") 
        {
            return $value * 1000;
        }
        elseif ($type="Terabyte") 
        {
            return $value * 1000000;
        }
        elseif ($type="Petabyte") 
        {
            return $value * 1000000000;
        }
        elseif ($type="Exabyte") 
        {
            return $value * 1000000000000;
        }
        elseif ($type="Zettabyte") 
        {
            return $value * 1000000000000000;
        }
        elseif ($type="Yottabyte") 
        {
            return $value * 1000000000000000000;
        }
    }

    public function convertGB($value, $type)
    {
        if($type=="Byte")
        {
            return $value / 1000000000;
        }
        elseif ($type="Kilobyte") 
        {
            return $value / 1000000;
        }
        elseif ($type="Megabyte") 
        {
            return $value / 1000;
        }
        elseif ($type="Gigabyte") 
        {
            return $value;
        }
        elseif ($type="Terabyte") 
        {
            return $value * 1000;
        }
        elseif ($type="Petabyte") 
        {
            return $value * 1000000;
        }
        elseif ($type="Exabyte") 
        {
            return $value * 1000000000;
        }
        elseif ($type="Zettabyte") 
        {
            return $value * 1000000000000;
        }
        elseif ($type="Yottabyte") 
        {
            return $value * 1000000000000000;
        }
    }

}