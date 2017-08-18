<?php
namespace Jimmy\Wlwx;

class VariantSms
{
    public $mobile;
    public $vars;
    
    public function __construct($mobile,$vars = array()) {
        $this->mobile = $mobile;
        $this->vars = $vars;
    }
}