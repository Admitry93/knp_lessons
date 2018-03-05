<?php

class RebelShip extends Ship {

    // Methods

    public function getFavoriteJedi() {
        $jedArr = ['Yoda', 'Ben Kenoby'];
        $key = array_rand( $jedArr );

        return $jedArr[ $key ];
    }

    public function getType() {
        return 'Rebel';
    }

    /**
     * @return bool
     */
    public function isFunctional()
    {
        return true;
    }
}