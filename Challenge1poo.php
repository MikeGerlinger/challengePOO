<?php

Class SimpsonsCar {
    private int $nbWheels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 100;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
  public function getNbWheels(): int
  {
      return $this->nbWheels;
  }
  public function setNbWheels(int $nbWheels): void
  {
      $this->nbWheels = $nbWheels;
  }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }   
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function start(): string
    {
        $this->currentSpeed = 10;
        return "Start !";
    }
    public function forward(): string
    {
        $this->currentSpeed = 50;
        return "Go !";
    }   
    public function brake(): string {
        if ($this->currentSpeed > 0) {
            $this->currentSpeed = 0; 
            return "Brake !!! I'm stopped!"; 
        }
        return "The car is already stopped!";
    }
    
    public function dump(): void
    {
        var_dump($this);
    }

  
}