<?php

// include Router Management System class
require_once "../routermgmt.php";

// set true if you want to allow routerAPI debugging
$router = new RouterMgmt(false);

// If connection possible, perform next action.
if($router->connect()){

    $ip                 = "192.168.100.1/24";
    $network_address    = "192.168.100.0";
    $interface          = "ether10";

    // Get DHCP Client
    $data = $router->add_ip(
        $ip,
        $network_address,
        $interface
    );

    // Show data received from router
    $router->show_debug($data);

    // Disconnect Router
    $router->disconnect();
}