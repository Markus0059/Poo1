<?php

class Bicycle
{
  private int $nbWheels = 2;

  private int $currentSpeed;

  private string $color;

  private int $nbSeats = 1;






  public function __construct(string $color)
  {
    $this->color = $color;
  }

  // public function __construct(private string $color) {};

  public function getColor(): string
  {
    return $this->color;
  }

  public function setColor(string $color): void
  {
    $this->color = $color;
  }

  public function getCurrentSpeed(): int
  {
    return $this->currentSpeed;
  }

  public function setCurrentSpeed(int $currentSpeed): void
  {
    if ($currentSpeed >= 0) {
      $this->currentSpeed = $currentSpeed;
    }
  }

  public function getNbWheels()
  {
    return $this->nbWheels;
  }

  public function stNbWheels(int $nbWheels): void
  {
    $this->nbWheels = $nbWheels;
  }

  public function getNbSeats()
  {
    return $this->nbSeats;
  }

  public function stNbSeats(int $nbSeats): void
  {
    $this->nbSeats = $nbSeats;
  }






  public function forward(): string
  {
    $this->currentSpeed = 15;

    return "Go !";
  }

  public function brake(): string
  {
    $sentence = "";
    while ($this->currentSpeed > 0) {
      $this->currentSpeed--;
      $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
  }
}