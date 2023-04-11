<?php

namespace App;

class Weapon
{
    private int $damage;

    private string $image;
    private float $range;

    public function __construct(int $damage = 10, 
                                string $image = "sword.svg", 
                                float $range = 0.5)
    {
        $this->damage = $damage;
        $this->image = $image;
        $this->range = $range;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * Get the value of range
     */ 
    public function getRange(): float
    {
        return $this->range;
    }
}