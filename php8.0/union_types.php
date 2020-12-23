<?php 

class Number{

    /** @var int|float */

    private $number;

    /** @param float|int $number */

    public function __construct($number)
    {
        $this->number = $number;
    }
}

new Number(1); //OK