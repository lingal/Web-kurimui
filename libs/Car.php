<?php

class Car
{
  public string $spalva;
  public string $greitis;
  public string $dureles;
  private int $kuroBakas;

  public function vaziuoti(): void
  {
    echo "Automobilis važiuoja " . $this->greitis . " greičiu";
  }

  public function gautiSpalva(): string
  {
    return $this->spalva;
  }

  public function dureliuSkaicius(): void
  {
    echo "Automobilyje yra: " . $this->dureles . ' dureles.';
  }

  public function piltiKura() {
    echo $this->kuroBakas;
  }
}
