<?php

class Student extends Person
{
  private string $grupesId;
  public function getGroupId()
  {
    return $this->grupesId;
  }
}
