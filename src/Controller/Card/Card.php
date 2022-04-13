<?php

namespace App\Card;

class Card
{
    public $suit;
    public $value;

    /**
     * Create a deck of 52 cards
     */
    public function __construct($suit, $value)
    {
        $this->cards = array();
        $suits = array(
            'H' => 'Hearts',
            'C' => 'Clubs',
            'D' => 'Diamonds',
            'S' => 'Spades'
        );
        $values = array(
            'A' => 'Ace',
            '2' => 'Two',
            '3' => 'Three',
            '4' => 'Four',
            '5' => 'Five',
            '6' => 'Six',
            '7' => 'Seven',
            '8' => 'Eight',
            '9' => 'Nine',
            '10' => 'Ten',
            'J' => 'Knight',
            'Q' => 'Queen',
            'K' => 'King',
        );
        $this->suit = $suit;
        $this->value = $value;
    }

    // /** NEEDED IF attribute are public
    //  * Shows card value
    //  * @return string
    //  */
    // public function getValue() 
    // {
    //     return $this->value;
    // }

    // /**
    //  * Show card suit
    //  * @return string
    //  */
    // public function getSuite() 
    // {
    //     return $this->suit;
    // }
}
