<?php
    require('vendor/autoload.php');
    use everyman\Neo4j\Client;
    $client = new Everyman\Neo4j\Client('localhost', 7474);
    print_r($client->getServerInfo());`
