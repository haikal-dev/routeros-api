<?php

class RouterMgmt
{
    protected $api;

    public function __construct($debug = false){
        require_once "../../../routeros_api.class.php";

        $this->api = new RouterosAPI;
        $this->api->debug = $debug;
    }

    public function connect(){
        require_once "../../../credentials.php";
        $cred = new Credential;
        return $this->api->connect($cred->ip, $cred->port, $cred->username, $cred->password);
    }

    public function disconnect(){
        return $this->api->disconnect();
    }

    
} 