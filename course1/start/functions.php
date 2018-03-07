<?php

require_once __DIR__.'/lib/Model/AbstractShip.php';
require_once __DIR__.'/lib/Model/Ship.php';
require_once __DIR__.'/lib/Model/RebelShip.php';
require_once __DIR__.'/lib/Model/BattleResult.php';

require_once __DIR__.'/lib/Service/BattleManager.php';
require_once __DIR__.'/lib/Service/ShipLoader.php';
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