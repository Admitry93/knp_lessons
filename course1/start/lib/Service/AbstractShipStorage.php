<?php

abstract class AbstractShipStorage {

	// Methods

	abstract public function fetchAllShipsData();
	abstract public function fetchSingleShipData($id);

}