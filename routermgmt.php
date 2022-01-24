<?php

/*****************************
 *
 * Router Management System
 * Author: Haikal Azizan
 * Contributors:
 *  - 
 *  -  
 *
 * http://www.mikrotik.com
 * http://wiki.mikrotik.com/wiki/API_PHP_class
 *
 ******************************/

class RouterMgmt
{
    protected $api;
    protected $credFile = 'credentials.php'; // edit this to your credentials file path

    public function __construct($debug = false){
        require_once "routeros_api.class.php";

        $this->api = new RouterosAPI;
        $this->api->debug = $debug;
    }

    public function connect(){
        require_once $this->credFile;
        $cred = new Credential;
        return $this->api->connect($cred->ip, $cred->port, $cred->username, $cred->password);
    }

    public function disconnect(){
        return $this->api->disconnect();
    }

    public function show_debug($data){
        echo "<pre>";
        print_r($data);
    }

    public function show_dhcp_clients(){
        $data = $this->api->comm("/ip/dhcp-server/lease/print");
        return $data;
    }
    
} 