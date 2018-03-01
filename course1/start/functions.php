<?php

require_once __DIR__.'/lib/Ship.php';
require_once __DIR__.'/lib/BattleManager.php';
require_once __DIR__.'/lib/BattleResult.php';
require_once __DIR__.'/lib/ShipLoader.php';

function dbg( $arr ) {
    echo '<pre>';
    echo print_r( $arr );
    echo '</pre>';
}