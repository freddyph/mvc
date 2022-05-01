<?php

namespace App\Card;

class CardGraphic extends Card
{
    private $representation = [
        '♥️',
        '♣',
        '♦️',
        '♠',
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function getValueAsString(): string
    {
        return $this->representation[$this->value - 1];
    }
}