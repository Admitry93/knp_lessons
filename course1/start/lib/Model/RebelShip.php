<?php

class RebelShip extends AbstractShip {

    // Methods

    public function getJediFactor()
    {
        return rand(10, 35);
    }

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

    public function getNameAndSpecs( $useLongFormat = false ) {
        $val = parent::getNameAndSpecs( $useLongFormat );
        $val .= ' (Rebel)';

        return $val;
    }
}