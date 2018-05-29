<?php

namespace Models\ValueObject;

class UUID
{
    private $id;
    public function __construct(String $id)
    {
      $this->setId($id);
    }
    private setId(String $id) {
      if ($id == "") {
        throw new \InvalidArgumentException("Id cannot be an empty string!");
      }
      $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
}
