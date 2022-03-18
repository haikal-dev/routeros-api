<?php

/**
 * Show Router Health
 * -----------------------
 * Author: Haikal Azizan
 * 
 * We can extract voltage and temperature data
 * on mikrotik devices using
 * simple code
 * 
 */

 // include Router Management System class
require_once "../routermgmt.php";

// set true if you want to allow routerAPI debugging
$router = new RouterMgmt(false);

// If connection possible, perform next action.
if($router->connect()){

    // show health
    $data = $router->show_health();

    // print data to array style
    $router->show_debug($data);

    // Disconnect router
    $router->disconnect();
}