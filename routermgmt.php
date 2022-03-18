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

    public function show_health(){
        $data = $this->api->comm("/system/health/print");
        return $data;
    }

    public function show_dhcp_clients(){
        $data = $this->api->comm("/ip/dhcp-server/lease/print");
        return $data;
    }

    public function add_ip($ip, $netaddr, $interface){
        $data = $this->api->comm("/ip/address/add", [
            "address" => $ip,
            "network" => $netaddr,
            "interface" => $interface
        ]);
        
        return $data;
    }

    public function show_resource(){
        $data = $this->api->comm("/system/resource/print");
        
        return $data;
    }

    public function show_wireless_clients(){
        $row = [];
        $data = $this->api->comm("/interface/wireless/registration-table/print");

        foreach($data as $client){
            if(isset($client['mac-address'])){
                $dhcp = $this->get_dhcp_client_by_mac($client['mac-address']);
                if(isset($dhcp[0]['mac-address']) && $dhcp[0]['mac-address'] == $client['mac-address']){
                    $client['hostname'] = (isset($dhcp[0]['host-name'])) ? $dhcp[0]['host-name'] : "";
                }
            }

            $row[] = $client;
        }

        return $row;
    }

    public function get_dhcp_client_by_mac($mac_address){
        $this->api->write("/ip/dhcp-server/lease/print", false);
        $this->api->write("?=mac-address=" . $mac_address);
        
        $data = $this->api->read();
        
        return $data;
    }
    
} 