<?php

class BrokenShip extends AbstractShip {

	// Methods

	public function getJediFactor() {
		return 0;
	}
	public function getType(){
		return 'Broken';
	}
	public function isFunctional(){
		return false;
	}
}