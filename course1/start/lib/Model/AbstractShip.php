<?php

abstract class AbstractShip {

    // Properties

    private $name;
    private $weaponPower = 0;
    private $strength = 0;
    private $id;

    // Constructor

    public function __construct( $name ) {
        $this->name = $name;
    }

    // Getters Setters

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    // Methods

	abstract public function getJediFactor();
    abstract public function getType();
    abstract public function isFunctional();

    public function getNameAndSpecs( $useLongFormat = false ) {
        if ( $useLongFormat ) {
            return sprintf(
                '%s: weapon power:%s, jedi factor:%s, strength:%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        } else {
            return sprintf(
                '%s: wp:%s, jf:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }
    }

    /**
     * @param Ship $ship
     * @return bool
     */

    public function doesGivenShipHasMoreStrength( $ship ) {
        if ( $ship->strength > $this->strength ) {
            return true;
        } else {
            return false;
        }
    }
}