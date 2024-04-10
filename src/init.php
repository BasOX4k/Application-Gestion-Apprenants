<?php
require_once __DIR__ . 'autoload.php';

session_start();

require_once __DIR__ . "/../config.php";

if(DATABASE_INITIALIZED == FALSE) {
    $Database = new src\Models\Database();
    echo $Database->initialisationBDD();
}

require_once __DIR__ . "/router.php";