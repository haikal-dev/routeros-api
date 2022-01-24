<?php

/**
 * Example for printing system resources
 */

// include Router Management System class
require_once "../routermgmt.php";

// set true if you want to allow routerAPI debugging
$router = new RouterMgmt(false);

// If connection possible, perform next action.
if($router->connect()){

    // Get DHCP Client
    $data = $router->show_resource();

    // Show data received from router
    $router->show_debug($data);

    // Disconnect Router
    $router->disconnect();
}