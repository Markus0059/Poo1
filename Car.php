<?php

class Car
{
  private int $nbWheels = 4;

  private int $currentSpeed;

  private string $color;

  private int $nbSeats;

  private string $energy;

  private int $energyLevel;

  private bool $starting = false;




  public function __construct(string $color, int $nbSeats, string $energy)
  {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
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

  public function getEnergy()
  {
    return $this->energy;
  }

  public function getEnergyLevel(int $energyLevel)
  {
    $this->energyLevel = $energyLevel;
  }


  public function start(): bool
  {
    $this->starting = true;
    return "Car is starting";
  }

  public function forward(): string
  {

    if ($this->starting === true) {
      $this->currentSpeed = 130;

      return "Go !";
    } else {
      return "Your car is not start";
    }
  }

  public function brake(): string
  {
    $sentence = "";
    while ($this->currentSpeed > 0) {
      $this->currentSpeed = $this->currentSpeed - 5;
      $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
  }
}