<?php

namespace App\Card;

class Deck
{
    /**
     * @var array representing full deck of cards
     */
    public $cards;

    /**
     * Create a deck of 52 cards
     */
    public function __construct()
    {
        $this->cards = array();
        $suits = array('H', 'C', 'D', 'S');
        $values = array(
            'A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'
        );

        /** 
         * Loop through to create Deck of cards
         */
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $card = new Card($suit, $value);
                array_push($this->cards, $card);
            }
        }
    }

    /**
     * Show Deck of cards
     * @return array
     */
    public function getDeck()
    {
        return $this->cards;
    }
}
