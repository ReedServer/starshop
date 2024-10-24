<?php

namespace App\Model;

class Part 
{
    public function __construct(
        private int $id,
        private string $name,
        private float $cost,
        private string $type,
        private bool $inStock
    ) {   
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getInStock(): bool
    {
        return $this->inStock;
    }
}