<?php

namespace MyLife\Services;

class Jetty
{
    protected array $attributes;

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function smile(): string
    {
        return "Jetty smiles with warmth and grace 😊";
    }

    public function loveYou(): bool
    {
        return true; // Believing in fairy tales ✨
    }

    public function getLoyaltyLevel(): string
    {
        return "Infinite 💍";
    }
}
