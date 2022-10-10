<?php
require_once 'Vehicle.php';

class Camion extends Vehicle
{

  public const ALLOWED_ENERGIES = [
    'fuel',
    'electric',
  ];

  private int $capacity;
  private int $storage = 0;

  public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
  {
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
    $this->capacity = $capacity;
  }

  public function getEnergy(): string
  {
    return $this->energy;
  }

  public function setEnergy(string $energy): Camion
  {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
      $this->energy = $energy;
    }
    return $this;
  }
  public function getEnergyLevel(): int
  {
    return $this->energyLevel;
  }

  public function setEnergyLevel(int $energyLevel): void
  {
    $this->energyLevel = $energyLevel;
  }

  public function getCapacity(): int
  {
    return $this->capacity;
  }

  public function setCapacity(int $capacity): void
  {
    $this->capacity = $capacity;
  }

  public function getStorage(): int
  {
    return $this->storage;
  }

  public function setStorage(int $storage): void
  {
    $this->storage = $storage;
  }

  public function filling(): string
  {
    if ($this->storage < $this->capacity) {
      return "in filling";
    } else {
      return "full";
    }
  }
}