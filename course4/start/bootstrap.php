<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require __DIR__.'/vendor/autoload.php';

$configuration = array(
	'db_dsn' => 'mysql:host=localhost;dbname=dalferwj_phples',
	'db_user' => 'dalferwj_phples',
	'db_pass' => 'vbcrfkby'
);

//require_once __DIR__.'/lib/Service/Container.php';
//require_once __DIR__.'/lib/Model/AbstractShip.php';
//require_once __DIR__.'/lib/Model/Ship.php';
//require_once __DIR__.'/lib/Model/RebelShip.php';
//require_once __DIR__.'/lib/Model/BrokenShip.php';
//
//require_once __DIR__.'/lib/Service/ShipStorageInterface.php';
//require_once __DIR__.'/lib/Service/PdoShipStorage.php';
//require_once __DIR__.'/lib/Service/JsonFileShipStorage.php';
//require_once __DIR__.'/lib/Service/ShipLoader.php'
//require_once __DIR__.'/lib/Model/BattleResult.php'

//spl_autoload_register( function( $className ){
//	$path = __DIR__.'/lib/'.str_replace('\\', '/', $className).'.php';
//	if ( file_exists( $path ) ) {
//		require_once $path;
//	}
//});
