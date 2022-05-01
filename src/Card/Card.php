<?php

namespace App\Card;

class Card
{
    public $value;
    public $color;

    public function __construct($value = "0", $color = "")
    {
        $this->value = $value;
        $this->color = $color;
    }

    public function getValueAsString(): string
    {
        return "[{$this->value}]";
    }

    public function getColor(): string
    {
        return "[{$this->color}]";
    }

    public function getCard(): string
    {
        if ($this->color == "0") {
            if ($this->value == "1") {
                $this->value = "A";
            } elseif ($this->value == "11") {
                $this->value = "J";
            } elseif ($this->value == "12") {
                $this->value = "Q";
            } elseif ($this->value == "13") {
                $this->value = "K";
            } elseif ($this->value == "13") {
                $this->value = "K";
            }
            return "♥️{$this->value}";
        } elseif ($this->color == "1") {
            if ($this->value == "1") {
                $this->value = "A";
            } elseif ($this->value == "11") {
                $this->value = "J";
            } elseif ($this->value == "12") {
                $this->value = "Q";
            } elseif ($this->value == "13") {
                $this->value = "K";
            }
            return "♣{$this->value}";
        } elseif ($this->color == "2") {
            if ($this->value == "1") {
                $this->value = "A";
            } elseif ($this->value == "11") {
                $this->value = "J";
            } elseif ($this->value == "12") {
                $this->value = "Q";
            } elseif ($this->value == "13") {
                $this->value = "K";
            }
            return "♦️{$this->value}";
        } elseif ($this->color == "3") {
            if ($this->value == "1") {
                $this->value = "A";
            } elseif ($this->value == "11") {
                $this->value = "J";
            } elseif ($this->value == "12") {
                $this->value = "Q";
            } elseif ($this->value == "13") {
                $this->value = "K";
            }
            return "♠{$this->value}";
        } elseif ($this->color == "4") {
            if ($this->value == "14") {
                $this->value = "Jo";
            }
            return "🟩{$this->value}";
        }
    }
}
