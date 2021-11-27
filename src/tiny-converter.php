<?php
namespace Agandler\MbGbConverter;

class TinyConverter
{
    public static function convert($mb)
    {
        return $mb / 1000;
    }
}