<?php

namespace App;

class Arena 
{
    private array $monsters;
    private Hero $hero;
    private int $size = 10;

    public function __construct(Hero $hero, array $monsters)
    {
        $this->hero = $hero;
        $this->monsters = $monsters;
    }

    public function getDistance(Fighter $fighter1, Fighter $fighter2): float
    {
        return sqrt(($fighter2->getX() - $fighter1->getX())**2 + ($fighter2->getY() - $fighter1->getY())**2);
    }

    public function touchable(Fighter $attacker, Fighter $target): bool
    {
        return $this->getDistance($attacker, $target) <= $attacker->getRange();
    }

    /**
     * Get the value of monsters
     */ 
    public function getMonsters(): array
    {
        return $this->monsters;
    }

    /**
     * Get the value of hero
     */ 
    public function getHero(): Hero
    {
        return $this->hero;
    }


    /**
     * Get the value of size
     */ 
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }
}