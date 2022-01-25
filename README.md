# routeros-api
Client API for RouterOS/Mikrotik

This class was originally written by Denis Basta and updated by several contributors.  It aims to give a simple interface to the RouterOS API in PHP.

Mikrotik Wiki page at http://wiki.mikrotik.com/wiki/API_PHP_class

## Examples (Tested Result)

### Add New IP Address Into Specific Interface

```php
*CA
```

### Print User By DHCP

```php
Array
(
    [0] => Array
        (
            [.id] => *1
            [address] => 172.20.10.250
            [mac-address] => EC:C8:9C:A0:C1:63
            [client-id] => 1:ec:c8:9c:a0:c1:63
            [address-lists] => 
            [server] => dhcp1
            [dhcp-option] => 
            [status] => bound
            [expires-after] => 6m17s
            [last-seen] => 3m43s
            [active-address] => 172.20.10.250
            [active-mac-address] => EC:C8:9C:A0:C1:63
            [active-client-id] => 1:ec:c8:9c:a0:c1:63
            [active-server] => dhcp1
            [radius] => false
            [dynamic] => false
            [blocked] => false
            [disabled] => false
        )

)
```

### Print System Resource

```php
Array
(
    [0] => Array
        (
            [uptime] => 3w2d19h6m3s
            [version] => 6.44.5 (long-term)
            [build-time] => Jul/04/2019 10:32:21
            [factory-software] => 6.35.4
            [free-memory] => 1015287808
            [total-memory] => 1073741824
            [cpu] => ARMv7
            [cpu-count] => 2
            [cpu-frequency] => 1400
            [cpu-load] => 20
            [free-hdd-space] => 87277568
            [total-hdd-space] => 134479872
            [architecture-name] => arm
            [board-name] => RB3011UiAS
            [platform] => MikroTik
        )

)
```

### Print Wireless Registration Table

```php
Array
(
    [0] => Array
        (
            [.id] => *1429
            [interface] => wlan1
            [mac-address] => F6:C3:D8:61:A2:E1
            [ap] => false
            [wds] => false
            [bridge] => false
            [rx-rate] => 19.5Mbps-20MHz/1S
            [tx-rate] => 36Mbps
            [packets] => 67059,56097
            [bytes] => 96975022,4951337
            [frames] => 53265,50017
            [frame-bytes] => 97398909,4798506
            [hw-frames] => 65408,50495
            [hw-frame-bytes] => 122650381,6825360
            [tx-frames-timed-out] => 0
            [uptime] => 15m17s
            [last-activity] => 1s30ms
            [signal-strength] => -68@6Mbps
            [signal-to-noise] => 30
            [signal-strength-ch0] => -72
            [signal-strength-ch1] => -76
            [strength-at-rates] => -66@5.5Mbps 3s450ms,-68@6Mbps 25s770ms,-68@HT20-0 27s870ms,-69@HT20-1 28s10ms,-70@HT20-2 1s30ms,-70@HT20-3 3s630ms,-71@HT20-4 10s930ms,-72@HT20-5 1s200ms,-72@HT20-6 28s100ms,-72@HT20-7 28s500ms
            [tx-ccq] => 51
            [p-throughput] => 19940
            [distance] => 8
            [last-ip] => 192.168.0.237
            [802.1x-port-enabled] => true
            [authentication-type] => wpa2-psk
            [encryption] => aes-ccm
            [group-encryption] => aes-ccm
            [management-protection] => false
            [wmm-enabled] => true
            [tx-rate-set] => CCK:1-11 OFDM:6-54 BW:1x SGI:1x HT:0-7
            [hostname] => vivo-1915
        )

)
```






## Contributors (before moving to Git)
* Nick Barnes
* Ben Menking (ben [at] infotechsc [dot] com)
* Jeremy Jefferson (http://jeremyj.com)
* Cristian Deluxe (djcristiandeluxe [at] gmail [dot] com)
* Mikhail Moskalev (mmv.rus [at] gmail [dot] com)

## Changelog

Please see git logs.  Version 1.0 through current version have been preserved in this Git repo.

