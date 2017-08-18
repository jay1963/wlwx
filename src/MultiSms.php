<?php
namespace Jimmy\Wlwx;

class MultiSms
{
    public $phone;
    public $context;
    public function __construct($phone,$context) {
        $this->phone = $phone;
        $this->context = $context;
    }
}