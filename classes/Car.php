<?php

class gpu {
    public $gpu;
    public $form;

    public function __construct($form, $gpu = "poopoo") {
        $this->gpu = $gpu;
        $this->form = $form;
    }

    public function getGpuInfo() {
        return "Gpu: " . $this->gpu . "; Form: " . $this->form;
    }

    public function getForm() {
        return $this->form;
    }

    public function getGpu() {
        return $this->gpu;
    }
    
    public function setGpu($gpu) {
        $this->gpu = $gpu;
    }
    
    public function setForm($form) {
        $allowedForms = [
            "1080",
            "3060",
            "710",
            "1060"
        ];
        if (in_array($form, $allowedForms)){
            $this->form = $form;
        }
    }
}

