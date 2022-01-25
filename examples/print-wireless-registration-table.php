<?php

/**
 * Example for printing wireless clients
 * 
 * Upgrade:
 * --------
 * This wireless registration table (wireless clients) will
 * communicate with DHCP Server to check hostname availability
 * with checking by mac-address. If mac-address is found, then
 * it should be print with host-name and wireless details
 * together.
 * 
 */

// include Router Management System class
require_once "../routermgmt.php";

// set true if you want to allow routerAPI debugging
$router = new RouterMgmt(false);

// If connection possible, perform next action.
if($router->connect()){

    // show wireless clients
    $data = $router->show_wireless_clients();

    // Show data received from router
    $router->show_debug($data);

    // Disconnect Router
    $router->disconnect();
}