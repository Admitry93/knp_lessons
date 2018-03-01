<?php

class ShipLoader {

    // Methods

    /**
     * @return Ship[]
     */

    public function getShips()
    {

        //dbg( $shipsArray );die;

        $ships = [];

        $ship = new Ship( 'Granta' );
        $ship->setWeaponPower(135);
        $ship->setJediFactor(25);
        $ship->setStrength(70);

        $ships['granta'] = $ship;

        $ship2 = new Ship( 'BMW' );
        $ship2->setWeaponPower(235);
        $ship2->setJediFactor(15);
        $ship2->setStrength(120);

        $ships['bmw'] = $ship2;

        $ship3 = new Ship( 'Jedi Starfighter' );
        $ship3->setWeaponPower(5);
        $ship3->setJediFactor(15);
        $ship3->setStrength(30);

        $ships['starfighter'] = $ship3;

        $ship4 = new Ship( 'CloakShape Fighter' );
        $ship4->setWeaponPower(2);
        $ship4->setJediFactor(2);
        $ship4->setStrength(70);

        $ships['cloakshape_fighter'] = $ship4;

        $ship5 = new Ship( 'Super Star Destroyer' );
        $ship5->setWeaponPower(70);
        $ship5->setJediFactor(0);
        $ship5->setStrength(500);

        $ships['super_star_destroyer'] = $ship5;

        $ship6 = new Ship( 'RZ-1 A-wing interceptor' );
        $ship6->setWeaponPower(4);
        $ship6->setJediFactor(4);
        $ship6->setStrength(50);

        $ships['rz1_a_wing_interceptor'] = $ship6;

        return $ships;

    }
}