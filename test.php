<?php

class Test
{
    public array $array = [1, 2, 3];

    public function myMethod()
    {
        $string = "I can Debug";
        echo $string;
    }
}

$test = new Test();
$test->myMethod();
$test->array;