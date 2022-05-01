<?php

namespace App\Card;

class DeckWith2Jokers extends Deck
{
    public $deck = [];

    public function __construct()
    {
        #Skapa kortlek
        for ($color = 0; $color < 4; $color++) {
            for ($value = 1; $value < 14; $value++) {
                $card = new \App\Card\Card($value, $color);
                array_push($this->deck, $card);
            }
        }
        $card = new \App\Card\Card(14,4);
        array_push($this->deck, $card);
        array_push($this->deck, $card);
    }
}
