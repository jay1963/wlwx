<?php
namespace Jimmy\WLWX;

class MultiSms
{
    public $phone;
    public $context;
    public function __construct($phone,$context) {
        $this->phone = $phone;
        $this->context = $context;
    }
}