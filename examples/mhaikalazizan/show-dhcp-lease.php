<?php

require "../../routeros_api.class.php";
require "../../credentials.php";

$routeros = new RouterosAPI;
$cred = new Credential;

$routeros->debug = true;

if($routeros->connect($cred->ip, $cred->port, $cred->username, $cred->password)){
    $data = $routeros->comm("/ip/dhcp-server/lease/print");
    
    echo "<pre>";
    print_r($data);

    $routeros->disconnect();
}