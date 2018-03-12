<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once __DIR__.'/lib/Model/AbstractShip.php';
require_once __DIR__.'/lib/Model/Ship.php';
require_once __DIR__.'/lib/Model/RebelShip.php';
require_once __DIR__.'/lib/Model/BrokenShip.php';
require_once __DIR__.'/lib/Model/BattleResult.php';

require_once __DIR__.'/lib/Service/BattleManager.php';
require_once __DIR__.'/lib/Service/ShipLoader.php';
require_once __DIR__.'/lib/Service/AbstractShipStorage.php';
require_once __DIR__.'/lib/Service/PdoShipStorage.php';
require_once __DIR__.'/lib/Service/JsonFileShipStorage.php';
require_once __DIR__.'/lib/Service/serviceContainer.php';

$configArr = array (
    'db_dsn' => 'mysql:host=localhost;dbname=dalferwj_phples',
    'db_user' => 'dalferwj_phples',
    'db_pass' => 'vbcrfkby'
);

function dbg( $arr ) {
    echo '<pre>';
    echo print_r( $arr );
    echo '</pre>';
}