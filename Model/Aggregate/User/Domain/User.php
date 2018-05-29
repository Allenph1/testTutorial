<?php

namespace Model\Aggregate\User\Domain;

use Model\ValueObject\UUID;
use Model\ValueObject\PhoneNumber;

class User
{
    private $id;
    private $name;
    private $address;
    private $phoneNumber;
    public function __construct(UUID $id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName(String $name)
    {
        if ($name == "") {
            throw new \InvalidArgumentException("Name cannot be an empty string!");
        }
        $this->name = $name;
    }
    public function setPhoneNumber(PhoneNumber $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}
