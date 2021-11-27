<?php
namespace Agandler\MbGbConverter;


class TinyConverter
{
    public static function convertMB($mb)
    {
        return $mb / 1000;
    }

    public static function convertGB($gb)
    {
        return $gb * 1000;
    }

}