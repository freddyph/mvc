<?php

namespace App\Card;

class Deck
{
    public $deck = [];

    public function __construct()
    {
        #Skapa kortlek
        for ($color = 0; $color < 4; $color ++) {
            for ($value = 1; $value < 14; $value ++) {
                $card = new \App\Card\Card($value, $color);
                array_push($this->deck, $card);
            }
        }
    }

    public function showDeck(): array
    {
        return "[{$this->deck}]";
    }

    public function shuffle()
    {
        shuffle($this->deck);
    }

    public function draw(): int
    {
        $this->value = random_int(1, 14);
        return $this->value;
    }

    public function getAsString(): string
    {
        $str = "";
        foreach ($this->deck as $card) {
            $str .= $card->getCard();
            //$str .= $card->getValueAsString();
            //$str .= $card->getColor();
        }
        return $str;
    }
}
