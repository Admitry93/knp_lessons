<?php

class ShipLoader {

    // Methods

    /**
     * @return Ship[]
     */

    public function getShips()
    {
        $ships = [];
        $shipsArr = $this->queryForShips();

        foreach ( $shipsArr as $shipData ) {
            $ship = new Ship( $shipData['name'] );
            $ship->setWeaponPower( $shipData['weapon_power'] );
            $ship->setStrength( $shipData['strength'] );
            $ship->setJediFactor( $shipData['jedi_factor'] );

            $ships[] = $ship;
        }

        return $ships;

    }

    private function queryForShips() {
        $pdo = new PDO('mysql:host=localhost;dbname=dalferwj_phples', 'dalferwj_phples', 'vbcrfkby');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $shipsArray;
    }
}