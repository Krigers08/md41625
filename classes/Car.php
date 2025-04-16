<?php

class gpu {
    public $gpu;
    public $form;
    public $raketa = "boobm";

    public function __construct($form, $gpu = "poopoo") {
        $this->gpu = $gpu;
        $this->form = $form;

        //Method
    }
    public function getGpuInfo() {
        return "Gpu: " . $this->gpu . "; Form: " . $this->form;
        }
};

$gpu01 = new gpu("GTX", "1060");
$gpu02 = new gpu("RTX", "3060");
$gpu03 = new gpu("GT");

echo $gpu01->raketa;
echo "<br>";
echo $gpu01 -> getGpuInfo();