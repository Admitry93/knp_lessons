<?php

class BattleResult {

    // Properties

    private $winningShip;
    private $losingShip;
    private $usedJediPowers;

    // Constructor

    public function __construct( $ujp, Ship $ws = null, Ship $ls = null ) {
        $this->winningShip = $ujp;
        $this->losingShip = $ls;
        $this->winningShip = $ws;
    }

    // Getters Setters

    /**
     * @return Ship|null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    public function isThereWinner() {
        return $this->getWinningShip() !== null;
    }

}