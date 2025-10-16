<?php 

namespace YousufAlhadhrami\Helpers;

class Helper{

 public $timezone = 'Europe/Berlin';

public function add($num1 , $num2)
{
    return $num1 + $num2;
}

public function subtract($num1 , $num2)
{
    return $num1 - $num2;
}

public function multiply($num1 , $num2)
{
    return $num1 * $num2;
}

public function divide($num1 , $num2)
{
    return $num1 / $num2;
}

public function setTimeZone($timezone)
{
    $this->timezone = date_default_timezone_set($timezone);

    return $this;
}

public function getTimeZone()
{
    return date_default_timezone_get();;
}



}