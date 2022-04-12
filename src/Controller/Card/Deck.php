<?php

namespace App\Card;

class Deck
{
    private $faces;
    private $suits;
    private $deck;
    private $leftOverDeck;

    function __construct()
    {
        $this->faces = array(
            "1", "2", "3", "4", "5", "6", "7", "8",
            "9", "10", "Jack", "Queen", "King"
        );

        $this->suits = array(
            "♠", "♥", "♣", "♦"
        );

        $this->leftOverDeck = [];
    }

    /**
     * Create deck of cards
     * @return mixed
     */
    public function buildDeck()
    {
        foreach ($this->suits as $suit) {
            foreach ($this->faces as $face) {
                $this->deck[] = $face . "\n" . $suit;
            }
        }
        return $this->deck;
    }

    /**
     * This function removes cards that the player has
     * @param $leftOverDeck
     * @param $cardToBeRemoved
     * @return array
     */
    public function updateLeftOverDeck($leftOverDeck, $cardToBeRemoved)
    {

        $updatedLODeck = array_diff($leftOverDeck, $cardToBeRemoved);
        $this->leftOverDeck = $updatedLODeck;
        return $this->leftOverDeck;
    }

    /**
     * Deck Var Setter
     * @param mixed $deck
     */
    public function setDeck($deck)
    {
        $this->deck = $deck;
    }

    /**
     * leftOverDeck Var Setter
     * @param array $leftOverDeck
     */
    public function setLeftOverDeck($leftOverDeck)
    {
        $this->leftOverDeck = $leftOverDeck;
    }

    /**
     * leftOverDeck Var Getter
     * @return array
     */
    public function getLeftOverDeck()
    {
        return $this->leftOverDeck;
    }

    /**
     * Deck Var Getter
     * @return mixed
     */
    public function getDeck()
    {
        return $this->deck;
    }
}
