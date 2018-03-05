<?php

class ShipLoader {

    // Properties

    private $pdo;

    // Constructor

    public function __construct( PDO $pdo ) {
        $this->pdo = $pdo;
    }

    // Methods

    /**
     * @return Ship[]
     */

    public function getShips()
    {
        $ships = [];
        $shipsArr = $this->queryForShips();

        foreach ( $shipsArr as $shipData ) {
            $ships[] = $this->createShipFromData( $shipData );;
        }

        return $ships;

    }

    /**
     * @param $id
     * @return null|Ship
     */
    public function findById( $id ) {
        $pdo = $this->getPDO();
        $statement = $pdo->prepare('SELECT * FROM ship WHERE id=' . $id);
        $statement->execute( array( 'id' =>$id ) );
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);

        if ( !$shipArray ) {
            return null;
        }

        return $this->createShipFromData( $shipArray );
    }

    private function createShipFromData( array $shipData ) {
        if ( $shipData['team'] == 'rebel' ) {
            $ship = new RebelShip( $shipData['name'] );
        } else {
            $ship = new Ship( $shipData['name'] );
        }
        $ship->setId( $shipData['id'] );
        $ship->setWeaponPower( $shipData['weapon_power'] );
        $ship->setStrength( $shipData['strength'] );
        $ship->setJediFactor( $shipData['jedi_factor'] );

        return $ship;
    }

    private function queryForShips() {
        $pdo = $this->getPDO();
        $statement = $pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $shipsArray;
    }

    /**
     * @return PDO
     */
    private function getPDO() {

        return $this->pdo;
    }

}