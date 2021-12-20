<?php

class Person
{
  public string $name;
  public string $lastname;
  public string $asmensKodas;

  public function __construct()
  {
    $this->asmensKodas = random_int(1, 99);
  }
}
