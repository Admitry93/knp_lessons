<?php

class ShipLoader {

    // Properties

    private $shipStorage;

    // Constructor

    public function __construct( AbstractShipStorage $shipStorage ) {
        $this->shipStorage = $shipStorage;
    }

    // Methods

    /**
     * @return AbstractShip[]
     */

    public function getShips()
    {
        $ships = [];
        $shipsArr = $this->shipStorage->fetchAllShipsData();

        foreach ( $shipsArr as $shipData ) {
            $ships[] = $this->createShipFromData( $shipData );
        }

        return $ships;

    }

    /**
     * @param $id
     * @return null|AbstractShip
     */
    public function findById( $id ) {
	    $shipArray = $this->shipStorage->fetchSingleShipData( $id );

        return $this->createShipFromData( $shipArray );
    }

    private function createShipFromData( array $shipData ) {
        if ( $shipData['team'] == 'rebel' ) {
            $ship = new RebelShip( $shipData['name'] );
        } else {
            $ship = new Ship( $shipData['name'] );
            $ship->setJediFactor( $shipData['jedi_factor'] );
        }
        $ship->setId( $shipData['id'] );
        $ship->setWeaponPower( $shipData['weapon_power'] );
        $ship->setStrength( $shipData['strength'] );

        return $ship;
    }

}