<?php

class Car {
    private $gpu;
    private $cpu;
    public $raketa = "boom";

    public function __construct($gpu = "poopoo", $cpu) {
        $this->gpu = $gpu;
        $this->cpu = $cpu;
    }
}

$gpu01 = new gpu("GTX", "1060");
$gpu02 = new mobile("RTX", "3060");
$gpu02 = new mobile("GT");

