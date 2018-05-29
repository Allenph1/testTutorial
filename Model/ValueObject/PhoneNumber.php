<?php

namespace Models\ValueObject;

class PhoneNumber
{
    private $phoneNumber;
    public function __construct(Int $phoneNumber)
    {
      $this->setPhoneNumber($phoneNumber);
    }
    private setPhoneNumber(Int $phoneNumber) {
      $this->phoneNumber = $phoneNumber;
    }
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}
